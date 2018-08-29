<?php namespace Nova\Ekvita\Models;

use Model;

/**
 * Model
 */
class ProjectsInvolved extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nova_ekvita_projects_involveds';

    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
