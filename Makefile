all : build

build :
	docker compose --file ./srcs/docker-compose.yml up -d --build

up :
	docker compose --file ./srcs/docker-compose.yml up -d

down :
	docker compose --file ./srcs/docker-compose.yml down

clean_docker :
	echo y | sudo docker system prune -a

clean_volume :
	rm -rf /home/rfkaier/data/DB /home/rfkaier/data/wordpress
	mkdir -p /home/rfkaier/data/DB /home/rfkaier/data/wordpress

fclean : clean_docker clean_volume

re : fclean build

.PHONY : all build up down fclean re
