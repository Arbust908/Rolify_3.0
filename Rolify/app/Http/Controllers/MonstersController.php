<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Value;

class MonstersController extends Controller
{
	public function randomEncounter(Request $request)
	{
		$encounters = Value::whereHas('asset', function ($query) {
			$query->where('asset', 'randomencounter')
			->where('dado', 'encounterD00');
		})->inRandomOrder()->take(3)->get();

		if ($request->ajax()) {
			echo json_encode($encounters);
		} else {
			return view('monsters.randomencounter')->with('encounters', $encounters);
		}
	}

	public function legendaryBeast(Request $request)
	{
		$data['is'] = Value::whereHas('asset', function ($query) {
			$query->where('asset', 'legendaryBeast')
			->where('dado', 'isD20');
		})->inRandomOrder()->first();

		$data['has'] = Value::whereHas('asset', function ($query) {
			$query->where('asset', 'legendaryBeast')
			->where('dado', 'hasD10');
		})->inRandomOrder()->first();

		$data['fame'] = Value::whereHas('asset', function ($query) {
			$query->where('asset', 'legendaryBeast')
			->where('dado', 'fameD10');
		})->inRandomOrder()->first();

		if (preg_match('/[aeiou]/', substr($data['is']->value, 0,1)) == 1) {
			$data['ext'] = (object) ['value' => 'an'];
		} else {
			$data['ext'] = (object) ['value' => 'a'];
		}

		if ($request->ajax()) {
			echo json_encode($data);
		} else {
			return view('monsters.legendarybeast')->with('data', $data);
		}
	}
}
