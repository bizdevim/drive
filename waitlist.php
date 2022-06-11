<?php
if(isset($_GET['email']))
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.timesoftware.pro/waitlist/insert/?email=".$_GET['email']."&project=Bizdevim.com");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
	//echo $output;
	try {
    $arr=json_decode($output);
	} catch (Exception $e) {
		return False;
	}

	//var_dump($arr);
    if($arr->success=="1")
        echo $arr->register_num;
    else if ($arr->message=="1")
        echo "-1";
    else
        echo "0";
}
?>
