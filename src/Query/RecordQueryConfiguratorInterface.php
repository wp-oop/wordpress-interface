<?php


namespace WpOop\WordPress\Query;


use WpOop\WordPress\Entity\EntityQueryResultInterface;

/**
 * A query for records
 */
interface RecordQueryConfiguratorInterface extends QueryConfiguratorInterface
{

    public function query(): EntityQueryResultInterface;

    /**
     * @return static
     */
    public function withLimit(int $limit): self;

    public function withOffset(int $offset): self;
}
