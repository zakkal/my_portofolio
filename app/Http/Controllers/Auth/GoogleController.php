<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // Using stateless() often solves issues with 'state' mismatch on localhost
            $user = Socialite::driver('google')->stateless()->user();
            
            \Log::info('Google Login Attempt for email: ' . $user->email);
            
            $findUser = User::where('google_id', $user->id)->first();
            
            if ($findUser) {
                Auth::login($findUser, true);
                return redirect()->intended('/');
            } else {
                $existingUser = User::where('email', $user->email)->first();
                
                if ($existingUser) {
                    $existingUser->update([
                        'google_id' => $user->id,
                        'avatar' => $user->avatar,
                        'google_token' => $user->token,
                        'google_refresh_token' => $user->refreshToken,
                    ]);
                    Auth::login($existingUser, true);
                } else {
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id' => $user->id,
                        'avatar' => $user->avatar,
                        'google_token' => $user->token,
                        'google_refresh_token' => $user->refreshToken,
                        'password' => bcrypt(str()->random(24)), // Use random password
                    ]);
                    Auth::login($newUser, true);
                }
                
                return redirect()->intended('/');
            }
        } catch (Exception $e) {
            \Log::error('Google Login Error: ' . $e->getMessage());
            return redirect('login')->with('error', 'Gagal masuk lewat Google. Silakan coba lagi.');
        }
    }
}
