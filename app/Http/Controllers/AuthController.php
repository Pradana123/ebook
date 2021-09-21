<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119145,
        'name' => 'Pradana Argo Pangestu',
        'phone' => '081327212166',
        'class' => 'XII RPL 5'];
  }
}