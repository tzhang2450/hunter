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

class Program extends Model
{

    protected $connect = 'hunter';

    protected $table = 'ht_program';

    protected $primaryKey = 'id';

    protected $images = [];

    protected $guarded = ['id'];

    public $timestamp = true;

    public function getIndustry()
    {
        return Industry::where('id', $this->industry_id)->first();
    }
}