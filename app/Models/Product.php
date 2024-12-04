<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version December 4, 2024, 5:06 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property number $price
 * @property integer $stock
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'price',
        'stock'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:4|max:25',
        'description' => 'min:4|max:100',
        'price' => 'required|numeric|between:0,9999.99',
        'stock' => 'required|integer|min:1|max:100000'
    ];


}
