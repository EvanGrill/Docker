# PiHole Docker Container

## Building the Container

To get this container running for the first time:

```bash
docker compose up -d
```
_Note: The container hasn't been modified, so you don't need to include `--build`._

## Default Directory Structure

- `config` - Contains configuration information for running services. Nothing needs to be in this directory at the initial runtime. PiHole will populate it.
- `dnsmasq.d` - Again, nothing needs to be in this directory at initial runtime. PiHole will populate it.
- `docker-compose.yml` - Docker compose file containing configuration options.
- `README.md` - This file

## Environment Variables

Environment variables are stored in a `.env` file in the root directory. They are not included with this repo (secrets 🤫). The following should be specified at minimum:

- `TZ`: Server's timezone. Use a [valid option](https://en.wikipedia.org/wiki/List_of_tz_database_time_zones).
- `WEBPASSWORD`: Default password to set at initial runtime. If you exclude this, it can be set by running `pihole setpassword` in the pihole container (`docker exec -it pihole pihole setpassword`).
- `PIHOLE_DNS_`: Semicolon delimited list of external DNS for querying when an hostname isn't cached.
- `DNSMASQ_LISTENING`: This is important but I don't know what it does at this point. It should just be set to `all`
- `FTLCONF_LOCAL_IPV4`: Again, important, but I don't know what it does. It should be set to `0.0.0.0`.

## Further Documentation

- [Docker Documentation](https://docs.docker.com/)
- [PiHole Documentation](https://docs.pi-hole.net/)
- [Unbound Documentation](https://unbound.docs.nlnetlabs.nl/en/latest/)