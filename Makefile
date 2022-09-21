build_nginx :
	sudo docker-compose --file ./srcs/docker-compose.yml up --build nginx

build_wordpress :
	sudo docker-compose --file ./srcs/docker-compose.yml up --build wordpress
	
build_mariadb :
	sudo docker-compose --file ./srcs/docker-compose.yml up --build mariadb

build : build_nginx build_wordpress build_mariadb

down :
	sudo docker-compose --file ./srcs/docker-compose.yml down

reset_docker :
	echo y | sudo docker system prune -a

reset_volume :
	sudo rm -rf /home/asebrech/data/DB /home/asebrech/data/wordpress
	sudo mkdir -p /home/asebrech/data/DB /home/asebrech/data/wordpress	

reset : down reset_docker reset_volume

.PHONY : reset build
