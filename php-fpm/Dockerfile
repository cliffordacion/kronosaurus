# see https://github.com/cmaessen/docker-php-sendmail for more information

FROM php:fpm

RUN apt-get update && apt-get install -q -y \
      git g++ libcurl4-gnutls-dev libicu-dev libmcrypt-dev \
      libpq-dev libxml2-dev \
      unzip zlib1g-dev \
      procps\ 
      supervisor \
      ssmtp mailutils && rm -rf /var/lib/apt/lists/*

RUN git clone -b php7-ipv6 https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis

RUN docker-php-ext-install \
      pdo_mysql mysqli curl json mbstring pdo pdo_pgsql redis \
      && docker-php-ext-enable mysqli

RUN docker-php-ext-configure pdo_mysql

RUN echo "hostname=localhost.localdomain" > /etc/ssmtp/ssmtp.conf
RUN echo "root=root@example.com" >> /etc/ssmtp/ssmtp.conf
RUN echo "mailhub=maildev" >> /etc/ssmtp/ssmtp.conf

RUN echo "sendmail_path=sendmail -i -t" >> /usr/local/etc/php/conf.d/php-sendmail.ini

RUN echo "localhost localhost.localdomain" >> /etc/hosts

ENV TZ=Asia/Manila
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

RUN curl -sSL https://phar.phpunit.de/phpunit.phar -o /usr/bin/phpunit && chmod +x /usr/bin/phpunit
