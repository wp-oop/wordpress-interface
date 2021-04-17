<?php

declare(strict_types=1);

namespace WpOop\WordPress\Query;


interface ClauseQueryInterface extends QueryConfiguratorInterface
{
    public function getJoinClause(): string;

    public function getWhereClause(): string;
}
