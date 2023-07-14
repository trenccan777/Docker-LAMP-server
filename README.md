# Docker-LAMP-server
Simple Linux, Apache, MySQL, PHP server on Docker with the PhpMyAdmin.

## Configuration
Edit the `.env` file to set the app name, database passwords and name. 

## Installation
Clone this repository to your pc. Open a terminal and `cd` into the project folder where `docker-compose.yaml` is located and run: 

```
docker-compose up -d
```

Visit your docker local IP address. You can get this address with `docker-machine ip`. If everything went well, you should see **Connection successful** message from the database. 

To stop the containers you can run:
```
docker-compose stop
```
To stop and remove the containers with volumes you can run:
```
docker-compose down -v
```

## Usage
You can start working with your PHP files in the `web` folder. PhpMyAdmin is available on port `8080`.