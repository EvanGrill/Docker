# Nginx/PHP/MariaDB Docker Container

## Building the Container

To get this container running for the first time:

```bash
docker compose up -d --build
```

After the initial build, you can exclude the `--build` parameter. Docker will continue to use your custom built container image.

## Default Directory Structure

- `config` - Contains configuration information for running services. `nginx.conf` should live here.
- `data` - Data necessary at runtime. `data/html` is the root directory for the webserver.
- `php` - Contains `Dockerfile` for initial build. User shouldn't need to modify this unless they know what they're doing.
- `docker-compose.yml` - Docker compose file containing configuration options.
- `README.md` - This file

## Environment Variables

Environment variables are stored in a `.env` file in the root directory. They are not included with this repo (secrets 🤫). The following should be specified at minimum:

- `MARIADB_ROOT_PASSWORD`
- `MARIADB_DATABASE`
- `MARIADB_USER`
- `MARIADB_PASSWORD`

## Further Documentation

- [Docker Documentation](https://docs.docker.com/)
- [NGINX Documentation](https://nginx.org/en/docs/)
- [PHP Documentation](https://www.php.net/docs.php)
- [MariaDB Documentation](https://mariadb.org/documentation/)