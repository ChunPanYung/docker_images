After setup run the following get the trusted_domain
`$ docker exec --user www-data nextcloud_app php occ config: system:get trusted_domains`

To set a new one:
`$ docker exec --user www-data nextcloud_app php occ config: system:set trusted_domains`
