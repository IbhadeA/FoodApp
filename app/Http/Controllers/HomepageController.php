<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $messages = 'Hello from Lagos';
        $name = 'Christmas';
        $allUsers = $this->getAllUsers();

        return view(view:'homepage')-> with (key:['message'=>$messages, 'name'=> $name, 'users' => $allUsers]);
    }

    public function getAllUsers()
    {
        $allUsers = User::orderBy('first_name', 'ASC')->get();
        return $allUsers; 
    }
}


// get fom the DB
// You write the model i.e The table
// add 2 columns in front of the model i.e ::
// to get everything we use either get () or all();

// get all the users in the DB
// public function getUsers()
// {
// $allUsers = User::get();
// return $allUsers;
// }

// get a single user
// public function()
// {
    // $user = User::where ('name', 'Abimbola)->first();

// }