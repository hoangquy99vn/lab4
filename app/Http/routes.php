<?php 

Route::get('/insert', function(){
    App\Category::create(array('name' => 'Music'));
    return 'category added';
});