#!/usr/bin/env bash
apt-get update
apt-get upgrade --yes
apt-get autremove --yes
apt-get --yes install python3-pip
pip install ansible-core ansible-lint yamllint
pip install pre-commit
