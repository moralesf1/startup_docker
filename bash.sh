#!/usr/bin/env bash

cont=${1}
function usage()
{
	echo "Usage: ${0} <container-name>"
	exit 255
}

if [ -z "${cont}" ]
then
    usage

else
    docker exec -it ${cont} bash
fi