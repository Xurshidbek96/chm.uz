<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = DB::table('banners')->orderBy('id', 'desc')->paginate(5);

        return view('admin.banners.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banner = DB::table('banners')->count();

        if ($banner <= 5)
            return view('admin.banners.create');

        else
            return redirect()->route('banners.index')
                                    ->with('success','Ma`lumot to`lgan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $obg = new Banner();
         $destinationPath = 'images';
         $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img-> getClientOriginalExtension();
         $request->img->move($destinationPath, $imageName);
         $obg->img = '/' . $destinationPath . '/' . $imageName;

         DB::table('banners')
             ->insert(array(
                 'name' => $request->name,
                 'link' => $request->link,
                 'img' => $obg->img,
         ));

          return redirect()->route('banners.index')
                                    ->with('success','Yangi reklama qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = DB::table('banners')->where('id', $id)->get();

        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if($request->img) {
            $obg = new Banner();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->   getClientOriginalExtension();
            $request->img->move($destinationPath, $imageName);
            $obg->img = '/' . $destinationPath . '/' . $imageName;

            DB::table('banners')->where('id', $id)->update(['img'=>$obg->img]);
        }

        $arrayName = array(
            'name' => $request->name,
            'link' => $request->link,
        );

         $banner = DB::table('banners')->where('id', $id)->update($arrayName);
    

        return redirect()->route('banners.index')
                            ->with('success','Yangilanish bajarildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = DB::table('banners')->where('id', $id)->delete();

        return redirect()->route('banners.index')
                        ->with('success','Ma`lumot o`chirildi');
    }
}
