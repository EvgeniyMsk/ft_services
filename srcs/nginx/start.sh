#!/bin/sh

mkdir -p /var/run/nginx

adduser -D ${SSH_USERNAME}
echo "${SSH_USERNAME}:${SSH_PASSWORD}" | chpasswd