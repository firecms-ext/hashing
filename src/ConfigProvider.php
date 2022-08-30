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
namespace FirecmsExt\Hashing;

use FirecmsExt\Hashing\Contract\HashInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                HashInterface::class => HashManager::class,
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for firecms-ext/hashing.',
                    'source' => __DIR__ . '/../publish/hashing.php',
                    'destination' => BASE_PATH . '/config/autoload/hashing.php',
                ],
            ],
        ];
    }
}
