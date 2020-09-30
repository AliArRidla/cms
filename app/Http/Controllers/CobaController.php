<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\coba;

class CobaController extends Controller
{
    public function index()
    {
        // $coba = Coba::all();
        $coba = DB::table('cobas')->get();
        return view('coba', compact('coba'));
    }
    // ini get by id
    public function show($id)
    {
        // $coba = Coba::findOrFail($coba->id);
        $coba = DB::table('cobas')->find($id);
        return view('cobaDetail', compact('coba'));
    }
}
