<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/6
 * Time: 上午1:01
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{

    protected $connect = 'hunter';

    protected $table = 'ht_person';

    protected $primaryKey = 'id';

    protected $images = [];

    protected $guarded = ['id'];

    public $timestamp = true;
}