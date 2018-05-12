<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:57
 */

namespace App\Presenters;


use App\Models\Person;

class PersonPresenter implements Presenter
{

    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function format($results, array $columns)
    {
        $data = [];
        if ($results) {
            foreach ($columns as $column) {
                $data[$column] = $results->$column;
            }
        }

        return $data;
    }
}