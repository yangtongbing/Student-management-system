<?php
/**
 * Created by PhpStorm.
 * User: 12807
 * Date: 2018/5/13
 * Time: 15:37
 */

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        $user = User::where('id', '=', 1)->first();
        var_dump($user->hasRole('admin'));
        $user->can();
    }
}