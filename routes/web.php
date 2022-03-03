<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function () {
    return view('home',[
        "tittle"=>"Home",
        "post"=>["news","berita2","berita3","berita4","berita5","berita6","berita7",'berita8']
        ]
    );
});


Route::get('profile', function () {
    return view('profile',[
        "tittle"=>"Profile"
        ]);
    });
