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

Route::get('/factory',function (){

    $shapeFactory=new \App\DesignPatterns\ShapeFactory();


    $rectangle=$shapeFactory->create('rectangle');

    $rectangle->draw();

});

function drawStuff(\App\DesignPatterns\Shape $shape){
    $shape->draw();
}

Route::get('/postcards',function (){
   $postCard=new \App\PostCardSendingService('ro',15,100);
   $postCard->sendPostCard('hello','ghiurcaalin@gmail.com');
});

Route::get('/facades',function(){
       \App\PostCard::sendPostCard('1122121','alin@alin.com');
});

Route::get('/macro',function (){
//    return ['res'=>\Illuminate\Routing\ResponseFactory::errorJson()];
    return Str::prefix('aaaaa','12112');

});

Route::get('/adapter',function(){
    $facebook=new \App\DesignPatterns\Facebook();
        $facebookAdapter=new \App\DesignPatterns\FacebookAdapter($facebook);

        echo $facebookAdapter->post('Hello master ! how are you ?');
});


Route::get('/posts','PostsController@index');