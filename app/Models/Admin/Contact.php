<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, softDeletes;

    /**
     * The attributes that are of data type date.
     *
     * @var array
     */
     protected $date = [
       'created_at',
       'updated_at',
       'deleted_at'
     ];

     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
      protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
      ];

}
