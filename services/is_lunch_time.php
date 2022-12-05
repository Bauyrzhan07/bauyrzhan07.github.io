<?php 
    function is_lunch() {
        date_default_timezone_set('Asia/Almaty');
        $hour = date("H", time());
        $is_lunch_time = false;
        if ($hour >= 12 && $hour <= 14)
            $is_lunch_time = true;
        return $is_lunch_time;
    }
?>