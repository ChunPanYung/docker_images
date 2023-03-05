FROM jenkins/jenkins:jdk11
# need root user for package installation
USER root
RUN apt-get update && \
    apt-get install -y --no-install-recommends lsb-release && \
    rm /var/lib/apt/lists/* -rf
RUN curl -fsSLo /usr/share/keyrings/docker-archive-keyring.asc \
  https://download.docker.com/linux/debian/gpg
RUN echo "deb [arch=$(dpkg --print-architecture) \
  signed-by=/usr/share/keyrings/docker-archive-keyring.asc] \
  https://download.docker.com/linux/debian \
  $(lsb_release -cs) stable" > /etc/apt/sources.list.d/docker.list
RUN apt-get update && \
    apt-get install -y  --no-install-recommends docker-ce-cli && \
    rm /var/lib/apt/lists/* -rf
USER jenkins
RUN jenkins-plugin-cli --plugins "blueocean docker-workflow"
