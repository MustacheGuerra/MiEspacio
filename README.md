MiEspacio
=========
This is a practice social media site. 

Installing
----------
1. Make sure you have npm and composer installed.
2. Clone this repository into your ~/wamp/www directory.
3. Run composer-install.

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.

BRANCHING STRATEGY
------------------
Create a new branch for every ticket you pick up in Taiga. 

Database Confirguration
-----------------------
Don't forget to set up your database in phpMyAdmin. The database name we're using is 'miespacio'