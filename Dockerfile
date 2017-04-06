FROM padster83/centos7-php7-laravel
MAINTAINER patrick henry <docker@patrickhenry.us>

RUN yum -y install git
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html

EXPOSE 80 443

CMD /usr/sbin/httpd -c "ErrorLog /dev/stdout" -DFOREGROUND