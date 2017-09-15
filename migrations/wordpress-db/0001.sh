#!/bin/bash
if [ `hostname | grep db1` ]; then INST=1-0; else INST=1-1; fi

ln -sf /etc/mysql-initscripts/mysql-5.6 /etc/init.d/mysql$INST
ln -sf /usr/local/mysql-latest /usr/local/mysql
ln -sf /usr/local/etc/mysql/mysql$INST.conf /etc/mysql/mysql$INST.cnf
PATH=$PATH:/usr/local/mysql/bin/

mkdir -p /var/log/mysql$INST
chown mysql.mysql /var/log/mysql$INST
cd /usr/local/mysql5.6/
./scripts/mysql_install_db --defaults-file=/etc/mysql/mysql$INST.cnf --user=mysql --datadir=/var/lib/mysql$INST --force  --skip-name-resolve
chown -R mysql.mysql /var/lib/mysql$INST
/etc/init.d/mysql$INST start
/usr/local/mysql/bin/mysqladmin --defaults-file=/etc/mysql/mysql$INST.cnf -u root password 'god'
mysql --defaults-file=/etc/mysql/mysql$INST.cnf -u root -sN  -pgod -e "create database wp;"
mysql --defaults-file=/etc/mysql/mysql$INST.cnf -u root -sN  -pgod -e "create user 'wp'@'%' IDENTIFIED BY 'drupal';"
mysql --defaults-file=/etc/mysql/mysql$INST.cnf -u root -sN  -pgod -e "GRANT REPLICATION SLAVE ON *.* TO 'replicate'@'%' IDENTIFIED BY 'magic';"
mysql --defaults-file=/etc/mysql/mysql$INST.cnf -u root -sN  -pgod -e "FLUSH PRIVILEGES;"
