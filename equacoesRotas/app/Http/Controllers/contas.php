<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contas extends Controller
{
    //
    public function somar($n1, $n2){
        return $n1 + $n2;
    }
    public function subtrair($n1, $n2){
        return $n1 - $n2;
    }
    public function multiplicar($n1, $n2){
        return $n1 * $n2;
    }
    public function dividir($n1, $n2){
        return $n1 / $n2;
    }
    public function quadrado($n1){
        return $n1 * $n1;
    }
}
