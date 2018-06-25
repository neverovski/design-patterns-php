<?php

namespace PatternsPHP\Creational\Builder\Builder;

use PatternsPHP\Creational\Builder\Interfaces\ISQLQueryBuilder;

/**
 * Class MysqlQueryBuilder
 * @package PatternsPHP\Creational\Builder\Builder
 */
class MysqlQueryBuilder implements ISQLQueryBuilder
{
    protected $query;

    /**
     * Reset
     */
    protected function reset(): void
    {
        $this->query = new \stdClass();
    }

    /**
     * Build a base SELECT query.
     *
     * @param string $table
     * @param array $fields
     * @return ISQLQueryBuilder
     */
    public function select(string $table, array $fields): ISQLQueryBuilder
    {
        $this->reset();
        $this->query->base = "SELECT " . implode(", ", $fields) . " FROM " . $table;
        $this->query->type = 'select';

        return $this;
    }

    /**
     * Add a WHERE condition.
     *
     * @param string $field
     * @param string $value
     * @param string $operator
     * @return ISQLQueryBuilder
     * @throws \Exception
     */
    public function where(string $field, string $value, string $operator = '='): ISQLQueryBuilder
    {
        if (!in_array($this->query->type, ['select', 'update'])) {
            throw new \Exception("WHERE can only be added to SELECT OR UPDATE");
        }
        $this->query->where[] = "$field $operator '$value'";

        return $this;
    }

    /**
     * @return string
     */
    public function getSQL(): string
    {
        $query = $this->query;
        $sql = $query->base;
        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }
        if (isset($query->limit)) {
            $sql .= $query->limit;
        }
        $sql .= ";";
        return $sql;
    }
}