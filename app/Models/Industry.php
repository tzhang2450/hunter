<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午12:10
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $connect = 'hunter';

    protected $table = 'ht_industry';

    protected $primaryKey = 'id';

    protected $images = [];

    protected $guarded = ['id'];
}