<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $primaryKey = 'unit_id';


    protected $fillable =[
        'product_id', 'brand_id', 'unit_code', 'expiration_date', 'created_at'
    ];


    public function product()
    {
        return $this->belongsTo('App\Product','product_id','id');

    }

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id','id');
    }

    protected $touches = ['product', 'brand'];





}
