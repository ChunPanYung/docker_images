# hadolint ignore=DL3007
# docker build --tag self/code-server:20230214
FROM lscr.io/linuxserver/code-server:latest
SHELL ["/bin/bash", "-o", "pipefail", "-c"]
RUN apt-get update && apt-get upgrade --yes && apt-get autremove --yes && \
    apt-get install --yes --no-install-recommends \
    python3-pip pipx gnupg software-properties-common && \
    wget -q -O- https://apt.releases.hashicorp.com/gpg | gpg --dearmor | \
      tee /usr/share/keyrings/hashicorp-archive-keyring.gpg && \
    echo "deb [signed-by=/usr/share/keyrings/hashicorp-archive-keyring.gpg] \
      https://apt.releases.hashicorp.com $(lsb_release -cs) main" | \
      tee /etc/apt/sources.list.d/hashicorp.list && \
    apt-get update && \
    apt-get install --yes --no-install-recommends terraform && \
    rm /var/lib/apt/lists/*
