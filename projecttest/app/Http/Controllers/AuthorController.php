<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthorController extends Controller
{
    public function showdata(){

        $authors= Author::all();
        return view('index', compact('authors'));

    }

    public function create(Request $request){

        $author= new Author();
        $author->first_name= $request->firstname;
        $author->last_name= $request->lastname;
        $author->email= $request->email;
        $author->save();

        $authors= Author::all();
        return view('index', compact('authors'));

    }



}
