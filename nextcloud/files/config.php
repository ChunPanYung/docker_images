<?php
/**
 * This configuration file is only provided to document the different
 * configuration options and their usage.
 *
 * DO NOT COMPLETELY BASE YOUR CONFIGURATION FILE ON THIS SAMPLE. THIS MAY BREAK
 * YOUR INSTANCE. Instead, manually copy configuration switches that you
 * consider important for your instance to your working ``config.php``, and
 * apply configuration options that are pertinent for your instance.
 *
 * This file is used to generate the configuration documentation.
 * Please consider following requirements of the current parser:
 *  * all comments need to start with `/**` and end with ` *\/` - each on their
 *    own line
 *  * add a `@see CONFIG_INDEX` to copy a previously described config option
 *    also to this line
 *  * everything between the ` *\/` and the next `/**` will be treated as the
 *    config option
 *  * use RST syntax
 */

$CONFIG = [
  /**
   * Your list of trusted domains that users can log into. Specifying trusted
   * domains prevents host header poisoning. Do not remove this, as it performs
   * necessary security checks.
   * You can specify:
   *
   * - the exact hostname of your host or virtual host, e.g. demo.example.org.
   * - the exact hostname with permitted port, e.g. demo.example.org:443.
   *   This disallows all other ports on this host
   * - use * as a wildcard, e.g. ubos-raspberry-pi*.local will allow
   *   ubos-raspberry-pi.local and ubos-raspberry-pi-2.local
   * - the IP address with or without permitted port, e.g. [2001:db8::1]:8080
   *   Using TLS certificates where commonName=<IP address> is deprecated
   */
  'trusted_domains' => [
    'localhost',
    'server.lan',
    'cloud.lan'
  ],
  /**
   * Use the ``apps_paths`` parameter to set the location of the Apps directory,
   * which should be scanned for available apps, and where user-specific apps
   * should be installed from the Apps store. The ``path`` defines the absolute
   * file system path to the app folder. The key ``url`` defines the HTTP Web path
   * to that folder, starting from the Nextcloud webroot. The key ``writable``
   * indicates if a Web server can write files to that folder.
   */
  'apps_paths' => [
    [
      'path'=> '/var/www/nextcloud/apps',
      'url' => '/apps',
      'writable' => true,
    ],
  ]
];

?>
