<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@index');

Route::group(['prefix'=>'student'],function(){

	Route::get('{student_no}',[
		'as'=>'student',
		'uses'=>'StudentController@getStudentData'
	])->where(['student_no'=>'s[0-9]{10}']);

	Route::get('{student_no}/score/{subject?}',[
		'as'=>'student.score',
		'uses'=>'StudentController@getStudentScore'
	])->where(['student_no'=>'s[0-9]{10}','subject'=>'(chinese|english|math)']);
	
});

Route::controller('board','BoardController');

Route::group(['prefix'=>'redirect'],function(){

	Route::get('toIndex','RedirectController@toIndex');
	Route::get('toStudent/{student_no}','RedirectController@toStudent');
	Route::get('toStudentSubject/{student_no}/{subject?}','RedirectController@toStudentSubject');

});

