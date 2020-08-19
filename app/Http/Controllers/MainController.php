<?php

namespace App\Http\Controllers;
use App\Sale;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function getAllDay(){
        $day_array = array();
        $time = Sale::orderBy('created_date', 'DESC')->pluck('created_date');
        $time = json_decode($time);

        if ( !empty ($time) ){
            foreach ($time as $unformatted_time){
                $date = new \DateTime($unformatted_time);
                $month_no = $date->format( 'd' );
                $month_name = $date->format( 'D' );
                $day_array[ $month_no ] = $month_name;
            }
        }
        // $day_array = array_slice($day_array,0,7);
        return $day_array;
        // return $time;
        
    }

    function getDailyPostCount($day){
        // $day = 10;
        $post_count = Sale::whereDay('created_date', $day)->get()->count();
        return $post_count;
    }

    function getDailySaleData(){

        $daily_sale_count_array = array();
        $day_array = $this->getAllDay();
        $day_name_array = array();
        if ( !empty ($day_array)){
            foreach($day_array as $month_no => $month_name ){
                $daily_sale_count = $this->getDailyPostCount($month_no);
                array_push($daily_sale_count_array, $daily_sale_count);
                array_push($day_name_array, $month_name);
            }
        }
        $day_array = $this->getAllDay();
        $day_name_array = array_slice($day_name_array,0,7);
        $daily_sale_count_array = array_slice($daily_sale_count_array,0,7);
        $sum_sale_week = array_sum($daily_sale_count_array);
        $day_name_array = array_reverse($day_name_array);
        $daily_sale_count_array = array_reverse($daily_sale_count_array);
        $day_name_array = json_encode ($day_name_array);
        // $day_name_array = str_replace('"','\'', (string) $day_name_array);
        // $day_name_array = mb_convert_encoding ($day_name_array,"UTF-8");
        $daily_sale_count_array = json_encode ($daily_sale_count_array,TRUE); 
        $daily_sale_data_array = array(
            'sum_array' => $sum_sale_week,
            'sale_day' => $day_name_array,
            'sale_count_data' => $daily_sale_count_array,
        );

        // $day_name_array = json_encode ($day_name_array,TRUE);
        // $daily_sale_count_array = json_encode ($daily_sale_count_array,TRUE);
        


        // return $daily_sale_data_array;
        return view('index',[
            'sum_array' => $sum_sale_week,
            'sale_count_data' => $daily_sale_count_array,
            'days' => $day_name_array,
            //  print($day_name_array)
        ]);

        // return view('index',  compact('daily_sale_data_array'));

    }
}
