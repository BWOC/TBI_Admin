<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Backpack\Base\app\Http\Controllers\Auth\LoginController as BackpackLoginController;
use App\User;
use Exception;
use Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();   
    }   

    public function callback()
    {
        try 
        {
            $data = Socialite::with('google')->user();
            $user = $data->email;
            Auth::login(User::where('user_email',$user)->firstOrFail());
            return redirect(config('backpack.base.route_prefix').'/dashboard');
        } 
        catch (Exception $e) 
        {
            $this->data['warning'] = "Your email is not registered.";
            return view('backpack::auth.login', $this->data);
        }

        /*if(!is_null($user)) {
            Auth::login($user);
            $user->name = $data->user['name'];
            $user->google_id = $data->sub;
            $user->save();
        } else {
            $user = User::where('google_id', $data->sub)->first();
            if(is_null($user)){
                // Create a new user
                $user = new User();
                $user->name = $data->user['name'];
                $user->email = $data->email;
                $user->google_id = $data->sub;
                $user->save();
            }

            Auth::login($user);
        }
        return redirect('/')->with('success', 'Successfully logged in!'); */
    }
}
