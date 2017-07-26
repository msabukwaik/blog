<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class TasksController extends Controller
{

    function index() {
        $lists = Task::all();
        return view('tasks.index', compact('lists'));
    }

    function show(Task $task) {
	    $this->authorize('view',$task);
	    return view('tasks.show', compact('task'));
    }
}
