<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monster;

class MonstersController extends Controller
{
    public function randomEncounter(Request $request)
    {
		$encounters = Monster::where('tipo', 'randomencounter')->inRandomOrder()->take(3)->get();

		if ($request->ajax()) {
			echo json_encode($encounters);
		} else {
			return view('monsters.randomencounter')->with('encounters', $encounters);
		}
    }
}
