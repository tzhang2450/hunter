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

class Education extends Model
{

    protected $connect = 'hunter';

    protected $table = 'ht_education';

    protected $primaryKey = 'id';

    protected $images = [];

    protected $guarded = ['id'];

    public $timestamp = true;

    public static function edu($name = '')
    {
        $edu = [
            'b-middle' => '初中以下',
            'j-middle' => '初中',
            's-middle' => '高中',
            'j-college' => '大专',
            's-college' => '本科',
            'master' => '硕士',
            'doctor' => '博士',
            'a-doctor' => '博士以上',
        ];
        return $name === '' ? $edu : [$name => $edu[$name]];
    }
}