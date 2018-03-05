#!/bin/bash

set -e

chown -R www-data:www-data /var/www /var/log/php

# init mysql db if necessary
if [ ! -d /var/lib/mysql/mysql ];then
    mysqld --initialize-insecure --user=root --datadir=/var/lib/mysql
fi

chown -R mysql:mysql /var/lib/mysql /var/run/mysqld

if [ ! -d /var/lib/mysql/$MYSQL_DB ]; then
	/etc/init.d/mysql start
        mysql -e "create database $MYSQL_DB"
        mysql -e "grant all privileges on $MYSQL_DB.* to $MYSQL_USER identified by '$MYSQL_PASS'"
	pkill mysqld
fi

exec /usr/bin/supervisord --nodaemon -c /etc/supervisor/supervisord.conf
