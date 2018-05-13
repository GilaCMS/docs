
# Installation

### Preparation

Before beginning with installation make sure that your web host or local server meets these requirements:

- Apache 2 server
- MySQL / MariaDB server
- PHP 5.4+ with the following extensions *mysqli, zip, mysqlnd, json* and *mod_rewrite* enabled

If you want to install gila cms in your local machine and not sure how to prepare your server don't hesitate to ask for help on [Slack](https://gilacms.slack.com)

First unzip gila in a public html folder e.g */var/www/html/gila* and make sure that the folder is writable from the application.

In order to proceed with the installation, you will need your database settings. If you do not know your database settings, please contact your host and ask for them. You will not be able to continue without them. More precisely you need the database hostname, the database name, the database username and password.

### Installer

We access in installation page with the browser e.g *http://localhost/gila/install*

![Install](assets/install.jpg)

In the installation page we must fill all the fields

**Hostname:** the hostname of the database, usually it is *localhost*

**Database:** name of the database

**DB Username, DB Password:** the username and the password in order to connect to the mysql

**Admin Username, Admin Email, Admin Password:** a user will be created for the website as administrator with these data

**Base Url:** the web address of the website must finish with '/' e.g. *mywebsite.com/*

After filling the data and submit them, we wait a few seconds untill the installation is finished.

![alt text](assets/installed.jpg)

When installation is finished we can enter on the admin panel using the admin email and password that we wrote before.

![alt text](assets/login.jpg)

We can always access in the login page from these links
*mysite.com/* **login** it redirects to the front page of the website
*mysite.com/* **/admin** it redirects to the administration

We enter in the administration dashboard.

![alt text](assets/dash.jpg)

From the administation menu we choose Administration->Settings in order to fill more information about the website.

![alt text](assets/settings.jpg)
