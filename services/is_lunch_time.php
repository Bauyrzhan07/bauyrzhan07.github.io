<?php 
    function is_lunch() {
        date_default_timezone_set('Asia/Almaty');
        $hour = date("H", time());
        $is_lunch_time = false;
        if ($hour >= 0 && $hour <= 24)
            $is_lunch_time = true;
        return $is_lunch_time;
    }
?>