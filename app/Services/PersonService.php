<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/17
 * Time: 上午9:11
 */

namespace App\Services;


use App\Models\Person;
use App\Repositories\PersonRepository;

class PersonService extends BasicService
{

    private $person;

    public function __construct(Person $person, PersonRepository $repository)
    {
        $this->person = $person;
        parent::__construct($repository);
    }

    public function getPersonProfileByUserId($uid, $columns = ['*'])
    {
        $where = [
            'key' => 'user_id',
            'operator' => '=',
            'value' => $uid
        ];
        return $this->repository->getPersonProfile($where, $columns);
    }

    public function saveCompanyProfile($params)
    {
        if (!array_key_exists('id', $params)) {
            $person = new Person();
        } else {
            $where = [
                'key' => 'id',
                'operator' => '=',
                'value' => $params['id']
            ];
            $person = $this->repository->getPersonProfile($where);
            if (!$person) {
                $person = new Person();
            }
        }
        return $this->repository->savePerson($person, $params);
    }
}