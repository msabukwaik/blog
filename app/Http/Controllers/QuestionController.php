<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
	public function index(){ //question
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
