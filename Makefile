all : build

build :
	sudo docker-compose --file ./srcs/docker-compose.yml up -d --build

up :
	sudo docker-compose --file ./srcs/docker-compose.yml up -d

down :
	sudo docker-compose --file ./srcs/docker-compose.yml down

clean_docker :
	echo y | sudo docker system prune -a

clean_volume :
	sudo rm -rf /home/asebrech/data/DB /home/asebrech/data/wordpress
	sudo mkdir -p /home/asebrech/data/DB /home/asebrech/data/wordpress

fclean : clean_docker clean_volume

re : fclean build

.PHONY : all build up down fclean re
