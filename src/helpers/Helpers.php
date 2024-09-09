<?php

namespace ProyectoDbPhp\Helpers;

class Helpers
{
    public static function url($url)
    {
        return BASE_URL . $url;
    }

    public static function redirect($url)
    {
        header('Location: ' . self::url($url));
    }

    public static function asset($asset)
    {
        return BASE_URL . 'assets/' . $asset;
    }

    public static function path($path)
    {
        return BASE_URL . 'public/' . $path;
    }

    public static function debugDetails($data)
    {
        dd($data);
        die;
    }
}