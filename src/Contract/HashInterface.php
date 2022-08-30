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
namespace FirecmsExt\Hashing\Contract;

interface HashInterface extends DriverInterface
{
    /**
     * Get a driver instance.
     */
    public function getDriver(?string $name = null): DriverInterface;
}
