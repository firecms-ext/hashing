<?php

declare(strict_types=1);

/**
 * This file is part of FirecmsExt Hashing.
 *
 * @link     https://www.klmis.cn
 * @document https://www.klmis.cn
 * @contact  zhimengxingyun@klmis.cn
 * @license  https://gitee.com/firecms-ext/hashing/blob/master/LICENSE
 */

use FirecmsExt\Hashing\Contract\HashInterface;
use Hyperf\Utils\ApplicationContext;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

if (!function_exists('bcrypt')) {
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    function bcrypt(string $value, array $options = []): string
    {
        return ApplicationContext::getContainer()
            ->get(HashInterface::class)
            ->make($value, $options);
    }
}


if (!function_exists('argon2i')) {
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    function argon2i(string $value, array $options = []): string
    {
        return ApplicationContext::getContainer()
            ->get(HashInterface::class)
            ->getDriver('argon2i')
            ->make($value, $options);
    }
}

if (!function_exists('argon2id')) {
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    function argon2id(string $value, array $options = []): string
    {
        return ApplicationContext::getContainer()
            ->get(HashInterface::class)
            ->getDriver('argon2id')
            ->make($value, $options);
    }
}
