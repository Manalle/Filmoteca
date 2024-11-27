# Chemin vers le fichier docker-compose
DOCKER_COMPOSE_FILEPATH=.docker/docker-compose.yaml
DOCKER_PHP_CONTAINER=filmoteca_php

# Démarrer les conteneurs en arrière-plan
up:
	docker compose -f $(DOCKER_COMPOSE_FILEPATH) up -d

# Arrêter les conteneurs
down:
	docker compose -f $(DOCKER_COMPOSE_FILEPATH) down

# Recréer les conteneurs (utile après modification des Dockerfiles)
build:
	docker compose -f $(DOCKER_COMPOSE_FILEPATH) up --build -d

# Voir les logs des conteneurs
logs:
	docker compose -f $(DOCKER_COMPOSE_FILEPATH) logs -f

# Vérifier le statut des conteneurs
status:
	docker compose -f $(DOCKER_COMPOSE_FILEPATH) ps

# Nettoyer les conteneurs, réseaux, volumes, et images créés par `up`
clean:
	docker compose -f $(DOCKER_COMPOSE_FILEPATH) down --volumes --remove-orphans

# Redémarrer les conteneurs
restart: down up

# Se connecter au conteneur PHP
start:
	docker exec -it $(DOCKER_PHP_CONTAINER) /bin/bash

# Exécuter `composer install`
composer-install:
	docker exec $(DOCKER_PHP_CONTAINER) composer install

# Regénérer l'autoloading de Composer
dump-autoload:
	docker exec $(DOCKER_PHP_CONTAINER) composer dump-autoload