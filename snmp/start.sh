#!/bin/sh
while true; do
sleep 30
rrdupdate rrd/eth3.rrd N:\
`/usr/bin/snmpget -v 2c -c public -Oqv 10.211.55.2 IF-MIB::ifInOctets.4`:\
`/usr/bin/snmpget -v 2c -c public -Oqv 10.211.55.2 IF-MIB::ifOutOctets.4`\

done
