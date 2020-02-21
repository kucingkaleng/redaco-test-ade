<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
  public function index()
  {
    return Inertia::render('Welcome', [
      'user' => [
        'name' => 'Adeardo Dora Harnanda'
      ],
      'head' => [
        'Login',
        'Discovery',
        'Posting'
      ]
    ]);
  }

  public function discovery()
  {
    return Inertia::render('Discovery', [
      'user' => [
        'name' => 'Adeardo Dora Harnanda'
      ],
      'users' => [
        [
          'name' => 'Adeardo Dora Harnanda',
          'email' => 'adetxt@live.com'
        ],
        [
          'name' => 'Ratih Galuh Pradewi',
          'email' => 'ratih@live.com'
        ],
        [
          'name' => 'Dayat Saputro',
          'email' => 'dayat@mail.com'
        ],
        [
          'name' => 'Hendro Kurniawan',
          'email' => 'kurniawan@live.com'
        ],
      ]
    ]);
  }
}
