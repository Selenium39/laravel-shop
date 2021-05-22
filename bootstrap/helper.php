<?php
//自定义辅助函数
//composer.json=>autoload=>files
//composer dumpautoload
//php artisan tinker

use Illuminate\Support\Facades\Route;

function test_helper(): string
{
    return "OK";
}

//将路由名称转为css类名称
function route_class(): array|string|null
{
    return str_replace('.','-',Route::currentRouteName());
}
