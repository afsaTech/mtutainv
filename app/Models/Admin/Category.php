<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, softDeletes;

    protected $table = "categories";

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
      'desc',
      'created_at',
      'updated_at',
      'deleted_at'
    ];

    /**
     * The hasMany::relationship between Category and Achievement Model.
     *
     */
    public function achievements()
    {
       return $this->hasMany('App\Models\Admin\Achievement', 'category_id');
    }

}
