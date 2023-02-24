<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{

    public function store($request)
    {
        $requestData = $request->all();
        $requestData['slug'] = \Str::slug($requestData['name_uz']);

        for ($i = 1; $i <= 5; $i++) {
            if ($request->hasFile('img' . $i)) {
                $this->upload_file($i);
            }
        }

        return Product::create($requestData);
    }

    public function update($id, $request)
    {

        $requestData = $request->all();
        $requestData['slug'] = \Str::slug($request->name_uz);


        for ($i = 1; $i <= 5; $i++) {
            if ($request->hasFile('img' . $i)) {
                $this->unlink_file($id, 'img' . $i);
                $this->upload_file($i);
            }
        }

        return Product::find($id)->update($requestData);
    }

    public function destroy($id)
    {
        for ($i = 1; $i <= 5; $i++) {
            $this->unlink_file($id, 'img' . $i);
        }
        return Product::find($id)->delete();
    }

    // extra functions
    public function unlink_file($id, $img)
    {
        $product = Product::find($id);
        if (isset($product->$img) && file_exists(public_path('/images/' . $product->$img))) {
            unlink(public_path('/images/' . $product->$img));
        }
    }

    public function upload_file($i)
    {

        $file = request()->file('img' . $i);
        $imageName = time() . '-' . $file->getClientOriginalName();
        $file->move('images/', $imageName);
        $requestData['img' . $i] = $imageName;
    }

    public function upload($request)
    {
        if ($request->hasFile('upload')) {
            $fileName = time() . '-' . $request->file('upload')->getClientOriginalName();
            $request->file('upload')->move('images/products/', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/products/' . $fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            return $response;
        }
    }
}
