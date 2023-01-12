# docker build --tag nextcloud:casc .
FROM nextcloud
# Build time Variables
ARG EMAIL
ARG DOMAIN

USER root
COPY files/setssl.sh /usr/local/bin/
RUN chmod u+x /usr/local/bin/setssl.sh

COPY files/config.php /usr/src/nextcloud/config/

RUN /usr/local/bin/setssl.sh $EMAIL $DOMAIN
