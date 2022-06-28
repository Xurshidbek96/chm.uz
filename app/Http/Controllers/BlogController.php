<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = DB::table('blogs')->orderBy('id', 'desc')->paginate(5);
        
        return view('admin.blogs.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = DB::table('blogs');
        
        return view('admin.blogs.create', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->name ;
        if ($request->img) {
            $obg = new Blog();
            $destinationPath = 'images';
            $imageName = 'img_'.rand(1000000, 9999999).rand(1000000, 9999999). '.' .$request->img->getClientOriginalExtension();
            $request->img->move($destinationPath, $imageName);
            $obg->img = '/' . $destinationPath . '/' . $imageName;
            $image = $obg->img ;
        }

        else
            $image = "";
            
       
        DB::table('blogs')
            ->insert(array(
                'name_uz' => $request->name_uz,
                'name_ru' => $request->name_ru,
                'name_en' => $request->name_en,
                'title_uz' => $request->title_uz,
                'title_ru' => $request->title_ru,
                'title_en' => $request->title_en,
                'info_uz' => $request->info_uz,
                'info_ru' => $request->info_ru,
                'info_en' => $request->info_en,
                'img' => $image
        ));

         return redirect()->route('blogs.index')
                                   ->with('success','Yangilanish bajarildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = DB::table('blogs')->where('id', $id)->get();

        return view('admin.blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if ($request->img) {
            $obg = new Blog();
             $destinationPath = 'images';
             $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
             $request->img->move($destinationPath, $imageName);
             $obg->img = '/' . $destinationPath . '/' . $imageName;

             DB::table('blogs')->where('id', $id)->update(['img' => $obg->img]);
    
        }

        $arrayName = array(
            'name_uz' => $request->name_uz,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'info_uz' => $request->info_uz,
            'info_ru' => $request->info_ru,
            'info_en' => $request->info_en,            
        );

        $blog = DB::table('blogs')->where('id', $id)->update($arrayName);
        
    
        return redirect()->route('blogs.index')
                    ->with('success','Yangilanish bajarildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = DB::table('blogs')->where('id', $id)->delete();

        return redirect()->route('blogs.index')
                        ->with('success','Ma`lumot o`chirildi');
    }
}
