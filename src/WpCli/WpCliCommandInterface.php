<?php

declare (strict_types = 1);

namespace WpOop\WordPress\WpCli;

/**
 * Represents WP_CLI command.
 */
interface WpCliCommandInterface
{
    /**
     * Execute command.
     */
    public function __invoke(): void;

    /**
     * Returns command name.
     *
     * @return string Command to register.
     */
    public function getName(): string;

    /**
     * Return callback to be executed before invoke command.
     *
     * @return callable|null Callable to invoke before command execution.
     */
    public function getBeforeInvoke(): ?callable;

    /**
     * Return callback to be executed after invoke command.
     *
     * @return callable|null Callable to invoke after command execution.
     */
    public function getAfterInvoke(): ?callable;

    /**
     * Return short command description (up to 80 chars).
     *
     * @return string|null The short description.
     */
    public function getShortDescription(): ?string;

    /**
     * Full command description (has no actual length limit).
     *
     * @return string|null The full command description.
     */
    public function getLongDescription(): ?string;

    /**
     * The synopsis of the command.
     *
     * @return string|array|null The command synopsis.
     */
    public function getCommandSynopsis();

    /**
     * Get WP_CLI hook on which the command will be executed.
     *
     * @see https://make.wordpress.org/cli/handbook/references/internal-api/wp-cli-add-hook/#notes
     *
     * @return string|null The hook name.
     */
    public function getWhen(): ?string;

    /**
     * Whether command registering was deferred.
     *
     * @return bool|null Whether command deferred.
     */
    public function isDeferred(): ?bool;

}
