<p align="center">
<a href="https://github.com/radthoc"><img src="./public/avatar.png" alt="My repo"></a>
</p>

## nFibo

This was a coding challenge to calculates the Nth Fibonacci number using **docker** and setup a gitlab **CI** to run the tests everytime a commit is pushed 

## Build
#### Run the environment
- docker-compose up -d
- docker-compose exec -T app composer install

#### Run the tests
docker-compose exec app php ./vendor/bin/phpunit

## TODOs
- Clean the framework from non needed files 
