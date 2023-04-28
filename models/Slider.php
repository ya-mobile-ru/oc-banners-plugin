<?php namespace Yamobile\Banners\Models;

use Model;

/**
 * Model
 */
class Slider extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_banners_banners';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
