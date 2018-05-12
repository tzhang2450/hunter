<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/5/11
 * Time: 下午7:20
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProgramOrder extends Model
{
    protected $connect = 'hunter';

    protected $table = 'ht_program_order';

    protected $primaryKey = 'id';

    protected $images = [];

    protected $guarded = ['id'];

    public function getProgram()
    {
        return Program::where('program_id', $this->program_id)->first();
    }

}