<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usuarios = User::all();
        return view('user.home')->with('usuarios', $usuarios);
    }
}
