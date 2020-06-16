<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategoryRequest;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MainCategoriesController extends Controller
{
    public function index()
    {
        $default_lang = get_default_lang();
        $categories = MainCategory::where('translation_lang', $default_lang)
            ->selection()
            ->get();

        return view('admin.maincategories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.maincategories.create');
    }


    public function store(MainCategoryRequest $request)
    {

        //return $request;

        $main_categories = collect($request->category);

        $filter = $main_categories->filter(function ($value, $key) {
            return $value['abbr'] == get_default_lang();
        });

         $default_category = array_values($filter->all()) [0];


        $filePath = "";
        if ($request->has('photo')) {

            $filePath = uploadImage('maincategories', $request->photo);
        }

        $default_category_id = MainCategory::insertGetId([
            'translation_lang' => $default_category['abbr'],
            'translation_of' => 0,
            'name' => $default_category['name'],
            'slug' => $default_category['name'],
            'photo' => $filePath
        ]);

          $categories = $main_categories->filter(function ($value, $key) {
            return $value['abbr'] != get_default_lang();
        });


          if(isset($categories) && $categories -> count())
          {

              $categories_arr=[];
              foreach ($categories as $category){
                  $categories_arr[] = [
                      'translation_lang' => $category['abbr'] ,
                      'translation_of' => $default_category_id,
                      'name' => $category['name'] ,
                      'slug' => $category['name'] ,
                      'photo' => $filePath
                  ];
              }

              MainCategory::insert($categories_arr);

          }



    }
}
