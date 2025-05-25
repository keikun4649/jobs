FROM php:8.1-fpm-alpine

# 1) ランタイムに必要な libzip を先にインストール
RUN apk add --no-cache \
    libzip

# 2) ビルド用依存パッケージをまとめてインストール
RUN apk add --no-cache --virtual .build-deps \
      $PHPIZE_DEPS \
      linux-headers \
      libzip-dev \
      oniguruma-dev \
      zip \
      unzip \
      git

# 3) PHP 拡張をビルド＆有効化
RUN docker-php-ext-install pdo_mysql mbstring zip \
 && pecl install xdebug \
 && docker-php-ext-enable xdebug

# 4) ビルド用パッケージをクリーンアップ
RUN apk del .build-deps

WORKDIR /var/www/html

COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# 必要に応じて権限調整
RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
