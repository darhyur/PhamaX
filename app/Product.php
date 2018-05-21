<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Product extends Model

{
    use softDeletes;

    protected $dates = [ 'deleted_at'];


    protected $primaryKey = 'id';

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id','id');
    }


    public function units()
    {
        return $this->hasMany('App\Unit','unit_id','id');

    }

    protected $fillable =  ['name', 'product_code', 'product_description', ' image', 'brand_id'];

    protected $touches =[ 'brand'];
}
