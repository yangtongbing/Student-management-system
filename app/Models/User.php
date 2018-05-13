<?php
/**
 * Created by PhpStorm.
 * User: 12807
 * Date: 2018/5/13
 * Time: 14:54
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model /* or ConfideUser 'wink' */
{
    use EntrustUserTrait;
}