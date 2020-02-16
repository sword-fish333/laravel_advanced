<?php


Route::get('/test',function(){

    return \App\User::with('profiles')->get();
});

Route::get('/test2','PayOrderController@store');

Route::get('/te-rog',function(){
    return view('te_rog');
});

Route::get('channel','ChannelController@index');
Route::get('post/create','PostController@index');

Route::get('/singleton',function(){
   $singleton=\App\DesignPatterns\Singleton::getInstance();
    $singleton2=\App\DesignPatterns\Singleton::getInstance();
    echo '<pre>';
   var_dump( $singleton);
    var_dump( $singleton2);

});