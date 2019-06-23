<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class TransactionController extends Controller
{
    public function __construct()
    {

    }

    /*
    * Function to get data from csv file.
       */
    public function getData()
    {
        $csvFileName = "transactions.csv";
        $path = public_path('csv/' . $csvFileName);
        $data = Excel::load($path, function ($reader) {
        })->get();

        if (!empty($data) && $data->count()) {
            foreach ($data as $key => $value) {
                $customerData[] = [
                    'start_date' => $value['start_date'],
                    'end_date' => $value['end_date'],
                    'first_name' => $value['first_name'],
                    'last_name' => $value['last_name'],
                    'email' => $value['email'],
                    'telnumber' => $value['telnumber'],
                    'address1' => $value['address1'],
                    'address2' => $value['address2'],
                    'city' => $value['city'],
                    'country' => $value['country'],
                    'postcode' => $value['postcode'],
                ];

                $trasactionData[] = [
                    'product_name' => $value['product_name'],
                    'cost' => $value['cost'],
                    'currencyusdgbp' => $value['currencyusdgbp'],
                    'transaction_date' => $value['transaction_date'],
                ];
            }

            $response = array(
                'customerData' => $customerData,
                'trasactionData' =>  $trasactionData
            );
        }
        return $response;
    }
}
