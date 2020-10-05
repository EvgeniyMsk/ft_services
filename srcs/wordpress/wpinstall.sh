#!/bin/sh
cd /www
wp core is-installed
if [ $? == 1 ]; then
    wp core download
fi
