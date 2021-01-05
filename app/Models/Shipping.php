<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = ['weight', 'price'];

    public static function ShippingCostsForWeight($weight)
    {
        $all = Shipping::orderBy('weight', 'asc');

        //dd($all);

        $shipping = Shipping::where('weight', '>', $weight)->first();

        if ($shipping === null)
            return Shipping::orderBy('weight', 'desc')->get()->first()->price;


        return $shipping->price;
    }
}
