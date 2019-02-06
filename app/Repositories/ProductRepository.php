<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getPaginatedList()
    {
        return Product::paginate();
    }
}