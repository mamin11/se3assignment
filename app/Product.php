<?php

namespace App;

use App\ProductCategory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function getCategory() {
        return ProductCategory::where('id', $this->category_id)->first();
    }

}
