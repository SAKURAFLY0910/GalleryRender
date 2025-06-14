FROM php:8.2-apache

# 安装依赖并启用 zip 和 gd 扩展
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install zip gd

# 拷贝你的 PHP 项目代码
COPY . /var/www/html/

# 启用 Apache 重写模块（如果需要）
RUN a2enmod rewrite
