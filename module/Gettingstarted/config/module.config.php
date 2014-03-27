<?php
return array(
	'router' => array(
		    'routes' => array(
				/* Configuration of first route (Controller:Starting)*/
		        'starting' => array(
		            'type'    => 'Literal',
		            'options' => array(
		                'route'    => '/starting',
		                'defaults' => array(
                        '__NAMESPACE__' => 'Gettingstarted\Controller',
                        'controller'    => 'Starting',
                        'action'        => 'index',
                    ),
		          ),
		        ),
				/* End of first route */
				/* Configuration of second route (Controller:Starting)  */
		        'ending' => array(
		            'type'    => 'Literal',
		            'options' => array(
		                'route'    => '/starting/ending',
		                'defaults' => array(
                        '__NAMESPACE__' => 'Gettingstarted\Controller',
                        'controller'    => 'Starting',
                        'action'        => 'ending',
                    ),
		          ),
		        ),
				/* End of second route */
				/* Configuration of third route (Controller:MySecondController) */
		        'MySecond' => array(
		            'type'    => 'Literal',
		            'options' => array(
		                'route'    => '/mysecond',
		                'defaults' => array(
                        '__NAMESPACE__' => 'Gettingstarted\Controller',
                        'controller'    => 'MySecond',
                        'action'        => 'index',
                    ),
		          ),
		        ),
				/* End of third route */
			),
		),
	/* Configuration of Controllers */
	'controllers' => array(
		    'invokables' => array(
		        'Gettingstarted\Controller\Starting' => 'Gettingstarted\Controller\StartingController',
		        'Gettingstarted\Controller\MySecond' => 'Gettingstarted\Controller\MySecondController',

		    ),
		),
	/* End of Controllers */
	/* Configuration of View-Manager  */
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        	),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
	/* End of View-manager */ 

);

