<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午12:19
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class EmployScope extends Model
{

    protected $connect = 'hunter';

    protected $table = 'ht_employ_scope';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}