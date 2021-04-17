<?php
declare(strict_types=1);

namespace WpOop\WordPress\Post;

use Traversable;
use WpOop\WordPress\Entity\EntityQueryResultInterface;

/**
 * Represents a WordPress post query result.
 *
 * @extends Traversable<PostInterface>
 */
interface PostQueryResultInterface extends EntityQueryResultInterface
{
}
