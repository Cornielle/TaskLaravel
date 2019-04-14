<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {

        return Task::where('archive', 0)->orderBy('id', 'desc')->get();
    }

    public function archived()
    {
        return Task::where('archive', 1)->orderBy('id', 'desc')->get();
    }
    public function store(Request $request)
    {
        $this->validate($request, ['body' => 'required|max:500']);
    }

    public function edit(Request $request)
    {
        $
    }

}
