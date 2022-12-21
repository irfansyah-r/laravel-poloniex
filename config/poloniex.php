<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Poloniex authentication
    |--------------------------------------------------------------------------
    |
    | Authentication key and secret for poloniex API.
    |
    */

    'auth' => [
        'key' => env('POLONIEX_KEY', 'DJ0HAZM9-02H46M6G-197E1LL7-CAKER4UU'),
        'secret' => env('POLONIEX_SECRET', '3b21f4f16f6b900887cede35357f3bd05fb40f582fed481e5d77489e91c8d3ac323a520531879522d615b9a6304ddc03862855a5f2d13cc254f19ac8b385b887'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Api URLS
    |--------------------------------------------------------------------------
    |
    | Urls for Poloniex public and trading API
    |
    */

    'urls' => [
        'trading' => 'https://poloniex.com/tradingApi',
        'public' => 'https://poloniex.com/public',
    ],

];