<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = DB::table('shops')->orderBy('id', 'desc')->paginate(5);
        
        return view('admin.shops.index', compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shop = DB::table('shops');
        
        return view('admin.shops.create', compact('shop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->img) {
            $obg = new Shop();
            $destinationPath = 'images';
            $imageName = 'img_'.rand(1000000, 9999999).rand(1000000, 9999999). '.' .$request->img->getClientOriginalExtension();
            $request->img->move($destinationPath, $imageName);
            $obg->img = '/' . $destinationPath . '/' . $imageName;
            $image = $obg->img ;
        }

        else
            $image = "";
            
       
        DB::table('shops')
            ->insert(array(
                'link' => $request->link,
                'name' => $request->name,
                'img' => $image
        ));

         return redirect()->route('shops.index')
                                   ->with('success','Yangi reklama qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = DB::table('shops')->where('id', $id)->get();

        return view('admin.shops.edit',compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if ($request->img) {
            $obg = new Shop();
             $destinationPath = 'images';
             $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
             $request->img->move($destinationPath, $imageName);
             $obg->img = '/' . $destinationPath . '/' . $imageName;

             DB::table('blogs')->where('id', $id)->update(['img' => $obg->img]);
    
        }

        $arrayName = array(
            'link' => $request->link,
            'name' => $request->name,            
        );

        $shop = DB::table('shops')->where('id', $id)->update($arrayName);
        
    
        return redirect()->route('shops.index')
                    ->with('success','Yangilanish bajarildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('shops')->where('id', $id)->delete();

        return redirect()->route('shops.index')
                        ->with('success','Ma`lumot o`chirildi');
    }
}
