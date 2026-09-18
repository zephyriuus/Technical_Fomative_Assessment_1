<?php
    namespace App\Controllers;
    
    class Users extends BaseController {
        public function index() {
            $Users = [
                [
                    'name' => 'Gyomei Himejima',
                    'email' => 'gyomei.himejima@example.com'
                ],
                [
                    'name' => 'Jade Leech',
                    'email' => 'jade.leech@example.com'
                ],
                [
                    'name' => 'DonQuixote Rosinante',
                    'email' => 'donquixote.rosinante@example.com'
                ],
                [
                    'name' => 'Yoosung Kim',
                    'email' => 'yoosung.kim@example.com'
                ],
                [
                    'name' => 'Saeran Choi',
                    'email' => 'saeran.choi@example.com'
                ]
            ];
            return view('users_view', ['users' => $Users]);
        }
    }
