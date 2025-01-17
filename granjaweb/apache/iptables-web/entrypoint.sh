#!/bin/bash
# Ejecuta el script de iptables
./iptables-web.sh
# Luego, ejecuta el comando principal del contenedor
exec "$@"
