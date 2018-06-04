<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{


    public function __construct()
{

     $this->middleware('guest',['except' =>'destroy']);
}

    public function create(){

        return view('sessions.create');


    }

    public function store()

    {
        /*
        $user = new User();
        $user->password = Hash::make('123456');
        $user->email = 'iletisim@cagriel.com';
        $user->name = 'Cagrı';
        $user->save();
        */




        if(!auth()->attempt(request(['email','password']))){

            return back();

        }
        return redirect()->home();


    }



    public function destroy(){

        auth()->logout();

        return redirect()->home();
    }
}
