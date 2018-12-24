<?php 

    //  switch : الجمل الشرطية 
    $days = date('D');
    switch($days){
        case "Fri":
            echo "Nice weekend";
        break;
        case "Sun":
            echo "Nice day at work";
        break;
        default:
            echo "Have a nice day";
    }
?>