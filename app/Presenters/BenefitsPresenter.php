<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午12:31
 */

namespace App\Presenters;


use App\Models\Benefits;
use Illuminate\Database\Eloquent\Collection;

class BenefitsPresenter implements Presenter
{

    private $benefits;

    public function __construct(Benefits $benefits)
    {
        $this->benefits = $benefits;
    }

    public static function format(Benefits $benefits)
    {
        return $benefits->name;
    }

    public static function formantAll(Collection $benefitsList)
    {
        $data = '';
        foreach ($benefitsList as $benefits) {
            $data .= $benefits->name.',';
        }
        return rtrim($data, ',');
    }
}