<?php
declare(strict_types=1);

namespace WpOop\WordPress\Taxonomy;

use WpOop\WordPress\Entity\EntityQueryResultInterface;
use Traversable;

/**
 * Represents a result of a WordPress term query.
 *
 * @extends Traversable<TermInterface>
 */
interface TermQueryResultInterface extends EntityQueryResultInterface
{
}
