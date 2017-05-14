<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    //
    function home() {
        $lists = Task::all();
        return view('welcome', compact('lists'));
    }

    function index() {
        $lists = Task::all();
        return view('tasks.index', compact('lists'));
    }

    function show($id) {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }
}
