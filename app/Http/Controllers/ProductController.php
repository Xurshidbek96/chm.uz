<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('products')->orderBy('id', 'desc')->paginate(10);

        return view('admin.products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('categories')->get();
        $product = DB::table('products')->get();
        
        return view('admin.products.create', compact('product', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->img1) {
            $obg1 = new Product();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img1-> getClientOriginalExtension();
            $request->img1->move($destinationPath, $imageName);
            $obg1->img1 = '/' . $destinationPath . '/' . $imageName;
            $image1 = $obg1->img1 ;
        }
        else
             $image1 = "";

        if ($request->img2) {
            $obg2 = new Product();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img2-> getClientOriginalExtension();
            $request->img2->move($destinationPath, $imageName);
            $obg2->img2 = '/' . $destinationPath . '/' . $imageName;
            $image2 = $obg2->img2 ;
        }
        else
           $image2 = "";

        if ($request->img3) {
            $obg3 = new Product();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img3-> getClientOriginalExtension();
            $request->img3->move($destinationPath, $imageName);
            $obg3->img3 = '/' . $destinationPath . '/' . $imageName;
            $image3 = $obg3->img3 ;
        }
        else
            $image3 = "";

        if ($request->img4) {
            $obg4 = new Product();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img4-> getClientOriginalExtension();
            $request->img4->move($destinationPath, $imageName);
            $obg4->img4 = '/' . $destinationPath . '/' . $imageName;
            $image4 = $obg4->img4 ;
        }
        else
            $image4 =  "";

        if ($request->img5) {
            $obg5 = new Product();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img5-> getClientOriginalExtension();
            $request->img5->move($destinationPath, $imageName);
            $obg5->img5 = '/' . $destinationPath . '/' . $imageName;
            $image5 = $obg5->img5 ;
        }
        else
            $image5 = "";


         DB::table('products')
             ->insert(array(
                 'name_uz' => $request->name_uz,
                 'name_ru' => $request->name_ru,
                 'name_en' => $request->name_en,
                 'category' => $request->category,
                 'product' => $request->product,
                 'model' => $request->model,
                 'price_sum' => $request->price_sum,
                 'price_usd' => $request->price_usd,
                 'title_uz' => $request->title_uz,
                 'title_ru' => $request->title_ru,
                 'title_en' => $request->title_en,
                 'parameter_uz' => $request->parameter_uz,
                 'parameter_ru' => $request->parameter_ru,
                 'parameter_en' => $request->parameter_en,
                 'info_uz' => $request->info_uz,
                 'info_ru' => $request->info_ru,
                 'info_en' => $request->info_en,
                 'description_uz' => $request->description_uz,
                 'description_ru' => $request->description_ru,
                 'description_en' => $request->description_en,
                 'delivery_uz' => $request->delivery_uz,
                 'delivery_ru' => $request->delivery_ru,
                 'delivery_en' => $request->delivery_en,
                 'payment_uz' => $request->payment_uz,
                 'payment_ru' => $request->payment_ru,
                 'payment_en' => $request->payment_en,
                 'warranty_uz' => $request->warranty_uz,
                 'warranty_ru' => $request->warranty_ru,
                 'warranty_en' => $request->warranty_en,
                 'video1' => $request->video1,
                 'video2' => $request->video2,
                 'video3' => $request->video3,
                 'img1' => $image1,
                 'img2' => $image2,
                 'img3' => $image3,
                 'img4' => $image4,
                 'img5' => $image5,
         ));

          return redirect()->route('products.index')
                                    ->with('success','Yangi mahsulot qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = DB::table('categories')->get();
        $product = DB::table('products')->where('id', $id)->get();

        return view('admin.products.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if($request->img1) {
            $obg1 = new Product();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img1->   getClientOriginalExtension();
            $request->img1->move($destinationPath, $imageName);
            $obg1->img1 = '/' . $destinationPath . '/' . $imageName;

            DB::table('products')->where('id', $id)->update(['img3'=>$obg3->img3]);
        }

        if($request->img2) {
            $obg2 = new Product();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img2->   getClientOriginalExtension();
            $request->img2->move($destinationPath, $imageName);
            $obg2->img2 = '/' . $destinationPath . '/' . $imageName;

            DB::table('products')->where('id', $id)->update(['img2'=>$obg2->img2]);
        }

        if($request->img3) {
            $obg3 = new Product();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img3->   getClientOriginalExtension();
            $request->img3->move($destinationPath, $imageName);
            $obg3->img3 = '/' . $destinationPath . '/' . $imageName;

            DB::table('products')->where('id', $id)->update(['img3'=>$obg3->img3]);
        }

        if($request->img4) {
            $obg4 = new Product();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img4->   getClientOriginalExtension();
            $request->img2->move($destinationPath, $imageName);
            $obg4->img4 = '/' . $destinationPath . '/' . $imageName;

            DB::table('products')->where('id', $id)->update(['img4'=>$obg4->img4]);
        }

        if($request->img5) {
            $obg5 = new Product();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img5->   getClientOriginalExtension();
            $request->img5->move($destinationPath, $imageName);
            $obg5->img5 = '/' . $destinationPath . '/' . $imageName;

            DB::table('products')->where('id', $id)->update(['img5'=>$obg5->img5]);
        }

        $arrayName = array(
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'category' => $request->category,
            'product' => $request->product,
            'model' => $request->model,
            'price_sum' => $request->price_sum,
            'price_usd' => $request->price_usd,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'parameter_uz' => $request->parameter_uz,
            'parameter_ru' => $request->parameter_ru,
            'parameter_en' => $request->parameter_en,
            'info_uz' => $request->info_uz,
            'info_ru' => $request->info_ru,
            'info_en' => $request->info_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'delivery_uz' => $request->delivery_uz,
            'delivery_ru' => $request->delivery_ru,
            'delivery_en' => $request->delivery_en,
            'payment_uz' => $request->payment_uz,
            'payment_ru' => $request->payment_ru,
            'payment_en' => $request->payment_en,
            'warranty_uz' => $request->warranty_uz,
            'warranty_ru' => $request->warranty_ru,
            'warranty_en' => $request->warranty_en,
            'video1' => $request->video1,
            'video2' => $request->video2,
            'video3' => $request->video3
        );

         $product = DB::table('products')->where('id', $id)->update($arrayName);
    

            return redirect()->route('products.index')
                            ->with('success','Yangilanish bajarildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = DB::table('products')->where('id', $id)->delete();

        return redirect()->route('products.index')
                        ->with('success','Ma`lumot o`chirildi');
    }
}
