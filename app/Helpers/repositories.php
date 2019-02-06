<?php

/**
 * @return \App\Repositories\UserRepository|mixed
 */
function user_repository()
{
    return App::make(\App\Repositories\UserRepository::class);
}

/**
 * @return \App\Repositories\ProductRepository|mixed
 */
function product_repository()
{
    return App::make(\App\Repositories\ProductRepository::class);
}
