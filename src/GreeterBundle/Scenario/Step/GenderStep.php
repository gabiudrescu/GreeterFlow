<?php
/**
 * Created by PhpStorm.
 * User: gabiudrescu
 * Date: 26.06.2016
 * Time: 16:35
 */

namespace GreeterBundle\Scenario\Step;

use Sylius\Bundle\FlowBundle\Process\Context\ProcessContextInterface;
use Sylius\Bundle\FlowBundle\Process\Step\AbstractControllerStep;

class GenderStep extends AbstractControllerStep {
    public function displayAction(ProcessContextInterface $context)
    {
        return $this->render('GreeterBundle:scenario:gender.html.twig');
    }

    public function forwardAction(ProcessContextInterface $context)
    {
        $context->getStorage()->set('gender', $context->getRequest()->get('gender'));
        return $this->complete();
    }
}