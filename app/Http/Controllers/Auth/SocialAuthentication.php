<?php


namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

trait SocialAuthentication
{
    public function githubLogin()
    {
        return Socialite::driver('github')->redirect();
    }

    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function twitterLogin()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleGithubCallback()
    {
        $user = Socialite::driver('github')->user();
        $this->handleCallbackResponse($user);
    }

    public function handleGoogleLogin()
    {
        return Socialite::driver('google')->user();
    }

    public function handleTwitterLogin()
    {
        return Socialite::driver('google')->user();
    }



    public function handleCallbackResponse($user)
    {
        [
            'id' => $social_id,
            'avatar_url' => $avatar_url,
            'name' => $name,
            'login' => $username,
            'email' => $email
        ] = $user->user;

        $findUser = User::where('social_id', $social_id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('/home');
        }

        $user = User::create([
            'email' => $email,
            'avatar_url' => $avatar_url,
            'username' => $username,
            'name' => $name,
            'social_id' => $social_id
        ]);
        Auth::login($user);
        return redirect('/home');
    }
}
