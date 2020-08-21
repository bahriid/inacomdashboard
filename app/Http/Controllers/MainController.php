<?php

namespace App\Http\Controllers;
use App\Sale;
use App\SaleProduct;
use App\UserAddress;
use DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function getAllDayTransaction(){
        $transactionDayArray = array();
        $transactionTime = Sale::orderBy('created_date', 'DESC')->pluck('created_date');
        $transactionTime = json_decode($transactionTime);

        if ( !empty ($transactionTime) ){
            foreach ($transactionTime as $unformattedTime){
                $transactionDate = new \DateTime($unformattedTime);
                $transactionMonthNo = $transactionDate->format( 'd' );
                $transactionMonthName = $transactionDate->format( 'D' );
                $transactionDayArray[ $transactionMonthNo ] = $transactionMonthName;
            }
        }
        return $transactionDayArray;
        
    }

    function getDailyTransactionCount($day){
        // $day = 10;
        $transactionCount = Sale::whereDay('created_date', $day)->get()->count();
        return $transactionCount;
    }

    function getAllDayUser(){
        $userDayArray= array();
        $userTime = UserAddress::orderBy('created_date', 'DESC')->pluck('created_date');
        $userTime = json_decode($userTime);

        if ( !empty ($userTime) ){
            foreach ($userTime as $unformattedTime){
                $userDate = new \DateTime($unformattedTime);
                $userMonthNo = $userDate->format( 'd' );
                $userMonthName = $userDate->format( 'D' );
                $userDayArray[ $userMonthNo ] = $userMonthName;
            }
        }
        // $day_array = array_slice($day_array,0,7);
        return $userDayArray;
        // return $time;
        
    }

    function getDailyUserCount($day){
        // $day = 10;
        $userCount = UserAddress::whereDay('created_date', $day)->get()->count();
        return $userCount;
    }

    function getAllMonthUser(){
        $userDayArray= array();
        $userTime = UserAddress::orderBy('created_date', 'DESC')->pluck('created_date');
        $userTime = json_decode($userTime);

        if ( !empty ($userTime) ){
            foreach ($userTime as $unformattedTime){
                $userDate = new \DateTime($unformattedTime);
                $userMonthNo = $userDate->format( 'm' );
                $userMonthName = $userDate->format( 'F' );
                $userDayArray[ $userMonthNo ] = $userMonthName;
                
            }
        }
        // $day_array = array_slice($day_array,0,7);
        return $userDayArray;
        // return $time;
        
    }

    function getMonthlyUserCount($month){
        // $month = 8;$
        $userCount = UserAddress::whereMonth('created_date', $month)->get()->count();
        return $userCount;
    }

    function getAllDayRTransaction(){
        $transactionDayArray = array();
        // $transactionMonthNo = array();
        $transactionTime = Sale::orderBy('created_date', 'DESC')->pluck('created_date');
        $transactionTime = json_decode($transactionTime);

        if ( !empty ($transactionTime) ){
            foreach ($transactionTime as $unformattedTime){
                $transactionDate = new \DateTime($unformattedTime);
                $transactionMonthNo = $transactionDate->format( 'H:i' );
                // $transactionMonthName = $transactionDate->format( 'D' );
                array_push($transactionDayArray, $transactionMonthNo);
            }
        }
        return $transactionDayArray;
    }

    function abal2(){
        $bismillah = DB::select('SELECT sale.name as name, product_parent.name as item, sale.created_date as date
        FROM sale INNER JOIN sale_product ON sale_product.sale_id = sale.id 
        INNER JOIN product ON sale_product.product_id = product.id 
        INNER JOIN product_parent ON product_parent.id = product.parent_id ORDER BY date DESC LIMIT 7');
        return $bismillah;
    }

    function index(){
    /*
        ===================================
           Transaction per Day in a week
        ===================================
    */
        $transactionCountDailyArray = array();
        $transactionDayArray = $this->getAllDayTransaction();
        $transactionDayNameArray = array();
        if ( !empty ($transactionDayArray)){
            foreach($transactionDayArray as $transactionMonthNo => $transactionMonthName ){
                $transactionDailyCount = $this->getDailyTransactionCount($transactionMonthNo);
                array_push($transactionCountDailyArray, $transactionDailyCount);
                array_push($transactionDayNameArray, $transactionMonthName);
            }
        }
        $transactionDayArray = $this->getAllDayTransaction();
        $transactionDayNameArray = array_slice($transactionDayNameArray,0,7);
        $transactionCountDailyArray = array_slice($transactionCountDailyArray,0,7);
        $transactionSum = array_sum($transactionCountDailyArray);
        $transactionDayNameArray = array_reverse($transactionDayNameArray);
        $transactionCountDailyArray = array_reverse($transactionCountDailyArray);
        $transactionDayNameArray = json_encode ($transactionDayNameArray);
        $transactionCountDailyArray = json_encode ($transactionCountDailyArray,TRUE); 
        // $daily_sale_data_array = array(
        //     'transactionSum' => $transactionSum,
        //     'transactionDayName' => $transactionDayNameArray,
        //     'transactionCountDaily' => $transactionCountDailyArray,
        // );

        /*
        ===================================
           End - Transaction per Day in a week
        ===================================
        */

        /*
        ===================================
           Weekly user registered
        ===================================
        */

        $userCountDailyArray = array();
        $userDayArray = $this->getAllDayUser();
        $userDayNameArray = array();
        if ( !empty ($userDayArray)){
            foreach($userDayArray as $userMonthNo => $userMonthName ){
                $daily_user_count = $this->getDailyUserCount($userMonthNo);
                array_push($userCountDailyArray, $daily_user_count);
                array_push($userDayNameArray, $userMonthName);
            }
        }
        $userDayArray = $this->getAllDayUser();
        $userDayNameArray = array_slice($userDayNameArray,0,7);
        $userCountDailyArray = array_slice($userCountDailyArray,0,7);
        $userSum = UserAddress::count();
        $userDayNameArray = array_reverse($userDayNameArray);
        $userCountDailyArray = array_reverse($userCountDailyArray);
        $userDayNameArray = json_encode ($userDayNameArray);
        $userCountDailyArray = json_encode ($userCountDailyArray,TRUE); 
        // $daily_user_data_array = array(
        //     'sum_array_user' => $userSum,
        //     'user_day' => $userDayNameArray,
        //     'user_count_data' => $userCountDailyArray,
        // );

        /*
        ===================================
           End - Weekly user registered
        ===================================
        */

        /*
        ===================================
           User registered
        ===================================
        */

        $userCountMonthlyArray = array();
        $userMonthlyArray = $this->getAllMonthUser();
        if ( !empty ($userMonthlyArray)){
            foreach($userMonthlyArray as $userMonthNo => $userMonthName ){
                $userMontlyCount = $this->getMonthlyUserCount($userMonthNo);
                // $userCountMonthlyArray[$userMonthName] = $userMontlyCount;
                $userCountMonthlyArray[] = [
                    'month'      => $userMonthName,
                    'total'     => $userMontlyCount
                ];
            }
        }
        $userMonthlyArray = $this->getAllMonthUser();
        // $userMonthlyArray = json_encode ($userMonthlyArray,TRUE); 

        /*
        ===================================
           End - User registered
        ===================================
        */

        /*
        ===================================
           Recent Transaction
        ===================================
        */

        $recentTransactionArray = array();
        $userMonthlyArray = $this->getAllMonthUser();
        if ( !empty ($userMonthlyArray)){
            foreach($userMonthlyArray as $userMonthNo => $userMonthName ){
                $userMontlyCount = $this->getMonthlyUserCount($userMonthNo);
                // $userCountMonthlyArray[$userMonthName] = $userMontlyCount;
                $recentTransactionArray[] = [
                    'month'      => $userMonthName,
                    'total'     => $userMontlyCount
                ];
            }
        }
        $userMonthlyArray = $this->getAllMonthUser();
        // $userMonthlyArray = json_encode ($userMonthlyArray,TRUE); 

        /*
        ===================================
           End - Recent Transaction
        ===================================
        */



        // return $userCountMonthlyArray;
        return view('index',[
            'transaction_sum' => $transactionSum,
            'transaction_count_data' => $transactionCountDailyArray,
            'transaction_days' => $transactionDayNameArray,
            'user_sum' => $userSum,
            'user_days' => $userDayNameArray,
            'user_count_data' => $userCountDailyArray,
            'userCountMonthlyArray' => $userCountMonthlyArray,
            //  print_r($userCountMonthlyArray)
        ]);

        // return view('index',  compact('daily_sale_data_array'));

    }
}
