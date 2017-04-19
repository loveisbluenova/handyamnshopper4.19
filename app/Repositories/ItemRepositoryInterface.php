<?php

namespace App\Repositories;

use App\Http\Requests\ItemRequest;
use App\Models\Item;

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 2016.08.13.
 * Time: 22:15
 */
interface ItemRepositoryInterface
{
    public function create(ItemRequest $request);

    public function all();

    public function update(Item $item, ItemRequest $request);

    public function delete(Item $item);
}