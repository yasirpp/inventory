<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Model\Users;

class UserController extends Controller
{
    public function index(){
        return view("welcome");
    }
    
    public function home(){
        $links = ["Home", "About", "Contact", "Projects"];
//        return view("home")->with("links", $links);
//        return view("home", compact("links", "index"));
        $users = DB::select('select * from users where role = :role', ['role' => 'user']);

        return view('home', ['users' => $users]);
        
    }
    
    public function registerUser(){
        DB::insert('insert into users (user_name, password, email, role) values(?, ?, ?, ?)', ['anusha', '123456', 'anu@gmail.com', 'user']);
        
        return "<h4>Insertion complete</h4>";
    }
    
    public function test(){
        $users = Users::all();
        foreach ($users as $user) {
            echo $user->user_name."<br>";
        }
    }
    
}
