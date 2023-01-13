<?php

namespace App\Http\Controllers;

use App\Models\Morenutrient;
use Illuminate\Http\Request;

class MorenutrientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $morenutrients = Morenutrient::orderBy('name', 'asc')->get();
        return view('admin.morenutrient.index')->with('morenutrients', $morenutrients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.morenutrient.create');
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
            'name' => 'required|max:255',
      
        ]);

        $data = [
            'name' => $request->name,
         
        ];

        Morenutrient::create($data);
        return redirect()->route('morenutrient.index')->with('success', 'Nutrient Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Morenutrient  $morenutrient
     * @return \Illuminate\Http\Response
     */
    public function show(Morenutrient $morenutrient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Morenutrient  $morenutrient
     * @return \Illuminate\Http\Response
     */
    public function edit(Morenutrient $morenutrient)
    {
        return view('admin.morenutrient.create')->with('morenutrient', $morenutrient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Morenutrient  $morenutrient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Morenutrient $morenutrient)
    {
        $request->validate([
            'name' => 'required|max:255',
         
        ]);

        $data = [
            'name' => $request->name,
       
        ];

        $morenutrient->update($data);
        return redirect()->route('morenutrient.index')->with('success', 'Nutrient Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Morenutrient  $morenutrient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Morenutrient $morenutrient)
    {
        $morenutrient->delete();
        return redirect()->route('morenutrient.index')->with('success', 'Nutrient Deleted Successfully');
    }


    public function otherNutrients(){
        $otherNutrients = Morenutrient::orderBy('name', 'asc')->get();

        return response(["status" => 200, "message" => "Success", 'otherNutrients' =>$otherNutrients]);
    }
}
