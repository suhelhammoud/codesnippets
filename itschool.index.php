<?php

    //Modified by Rabee Shaheen & Suhel Hammoud , 16/05/2013
  
	//echo "REMOTE_ADDR ".$_SERVER['REMOTE_ADDR'];
    //echo "QUERY_STRING ".$_SERVER['QUERY_STRING'];
    //echo "HTTP_HOST ".$_SERVER["HTTP_HOST"];


    function getsource(){
    	return substr($_SERVER['REMOTE_ADDR'],0,8);	
    }

    $qs =$_SERVER['QUERY_STRING'];
    
    if (getsource()=="178.253.")
	    header("Location: http://192.168.0.111".$qs );
    else
	    header("Location: http://178.253.94.46".$qs);


?>
