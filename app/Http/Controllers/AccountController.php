<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\PasswordChangeRequest;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{

    public function getIndex()
    {
        $user = Auth::user();
        return view('account.index', ['user' => $user]);
    }

    public function getChangePassword()
    {
        return view('account.change-password');
    }

    public function postChangePassword(PasswordChangeRequest $request)
    {
        
    }
}
