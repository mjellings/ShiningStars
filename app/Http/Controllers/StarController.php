<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Star;

class StarController extends Controller
{
    public function index() {
        $stars = Star::all();
        dd($stars);
    }

    public function create(Request $request) {
        $star = Star::firstOrCreate([
            'code' => $request->input('code')
        ],[
            'star_name' => $request->input('star_name'),
            'your_name' => $request->input('your_name')
        ]);
        return redirect ('/star/' . $star->code);
    }

    public function view($star_code) {
        $star = Star::where('code', $star_code)->first();
        if (!$star) {
            return abort(404);
        }
        else {
            return view('star', array('star' => $star));
        }
    }
}
