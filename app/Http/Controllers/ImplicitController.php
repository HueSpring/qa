<?php

namespace huespring\Http\Controllers;

use Illuminate\Http\Request;

class ImplicitController extends Controller
{
    private $myClass;

    public function __construct(\MyClass $myClass){
      $this->myClass = $myClass;
    }

    public function insex(){
      dd($this->myClass);
    }
}
