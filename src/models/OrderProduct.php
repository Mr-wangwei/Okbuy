<?php

namespace Jayden\Okbuy4laravel\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class OrderProduct.
 *
 * @package namespace App\Models;
 */
class OrderProduct extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $connection = config('okbuy.database.connection') ?: config('database.default');

        $this->setConnection($connection);

        $this->setTable(config('okbuy.database.order_products_table'));

        parent::__construct($attributes);
    }
}