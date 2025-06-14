# 使用官方 PHP + Apache 镜像
FROM php:8.2-apache

    
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip

# 拷贝你的 PHP 项目到容器中
COPY . /var/www/html/

# 开启 Apache 的 mod_rewrite（如有需要）
RUN a2enmod rewrite
