<?php

namespace PatternsPHP\Creational\Builder\Tests;

use PatternsPHP\Creational\Builder\Builder\MysqlQueryBuilder;
use PatternsPHP\Creational\Builder\Builder\PostgresQueryBuilder;
use PatternsPHP\Creational\Builder\Client;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    /**
     * Test MySQL
     */
    public function testMySQLClient()
    {
        $queryBuilder = Client::client(new MysqlQueryBuilder());
        $this->assertEquals("SELECT name, email, password FROM users WHERE age > '18' AND age < '30';", $queryBuilder);
        print("Test MySQL builder: SUCCESSFUL \n");
    }

    /**
     * Test PostgresSQL
     */
    public function testPostgresClient()
    {
        $queryBuilder = Client::client(new PostgresQueryBuilder());
        $this->assertEquals("SELECT name, email, password FROM users WHERE age > '18' AND age > '18' AND age < '30' AND age < '30';", $queryBuilder);
        print("Test PostgresSQL builder: SUCCESSFUL \n");
    }
}