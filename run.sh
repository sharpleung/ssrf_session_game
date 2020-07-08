#!/bin/sh
mkdir /var/www/example.com/log/
chmod /var/www/example.com/log/
service apache2 start
echo "flag{`uuid`}" > /flag
chomd 444 /flag
chmod 777 /var/www/example.com/public_html/.*
rm -f /usr/local/sbin/run.sh
/bin/bash
