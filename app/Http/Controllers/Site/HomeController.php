<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Services\ProductService;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Helpers\simple_html_dom;


final class HomeController extends SiteController
{
    public function index()
    {
        

        $html = file_get_html("https://www.truyen.co/danh-sach/truyen-moi");

        $items = $html->find(".list-stores .item");
        

        foreach($items as $item){
            $imgs= $item->find(".feature img");
            foreach($imgs as $img){
                $anh[] = $img->src; 
            }

            $dataCraw[] = [
                'img' => $anh[1]
            ];
        }
        dd($dataCraw);
    
        // foreach($dataCraw as $item) {
        //     Post::query()->create([
        //         'title' => $item['title']
        //     ]);
        // }

        
        
        if (View::exists($this->layout . '.home.index')) {
            return view($this->layout . '.home.index', $this->render($data));
        } else {
            return redirect(admin_url())->withErrors('Please login admin select template');
        }
    }

}