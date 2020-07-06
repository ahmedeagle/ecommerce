<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;

class CollectTut extends Controller
{
   public function  index(){

      /* $numbers =  [1,2,3,3];
       $col =   collect($numbers);
             return $col -> avg();
      */

/*      $names = collect(['name','age']);
     return  $res =  $names -> combine(['ahmed','28']);*/

    /*$ages= collect([2,3,5,6,7,9]);
    return      $ages -> count();*/

      /* $ages= collect([2,3,3,6,6,9]);
          return    $ages -> countBy();*/

       $ages= collect([2,5,5,6,7,9]);
       return      $ages -> duplicates();

       //each
       //fillter
       //search
       //transform

   }


   public function complex(){

         $categories =  MainCategory::get();

           //remove

       $categories -> each(function($category){
           if($category -> active == 0){
               unset($category  -> translation_lang);
               unset($category  -> translation_of);
           }

           $category -> name ='ahmed';
           return $category;
       });


       return $categories;

   }


   public function  complexFilter(){

       $categories =  MainCategory::get();

       $categories = collect($categories);

       $resultOfFilter = $categories -> filter(function ($value,$key){

            return $value['translation_lang'] == 'ar';
       });


       return array_values($resultOfFilter -> all());

   }


   public function complextransform(){


       $categories =  MainCategory::get();

       $categories = collect($categories);

       return $resultOfFilter = $categories -> transform(function ($value,$key){
               $data = [];
               $data['name'] = $value['name'];
               $data['age']  = 30;
               return $data;

       });



   }
}
