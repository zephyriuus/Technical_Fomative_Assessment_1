<?php
    namespace App\Controllers;
    class Pages extends BaseController {
        public function index() {
            echo "Welcome back!";
        }
        public function about() {
            return view('about_view');
        }
    }
?>