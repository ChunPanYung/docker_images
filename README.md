Dockers On Server
=================
Contains all configurations needed for custom docker containers


Usage
-----
**Build Docker Image**
```
$ docker build <path> --build-arg VARIABLE_KEY=VARIABLE_VALUE --pull \
--tag <self/jenkins:YYYY.MM.DD>
```

**Initialize Docker Containers**
```
$ export VARIABLE_KEY=VARIABLE_VALUE  # Create key value for use in compose.yml
$ echo "key=value" > .env  # Alternatively, put variables into .env file
$ docker compose up --detach
```

*Stop And Remove Containers**
```
$ docker compose down
```
