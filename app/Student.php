<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = [
      'name', 'father_name', 'address', 'email', 'phone_number','Fee'
  ];
}
