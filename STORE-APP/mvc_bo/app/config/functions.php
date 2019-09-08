<?php

function to_app($script_path)
{
    // add the leading '/' if not present
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_MVC . '/app' . $script_path;
}

function root($script_path)
{
    // add the leading '/' if not present
    if ($script_path[0] != '/') {
        $script_path = '/' . $script_path;
    }
    return WWW_MVC . $script_path;
}

function to_src($script_path)
{
    // add the leading '/' if not present
    if ($script_path[0] != '/') {
        $script_path = '/' . $script_path;
    }
    return WWW_PUBLIC . '/src' . $script_path;
    // /store/STORE-APP/mvc_bo2/public/src...
}

function redirect_to($location)
{
    header("Location: " . $location);
    exit;
}