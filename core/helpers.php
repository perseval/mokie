<?php

if (!function_exists('AppName')) {
    function AppName()
    {
        return $_ENV['APP_NAME'];
    }
} 

if (!function_exists('AppUrl')) {
    function AppUrl()
    {
        return $_ENV['APP_URL'];
    }
} 

if (!function_exists('AssetsUrl')) {
    function AssetsUrl()
    {
        return AppUrl()."assets/";
    }
} 


if (!function_exists('Hello')) {
    function Hello()
    {
        return "Hello, word !";
    }
} 
