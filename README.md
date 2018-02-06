# Docksal template for drupal projects.

This is my [docksal](http://docksal.readthedocs.io/en/master/) template for drupal sites. You can install it in a existing project by using the install file in this directory:
```
cd path/to/your/project *(in this directory you have $DOCROOT (docroot or web or html)*
curl -fsSL https://raw.githubusercontent.com/fjmk/docksal-template/master/install | bash

# if you want to use tagged branches, drupal7 or drupal8, you add a bash argument:
curl -fsSL https://raw.githubusercontent.com/fjmk/docksal-template/drupal8/install | bash -s drupal8
```


### Files in .docksal/
- **docksal.env** *# docksal enviroment file. Make some customizations in this file for production*
  - CLI_IMAGE='docksal/cli:2.0-php5.6'
  - VIRTUAL_HOST=your-project.docksal
  - MYSQL_BACKUP="${HOME}/backups/your-project.sql.gz"
- **docksal.local.env.dist** *to make some customizations in this file for testenvironment* ```cp .docksal/docksal-local.env.dist .docksal/docksal-local.env```
- **docksal-local.yml.dist**    *# Add phpmyadmin and mailhog containers ot this project* ```cp .docksal/docksal-local.yml.dist .docksal/docksal-local.yml```
- **templates/example.settings.local.php**    *# Example settings.local.php file. Is copied in init command if not exists in $DOCROOT}/sites/default/*

### Custom commands:
- **env** *# show local environment as seen in fin command*
- **init** *# init drupal in ${DOC_ROOT} and load database*
- **mydb** *# load database, create quick snapshot, load quick snapshot*
- **phpcs** *# test your files with phpcs*
- **test** *# quick test if your drupal site is up and running*

### phpmyadmin configuration file in .docksal/etc/
- **phpadmin.config.php** *# work on default database without logging in*

### Customize mysql in .docksal/etc/mysql/
- **my.cnf**

### Customize php in .docksal/etc/php
- php-cli.ini *# customize php-cli*
- php.ini *# customize php-fpm  (before version 2.0)*
- php-fpm.conf *# customize php-fpm  (from version 2.0+)

The drush directory
drush
  - aliases.drushrc.php  *# 'default' alias defined, add your extra aliases*

The $DOCROOT/tests/behat directory
- composer.json *# with extra requirements*
- behat.yml.dist *# copy this to behat.yml* (use: fin behat --tags d7)
- behat.chrome.yml *# test everything against real chrome browser* (use: fin behat --tags d7 --config behat.chrome.yml)

TODO
 - add baskstopjs visual regression tests?
 - add wraith visual regression tests
