<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Employee.ProfileUpdate");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "<pre>"; print_r($request->all()); exit;
        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $imageName = time() . "." . $request->image->extension();

        $request->image->move(public_path("images"), $imageName);

        Auth()
            ->user()
            ->update(["avatar" => $imageName]);

        return response()->json([
            "img" => $imageName,
            "massege" => "image uploaded successfully",
        ]);
    }
    // Update user profie
    public function profileUpdate(Request $request)
    {
        // Validation

        $request->validate([
            "name" => "required|min:4|string|max:255",
            "email" => "required|email|string|max:255",
        ]);

        $user = Auth::user();
        $user->name = $request["name"];
        $user->email = $request["email"];
        $user->save();
        return response()->json([
            "massege" => "image uploaded successfully",
        ]);
    }

    public function PasswordUpdate(Request $request)
    {
        $request->validate([
            "password"=> "required|_currentPassword",
            "New-password"=>"required|min:8|max:255",
        ]);

        $user = Auth::user();
        $user->password = $request["password"];
        $hashed = Hash::make($request["New-password"]);
        $user->password = $hashed;

        $user->save();
        return response()->json([
            "massege" => "image uploaded successfully",
        ]);
    }
}
