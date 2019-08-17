<?php


namespace CRUDPrj;


class Redirect
{
    public static function RedirectTo($location)
    {
        header('Location: '.$location);
        return true;
    }

}