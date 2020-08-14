<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traderef extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address' ,'phone', 'name','user_id',
    ];	

    /**
     * A contact belongs to the user class of the 
     */
   	public function user()
    {
    	return $this->belongsTo(User::class);
    }

    /**
    * Get all of the organisation contacts' capturers.
    */
    public function capturers()
    {
    	return $this->morphMany('App\DataCapturer', 'data_capturable');
    } 
}
