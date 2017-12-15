# 基于那个镜像创建自己的镜像
FROM php:7.1-fpm
# Author
MAINTAINER Bojan <ityangbaojin@163.com>

# 向 PHP 镜像中添加扩展, gd扩展需要安装两个包(libpng12-dev libjpeg-dev)
RUN apt-get update && apt-get install -y libpng12-dev libjpeg-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
    && docker-php-ext-install gd pdo_mysql zip opcache

# 将对应的配置文件拷贝到容器中的 PHP 配置目录中，以覆盖原有的 PHP 配置
COPY ./config/php.ini /usr/local/etc/php/conf.d/
COPY ./config/opcache-recommended.ini /usr/local/etc/php/conf.d/