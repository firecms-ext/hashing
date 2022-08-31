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
namespace FirecmsExt\Hashing\Driver;

use RuntimeException;

class Argon2IdDriver extends Argon2IDriver
{
    /**
     * Check the given plain value against a hash.
     *
     * @throws RuntimeException
     */
    public function check(string $value, string $hashedValue, array $options = []): bool
    {
        if ($this->verifyAlgorithm && $this->info($hashedValue)['algoName'] !== 'argon2id') {
            throw new RuntimeException('This password does not use the Argon2id algorithm.');
        }

        if (strlen($hashedValue) === 0) {
            return false;
        }

        return password_verify($value, $hashedValue);
    }

    /**
     * Get the algorithm that should be used for hashing.
     */
    protected function algorithm(): string
    {
        return PASSWORD_ARGON2ID;
    }
}
