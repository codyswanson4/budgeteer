<?php
/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\Budgeteer\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
return [
    'resources' => [
      'budget' => ['url' => '/budget'],
      'spend_category' => ['url' => '/spend_category'],
      'transaction' => ['url' => '/transaction']
    ],
    'routes' => [
	   ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
    ]
];
