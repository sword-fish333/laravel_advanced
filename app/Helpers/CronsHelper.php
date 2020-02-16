<?php

class CronHelper
{
    public static function checkAvailability($order_type_id, $timezone)
    {

        $order_types_pivot_id = \App\OrderTypePosOrderTypeSite::where('order_type_pos_id', $order_type_id)->pluck('id')->toArray();

        date_default_timezone_set('Europe/London');

        $crons = \App\Cron::whereHas('orderTypeSchedules', function ($q) use ($order_types_pivot_id) {
            $q->whereIn('order_types_schedules.order_type_pivot_id', $order_types_pivot_id);
        })->get();


        $current_date = date("Y-m-d H:i:00");
        $current_date_of_week = date("N");
        $current_hour = date("H:i:00");
        $current_month = date("m");
        $current_year = date("Y");
        $current_day_of_month = date("d");

        $current_date = "2020-12-25 13:00";
        $current_date_of_week = "2";
        $current_hour = "13:00:00";
        $current_month = "12";
        $current_year = "2020";
        $current_day_of_month = "25";

        if ($current_date_of_week == 0) {
            $current_date_of_week = 7;
        }
        $ok_open = 1;

        if(count($crons->where('is_open', 1))===0){
            return ['111'=>false];
        }
        foreach ($crons->where('is_open', 1)->where('active', 1) as $cron) {

//            if ($cron->Profile) {
//                if ($cron->Profile->active == 0) {
//                    echo "here stop";
//                    continue;
//                }
//            } else {
//                echo "here stop4";
//                continue;
//            }


//            if ($cron->active == 0) {
//                echo "here stop2";
//                continue;
//            }


            $conditions = json_decode($cron->conditions, true);


            foreach ($conditions as $condition_id) {
                $condition = \App\Timetable::find($condition_id);

                if ($condition->type == "date") {


                    if (!self::check_in_range($condition->start_date, $condition->end_date, $current_date)) {

                        $ok_open = 0;

                        break;
                    }


//                    echo "condition_date";
                } else if ($condition->type == "year") {

                    if (intval($current_year) > intval($condition->end_date) || intval($current_year) < intval($condition->start_date)) {
                        $ok_open = 0;
                        break;
                    }
//                    echo "condition_year";
                } else if ($condition->type == "month") {


                    if (intval($current_month) > intval($condition->end_date) || intval($current_month) >= intval($condition->start_date)) {
                        $ok_open = 0;
                        break;
                    }
//                    echo "condition_month";
                } else if ($condition->type == "day_of_week") {

                    //
                    //
//                    echo $current_date_of_week;

                    //return dd(intval($current_date_of_week) > intval($condition->end_date) || intval($current_date_of_week) < intval($condition->start_date));
                    if (intval($current_date_of_week) > intval($condition->end_date) || intval($current_date_of_week) < intval($condition->start_date)) {


                        $ok_open = 0;
                        break;
                    }
//                    echo "condition_day_of_week";
                } else if ($condition->type == "day_of_month") {

                    if (intval($current_day_of_month) > intval($condition->end_date) || intval($current_day_of_month) < intval($condition->start_date)) {
                        $ok_open = 0;
                        break;
                    }
//                    echo "condition_day_of_month";
                } else if ($condition->type == "hour") {
                    $currentTime = new \DateTime(date("Y-m-d") . " " . $current_hour, new \DateTimeZone('Europe/Bucharest'));
                    $startTime = new \DateTime(date("Y-m-d") . " " . $condition->start_date, new \DateTimeZone('Europe/Bucharest'));

                    $endTime = new \DateTime(date("Y-m-d") . " " . $condition->end_date, new \DateTimeZone('Europe/Bucharest'));
                    if (!self::check_in_range($startTime->format("Y-m-d H:i:s"), $endTime->format("Y-m-d H:i:s"), $currentTime->format("Y-m-d H:i:s"))) {
                        $ok_open = 0;
                        break;
                    }
//                    echo "condition_hour";
                }
            }

        }
        if($ok_open===0){
            return ['111'=>false];
        }

        $ok_close=0;

        foreach ($crons->where('is_open', '=', 0)->where('active', 1) as $cron) {


            $conditions = json_decode($cron->conditions, true);

            foreach ($conditions as $condition_id) {
                $condition = \App\Timetable::find($condition_id);
                if ($condition->type == "year") {

                    if (intval($current_year) <=intval($condition->end_date) && intval($current_year) >= intval($condition->start_date)) {
                        $ok_close=1;

                    }else{
                        $ok_close=0;

                        continue;
                    }

                }else
                if ($condition->type == "date") {


                    if (self::check_in_range($condition->start_date, $condition->end_date, $current_date)) {

                        $ok_close=1;

                    }else{
                        $ok_close=0;
                        continue;
                    }
                } else if ($condition->type == "month") {


                    if (intval($current_month) <= intval($condition->end_date) && intval($current_month) >= intval($condition->start_date)) {

                        $ok_close=1;

                    }else{
                        $ok_close=0;
                        continue;
                    }
                    echo "condition_month";
                } else if ($condition->type == "day_of_week") {


                    //
                    //


                    //return dd(intval($current_date_of_week) > intval($condition->end_date) || intval($current_date_of_week) < intval($condition->start_date));
                    if (intval($current_date_of_week) <= intval($condition->end_date) && intval($current_date_of_week) >= intval($condition->start_date)) {

                        $ok_close=1;

                    }else{
                        $ok_close=0;
                        continue;
                    }

                } else if ($condition->type == "day_of_month") {

                    if (intval($current_day_of_month) <= intval($condition->end_date) && intval($current_day_of_month) >= intval($condition->start_date)) {
                        $ok_close=1;

                    }else{
                        $ok_close=0;
                        continue;
                    }

                } else if ($condition->type == "hour") {
                    $currentTime = new \DateTime(date("Y-m-d") . " " . $current_hour, new \DateTimeZone('Europe/Bucharest'));
                    $startTime = new \DateTime(date("Y-m-d") . " " . $condition->start_date, new \DateTimeZone('Europe/Bucharest'));

                    $endTime = new \DateTime(date("Y-m-d") . " " . $condition->end_date, new \DateTimeZone('Europe/Bucharest'));
                    if (self::check_in_range($startTime->format("Y-m-d H:i:s"), $endTime->format("Y-m-d H:i:s"), $currentTime->format("Y-m-d H:i:s"))) {
                        $ok_close=1;
                    }else{
                        $ok_close=0;
                        continue;
                    }
                    echo "condition_hour";
                }
            }
        }

        if (  $ok_close=== 0 && $ok_open===1) {
//                self::callAlarm();
//                echo "<br>RING!!";
            return ['ddd' => true];
//            break;
        } else {
            return ['ddd' => false];

//                echo "NOT RING!!";
        }
    }


    static function check_in_range($start_date, $end_date, $date_from_user)
    {
        // Convert to timestamp
//        echo $start_date . "<br>";
//        echo $date_from_user . "<br>";
//        echo $end_date . "<br>";
        $start_ts = strtotime($start_date);
        $end_ts = strtotime($end_date);
        $user_ts = strtotime($date_from_user);
        // Check that user date is between start & end
        return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
    }

}
