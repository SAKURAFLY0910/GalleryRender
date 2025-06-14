# 使用官方 PHP + Apache 镜像
FROM php:8.2-apache


# 在 php:8.x-apache 或 php:8.x-fpm 的基础上安装 gd
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip


# 拷贝你的 PHP 项目到容器中
COPY . /var/www/html/

# 开启 Apache 的 mod_rewrite（如有需要）
RUN a2enmod rewrite
