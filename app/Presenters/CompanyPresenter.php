<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:47
 */

namespace App\Presenters;


use App\Models\Benefits;
use App\Models\Company;
use App\Repositories\BenefitsRepository;
use Illuminate\Database\Eloquent\Collection;

class CompanyPresenter implements Presenter
{

    private $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function format(Company $company, $columns)
    {
        if (!$company) return [];

        $data = [];
        foreach ($columns as $value) {
            $data[$value] = $company->$value;
        }
        if (in_array('code', $columns, true)) {
            $data['type'] = EnterpriseTypePresenter::getEnterpriseType($data['code']);
            unset($data['code']);
        }
        if (in_array('province', $columns, true)) {
            $data['province'] = AreaPresenter::getArea($data['province']);
        }
        if (in_array('city', $columns, true)) {
            $data['city'] = AreaPresenter::getArea($data['city']);
        }
        if (in_array('area', $columns, true)) {
            $data['area'] = AreaPresenter::getArea($data['area']);
        }
        if (in_array('industry_id', $columns, true)) {
            $data['industry'] = IndustryPresenter::getIndustry($data['industry_id']);
            unset($data['industry_id']);
        }
        if (in_array('employ_scope', $columns, true)) {
            $data['employ_scope'] = EmployScopePresenter::getEmployScope($data['employ_scope']);
        }
        if (in_array('benefits', $columns, true)) {
            $repository = new BenefitsRepository(new Benefits());
            $data['benefits'] = BenefitsPresenter::formantAll($repository->getBenefits($data['benefits']));
        }

        return $data;
    }

    public function formatAll(Collection $companies, $columns)
    {
        $data = [];
        foreach ($companies as $company) {
            $data[] = self::format($company, $columns);
        }

        return $data;
    }
}