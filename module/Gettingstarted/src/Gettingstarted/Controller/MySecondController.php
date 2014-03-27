<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Gettingstarted\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MySecondController extends AbstractActionController
{
    public function indexAction()
    {

        return  new ViewModel();
    }

    public function endingAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /module-specific-root/gettingstarted/ending
        return array();
    }
}
