<?php

namespace PatternsPHP\Creational\FactoryMethod\Interfaces;

/**
 * Interface ISocialNetwork
 * @package PatternsPHP\Creational\FactoryMethod
 */
interface ISocialNetwork
{
    /**
     * Login the profile
     *
     * @return mixed
     */
    public function logIn();

    /**
     * Logout the profile
     *
     * @return mixed
     */
    public function logOut();

    /**
     * Create group
     *
     * @param string $repository
     * @return mixed
     */
    public function createRepository(string $repository);
}