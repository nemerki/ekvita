<?php namespace Nova\Ekvita\Models;

use Model;

/**
 * Model
 */
class NewsCategory extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sluggable;


    /**
     * @var array Generate slugs for these attributes.
     */

    protected $slugs = ['slug' => 'name'];

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nova_ekvita_news_categories';

    public $hasMany = [
        'news' => ['Nova\Ekvita\Models\News','key' => 'category_id', 'softDelete' => true],

    ];
}
