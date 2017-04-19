<?php

namespace App\Repositories;

use App\Http\Requests\BidRequest;
use App\Models\Bid;

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 2016.08.13.
 * Time: 22:15
 */
interface BidRepositoryInterface
{
    public function create(BidRequest $request);

    public function all();

    public function update(Bid $bid, BidRequest $request);

    public function delete(Bid $bid);
}