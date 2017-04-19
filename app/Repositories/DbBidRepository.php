<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 2016.08.13.
 * Time: 22:14
 */

namespace App\Repositories;

use App\Http\Requests\BidRequest;
use App\Models\Bid;

class DbBidRepository implements BidRepositoryInterface
{

    public function create(BidRequest $request)
    {
        Bid::create($request->all());
    }


    public function all()
    {
        return Bid::orderBy('id', 'DESC')->paginate(10);
    }

    public function update(Bid $bid, BidRequest $request)
    {
        $bid->update($request->all());

        return $bid;
    }

    public function delete(Bid $bid)
    {
        $bid->delete();
    }
}