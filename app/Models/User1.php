<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    protected $table = 'user1'; // Specify the correct table name here
    // Rest of your model code...
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'gender', 'address'];
}
