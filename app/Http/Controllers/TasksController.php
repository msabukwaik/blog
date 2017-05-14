<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{

    function index() {
        $lists = Task::all();
        return view('tasks.index', compact('lists'));
    }

    function show(Task $task) {
        return view('tasks.show', compact('task'));
    }
}
