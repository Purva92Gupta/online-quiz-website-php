<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function index() 
    {
        return view('index');
    }

    public function register()
    {
        return view('register');
    }

    public function registerSave(RegisterRequest $request)
    {
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login.view')->with('msg','Successfully Registered!');
    }

    public function loginAction(Request $request)
    {
        $user = User::where('username', $request->user)->first();

        if (isset($user)) {
            if ((strcasecmp($request->user, $user->username) == 0) && (Hash::check($request->pass, $user->password))) {
                $request->session()->put('user_id', $user->id);
                return redirect()->route('dashboard.view')->with('msg','Successfully Logged in!');
            }
            else {
                return redirect()->route('login.view')->with('error', 'Incorrect username or password!');
            }
        }
        else {
            return redirect()->route('login.view')->with('error', 'Unknown user!');
        }
    }

    public function dashboardView()
    {
        $quizList = Quiz::select('*')->get()->toArray();
        return view('dashboard')->with('quizList', $quizList);
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login.view');
    }
}
