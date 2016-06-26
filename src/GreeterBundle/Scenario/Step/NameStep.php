<?php
/**
 * Created by PhpStorm.
 * User: gabiudrescu
 * Date: 26.06.2016
 * Time: 16:48
 */

namespace GreeterBundle\Scenario\Step;


use Sylius\Bundle\FlowBundle\Process\Context\ProcessContextInterface;
use Sylius\Bundle\FlowBundle\Process\Step\AbstractControllerStep;

class NameStep extends AbstractControllerStep {
    public function displayAction(ProcessContextInterface $context)
    {
        return $this->render('GreeterBundle:scenario:name.html.twig', ['gender' => $context->getStorage()->get('gender')]);
    }

    public function forwardAction(ProcessContextInterface $context)
    {
        return $this->complete();
    }
}