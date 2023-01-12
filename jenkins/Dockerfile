# need root user for package installation
FROM jenkins/jenkins
USER root

ENV sh_docker=/tmp/get-docker.sh
# Setup Docker
RUN curl -fsSL https://get.docker.com/ -o $sh_docker
RUN chmod 744 $sh_docker && sh $sh_docker
RUN rm $sh_docker
RUN groupmod --gid 132 docker
RUN usermod --append --group docker jenkins

USER jenkins
