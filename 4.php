<?php
    function printWords($text)
    {
        $array = str_split($text, 1);
        $result = array();
        for($i = 0; $i < count($array); $i++){
            if($array[$i] == "A"){
                $result[$i] = $array[$i];
                unset($array[$i]);
            }elseif($array[$i] == "I"){
                $result[$i] = $array[$i];
                unset($array[$i]);
            }elseif($array[$i] == "U"){
                $result[$i] = $array[$i];
                unset($array[$i]);
            }elseif($array[$i] == "E"){
                $result[$i] = $array[$i];
                unset($array[$i]);
            }elseif($array[$i] == "O"){
                $result[$i] = $array[$i];
                unset($array[$i]);
            }
        }
        $array = array_values($array);
        $result = array_merge($result, $array);

        foreach($result as $row){
            echo "<span>".$row."</span>"."<br>";
        }
    } 
    printWords("ARKADEMY");
?>