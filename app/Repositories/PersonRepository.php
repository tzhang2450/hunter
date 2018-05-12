<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:23
 */

namespace App\Repositories;


use App\Models\Person;

class PersonRepository implements Repository
{

    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function getPersonProfile(array $where, array $columns = ['*'])
    {
        return $this->person->where($where['key'], $where['operator'], $where['value'])->get($columns)->first();
    }

    public function savePerson(Person $person, array $params)
    {
        foreach ($params as $key => $item) {
            $person->$key = $item;
        }
        return $person->save();
    }
}