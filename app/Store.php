<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	// define the table
    protected $table = 'store';

    // primary key
    protected $primaryKey = 'store_id';

    //disable created_at and updated_at
    public $timestamps = false;

    public function customer()
    {
    	return $this->hasMany(\App\Customer::class,'store_id','store_id');
    }
}
