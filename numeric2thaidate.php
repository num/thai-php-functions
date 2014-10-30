<?php

$d = '29012553';

// echo preg_replace('|^(\d{4})(\d{2})(\d{2})|','$3/$2/$1',$d); // ผลคือ 29/01/2553

$thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");  
$thai_month_arr=array(  
    "0"=>"",  
    "1"=>"มกราคม",  
    "2"=>"กุมภาพันธ์",  
    "3"=>"มีนาคม",  
    "4"=>"เมษายน",  
    "5"=>"พฤษภาคม",  
    "6"=>"มิถุนายน",   
    "7"=>"กรกฎาคม",  
    "8"=>"สิงหาคม",  
    "9"=>"กันยายน",  
    "10"=>"ตุลาคม",  
    "11"=>"พฤศจิกายน",  
    "12"=>"ธันวาคม"      
);

function thai_date($time){  
    global $thai_day_arr,$thai_month_arr;  
    $thai_date_return="วัน".$thai_day_arr[date("w",$time)];  
    $thai_date_return.= "ที่ ".date("j",$time);  
    $thai_date_return.=" เดือน".$thai_month_arr[date("n",$time)];  
    $thai_date_return.= " พ.ศ.".(date("Y",$time)+543);  
    return $thai_date_return;  
}  

$dint=substr($d,0,4).(string)(int)(substr($d,4,4)-543);

echo $d.", ".$dint." => ".thai_date($d);

?>
