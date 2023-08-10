<?php

return [
    ''                          => [
        'controller'            => 'main',
        'action'                => 'index',
    ],

    //Специальные роуты

    'setproduct'                => [
        'controller'            => 'main',
        'action'                => 'SetProduct',
    ],

    'getproduct'                => [
        'controller'            => 'main',
        'action'                => 'GetProduct',
    ],

    'getfakedeletedproduct'     => [
        'controller'            => 'main',
        'action'                => 'GetFakeDeletedProduct',
    ],

    'getnotfakedeletedproduct'  => [
        'controller'            => 'main',
        'action'                => 'GetNotFakeDeletedProduct',
    ],

    'updateproduct'             => [
        'controller'            => 'main',
        'action'                => 'UpdateProduct',
    ],

    'deleteproduct'             => [
        'controller'            => 'main',
        'action'                => 'DeleteProduct',
    ],

    'fakedeleteproduct'         => [
        'controller'            => 'main',
        'action'                => 'FakeDeleteProduct',
    ],

    'searchproduct'             => [
        'controller'            => 'main',
        'action'                => 'SearchProduct',
    ],

    'sort'                      => [
        'controller'            => 'main',
        'action'                => 'SortProduct',
    ],

];
