Docker + Apache + HHVM test
===========================

This is an example project that demonstrates a simple yet somewhat flawed dev
setup with HHVM and Apache.

The idea is to have a relatively lighweight dev envrionment that can be a first
step to running docker containers in production.

Disclaimer
----------

The code in this repository is pure garbage. The goal of this repository is to
show off a php (hhvm) + mysql development envrionment on top of docker-compose.
The code was thrown together just to demonstrate that the pieces are working
together. Please don't use this as an example of proper php.

Usage
-----

1. Install Docker and Docker Compose
1. Copy `.env.example` and `.env`

    ```sh
    cp .env.example .env
    ```

1. Start the project

    ```sh
    docker-compose up
    ```

1. Point your browser to http://localhost:8080
1. Make a change to a file in `src/`
1. Refresh your browser (clear the cache!)
1. See your change

Caveats
-------

There are a number of problems with this project. Here they are listed here:

- HHVM is running version 3.11 which is pretty old. The base image doesn't
    really allow us to control the version.

- Apache has directory listing enabled. Look at http://localhost:8080/dir/ for
    an example.

- The docker image is pretty huge and hold a lot of stuff. It's running:
  - Apache
  - HHVM
  - cron
  - syslogd
  - ssh

- The database files (`tmp/db/*`) are owned by a strange user. This is a side
    effect of docker. The user inside the container running percona has an id
    that may or may not be used inside the host.

    This is fine but it could definately be worked on.
