<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cobacontroller extends Controller
{
    public function index ()
    {
    
      $friends = friends::paginate(3);

        return view('index',compact('friends'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
       // validate the request....
       $friends = New Friends;

       $friends->nama = $request->nama;
       $friends->no_tlp = $request->no_tlp;
       $friends->alamat = $request->alamat;
       
       $friends->save();
    }
}
