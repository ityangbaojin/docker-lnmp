# 基于那个镜像创建自己的镜像
FROM php:7.1-fpm
# Author
MAINTAINER Bojan <ityangbaojin@163.com>

# 安装 git curl vim
RUN apt-get update && apt-get install -y git curl vim libfreetype6-dev \
    && rm -rf /var/lib/apt/list* \
    && pecl install zip \
    && docker-php-ext-enable zip

# 安装 composer, 配置composer中国镜像
RUN curl -o composer.phar https://getcomposer.org/composer.phar \
    && chmod +x composer.phar \
    && mv composer.phar /usr/local/bin/composer \
    && echo 'export PATH="$PATH:$HOME/.composer/vendor/bin"' >> ~/.bashrc \
    && . ~/.bashrc \
    && composer config -g repo.packagist composer https://packagist.phpcomposer.com

# 设置 Git 的身份
RUN git config --global user.name "bojan" \
    && git config --global user.email "ityangbaojin@163.com"    