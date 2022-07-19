<h1 align="center">Docker container for Spatie's Browsershot</h1>

<p align="center">
	<img src="https://github.com/robiningelbrecht/docker-browsershot/raw/master/readme/docker.webp" alt="Docker" height="220">
</p>

<p align="center">
<a href="https://github.com/robiningelbrecht/docker-browsershot/blob/master/LICENSE"><img src="https://img.shields.io/github/license/robiningelbrecht/docker-browsershot?color=428f7e&logo=open%20source%20initiative&logoColor=white" alt="License"></a>
</p>

------

A docker container that allows you to use the [Spatie\Browsershot](https://github.com/spatie/browsershot) package. Currently it requires `^php8.1`, feel free to fork and change. Consider giving it a ⭐ when you do.

## Installation & usage

* Clone this repository `git clone git@github.com:robiningelbrecht/docker-browsershot.git`
* Run `docker-compose up -d --build` to spin up and build the required container
* Run `docker-compose run --rm php-cli composer install` to install PHP dependencies
* Run `docker-compose run --rm php-cli npm install` to install Node dependencies
* Run the example by executing `docker-compose run --rm php-cli php example.php`

