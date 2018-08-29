<?php namespace Nova\Ekvita\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ServiceCategory extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'manage_service_category' 
    ];

    public function __construct()
    {
        parent::__construct();
    }
}
