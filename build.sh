opt=${1}

if [ -z "${opt}" ]
then
    docker-compose up -d
elif [ "${opt}" == "build" ]
then
    docker-compose up -d --build
fi