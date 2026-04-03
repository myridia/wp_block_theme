DB_NAME=dbsql1
DB_USER=dbsql1
DB_PASSWORD=passpass

ask() {
  echo -e "What you like to do?, enter a Task Id from list below: \n"
  echo -e "TaskID\tFile\t\tDescription"
  echo -e "1\t Run - Docker Test Enviroment"
  echo -e "2\t Stop Docker"
  echo -e "3\t Clean Docker - Clean the docker containers and volumes "
  echo -e "4\t Clean All - Clean the docker containers and volumes and images "
  echo -e "5\t Rename to host 127.0.0.1"
  echo -e "6\t Export Database"
  echo -e "7\t Import Database"
  echo -e "8\t Logfile /wordpress/wp-content/debug.log"
  echo -e "9\t Wpcli - to use commandline WP-CLI"
  echo -e "10\t Run - Docker Test Enviroment verbose"
  echo -e "11\t Activate all Plugins "
  echo -e "12\t Dactivate all Plugins "
  echo -e "13\t Activate Plugis woo,alma,bakery js"
  echo -e "14\t Theme twentytwentyfive"
  echo -e "15\t Theme xx"
  echo -e "16\t "
  echo -e "17\t "
  echo -e "18\t "
  echo -e "0\t Exit"
}

ask

until [ "$task" = "0" ]; do
  read task

  if [ "$task" = "1" ]; then
    echo "...${task}"
    cd dockers
    docker-compose up -d
    echo "Go to:"
    echo "http://127.0.0.1"
    brave-browser "http://127.0.0.1:81/index.php" &
  elif [ "$task" = "10" ]; then
    echo "...${task}"
    cd dockers
    docker-compose up

  elif [ "$task" = "2" ]; then
    echo "...${task}"
    cd dockers
    docker-compose down

  elif [ "$task" = "3" ]; then
    echo "...${task}"
    docker rm --force $(docker ps -qa)
    docker volume rm $(docker volume ls -q --filter dangling=true)
    docker network prune --force

  elif [ "$task" = "4" ]; then
    echo "...${task}"
    docker rm --force $(docker ps -qa)
    docker volume rm $(docker volume ls -q --filter dangling=true)
    docker network prune
    docker rmi --force $(docker images -aq)

  elif [ "$task" = "5" ]; then
    echo "...${task}"
    docker exec wpcli wp search-replace "https://xxxx.com" "http://127.0.0.1" --skip-columns=guid --allow-root

  elif [ "$task" = "6" ]; then
    echo "...task ${task}..."
    docker run -i --rm --net=host salamander1/mysqldump --verbose -h 10.5.0.4 -u "${DB_NAME}" -p"${DB_PASSWORD}" "${DB_NAME}" | gzip >"dockers/init/${DB_NAME}.sql.gz"

  elif [ "$task" = "7" ]; then
    echo "...task ${task} "

  elif [ "$task" = "8" ]; then
    echo "...task ${task} "
    tail wordpress/wp-content/debug.log -f

  elif [ "$task" = "9" ]; then
    echo "...task ${task} "
    docker exec -it wpcli bash

  elif [ "$task" = "11" ]; then
    echo "...task ${task} "
    docker exec wpcli wp plugin activate --all --allow-root
    docker exec wpcli wp plugin list --all --allow-root

  elif [ "$task" = "12" ]; then
    echo "...task ${task} "
    docker exec wpcli wp plugin deactivate --all --allow-root
    docker exec wpcli wp plugin list --all --allow-root

  elif [ "$task" = "13" ]; then
    echo "...task ${task} "
    docker exec wpcli wp plugin activate woocommerce alma-gateway-for-woocommerce js_composer --allow-root
    docker exec wpcli wp plugin list --all --allow-root

  elif [ "$task" = "14" ]; then
    echo "...task ${task} "
    docker exec wpcli wp theme install twentytwentyfive --activate --allow-root
    docker exec wpcli wp theme list --all --allow-root

  elif [ "$task" = "15" ]; then
    echo "...task ${task} "
    docker exec wpcli wp theme activate impeka-child --allow-root
    docker exec wpcli wp theme list --all --allow-root

  elif [ "$task" = "16" ]; then
    echo "...task ${task} "

  elif [ "$task" = "17" ]; then
    echo "...${task}"

  elif [ "$task" = "18" ]; then
    echo "...${task}"

  elif [ "$task" = "0" ]; then
    echo "...task ${task} "
    echo "Goodbye! - Exit"

  else
    echo "Goodbye! - Exit"

  fi

  ask

done
