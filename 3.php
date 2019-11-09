<?php
    function thirdHighest($array)
    {
        if(is_array($array)){
            if(count($array)<3){
                return "Minimal array length is 3!";
            }else{
                return $array[3];
            }
        }else{
            return "Parameter should be an array!";
        }
    }

    echo thirdHighest([1,2,3,4,5,6]);
?>