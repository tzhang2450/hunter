<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/12
 * Time: 上午9:32
 */

namespace App\Services;


use App\Repositories\CompanyRepository;

class CompanyService extends BasicService
{
    public function __construct(CompanyRepository $repository)
    {
        parent::__construct($repository);
    }

    /**前台业务**/

    public function getCompanyProfileById($id)
    {
        return $this->repository->getCompanyById($id);
    }

    public function getCompanyProfileByUserId($uid, $columns = ['*'])
    {
        $where = [
            'key' => 'user_id',
            'operator' => '=',
            'value' => $uid
        ];
        return $this->repository->getCompanyProfile($where, $columns);
    }

    public function saveCompanyProfile($id, array $params)
    {
//        $attributes = [
//            'name' => $params['name'],
//            'industry_id' => $params['industry_id'],
//            'code' => $params['code'],
//            'employ_scope' => $params['employ_scope'],
//            'province' => $params['province'],
//            'city' => $params['city'],
//            'area' => $params['area'],
//            'address' => $params['address'],
//            'contact' => $params['contact'],
//            'mobile' => $params['mobile'],
//            'logo' => $params['logo'],
//            'email' => $params['email'],
//            'phone' => $params['phone'],
//            'found' => $params['found'],
//            'description' => $params['description'],
//            'honor' => $params['honor'],
//            'benefits' => $params['benefits'],
//        ];
        return $this->repository->saveCompanyProfile($id, $params);
    }
    /***************************************分隔线**************************************************/
    /**后台业务**/
}