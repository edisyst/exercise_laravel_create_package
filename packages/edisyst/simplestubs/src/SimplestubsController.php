<?php

//namespace App\Http\Controllers;
namespace Edisyst\Simplestubs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimplestubsController extends Controller
{
    public function add($a, $b)
    {
        $result = $a + $b;
        return view('simplestubs::add', compact('result'));
    }

    public function sub($a, $b)
    {
        echo $a - $b;
    }

}
