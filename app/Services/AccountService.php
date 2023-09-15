<?php

namespace App\Services;

use App\Models\User;
use App\Models\User_information;

use Illuminate\Support\Facades\Auth;

class AccountService
{
    public function updateAccount(array $data): ?User
    {
        /** @var User $user */
        $user = Auth::user();

        if ($user) {
            $prepareData = [
                'first_name' => $data['name'],
                'last_name' => $data['secondName'],
                'phone' => $data['phone'],
            ];

            if (!$user->information) {
                $userInformation = new user_information($prepareData);
                $user->information()->save($userInformation);
            } else {
                $user->information()->update($prepareData);
            }
        }

        return $user;
    }
}
