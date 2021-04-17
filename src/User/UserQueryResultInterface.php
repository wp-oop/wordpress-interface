<?php
declare(strict_types=1);

namespace WpOop\WordPress\User;

use WpOop\WordPress\Entity\EntityQueryResultInterface;
use Traversable;

/**
 * Represents a user query result.
 *
 * @extends Traversable<UserInterface>
 */
interface UserQueryResultInterface extends EntityQueryResultInterface
{

}
