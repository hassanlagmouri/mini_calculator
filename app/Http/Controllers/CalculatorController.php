<?php

namespace App\Http\Controllers;

use App\Calculator;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    protected $calculator;

    public function __construct(Calculator $calculator) {
        $this->calculator = $calculator;
    }

    function index() {
        return redirect()->route('calculator');
    }

    function calculator() {
        return view('calculator');
    }

    function operation(Request $req) {
        $result = null;
        $error = null;
        switch ($req->op) {
            case 'add':
                $result = $this->calculator->add($req->v1, $req->v2);
                break;
            case 'sub':
                $result = $this->calculator->sub($req->v1, $req->v2);
                break;
            case 'mul':
                $result = $this->calculator->mul($req->v1, $req->v2);
                break;
            case 'div':
                try {
                    $result = $this->calculator->div($req->v1, $req->v2);
                } catch (\Throwable $th) {
                    $error = $th->getMessage();
                }
                break;
            default:
                # code...
                break;
        }

        return redirect()->back()->withInput()->with('result', $result)->withErrors($error);
    }
}
