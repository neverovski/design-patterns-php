<?php

namespace PatternsPHP\Creational\Builder;

use PatternsPHP\Creational\Builder\Interfaces\ISQLQueryBuilder;

/**
 * Class Client
 * @package PatternsPHP\Creational\Builder
 */
class Client
{
    /**
     * @param ISQLQueryBuilder $queryBuilder
     * @return string
     */
    public static function client(ISQLQueryBuilder $queryBuilder): string
    {
        $query = $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->getSQL();
        
        return $query;
    }
}