<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontend extends Controller
{
    public $front="frontend.";
    public function index(){
        return view($this->front.'index');
        }

        public function login(){
        return view($this->front.'login');
            }
        public function not_found(){
            return view($this->front.'404');
        }
    public function blog(){
        return view($this->front.'blog');
    }
    public function blog_single(){
        return view($this->front.'blog_single');
    }
    public function cart(){
        return view($this->front.'cart');
    }
    public function checkout(){
        return view($this->front.'checkout');
    }
    public function contact(){
        return view($this->front.'contact_us');
    }
    public function product_details(){
        return view($this->front.'product_details');
    }
    public function shop(){
        return view($this->front.'shop');
    }
}
