<?php
/**
 * All .env variables. This way it can be cached for speed
 */
return [
    'DEVELOPMENT' => env('DEVELOPMENT'),
    'CACHE_DRIVER' => env('CACHE_DRIVER'),
    'APP_NAME' => env('APP_NAME'),
    'APP_ENV' => env('APP_ENV'),
    'APP_KEY' => env('APP_KEY'),
    'APP_DEBUG' => env('APP_DEBUG'),
    'APP_URL' => env('APP_URL'),
    'CMS_API_URL' => env('CMS_API_URL'),
    'CMS_API_CACHE' => env('CMS_API_CACHE'),
    'AUTH_API_URL' => env('AUTH_API_URL'),
    'AUTH_API_CACHE' => env('AUTH_API_CACHE'),
    'AUTH_REGISTER_LOGIN' => env('AUTH_REGISTER_LOGIN'),
    'OLMOFORMS_TOKEN' => env('OLMOFORMS_TOKEN'),
    'HOOKS_ALLOWED_DOMAINS' => env('HOOKS_ALLOWED_DOMAINS'),
    'HOOKS_ALLOWED_IPS' => env('HOOKS_ALLOWED_IPS'),
    'HOOKS_ALLOWED_PARAM' => env('HOOKS_ALLOWED_PARAM'),
    'RESPONSE_ERRORS_REDIRECT' => env('RESPONSE_ERRORS_REDIRECT'),
    'IMG_COMPRESSION_QUALITY' => env('IMG_COMPRESSION_QUALITY'),
    'IMG_COMPRESSION_QUALITY_WEBP' => env('IMG_COMPRESSION_QUALITY_WEBP'),
    'IMG_PRETTY_URLS' => env('IMG_PRETTY_URLS'),
    'CI_VISIT_MODE' => env('CI_VISIT_MODE'),
    'CI_CLEAR_CACHE' => env('CI_CLEAR_CACHE'),
];
