#!/bin/bash
docker compose down --volumes

docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)

docker volume rm nextcloud_aio_apache nextcloud_aio_collabora_fonts
docker volume rm nextcloud_aio_database nextcloud_aio_database_dump
docker volume rm nextcloud_aio_mastercontainer nextcloud_aio_nextcloud
docker volume rm nextcloud_aio_nextcloud_data nextcloud_aio_redis

docker volume prune --force
