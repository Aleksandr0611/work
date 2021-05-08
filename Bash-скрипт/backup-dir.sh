#!/bin/bash
if [ $# -ne 2 ]; then
    echo "usage: backup.sh path_to_sourse path_to_destination"
    exit 2;
fi

echo "check source dir."
if [ -d $1 ]; then
    echo "OK"
else
    echo "FAIL: Directory $1 does not exists."
fi
#создать каталог path_to_destination, если нет
if [ ! -d $2 ]; then
    mkdir $2
fi

filename="$(date --iso-8601).tar.gz"
echo tar -C $2 -czf "$filename" $1
tar -czf $2/$filename $1
