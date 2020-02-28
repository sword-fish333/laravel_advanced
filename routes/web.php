<?php
use App\ValueObjects\Age;

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
Route::get('/test1',function(){
    echo '<pre>';
strategy();
});



function strategy(){
    $rules=[
      [
          'name'=>'email',
          'value'=>'not valid',
          'rules'=>'email|required'
      ],
        [
            'name'=>'price',
            'value'=>1111,
            'rules'=>'numeric|required'
        ],

        [
            'name'=>'quantity',
            'value'=>'',
            'rules'=>'numeric|required'
        ]
    ];
   $errors= \App\DesignPatterns\Strategy\Validator::validate($rules);
    print_r($errors);
}


Route::get('/facade',function(){

    $id=$_GET['id'];

    $pageFacade=new \App\DesignPatterns\Facade\PageFacade();
    echo '<pre>';
    $pageFacade->createAndServe($id,'create and serve');
});


Route::get('/decorator',function(){

$fileLogger=new \App\DesignPatterns\DecoratorPattern\FileLogger();
$emailLogger=new \App\DesignPatterns\DecoratorPattern\EmailLogger($fileLogger);
$faxLogger=new \App\DesignPatterns\DecoratorPattern\FaxLogger($emailLogger);
$faxLogger->log('final fax log');
});


Route::get('/customers','CustomerController@index');
Route::get('/customers/{id}','CustomerController@show');
Route::get('/customers/{id}/update','CustomerController@update');
Route::get('/customers/{id}/destroy','CustomerController@destroy');
Route::get('/error_handle',function (){
    return view('exception_handling');
});

Route::get('/employees/{id}','EmployeeController@show');
Route::get('/employees','EmployeeController@index');
Route::get('/value-object',function (){
    $age=new \App\ValueObjects\Age(100);
  $age2=  $age->increment();
    echo  $age->getAge();
    echo '<br>';
    $obj=new \App\ValueObjects\ValueObject();
    $obj->register('Alin',$age);
});
