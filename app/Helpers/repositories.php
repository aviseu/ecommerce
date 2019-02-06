<?php

/**
 * @return \App\Repositories\UserRepository|mixed
 */
function user_repository()
{
    return App::make(\App\Repositories\UserRepository::class);
}
