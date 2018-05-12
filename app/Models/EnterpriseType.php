<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/14
 * Time: 下午11:17
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class EnterpriseType extends Model
{

    protected $connect = 'hunter';

    protected $table = 'ht_enterprise_type';

    protected $primaryKey = 'id';

    protected $images = [];

    protected $guarded = ['id'];

}