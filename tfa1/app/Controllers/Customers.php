<?php
    namespace App\Controllers;

    class Customers extends BaseController {
        public function index() {
            $Customers = [
                [
                    'name' => 'Navia Caspar',
                    'email' => 'navia.caspar@example.com'
                ],
                [
                    'name' => 'Maya Amano',
                    'email' => 'maya.amano@example.com'
                ],
                [
                    'name' => 'Ada Tennant',
                    'email' => 'ada.tennant@example.com'
                ],
                [
                    'name' => 'Jolyne Cujoh',
                    'email' => 'jolyne.cujoh@example.com'
                ],
                [
                    'name' => 'Maria Dela Rosa',
                    'email' => 'maria.dela.rosa@example.com'
                ]
            ];
            return view('customers_view', ['customers' => $Customers]);
        }
    }
?>