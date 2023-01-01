<?php


$ac = "Van";
switch ($ac) {
    
    case 'car':
        echo "Car case is executing";
        break;
        
    case 'bus':
        echo "Bus case is executing";
        break;
        
    case 'Van':
        echo "Van case is executing";
        break;

    case 'Bike':
        echo "Bike case is executing";
        break;

    default:
        echo "No case met";
        break;
}

/*
if ($ac == "bike"){

}elseif ($ac == "Van"){

}else{
    echo "No case met";
}
*/