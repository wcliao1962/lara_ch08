<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Score as ScoreEloquent;

use Route;
//use View;

class BoardController extends Controller
{

	public function getIndex(){
		return view('board',['scores'=>ScoreEloquent::with('student')->orderByTotal()->orderBySubject()->get()]);
	}

    public function getName(){
    	return Route::currentRouteAction();
    }


}
