<?php

namespace PatternsPHP\Creational\FactoryMethod\Social;

use PatternsPHP\Creational\FactoryMethod\Interfaces\ISocialNetwork;

/**
 * Class GitHub
 * @package PatternsPHP\Creational\FactoryMethod
 */
class GitHub implements ISocialNetwork
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * GitHub constructor.
     * @param $login
     * @param $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * Login the profile
     *
     * @return mixed
     */
    public function logIn(): void
    {
        print("Send request to log in user $this->login with password $this->password\n");
    }

    /**
     * Logout the profile
     *
     * @return mixed
     */
    public function logOut(): void
    {
        print("Send request to log in user $this->login\n");
    }

    /**
     * Create group
     *
     * @param string $repository
     * @return mixed
     */
    public function createRepository(string $repository): void
    {
        print("Send request to create a repository in GitHub.\n");
    }
}