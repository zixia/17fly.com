#!/usr/bin/env bash

set -e
set -o pipefail

docker run \
  --rm \
  -ti \
  -e FLY17_MYSQL_HOST \
  -e FLY17_MYSQL_USER \
  -e FLY17_MYSQL_PASS \
  -v /data/17fly.com/home/data:/webroot/home/data \
  -v /data/17fly.com/home/attachment:/webroot/home/attachment \
  -v /data/17fly.com/center/data:/webroot/center/data \
  -v /data/17fly.com/wiki/data:/webroot/wiki/data \
  -v /data/17fly.com/wiki/uploads:/webroot/wiki/uploads \
  -p 8080:80 \
  -e VIRTUAL_HOST=17fly.zixia.net,*.17fly.zixia.net \
  -e LETSENCRYPT_HOST=17fly.zixia.net, \
  -e HTTPS_METHOD=noredirect \
  --entrypoint bash \
  17fly.com

  #ghcr.io/zixia/17fly.com
