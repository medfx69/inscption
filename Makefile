DOCKER_CONTEXT=srcs
build:
	docker-compose -f $(DOCKER_CONTEXT)/docker-compose.yml build
up:
	docker-compose -f $(DOCKER_CONTEXT)/docker-compose.yml up -d
build_and_up: 
	docker-compose -f $(DOCKER_CONTEXT)/docker-compose.yml up --build -d
clean:
	docker-compose -f $(DOCKER_CONTEXT)/docker-compose.yml down --rmi all
down:
	docker-compose -f $(DOCKER_CONTEXT)/docker-compose.yml down -v
stop:
	docker-compose -f kk/docker-compose.yml stop
remove: stop
	docker-compose -f kk/docker-compose.yml rm -f
	docker rmi $$(docker images -f "dangling=true" -q)
.PHONY: build run clear stop remove