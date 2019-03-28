<?php

class PageError 
{
    public static function show($errorType, $url,$error = 404)
    {
        switch ($error) 
    	{
            case 500:
                header("HTTP/1.0 500 Internal Server Error");
            	break;
            case 400:
            	header("HTTP/1.0 400 Bad Request");
            default:
                //header("HTTP/1.1 301 Moved Permanently"); 
                //header("Location: /");
                echo $errorType;
                break;
        }
  //  	    exit(var_dump($errorType, $url));

    	   
    }
}

?>