<?php
    namespace App\Controllers;
    class Pages extends BaseController {
        public function index() {
            echo "Welcome back!";
        }
        public function about() {
            echo "This is all about me myself and I";
        }
    }
?>