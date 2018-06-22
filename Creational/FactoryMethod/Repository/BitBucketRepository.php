<?php

namespace PatternsPHP\Creational\FactoryMethod\Repository;

use PatternsPHP\Creational\FactoryMethod\Interfaces\ISocialNetwork;
use PatternsPHP\Creational\FactoryMethod\Social\BitBucket;

/**
 * Class BitBucketRepository
 * @package PatternsPHP\Creational\FactoryMethod
 */
class BitBucketRepository extends Repository
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
     * GitHubRepository constructor.
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * The actual factory method.
     */
    public function getSocialNetwork(): ISocialNetwork
    {
        return new BitBucket($this->email, $this->password);
    }
}