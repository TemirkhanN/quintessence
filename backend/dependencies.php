<?php
/**
 * Created by PhpStorm.
 * User: temirkhan
 * Date: 17.04.15
 * Time: 9:59
 */

namespace app;

$dependencies =  [

    'runtime' => [
        'urlManager' => 'web/UrlManager',
        'plugin' => 'base/Plugin',
        'controller' => 'base/Controller',
        'model' => 'base/Model',
        'formBuilder' => 'base/Form',
        'db' => 'db/Connection',
        'pdo' => 'db/PdoWrapper',
        'activeRecord' => 'db/ActiveRecord',
        'fileWorker' => 'file-worker/File',
        'cache' => 'file-worker/Cache',
    ],

    'classes' => [
        'htmlValidator' => 'web/Html',
        'paginator' => 'web/Pagination',

    ]

];


core\App::loadDependencies($dependencies);


