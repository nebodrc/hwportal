<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evvos extends Model
{
    //
    protected $table = 'evvos';
    protected $fillable = ['raw_data','rssi','snr','sequence_number','device_id','device_name', 'battery_status','use_case','battery_voltage','application_id','voltage_1', 'voltage_2','pulse','current_1', 'current_2', 'current_1_status'];
}
