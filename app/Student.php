<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Table Name
    protected $table = 'students';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
