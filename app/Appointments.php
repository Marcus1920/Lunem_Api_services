<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model {

    protected $fillable = ["location", "description ", "location" , "notes" ,"reminder"];

    protected $dates = ["start" , "end"];

    public static $rules = [
        "description" => "required",
        "location"    => "required",
        "notes"       => "numeric",
        "reminder"    => "required|numeric",
        "start"       => "required",
        "end"         => "required",
    ];



}
