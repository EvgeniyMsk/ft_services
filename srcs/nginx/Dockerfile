FROM alpine:latest

RUN apk update && \
	apk add nginx && \
	apk add openssl && \
	apk add openssh && \
	apk add tar && \
	apk add openrc && \
	apk add supervisor && \
	apk add gettext && \
	apk add vim

RUN	adduser -D user
RUN	echo "user:password"|chpasswd
RUN ssh-keygen -A
RUN openssl req -x509 -nodes -days 30 -newkey rsa:2048 \
	-subj '/C=RU/ST=Moscow/L=Moscow/O=42/OU=21/CN=qsymond' \
	-keyout /etc/ssl/localhost.key \
	-out /etc/ssl/localhost.crt

COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY sshd_config /etc/ssh/sshd_config
COPY supervisord.conf /etc/supervisord.conf
COPY start.sh /tmp/start.sh

RUN chmod +x /tmp/start.sh

EXPOSE 80 443 22

CMD ["sh", "-c", "/tmp/start.sh ; /usr/bin/supervisord -c /etc/supervisord.conf"]
