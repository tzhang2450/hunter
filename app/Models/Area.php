<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/14
 * Time: 下午11:34
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    protected $connect = 'hunter';

    protected $table = 'ht_area';

    protected $primaryKey = 'id';

    protected $images = [];

    protected $guarded = ['id'];

    public $timestamp = true;

    public function cities()
    {
        return $this->hasMany('App\Models\Area', 'pid', 'id');
    }

    public function areas()
    {
        return $this->hasMany('App\Models\Area', 'pid', 'id');
    }

    public function province()
    {
        return $this->belongsTo('App\Models\Area', 'pid');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\Area', 'pid');
    }
}