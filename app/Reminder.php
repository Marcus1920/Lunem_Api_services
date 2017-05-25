<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model {


protected $table =  "reminders";

    protected $fillable = ['Description'];

    protected $dates = ['date','time'];

    public static $rules = [
        // Validation rules

    'Description'=>'required',
    'date'=>'required|date',
    'time'=>'required',
    
    ];

    // Relationships

}
