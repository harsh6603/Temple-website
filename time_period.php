<?php
    function old($d)
    {
        $date1 = new DateTime($d);
        $date2 = new DateTime("now");
        $interval = $date1->diff($date2);
        if($interval->y)
            return $interval->y . " year ago";
        else if($interval->m)
            return $interval->m . " month ago";
        else
            return $interval->d . " day ago";            
    }
?>