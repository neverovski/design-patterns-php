<?php

namespace PatternsPHP\Creational\FactoryMethod;

/**
 * Class Social
 * @package PatternsPHP\Creational\FactoryMethod
 */
abstract class Repository
{
    /**
     * The actual factory method.
     */
    public abstract function getSocialNetwork(): ISocialNetwork;

    /**
     * When the factory method is used inside the Creator's business logic
     *
     * @param string $repository
     */
    public function repository(string $repository): void
    {
        // Call the factory method to create a object
        $network = $this->getSocialNetwork();
        $network->logIn();
        $network->createRepository($repository);
        $network->logout();
    }
}