<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SakilaModel extends Model
{
    
    protected $table = 'customer';

    //primary key = "id"
    protected $primaryKey = 'customer_id';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
		'first_name', 
		'last_name',
		'email',
		'address_id',	
		'active' 
    ];
}


