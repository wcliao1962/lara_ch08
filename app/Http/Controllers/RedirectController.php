<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Redirect;

class RedirectController extends Controller
{

	public function toIndex(){
		return Redirect::to('/');
	}

    public function toStudent($student_no){
    	return Redirect::route('student',['student_no'=>$student_no]);
    }

    public function toStudentSubject($student_no,$subject = null){
    	//return Redirect::action('StudentController@getStudentScore',['student_no'=>$student_no,'subject'=>$subject]);
        return Redirect::route('student.score', ['student_no'=>$student_no, 'subject'=>$subject]);
}
}
