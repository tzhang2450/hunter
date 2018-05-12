<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午12:29
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Benefits extends Model
{
    protected $connect = 'hunter';

    protected $table = 'ht_benefits';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}