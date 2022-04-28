<?php

if(isset($_POST['calculate'])){
    $units = $_POST['units'];
    $amount = 0;
    if(!empty($units)){
        $result = calculate_bill($units);

        // $amount =$units - $result;
      
    }
    print 'Total amount is: '. $result;
}

function calculate_bill($units){
    $first_unit = 3.50;
    $second_unit = 4.00;
    $third_unit = 5.20;
    $fourth_unit = 6.50;
    
    $bill = 0;
    if($units <= 50 ){
        $bill = $units * $first_unit;
    }
    else if($units > 50 && $units <= 150){
        $x= 50 * $first_unit;
        $runit = $units-50;
        $bill= $x+($runit*$second_unit);
    }
    else if($units >150 && $units <= 250){
        $x= (50 * $first_unit) + (100 * $second_unit);
        $runit = $units-150;
        $bill = $x+($runit*$third_unit);
     }
    else{
        $x = (50 * $first_unit) + (100 * $second_unit) + (100 * $third_unit);
        $runit = $units-250;
        $bill = $x+($runit*$fourth_unit);
        }
        
    return number_format($bill, 2,'.', ',');
}





?>


