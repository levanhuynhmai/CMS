<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Services\ProductService;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

final class HomeController extends SiteController
{
    public function index(Request $request, $slugCategory = '')
    {
        // lay danh muc
        $productCategorys = ProductCategory::all();

        
        $data = [
            'productCategorys' => $productCategorys,
        ];
        
        if (View::exists($this->layout . '.home.index')) {
            return view($this->layout . '.home.index', $this->render($data));
        } else {
            return redirect(admin_url())->withErrors('Please login admin select template');
        }
    }

}