# docker build --tag self/code-server:20230214
FROM lscr.io/linuxserver/code-server:latest
WORKDIR /config
COPY init.sh /config
RUN bash ./init.sh
