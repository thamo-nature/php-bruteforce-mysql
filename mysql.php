<?php

$servername = "localhost";
$username = "root";


$file = "/root/try.txt";
$contents = file_get_contents($file);
$lines = explode("\n", $contents); 


     $inc = 0;
     
if(! $conn )
{
            foreach($lines as $word) {
#		    echo $word,"\n";
		    
			    $inc = $inc + 1; 
     $conn = mysqli_connect($servername, $username, $word);
			    echo "$inc-->$servername,$username,$word \n";
			    if($conn){
				    echo "The password is $word \n";
				    die();	    
				    
			    }
			    
	    }
}


?> 
