<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::rule('index','index/index/index');

Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');

Route::get('api/:version/theme','api/:version.Theme/getSimpleList');

Route::get('api/:version/theme/:id','api/:version.Theme/getComplexOne');


Route::group('api/:version/product',function (){
    Route::get('/by_category','api/:version.product/getAllInCategory');

    Route::get('/:id','api/:version.product/getOne',[],['id'=>'\d+']);

    Route::get('/recent','api/:version.Product/getRecent');
});

Route::get('api/:version/category/all','api/:version.Category/getAllCategory');

Route::post('api/:version/token/user','api/:version.Token/getTOken');

Route::post('api/:version/address','api/:version.Address/createOrUpdateAddress');

Route::post('api/:version/order','api/:version.Order/placeOrder');



