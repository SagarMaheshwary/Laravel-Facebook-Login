<?php

namespace App\Http\Controllers\Socialite;

use Auth;
use App\User;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Redirect to the Provider.
     * 
     * @return Illuminate\Http\RedirectResponse
     */
    public function redirectToProvider(){
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * This method will handle the callback from
     * the provider.
     * 
     * @return Illuminate\Http\RedirectResponse
     */
    public function handleProviderCallback(){
        try{
            //if Authentication is successfull then return the user details.
            $user = Socialite::driver('facebook')->user();

            /**
             *  Below are fields that are provided by
             *  every provider.
             */
            $provider_id = $user->getId();
            $name = $user->getName();
            $email = $user->getEmail();
            $avatar = $user->getAvatar();
            //$nickname = $user->getNickname(); is also available

            // return the user if exists or just create one.
            $user = User::firstOrCreate([
                'provider_id' => $provider_id,
                'name'        => $name,
                'email'       => $email,
                'avatar'      => $avatar,
            ]);

            /**
             * Authenticate the user with session.
             * First param is the Authenticatable User object
             * and the second param is boolean for remembering the
             * user.
             */ 
            Auth::login($user,true);

            return redirect()->route('home');
        }catch(\Exception $e){
            //Authentication failed
            return redirect()
                ->back()
                ->with('status','authentication failed, please try again!');
        }
    }
}
