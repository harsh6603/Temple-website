<?php
    //Abbreviation of number
    function abbrNum($number) 
    {
        if($number>100000 && $number<1000000)
            $decPlaces=0;
        else
            $decPlaces=1;
        // $orig = $number;
        // $dec = $decPlaces;
        // 2 decimal places => 100, 3 => 1000, etc
        $decPlaces =pow(10, $decPlaces);

        // Enumerate number abbreviations
        $abbrev =array("K", "M", "B", "T");

        // Go through the array backwards, so we do the largest first
        for ($i=count($abbrev)-1; $i >= 0; $i--){

            // Convert array index to "1000", "1000000", etc
            $size = pow(10, ($i + 1) * 3);

            // If the number is bigger or equal do the abbreviation
            if ($size <= $number) {
                // Here, we multiply by decPlaces, round, and then divide by decPlaces.
                // This gives us nice rounding to a particular decimal place.
                $number = round($number * $decPlaces / $size) / $decPlaces;

                // Handle special case where we round up to the next abbreviation
                if (($number == 1000) && ($i < count($abbrev) - 1)) {
                    $number = 1;
                    $i++;
                }
                
                // console.log(number);
                // Add the letter for the abbreviation
                $number .= $abbrev[$i];

                // We are done... stop
                break;
            }
        }

        // echo 'abbrNum(' . $orig . ', ' .$dec . ') = ' . $number."<br>";
        return $number;
    }
?>