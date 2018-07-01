<?php

namespace PatternsPHP\Creational\Builder\Interfaces;

/**
 * Interface ISQLQueryBuilder
 * @package PatternsPHP\Creational\Builder\Interfaces
 */
interface ISQLQueryBuilder
{
    /**
     * @param string $table
     * @param array $fields
     * @return ISQLQueryBuilder
     */
    public function select(string $table, array $fields): ISQLQueryBuilder;

    /**
     * @param string $field
     * @param string $value
     * @param string $operator
     * @return ISQLQueryBuilder
     */
    public function where(string $field, string $value, string $operator = '='): ISQLQueryBuilder;

    /**
     * @return string
     */
    public function getSQL(): string;
}