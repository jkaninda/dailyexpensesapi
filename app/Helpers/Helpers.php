<?php
namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Str;

class Helpers
{
    public static function checkKey($key)
    {
        if ($key==env('API_KEY', null)) {
            return true;
        } else {
            return false;
        }
    }

    public static function randString($length = 25)
    {
        $str='';
        $cha = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        for ($x=0; $x<$length; $x++) {
            $str .= $cha[mt_rand(0, strlen($cha))];
        }
        return $str;
    }
}
