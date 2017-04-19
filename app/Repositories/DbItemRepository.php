<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 2016.08.13.
 * Time: 22:14
 */

namespace App\Repositories;

use App\Http\Requests\ItemRequest;
use App\Models\Item;

class DbItemRepository implements ItemRepositoryInterface
{

    public function create(ItemRequest $request)
    {
        Item::create($request->all());
    }


    public function all()
    {
        return Item::orderBy('id', 'DESC')->paginate(10);
    }

    public function update(Item $item, ItemRequest $request)
    {
        $item->update($request->all());

        return $item;
    }

    public function delete(Item $item)
    {
        $item->delete();
    }
}