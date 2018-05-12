<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:32
 */

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository implements Repository
{

    private $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function getCompanyProfile(array $where, array $columns = ['*'])
    {
        return $this->company->where($where['key'], $where['operator'], $where['value'])->get($columns)->first();
    }

    public function getCompanyById($id, array $columns = ['*'])
    {
        return $this->company->find($id, $columns);
    }

    public function getCompanies(array $where, $offset = 0, $limit = 10, array $columns = ['*'])
    {
        return $this->company->where($where['key'], $where['operator'], $where['value'])->offset($offset)->limit($limit)->get($columns);
    }

    public function saveCompanyProfile($id, array $attributes)
    {
        return $this->company->update($attributes, ['id' => $id]);
    }
}