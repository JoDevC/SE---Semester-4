<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PomodoroController extends Controller
{
    public function index()
    {
        return view('pomodoro.list');
    }
}
