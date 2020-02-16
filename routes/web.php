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