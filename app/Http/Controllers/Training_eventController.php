<?php

namespace App\Http\Controllers;

use App\Training_event;
use Illuminate\Http\Request;

class Training_eventController extends Controller
{
    public function index(Training_event $training_event)
    {
        return view('training_event.index')->with(['posts' => $training_event->getByCategory()]);
    }
}
