<?php

namespace PatternsPHP\Creational\FactoryMethod\Social;

use PatternsPHP\Creational\FactoryMethod\Interfaces\ISocialNetwork;

/**
 * Class BitBucket
 * @package PatternsPHP\Creational\FactoryMethod
 */
class BitBucket implements ISocialNetwork
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * GitHub constructor.
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Login the profile
     *
     * @return mixed
     */
    public function logIn(): void
    {
        print("Send request to log in user $this->email with password $this->password\n");
    }

    /**
     * Logout the profile
     *
     * @return mixed
     */
    public function logOut(): void
    {
        print("Send request to log in user $this->email\n");
    }

    /**
     * Create group
     *
     * @param string $repository
     * @return string
     */
    public function createRepository(string $repository): string
    {
        return "Send request to create a repository in BitBucket.";
    }
}