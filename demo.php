<?php
/**
 * Created by PhpStorm.
 * User: 86176
 * Date: 2019/6/11
 * Time: 11:45
 */

include "./vendor/autoload.php";
use Tool\Encrypt\RsaEncrypt;
use Tool\RequsetHttp\FactionHttp;
FactionHttp::func();
echo "\n";
RsaEncrypt::Hello();