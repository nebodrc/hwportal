<?php

namespace App\Http\Controllers;

use App\Logger;
use Illuminate\Http\Request;
require 'vendor/autoload.php';

date_default_timezone_set('UTC');

use Aws\DynamoDb\Exception\DynamoDbException;
use Aws\DynamoDb\Marshaler;
use Aws\DynamoDb\DynamoDbClient;

class LoggersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awsAccessKeyId= 'AKIAI3FULXD2FQ3QFHMQ';
        $awsSecretKey= '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';
        $keySecret = array('credentials' => array(
            'key'    => $awsAccessKeyId,
            'secret' => $awsSecretKey,), 
            'region' => 'us-east-1', 
            'version' => 'latest');
        
        
        $dynamodb = DynamoDbClient::factory($keySecret);

        

        //$dynamodb = $sdk->createDynamoDb();
        $marshaler = new Marshaler();


        $tableName = 'sigfox';
        $eav = $marshaler->marshalJson('
            {
                ":deviceid": 3E6231 
            }
        ');

        $params = [
            'TableName' => $tableName,
            'KeyConditionExpression' => 'deviceid = :deviceid',
            'ExpressionAttributeNames'=> [ 'deviceid' => 'deviceid' ],
            'ExpressionAttributeValues'=> $eav
            
        ];

        //echo "Querying for data from 3E6231.\n";

        try {
            
            $result =$dynamodb->query(array(
                'TableName' => 'sigfox',
                'KeyConditionExpression' => 'deviceid = :v_hash',
                'ExpressionAttributeValues' =>  array (
                    ':v_hash'  => array('S' => '3E6231')
                )
            ));


            
            $retArray['signals'] = $result;
           
            $i =0;
            foreach ($result['Items'] as $item) {
                //dd($item);
                echo $marshaler->unmarshalValue($item['deviceid']);
                $arrItem = $marshaler->unmarshalItem($item);
                //echo $arrItem['payload'];
                print_r($arrItem['payload']) ;
                //dd($arrItem);
                //$arrItem = $marshaler->unmarshalItem($item);
                //cho $marshaler->unmarshalValue($arrItem['payload']['data']);
                $i++;
                # code...
            }

            print_r(array_keys($arrItem['payload'])) ;


            
           //dd($result['Items']);
           // $arr= $marshaler->unmarshalItem($result['Items']);
            //dd($arr);
            
            //dd($retArray    );
        } catch (DynamoDbException $e) {
            echo "Unable to query:\n";
            echo $e->getMessage() . "\n";
        }
        //$loggers['loggers'] = Logger::all();

        return view('loggers.index', $retArray);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Logger  $logger
     * @return \Illuminate\Http\Response
     */
    public function show(Logger $logger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logger  $logger
     * @return \Illuminate\Http\Response
     */
    public function edit(Logger $logger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logger  $logger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logger $logger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Logger  $logger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logger $logger)
    {
        //
    }
}
