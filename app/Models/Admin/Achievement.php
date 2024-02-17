<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievement extends Model
{
    use HasFactory, softDeletes;

    protected $table = "achievements";

    /**
     * The attributes that are of data type date.
     *
     * @var array
     */
    protected $date = [
      'date',
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
      'title',
      'abstract',
      'category_id',
      'date',
      'image',
      'status',
      'created_at',
      'updated_at',
      'deleted_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
     protected $casts = [
       // 'status' => 'boolean',
     ];

     /**
      * The belongsTo::relationship between Achievement and Category Model.
      *
      */
      public function category()
      {
         return $this->belongsTo('App\Models\Admin\Category', 'category_id');
      }
}
