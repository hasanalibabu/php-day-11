<?php


namespace App\classes;


class User
{
    public function getAllUser()
    {
        return[
            0 =>[
                'id' => 1,
                'name' => 'hasan',
                'email' => 'hasan@gmail.com',
                'password' => '11111',
            ],
            1 =>[
                'id' => 2,
                'name' => 'ali',
                'email' => 'ali@gmail.com',
                'password' => '11122',
            ],
        ];
    }
}