# 使用官方 PHP + Apache 镜像
FROM php:8.2-apache

# 安装 zip 支持所需的依赖
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip

# 拷贝你的 PHP 项目到容器中
COPY . /var/www/html/

# 开启 Apache 的 mod_rewrite（如有需要）
RUN a2enmod rewrite
