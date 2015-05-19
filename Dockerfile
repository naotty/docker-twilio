FROM tnaototo/php-base:1.0
MAINTAINER tnaototo

USER root
WORKDIR /root

RUN curl -sS https://getcomposer.org/installer | php

WORKDIR /var/www/html

COPY composer.json composer.json
RUN /usr/local/bin/composer.phar install

COPY gohome.php gohome.php

RUN chown apache:apache -R /var/www/html/
RUN chmod 755 -R /var/www/html

RUN service httpd start
