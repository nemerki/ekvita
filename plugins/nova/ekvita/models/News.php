<?php namespace Nova\Ekvita\Models;

use Model;

/**
 * Model
 */
class News extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sluggable;


    /**
     * @var array Generate slugs for these attributes.
     */

    protected $slugs = ['slug' => 'title'];

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nova_ekvita_news';

    public $belongsTo = [
        'category' => ['Nova\Ekvita\Models\NewsCategory']
    ];
    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
