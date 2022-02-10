<?php


namespace App\classes;


class user
{
    public function getAllUser()
    {
        return[
            0 => [
                'id'        => 1,
                'name'      => 'Mahbubur Rahman',
                'email'     => 'mahbuburfahim@gmail.com',
                'password'  => '123456'
            ],
            1 => [
                'id'        => 2,
                'name'      => 'Rafa',
                'email'     => 'rafa@gmail.com',
                'password'  => '111222'
            ],
        ];
    }
}