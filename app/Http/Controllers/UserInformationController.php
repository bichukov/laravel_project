<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AccountService;
use Illuminate\Support\Facades\Auth;

class UserInformationController extends Controller
{
    public function account()
    {


        return view('auth.account', [
            'user' => Auth::user(),

        ]);
    }

    public function updateAccount(Request $request, AccountService $accountService)
    {
        $accountService->updateAccount($request->all());
        return redirect()->route('account.show');
    }
}
