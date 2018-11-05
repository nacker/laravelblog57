# Composer 安装与使用
## 1、Composer 的安装
### 1.1 Wondows 平台

下载[Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)后,一步步安装即可。

需要注意的是你需要开启 openssl 配置，我们打开 php 目录下的 php.ini，将 extension=php_openssl.dll 前面的分号去掉就可以了。

通过命令窗口(cmd) 输入 `composer --version` 命令来查看是否安装成功

更改 Packagist 为国内镜像：

```
composer config -g repo.packagist composer https://packagist.phpcomposer.com
```

### 1.2 Linux 平台

```
# php -r "copy('https://install.phpcomposer.com/installer', 'composer-setup.php');"
# php composer-setup.php

All settings correct for using Composer
Downloading...

Composer (version 1.6.5) successfully installed to: /root/composer.phar
Use it: php composer.phar
```
移动 composer.phar，这样 composer 就可以进行全局调用：

```
# mv composer.phar /usr/local/bin/composer
```
切换为国内镜像：

```
# composer config -g repo.packagist composer https://packagist.phpcomposer.com
```
更新 composer：

```
# composer selfupdate
```

### 1.3 Mac OS 系统
```
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
$ composer --version
Composer version 1.7.2 2018-08-16 16:57:12
```

切换为国内镜像 更新 composer：

```
$ composer config -g repo.packagist composer https://packagist.phpcomposer.com
$ composer selfupdate
```

## 2、Composer 的使用

先在项目的目录下创建一个 composer.json 文件，文件描述了项目的依赖关系。
文件格式如下：

```
{
    "require": {
        "monolog/monolog": "1.2.*"
    }
}
```
安装依赖包

```
composer install
```

require 命令

* require 命令快速的安装一个依赖而不需要手动在 composer.json 里添加依赖信息

```
composer require monolog/monolog
```

update 命令

* update 命令用于更新项目里所有的包，或者指定的某些包：

```
# 更新所有依赖
$ composer update

# 更新指定的包
$ composer update monolog/monolog

# 更新指定的多个包
$ composer update monolog/monolog symfony/dependency-injection

# 还可以通过通配符匹配包
$ composer update monolog/monolog symfony/*
```

remove 命令

* remove 命令用于移除一个包及其依赖（在依赖没有被其他包使用的情况下），如果依赖被其他包使用，则无法移除：

```
$ composer remove monolog/monolog
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 0 updates, 2 removals
  - Removing psr/log (1.0.2)
  - Removing monolog/monolog (1.23.0)
Generating autoload files
```

search 命令

```
search 命令可以搜索包：
$ composer search monolog
该命令会输出包及其描述信息，如果只想输出包名可以使用 --only-name 参数：
$ composer search --only-name monolog
```

show 命令

```
# 列出所有已经安装的包
$ composer show

# 可以通过通配符进行筛选
$ composer show monolog/*

# 显示具体某个包的信息
$ composer show monolog/monolog
```