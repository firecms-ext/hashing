<?php

declare(strict_types=1);
/**
 * This file is part of FirecmsExt Hashing.
 *
 * @link     https://www.klmis.cn
 * @document https://www.klmis.cn
 * @contact  zhimengxingyun@klmis.cn
 * @license  https://github.com/firecms-ext/hashing/blob/master/LICENSE
 */
namespace FirecmsExt\Hashing;

use FirecmsExt\Hashing\Contract\DriverInterface;
use FirecmsExt\Hashing\Contract\HashInterface;
use Hyperf\Utils\ApplicationContext;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

abstract class Hash
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function getDriver(?string $name = null): DriverInterface
    {
        return ApplicationContext::getContainer()->get(HashInterface::class)->getDriver($name);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function info(string $hashedValue, ?string $driverName = null): array
    {
        return static::getDriver($driverName)->info($hashedValue);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function make(string $value, array $options = [], ?string $driverName = null): string
    {
        return static::getDriver($driverName)->make($value, $options);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function check(string $value, string $hashedValue, array $options = [], ?string $driverName = null): bool
    {
        return static::getDriver($driverName)->check($value, $hashedValue, $options);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function needsRehash(string $hashedValue, array $options = [], ?string $driverName = null): bool
    {
        return static::getDriver($driverName)->needsRehash($hashedValue, $options);
    }
}
