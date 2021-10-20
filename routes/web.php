<?php


Route::get("/home",function(){

     return view("index");
});

Route::get("/form", function(){

      return view("form");
});

Route::get("/table", function(){

    return view("table");
});