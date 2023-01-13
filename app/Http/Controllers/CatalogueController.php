<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogues = Catalogue::latest()->get();
        $drycats = Catalogue::where('type', 'dry fertilizer')->get();
        $liquidcats = Catalogue::where('type', 'liquid fertilizer')->get();
        $mixcats = Catalogue::where('type', 'mix fertilizer')->get();
        $active = Catalogue::where('active', 1)->get();
        $notactive = Catalogue::where('active', 0)->get();

        return view('admin.catalogue.index')->with('catalogues', $catalogues)->with('drycats', $drycats)->with('liquidcats', $liquidcats)->with('mixcats', $mixcats)->with('notactive', $notactive)->with('active', $active);
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catalogue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $request->validate([
            'name' => 'required|max:45',
             'type'=> 'required',
             'percent_N'=>'required|numeric|digits_between:0,100',
             'percent_P'=>'required|numeric|digits_between:0,100',
             'percent_K'=>'required|numeric|digits_between:0,100',
          
        ]);
       
        $data = [
          'name'=>$request->name,
          'type'=>$request->type,
          'percent_N'=>$request->percent_N,
          'percent_P'=>$request->percent_P,
          'percent_K'=>$request->percent_K,
        
        
        ];
        Catalogue::create($data);
        return redirect()->route('catalogue.index')->with('success', 'Fertilizer created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogue $catalogue)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalogue $catalogue)
    {
        return view('admin.catalogue.create')->with('catalogue', $catalogue);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogue $catalogue)
    {
        $request->validate([
            'name' => 'required|max:45',
             'type'=> 'required',
             'percent_N'=>'required|numeric|digits_between:0,100',
             'percent_P'=>'required|numeric|digits_between:0,100',
             'percent_K'=>'required|numeric|digits_between:0,100',
          
        ]);
       

        $data = [
            'name'=>$request->name,
            'type'=>$request->type,
            'percent_N'=>$request->percent_N,
            'percent_P'=>$request->percent_P,
            'percent_K'=>$request->percent_K,
        
          
          ];

        $catalogue->update($data);

        return redirect()->route('catalogue.index')->with('success', 'Fertilizer updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalogue $catalogue)
    {
        $catalogue->delete();
        return redirect()->route('catalogue.index')->with('success', 'Fertilizer deleted Successfully');

    }


    public function allCatalogueApi(){
        $catalogue = Catalogue::where('active', 1)->orderBy('name', 'asc')->get();

        return response(["status" => 200, "message" => "Success", 'catalogues' =>$catalogue]);
    }


    public function activecatalogue($id){
        $catalogue = Catalogue::find($id);
        $catalogue->active = 1;
        $catalogue->save();

        return redirect()->route('catalogue.index')->with('success', 'Fertilizer Active Successfully');



    }

    public function notactivecatalogue($id){
        $catalogue = Catalogue::find($id);
        $catalogue->active = 0;
        $catalogue->save();

        return redirect()->route('catalogue.index')->with('success', 'Fertilizer not Active Successfully');



    }


  
}
