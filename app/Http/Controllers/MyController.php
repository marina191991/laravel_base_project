<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MyController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function getCalculator () {
    return view('welcome');
}
public function getResult(Request $request) {
        $val1 =  $request->get('value1');
        $val2 = $request->get('value2');
        $action = $request->get('action_is_arithmetic');
        $res = 0;
        switch ($action) {
            case 'addition': {
                $res = $val2+$val1;
                break;
            }
            case 'subtraction': {
                $res = $val1 - $val2;
                break;
            }
            case 'multi': {
                $res = $val2*$val1;
                break;
            }
            case 'division': {
                if ($val2 == 0) {
                    $res = 'на ноль делить нельзя';
                }
                else {
                    $res = round($val2 / $val1, 2);
                }
            }
        }
  return view('result',['result'=>$res]);
}
}
