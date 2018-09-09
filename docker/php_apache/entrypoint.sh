#!/bin/sh
set -e

# first arg is `-f` or `--some-option`
if [ "${1#-}" != "$1" ]; then
	set -- apache2-foreground "$@"
fi


# 将环境变量保存至 /etc/default/locale
rm -rf /etc/default/locale
env >> /etc/default/locale

crontab /cron
# 启动 crontab
/etc/init.d/cron start

exec "$@"