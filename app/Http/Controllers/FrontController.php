<?php

namespace App\Http\Controllers;
use App\Models\Catalogue;
use App\Models\Freehit;
use App\Models\Registeruser;

use App\Models\Morenutrient;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function dashboard(){
        $morenutrients = Morenutrient::orderBy('name', 'asc')->get();
        $freehit = Freehit::latest()->first();
        $updatedregisters = Registeruser::where('profile_setup', 1)->latest()->get();
        $registers = Registeruser::where('profile_setup', 0)->latest()->get();
        $catalogues = Catalogue::latest()->get();
        $drycats = Catalogue::where('type', 'dry fertilizer')->get();
        $liquidcats = Catalogue::where('type', 'liquid fertilizer')->get();
        $mixcats = Catalogue::where('type', 'mix fertilizer')->get();
        $active = Catalogue::where('active', 1)->get();
        $notactive = Catalogue::where('active', 0)->get();
        return view('admin.index')
        ->with('catalogues', $catalogues)
        ->with('drycats', $drycats)
        ->with('liquidcats', $liquidcats)
        ->with('mixcats', $mixcats)
        ->with('registers', $registers)
        ->with('updatedregisters', $updatedregisters)
        ->with('freehit', $freehit)
        ->with('morenutrients', $morenutrients)
        ->with('notactive', $notactive)
        ->with('active', $active);;
    }
}
