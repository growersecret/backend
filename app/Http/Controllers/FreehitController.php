<?php

namespace App\Http\Controllers;

use App\Models\Freehit;
use Illuminate\Http\Request;

class FreehitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freehit = Freehit::latest()->first();

        return view('admin.freehit.index')->with('freehit', $freehit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Freehit  $freehit
     * @return \Illuminate\Http\Response
     */
    public function show(Freehit $freehit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Freehit  $freehit
     * @return \Illuminate\Http\Response
     */
    public function edit(Freehit $freehit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Freehit  $freehit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freehit $freehit)
    {

       
        $request->validate([
            'freecount' => 'required|numeric'
        ]);
        $data = [
            'freecount' => $request->freecount
        ];
     

        $freehit->update($data);
      
        return redirect()->route('freehit.index')->with('success', 'Free hit updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Freehit  $freehit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Freehit $freehit)
    {
        //
    }
}
