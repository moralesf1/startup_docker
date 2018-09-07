#!/usr/bin/env bash

STAGE=${1}

function usage()
{
	echo "Usage: ${0} <all|container-name>"
	exit 255
}

if [ -z "${STAGE}" ]
then
    usage

elif [ "${STAGE}" == "all" ]
then

	docker stop web
    docker rm web
    docker stop db
    docker rm db
    docker stop phpmyadmin
    docker rm phpmyadmin
else
	docker stop ${STAGE}
    docker rm ${STAGE}
fi



