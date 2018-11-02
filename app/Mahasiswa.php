<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'tbl_mahasiswa';

    //primary key = "id"
    protected $primaryKey = 'nim';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
		'nim', 
		'nama_mhs',
		'alamat',
		'jurusan',	 
    ];
}
