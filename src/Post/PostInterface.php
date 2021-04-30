<?php

declare(strict_types=1);

namespace WpOop\WordPress\Post;

use DateTimeInterface;
use Dhii\Data\KeyAwareInterface;
use Dhii\Data\NameAwareInterface;
use Dhii\Util\String\TitleAwareInterface;
use Psr\Http\Message\UriInterface;
use Stringable;
use WpOop\WordPress\Entity\EntityInterface;
use WpOop\WordPress\User\UserInterface;

/**
 * Represents a WordPress post.
 */
interface PostInterface extends EntityInterface, TitleAwareInterface, NameAwareInterface, KeyAwareInterface
{
    /**
     * Signifies that a post has been published.
     *
     */
    public const STATUS_PUBLISHED = 'published';
    /**
     * Signifies that a post has been scheduled to be published in the future.
     *
     */
    public const STATUS_FUTURE = 'future';
    /**
     * Signifies that a post is incomplete.
     *
     */
    public const STATUS_DRAFT = 'draft';
    /**
     * Signifies that a post is awaiting to be published.
     *
     */
    public const STATUS_PENDING = 'pending';
    /**
     * Signifies that a post is not intended to be publicly viewable.
     *
     */
    public const STATUS_PRIVATE = 'private';
    /**
     * Signifies that a post has been trashed.
     *
     */
    public const STATUS_TRASH = 'trash';
    /**
     * Signifies that a post has been created automatically.
     *
     */
    public const STATUS_AUTO_DRAFT = 'auto-draft';
    /**
     * Signifies that a post's status is determined by its parent post.
     *
     */
    public const STATUS_INHERIT = 'inherit';

    public function getId(): int;

    public function getParentId(): int;

    public function getKey(): string;

    public function getAuthor(): UserInterface;

    public function getCreatedAt(): DateTimeInterface;

    public function getUpdatedAt(): DateTimeInterface;

    public function getContent(): Stringable;

    public function getTitle(): string;

    public function getExcerpt(): string;

    public function getStatus(): string;

    public function getIsAllowComments(): bool;

    public function getIsAllowedPing(): bool;

    public function getPassword(): string;

    public function getName(): string;

    /**
     * @return iterable<UriInterface>
     */
    public function getUrlsToPing(): iterable;

    /**
     * @return iterable<UriInterface>
     */
    public function getUrlsPinged(): iterable;

    public function getGuid(): string;

    public function getMenuOrder(): int;

    public function getType(): string;

    public function getMimeType(): string;
}
