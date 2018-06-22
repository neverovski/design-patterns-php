<?php

namespace PatternsPHP\Creational\FactoryMethod\Repository;

use PatternsPHP\Creational\FactoryMethod\Interfaces\ISocialNetwork;

/**
 * Class Social
 * @package PatternsPHP\Creational\FactoryMethod
 */
abstract class Repository
{
    /**
     * The actual factory method.
     */
    protected abstract function getSocialNetwork(): ISocialNetwork;

    /**
     * When the factory method is used inside the Creator's business logic
     *
     * @param string $repository
     * @return string
     */
    protected function repository(string $repository): string
    {
        // Call the factory method to create a object
        $network = $this->getSocialNetwork();
        $network->logIn();
        $rep = $network->createRepository($repository);
        $network->logout();

        return $rep;
    }
}