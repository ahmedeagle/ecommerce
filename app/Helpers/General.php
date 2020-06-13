<?php

use Illuminate\Support\Facades\Config;

function get_languages(){

    \App\Models\Language::active() -> Selection() -> get();
}

function get_default_lang(){
  return   Config::get('app.locale');
}
