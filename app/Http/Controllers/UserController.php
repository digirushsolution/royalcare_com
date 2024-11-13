<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request){
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the user exists
        $userExists = User::where('email', $request->email)->exists();

        if (!$userExists) {
            return back()->withErrors(['email' => 'User does not exist.']);
        }

        // Attempt to log in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Successful login
            $user = Auth::user();
            return redirect()->intended('/dashboard');

        } else {
            // Unsuccessful login
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }



    //  Created a user
    public function register(Request $request){
       

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = $this->create($request->all());

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

    }

    public function logout(Request $request)
    {
        if (auth()->user() != null) {
            $redirect_route = '/';
        } 

        Auth::logout();
        Session::flush();

        return redirect('/login');

    }

    
}
