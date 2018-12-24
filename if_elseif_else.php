<?php 
    //  if...elseif...else : الجمل الشرطية 
    $days = date('D');
    if($days == "Fri"){
        echo "Have a nice weekend";
    }elseif($days = "Sun"){
        echo "Have a nice sunday";
    }else{
        echo "nice day";
    }
?>