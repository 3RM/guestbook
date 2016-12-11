<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
        //return "HomeController action Index";
        //return route('home');
        $data = array(
            'title' => 'Гостевая книга на Laravel 5.2',
            'pagetitle' => 'Гостевая книга',            
        );
        return view('pages.messages.index',$data);
    }
    
    public function edit($id){
        $data = array(
            'title' => 'Редактирование: Гостевая книга на Laravel 5.2',
            'pagetitle' => 'Редактирование: Гостевая книга'
        );
        return view('pages.messages.edit',$data);
    }
}
