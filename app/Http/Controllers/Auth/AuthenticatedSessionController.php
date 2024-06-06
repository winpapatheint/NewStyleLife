<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $user = Auth::user();

        if (!empty($user->role)) {
            if ($user->role == 'admin') {
                return redirect()->intended(RouteServiceProvider::ADMIN);
            } else if ($user->role == 'seller' && $user->status == 1) {
                return redirect()->intended(RouteServiceProvider::SELLER);
            } else if ($user->role == 'buyer' && $user->status == 1) {
                return redirect('/user');
            } else {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }

        return view('auth.login');
    }



    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {

        $request->authenticate();

        $request->session()->regenerate();
        // print_r(Auth::user()->role);die();

        if (Auth::user()->role == 'admin') {

            return redirect('/admin');
        }
        else if (Auth::user()->role == 'seller' && Auth::user()->status == 1) {

           return redirect()->intended(RouteServiceProvider::SELLER);
        } else if (Auth::user()->role == 'buyer' && Auth::user()->status == 1) {
            $intendedUrlWithDomain = $request->session()->pull('url.intended');
            $intendedUrlComponents = parse_url($intendedUrlWithDomain);
            $intendedPath = $intendedUrlComponents['path'];
            $queryString = isset($intendedUrlComponents['query']) ? '?' . $intendedUrlComponents['query'] : '';
            $intendedUrl = $intendedPath . $queryString;

            if ($intendedUrl)
            return redirect($intendedUrl);

            else
            return redirect('/user');
        } else {

            return redirect()->intended(RouteServiceProvider::HOME);
        }

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}