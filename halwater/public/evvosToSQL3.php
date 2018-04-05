

<html>
<head>
<title>Sensor Data</title>
</head>
<body>

<div class="container box">
<h3 align="center">Import JSON File Data into Mysql Database in PHP</h3>
<?php

    $enlace = mysqli_connect("127.0.0.1", "halwater", "halwater", "hwweb");

    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
    echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

    //mysqli_close($enlace);

    //$connect = mysqli_connect("54.166.68.121", "root", "halwater", "HALWATER"); //Connect PHP to MySQL Database

    $query = '';
    $table_data = '';
    echo 'Previo a JSON Data';
    //$filename = "evvos.json";
    //$data = file_get_contents($filename); //Read the JSON file in PHP

    $jsondata = file_get_contents('php://input'); //Read the JSON file in PHP
    $data = json_decode($jsondata, true); //Convert JSON String into PHP Array
  
    
    //get the employee details
    $TimeStamp = $data['TimeStamp'];
    $RawData = $data['RawData'];
    $Rssi = $data['Rssi'];
    $Snr = $data['Snr'];
    $SequenceNumber = $data['SequenceNumber'];
    $DeviceID = $data['DeviceID'];
    $DeviceName = $data['DeviceName'];
    $BatteryStatus = $data['Battery Status'];
    $UseCase = $data['Use Case'];
    $BatteryVoltage = $data['Battery Voltage'];
    $ApplicationId = $data['Application ID'];
    $Voltage1_12 = $data['Voltage 1 - 12 bit'];
    $Voltage2_12 = $data['Voltage 2 - 12 bit'];
    $Pulse = $data['Pulse'];
    $Current1 = $data['Current 1 - 12 bit'];
    $Current2 = $data['Current 2 - 12 bit'];
    
    $Current1Status = $data['Current 1 - 12 bit Status'];
    $Current2Status = $data['Current 2 - 12 bit Status'];

    echo $TimeStamp .' '. $RawData .' '. $Rssi .' '. $Snr .' '. $SequenceNumber .' '. $DeviceID .' '. $DeviceName .' '. $BatteryStatus .' '. $UseCase .' '. $BatteryVoltage .' '. $ApplicationId .' '.$Voltage1_12 .' '. $Voltage2_12 .' '. $Pulse.' '. $Current1.' '. $Current2.' '. $Current1Status.' '. $Current2Status;
   
    
    //foreach($array as $row) //Extract the Array Values by using Foreach Loop
    //{
        $query .= "INSERT INTO evvos1(Time_Stamp, RawData, Rssi, Snr, SequenceNumber, DeviceID, DeviceName, BatteryStatus, UseCase, BatteryVoltage, ApplicationID, Current1Status, Current2, Pulse) VALUES ('$TimeStamp', '$RawData', '$Rssi', '$Snr', '$SequenceNumber', '$DeviceID', '$DeviceName', '$BatteryStatus', '$UseCase', '$BatteryVoltage', '$ApplicationId', '$Current1Status', '$Current2', '$Pulse'); ";
        echo $query;
    
    if(mysqli_query($enlace, $query)) {
        echo 'Registro Insertado';
    }else{
        echo 'Error';
    }//Run  Insert Query
    
?>


</div>
</body>
</html>

