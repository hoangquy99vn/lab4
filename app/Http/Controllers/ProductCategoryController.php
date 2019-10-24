<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function create()
    {
        return view('productcategory.create');
    }
    public function store(Request $request)
    {
        $name = $request->post('name');
        $dislay_name = $request->post('dislay_name');
        $product_category = new ProductCategory;
        $product_category->$product_category_name = $name;
        $product_category->$product_category_dislay_name = $dislay_name;
        $product_category->save;
    }
}
