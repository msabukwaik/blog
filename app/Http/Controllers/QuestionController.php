<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QuestionController extends Controller
{

	/**
	 * PostController constructor.
	 */
	public function __construct() {
		//$this->middleware('checkQuestion');
		//$this->middleware('checkQuestion')->only('show');
		//$this->middleware('checkQuestion')->except('show');
	}

	public function index(){ //question
		Log::emergency('emergency : 404 exceptopm is going to be raised');
		Log::alert('alert : 404 exceptopm is going to be raised');
		Log::critical('critical : 404 exceptopm is going to be raised');
		Log::error('error : 404 exceptopm is going to be raised');
		Log::warning('warning : 404 exceptopm is going to be raised');
		Log::notice('notice : 404 exceptopm is going to be raised');
		Log::info('info : 404 exceptopm is going to be raised');
		Log::debug('debug : 404 exceptopm is going to be raised');
		abort(404, 'Unauthorized action.');
		return 'List of questions should be returned here';
	}

	public function create(){ //question/create
		return 'Create question form should be appeared here';
	}

	public function store(){ //question POST
		return 'Save the data of the question should be taken place here';
	}

	public function show($id){ //question/$id GET
		return 'The information of ' . $id . ' question should be appeared here';
	}

	public function edit($id){ //question/$id/edit
		return 'The edit form of the ' . $id . ' question should be appeared here';
	}

	public function update($id){ //question/$id PUT, PATCH
		return 'The data of the ' . $id . ' question are going to be updated';
	}

	public function destroy($id){ //question/$id DELETE
		return 'The date of ' . $id . 'question is going to be deleted';
	}
}
