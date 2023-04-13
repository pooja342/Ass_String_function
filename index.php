<?php 
    // Write a PHP script to check whether a string contains a specific string
    
     $str ="I am working with php";
     $test="pooja";
     $data=stripos("I am working with php","$test");
        if($data == Null)
        {
        echo "No its not contains any specific string";
        }
        else
        {
        echo "yeah !! its contains a specific string";
        }


    //  Write a PHP script to extract the user name from the following email ID.
     
        $string = "rayy@example.com";
        $explode = explode("@",$string);
        echo "<br>";
        print_r($explode[0]);


    // Write a PHP script to find the first character that is different between two strings.

        $string1 = 'football';
        $string2 = 'footbull';
        $pos = strspn('football','footbull');
         
        echo "<br>";
        $s1=substr($string1,5,1);
        $s2=substr($string2,5,1);
        echo " string1 : $s1   and  string2 :$s2";
        // echo substr($string1,$pos);  
        

    // Write a PHP script to get the first word of a sentence

       $string ='The quick brown fox';
       $first = explode(" " ,$string);
       echo "<br>";
       print_r($first[0]);


    //  Write a PHP script to reverse string
     
     $string ='The quick brown fox';
     $array = explode(" " ,$string);
     $data = count($array);
     echo "<br>";
     $x = $data - 1;
     while($x >= 0) {
       echo "$array[$x]\t";
       $x--;
     }

     

     
?>