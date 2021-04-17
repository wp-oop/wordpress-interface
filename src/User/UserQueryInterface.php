<?php

declare(strict_types=1);

namespace WpOop\WordPress\User;

use WpOop\WordPress\Entity\EntityQueryInterface;
use WpOop\WordPress\Entity\EntityQueryResultInterface;
use WpOop\WordPress\Query\QueryResultInterface;

/**
 * Represents a WordPress user query.
 */
interface UserQueryInterface extends EntityQueryInterface
{
    /**
     * @return UserQueryResultInterface
     */
    public function query(): QueryResultInterface;

    /**
     * @param iterable<string> $roleKeys
     * @return static
     */
    public function withRoleIn(iterable $roleKeys): self;

    /**
     * @param iterable<string> $roleKeys
     * @return static
     */
    public function withRoleNotIn(iterable $roleKeys): self;
}
