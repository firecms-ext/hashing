# firecms-ext/hashing

```shell
# 依赖安装
composer require firecms-ext/hashing
# 发布配置
php bin/hyperf.php vendor:publish firecms-ext/hashing
```

# 助手函数

```php

bcrypt(string $value, array $options = []): string

argon2i(string $value, array $options = []): string

argon2id(string $value, array $options = []): string
```
