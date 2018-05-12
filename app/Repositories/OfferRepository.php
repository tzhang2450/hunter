<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/4/15
 * Time: 上午1:22
 */

namespace App\Repositories;


use App\Models\Offer;

class OfferRepository implements Repository
{

    private $offer;

    public function __construct(Offer $offer)
    {
        $this->offer = $offer;
    }
}