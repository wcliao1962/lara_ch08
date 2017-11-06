<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Score ;

use Route;
//use View;

class BoardController extends Controller
{

	public function getIndex(){
        $scores=Score::orderByTotal()->orderBySubject()->get();
	    $data=['scores'=>$scores];
		return view('board', $data);
	}

    public function getName(){
    	return Route::currentRouteAction();
    }


}
