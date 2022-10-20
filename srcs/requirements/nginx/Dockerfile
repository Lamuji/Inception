FROM	debian:buster

RUN	apt update
RUN	apt upgrade -y
RUN     apt install openssl -y
RUN	apt install nginx -y
RUN	mkdir -p /var/www/localhost/html /etc/nginx/tls
RUN 	openssl req -x509 -sha256 -nodes -days 365 -newkey rsa:2048 \
	-keyout /etc/nginx/tls/rfkaier.key -out /etc/nginx/tls/rfkaier.crt \
	-subj "/C=FR/ST=Nice/L=Nice/O=42nice/OU=rfkaier/CN=rfkaier.42.fr"

COPY	./conf/default /etc/nginx/sites-available/default

EXPOSE	443/tcp 443/udp

ENTRYPOINT [ "nginx", "-g", "daemon off;" ]
