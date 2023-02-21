# Jenkins

## Required Variables
dockerfile
- GID: group id of docker

docker-compose.yml
- DOCKER_TAG: tag of newly customized image

## Commands
1. To get group id of docker: `gid=$(getent group docker | cut -d: -f3)`
2. To build a jenkins image: `docker build --build-arg GID="$(echo $gid)"`
3. To start the jenkins container: `docker compose up --detach`

To remove docker container: `docker compose down`
