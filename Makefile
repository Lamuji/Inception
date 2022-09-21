build_nginx :
	sudo docker-compose --file ./srcs/docker-compose.yml up -d --build nginx

build_wordpress :
	sudo docker-compose --file ./srcs/docker-compose.yml up -d --build wordpress
	
build_mariadb :
	sudo docker-compose --file ./srcs/docker-compose.yml up -d --build mariadb

build :
	sudo docker-compose --file ./srcs/docker-compose.yml up -d --build

up_nginx :
	sudo docker-compose --file ./srcs/docker-compose.yml up nginx

up_wordpress :
	sudo docker-compose --file ./srcs/docker-compose.yml up wordpress
        
up_mariadb :
	sudo docker-compose --file ./srcs/docker-compose.yml up mariadb

up :
	sudo docker-compose --file ./srcs/docker-compose.yml up

down :
	sudo docker-compose --file ./srcs/docker-compose.yml down

reset_docker :
	echo y | sudo docker system prune -a

reset_volume :
	sudo rm -rf /home/asebrech/data/DB /home/asebrech/data/wordpress
	sudo mkdir -p /home/asebrech/data/DB /home/asebrech/data/wordpress	

reset : down reset_docker reset_volume

.PHONY : reset build
