<?php

namespace App\Http\Controllers\Modules\Users;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use \Illuminate\Pagination\LengthAwarePaginator;

class UsersController extends Controller {

    public function getIndex(){
        return view('Modules.Seguimiento.index');
    }
    public function postIndex()
    {
        extract($_POST);
        echo $id;
    }
}
