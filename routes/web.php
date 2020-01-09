<?php

/* use App\Events\OrderStatusUpdated; */

/* class Order{ */
/*     public $id; */

/*     public function __construct($id) */
/*     { */
/*         $this->id = $id; */
/*     } */
/* } */

/* Route::get('/', function () { */
/*     OrderStatusUpdated::dispatch(new Order(4)); */
/*     return view('welcome'); */
/* }); */

Route::get('/',                                     'IndexController');

Route::get('/tasks', function () {
    return Task::latest()->pluck('body');
});

Route::post('/tasks', function () {
    
    Task::forceCreate(request(['body']));
});
