FROM alpine:latest

RUN	apk add mysql mysql-client

COPY start.sh /tmp/start.sh
RUN chmod +x /tmp/start.sh
COPY my.cnf /etc/
VOLUME /var/lib/mysql

ENTRYPOINT ["/bin/sh", "/tmp/start.sh"]
