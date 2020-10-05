#!/bin/sh

adduser -D -h /var/ftp peer
echo "peer:password" | chpasswd
vsftpd /etc/vsftpd/vsftpd.conf