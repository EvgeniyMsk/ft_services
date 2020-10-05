FROM alpine:latest

RUN apk update && \
    apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session php7-zip && \
    mkdir -p /www/tmp && \
	apk add wget curl nginx gettext && \
	apk add supervisor
RUN mkdir -p /run/nginx

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-english.tar.gz && \
	tar -xzvf phpMyAdmin-5.0.1-english.tar.gz --strip-components=1 -C /www && \
	chmod 777 /www/tmp

RUN adduser -D -g 'www' www

COPY config.inc.php /www
COPY nginx.conf /etc/nginx/nginx.conf
COPY nginx.conf /etc/nginx.conf

COPY supervisord.conf /etc/supervisord.conf

COPY start.sh .
RUN chmod +x start.sh

EXPOSE 5000

CMD [ "sh", "-c", "/tmp/start.sh ; /usr/bin/supervisord -c /etc/supervisord.conf" ]
