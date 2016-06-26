<?php
/**
 * Created by PhpStorm.
 * User: gabiudrescu
 * Date: 26.06.2016
 * Time: 16:50
 */

namespace GreeterBundle\Scenario;


use GreeterBundle\Scenario\Step\GenderStep;
use GreeterBundle\Scenario\Step\NameStep;
use Sylius\Bundle\FlowBundle\Process\Builder\ProcessBuilderInterface;
use Sylius\Bundle\FlowBundle\Process\Scenario\ProcessScenarioInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class GreeterScenario implements ProcessScenarioInterface {

    use ContainerAwareTrait;

    /**
     * Builds the whole process.
     *
     * @param ProcessBuilderInterface $builder
     */
    public function build(ProcessBuilderInterface $builder)
    {
        $builder->add('gender', new GenderStep())
            ->add('name', new NameStep());
    }

}