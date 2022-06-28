<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = DB::table('partners')->orderBy('id', 'desc')->paginate(6);
        
        return view('admin.partners.index', compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partner = DB::table('partners');
        
        return view('admin.partners.create', compact('partner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obg = new Partner();
        $destinationPath = 'images';
        $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
        $request->img->move($destinationPath, $imageName);
        $obg->img = '/' . $destinationPath . '/' . $imageName;


        DB::table('partners')
            ->insert(array(
                'name' => $request->name,
                'img' => $obg->img
        ));

         return redirect()->route('partners.index')
                                   ->with('success','Yangilanish bajarildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = DB::table('partners')->where('id', $id)->get();

        return view('admin.partners.edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if ($request->img) {
            $obg = new Partner();
             $destinationPath = 'img';
             $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
             $request->img->move($destinationPath, $imageName);
             $obg->img = '/' . $destinationPath . '/' . $imageName;
    
            }
    
            switch ($request->hasFile('img')) {
                case '1':
                    $arrayName = array(              
                        'name' => $request->name,
                        'img' => $obg->img
                     );
                    break;
            
                default:
                    $arrayName = array(
                        'name' => $request->name,            
                     );
                break;
            }
    
            $partner = DB::table('partners')->where('id', $id)->update($arrayName);
        
    
                return redirect()->route('partners.index')
                                ->with('success','Yangilanish bajarildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner=DB::table('partners')->where('id', $id)->delete();

        return redirect()->route('partners.index')
                        ->with('success','Ma`lumot o`chirildi');
    }
}
