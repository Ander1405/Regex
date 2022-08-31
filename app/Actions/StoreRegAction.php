<?php

namespace App\Actions;

use App\Models\User;

class StoreRegAction
{
    public function execute(array $data, User $user): User
    {
    //        dd($data);
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->email = $data['email'];
        $user->document_type = $data['document_type'];
        $user->document = $data['document'];

        $user->save();

        return $user;
    }
}
