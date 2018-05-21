<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Brand extends Model
{
    use softDeletes;

    protected $dates = [ 'deleted_at'];

    protected $primaryKey = 'id';

    protected $fillable = [
        'brand_name', 'brand_description', 'brand_code', 'brand_location'
    ];

    public function products()
    {

        return $this->$this->hasMany('App\Product');
    }

    public function admins()
    {

        return $this->hasMany( 'App\Admin');

    }

    public function units()
    {

        return $this->hasMany('App\Unit');

    }


}
