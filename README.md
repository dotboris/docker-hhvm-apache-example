Docker + Apache + HHVM test
===========================

This is an example project that demonstrates a simple yet somewhat flawed dev
setup with HHVM and Apache.

The idea is to have a relatively lighweight dev envrionment that can be a first
step to running docker containers in production.

Usage
-----

1. Install Docker and Docker Compose
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
