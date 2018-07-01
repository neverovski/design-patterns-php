<?php

namespace PatternsPHP\Creational\Builder\Builder;

use PatternsPHP\Creational\Builder\Interfaces\ISQLQueryBuilder;

/**
 * Class PostgresQueryBuilder
 * @package PatternsPHP\Creational\Builder\Builder
 */
class PostgresQueryBuilder extends MysqlQueryBuilder
{
    /**
     * @param string $field
     * @param string $value
     * @param string $operator
     * @return ISQLQueryBuilder
     * @throws \Exception
     */
    public function where(string $field, string $value, string $operator = '='): ISQLQueryBuilder
    {
        parent::where($field, $value, $operator);
        $this->query->where[] = "$field $operator '$value'";
        return $this;
    }
}