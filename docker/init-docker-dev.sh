echo 'Copiando configuração do ngnix para o o interno...'
docker cp $PWD/docker/build/nginx/currency-exchange.conf currency-exchange:/etc/nginx/conf.d/

echo 'Copiando configuração do ngnix para o base...'
docker cp $PWD/docker/build/nginx/currency-exchange.conf nginx:/etc/nginx/conf.d/

echo "Teste de sinstaxe"
docker exec nginx nginx -t
docker exec currency-exchange nginx -t



echo 'Restartando NGINX do container ...'
docker exec currency-exchange bash service nginx restart
printf "\n"

docker exec nginx bash service nginx restart
printf "\n"

echo 'Restartando NGINX local...'
docker restart nginx
