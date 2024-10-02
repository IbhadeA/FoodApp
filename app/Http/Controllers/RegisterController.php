<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Services\Auth\RegisterService;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->validated();
        $response = (new RegisterService)->register($request);
       
       
           return response()->json(["message"=>"Signup sucessful","Status"=>true, "data"=>$response]);
        


    }
}
