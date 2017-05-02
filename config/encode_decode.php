<?php

function encode($data_for_encode)
{
 $arg=  md5(base64_encode(json_encode($data_for_encode)));
 return $arg;
}

function encode_without_md5($data_for_encode)
{
   $dec= base64_encode(json_encode($data_for_encode));
return $dec; 
}
