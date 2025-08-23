<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ComponentController extends Controller
{
    public function fullCalendar(): View
    {
        return view('full-calendar');
    }

    public function inputField(): View
    {
        return view('inputs-fields');
    }
    public function table(): View
    {
        $users = User::paginate(5);
        return view('table', ['users' => $users]);
    }

    public function chart(): View
    {
        return view('chart');
    }

    public function home(): View
    {
        return view('home');
    }
}