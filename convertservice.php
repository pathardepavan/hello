<?php
//var_dump($_REQUEST);
require('logconfig.php');
$from=$_GET['from'];
$to=$_GET['to'];
$amount=$_GET['amount'];
$db = new SQLite3('hello.db');
$res=array();
$rate=0;
$log->addInfo("User Requested: ".$from."-->".$to);

if($from!='USD')
{
    $fromresult = $db->query("SELECT * FROM currencies where ccode='".$from."'");
    $fromcurrency = $fromresult->fetchArray();
    $fromrate = $fromcurrency['crate'];
    //echo $fromrate."<br />";
    if($to!='USD')
    {
        $toresult = $db->query("SELECT * FROM currencies where ccode='" . $to . "'");
        $tocurrency=$toresult->fetchArray();
        $torate=$tocurrency['crate'];
        $oneusdrate = 1 / $torate;
        $res['result']=$oneusdrate*$fromrate*$amount;
        //echo $oneusdrate."<br />";
    }else{
        $oneusdrate = 1 / $fromrate;
        $res['result']=$amount/$oneusdrate;
        //echo $oneusdrate."<br />";
    }

    $res['rate']=$oneusdrate;


}

else{
    if($to=='USD')
    {
        $res['result']=$amount;

    }
    else {
        $result = $db->query("SELECT * FROM currencies where ccode='" . $to . "'");
        $currency = $result->fetchArray();
        $ratex=$currency['crate'];
        $rate = 1 / $ratex;

        $res['result']=$rate * $amount;
        $res['rate']=$rate;
    }


}



echo json_encode($res);









