#!/usr/bin/env bash
apt update
apt upgrade --yes
apt autremove --yes
apt --yes install python3-pip pipx
apt install --yes gnupg software-properties-common

# Dev tools
pipx install pre-commit

# Ansible tools
pipx install ansible-core 
pipx inject ansible-core --include-apps ansible-lint yamllint
# terraform
wget -O- https://apt.releases.hashicorp.com/gpg | gpg --dearmor | tee /usr/share/keyrings/hashicorp-archive-keyring.gpg
echo "deb [signed-by=/usr/share/keyrings/hashicorp-archive-keyring.gpg] https://apt.releases.hashicorp.com $(lsb_release -cs) main" | tee /etc/apt/sources.list.d/hashicorp.list
apt update && apt install --yes terraform
