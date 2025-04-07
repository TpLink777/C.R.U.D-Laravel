<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(){
       return 'estas  en la ruta post';
   }
    public function register(){
         return 'estas en la ruta post/register';
    }
}
