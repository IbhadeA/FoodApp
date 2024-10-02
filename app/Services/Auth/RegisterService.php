<?php

namespace App\Services\Auth;

use Error;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterService

{
public function register($request)
{
     // we need to check if the password matches
     $password = $request->input('password');
     $confirmPassword = $request->input('confirm_password');

     if ($password != $confirmPassword)
     {
         throw new Error("password does not match");
     }
     $user=User::where("email", $request->input("email"))->first();
     if(isset($user)){
        throw new Error("email already exist");
     }
         // let us save the data un our database
         // firstly, we need to harsh the password
         $hashedPassword = Hash::make($password);

         // save in database
         User::create([
             'first_name' => $request->input ('first_name'),
             'last_name' => $request->input ('last_name'),
             'email' => $request->input ('email'),
             'password' => $hashedPassword,
             'phone_number' => $request->input('phone_number'),
             'address' => $request->input ('address'),
         ]);

         $newUser=User::where("email", $request->input("email"))->first();   
         return $newUser;

}



}











?>