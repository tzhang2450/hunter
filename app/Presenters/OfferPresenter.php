<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/13
 * Time: 下午8:56
 */

namespace App\Presenters;


use App\Models\Offer;

class OfferPresenter implements Presenter
{

    private $offer;

    public function __construct(Offer $offer)
    {
        $this->offer = $offer;
    }
}