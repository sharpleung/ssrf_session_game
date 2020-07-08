FROM linode/lamp

ENV DEBIAN_FRONTEND noninteractive
RUN apt-get install -y uuid
ADD run.sh /usr/local/sbin/run.sh
RUN chmod 755 /usr/local/sbin/run.sh

RUN	chmod -R 777 /var/www/example.com/*	&& \
	chown -R root /var/www/example.com/	&& \
	rm -rf /var/www/example.com/*	
	
COPY ./www /var/www/example.com/public_html
EXPOSE 80
CMD ["/usr/local/sbin/run.sh"]