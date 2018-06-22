<?php

namespace PatternsPHP\Creational\FactoryMethod\Repository;

use PatternsPHP\Creational\FactoryMethod\Interfaces\ISocialNetwork;
use PatternsPHP\Creational\FactoryMethod\Social\GitHub;

/**
 * Class GitHubRepository
 * @package PatternsPHP\Creational\FactoryMethod
 */
class GitHubRepository extends Repository
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
     * GitHubRepository constructor.
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * The actual factory method.
     */
    public function getSocialNetwork(): ISocialNetwork
    {
        return new GitHub($this->login, $this->password);
    }
}