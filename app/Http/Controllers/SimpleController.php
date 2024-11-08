<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function showMessage()
    {
        return view('message'); // Zwraca widok 'message.blade.php'
    }}
