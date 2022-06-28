<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = DB::table('abouts')->orderBy('id', 'desc')->paginate(5);

        return view('admin.abouts.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = DB::table('abouts')->count();

        if ($about == 0)
            return view('admin.abouts.create', compact('about'));

        else
            return redirect()->route('abouts.index')
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
         $obg = new About();
         $destinationPath = 'images';
         $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img-> getClientOriginalExtension();
         $request->img->move($destinationPath, $imageName);
         $obg->img = '/' . $destinationPath . '/' . $imageName;

         DB::table('abouts')
             ->insert(array(
                 'welcome_uz' => $request->welcome_uz,
                 'welcome_ru' => $request->welcome_ru,
                 'welcome_en' => $request->welcome_en,
                 'company_uz' => $request->company_uz,
                 'company_ru' => $request->company_ru,
                 'company_en' => $request->company_en,
                 'team_uz' => $request->team_uz,
                 'team_ru' => $request->team_ru,
                 'team_en' => $request->team_en,
                 'testimonial_uz' => $request->testimonial_uz,
                 'testimonial_ru' => $request->testimonial_ru,
                 'testimonial_en' => $request->testimonial_en,
                 'img' => $obg->img,
         ));

          return redirect()->route('abouts.index')
                                    ->with('success','Yangi reklama qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = DB::table('abouts')->where('id', $id)->get();

        return view('admin.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if($request->img) {
            $obg = new About();
            $destinationPath = 'images';
            $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->   getClientOriginalExtension();
            $request->img->move($destinationPath, $imageName);
            $obg->img = '/' . $destinationPath . '/' . $imageName;

            DB::table('abouts')->where('id', $id)->update(['img'=>$obg->img]);
        }

        $arrayName = array(
            'welcome_uz' => $request->welcome_uz,
            'welcome_ru' => $request->welcome_ru,
            'welcome_en' => $request->welcome_en,
            'company_uz' => $request->company_uz,
            'company_ru' => $request->company_ru,
            'company_en' => $request->company_en,
            'team_uz' => $request->team_uz,
            'team_ru' => $request->team_ru,
            'team_en' => $request->team_en,
            'testimonial_uz' => $request->testimonial_uz,
            'testimonial_ru' => $request->testimonial_ru,
            'testimonial_en' => $request->testimonial_en,
        );

        DB::table('abouts')->where('id', $id)->update($arrayName);
    

        return redirect()->route('abouts.index')
                            ->with('success','Yangilanish bajarildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('abouts')->where('id', $id)->delete();

        return redirect()->route('abouts.index')
                        ->with('success','Ma`lumot o`chirildi');
    }
}
