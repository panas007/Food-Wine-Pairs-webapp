# Food-Wine-Pairs-webapp
Web app for food and wine pairings on cloud using containers (docker)

The application includes the microservices listed bellow:
- Application logic (php:7.4.11-apache)
- MySQL 
- phpMyAdmin

To run the web application you need to install Docker.

In the terminal (or powershell on windows) run

- Docker-compose up 

You can access the web-app in :

- http://localhost:80

You can manage MySQL from phpMyAdmin :

- http://localhost:8080


If you run the docker in the GCP you can access the web-app and keyrock in:

- http://EXTERNAL-IP/:80
  
- http://EXTERNAL-IP:8080
  
Where external ip is given by GCP
