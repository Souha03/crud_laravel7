<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\User;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index() {

        $data= DB::table('fonction')
        ->select('users.name','fonction.acteurs')
        ->join('fonction','users.role','fonction.id')
        ->get();
        echo"<pre>";
        print_r($data);
        }
}
