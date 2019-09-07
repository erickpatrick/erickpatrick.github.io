---
title: 'Xdebug with Homestead and PHPStorm'
date: 2019-08-13T00:00:00.000Z
description: >-
  Learn how to make Xdebug work withing Laravel Homestead with PHPStorm
categories:
  - programming
featured: true
extends: _layouts.post
section: content
---

> If you want to skip a small introduction for Xdebug and Homestead, got straight to __Syncing Xdebug, Homestead and PHPStorm__

## Xdebug
To better understand a problem at hand when facing a bug or creating a feature we should be using tools that help debugging. One of those tools for the PHP world is called Xdebug. This tool is an extension to the PHP executable that observes every request made to one PHP application and is able to tell us lots of useful data regarding request parameters, server variables, program objects instantiated and current values for each and every one of those and some more.

## Homestead
Laravel Homestead is a CLI application that generates a Vagrant (tool to run operating system from the command line inside other operating system) configuration that we can use and is better tailored for Laravel applications. However, with some tweaks - depending on the application - we can make it work for any PHP code.

The configuration it provides helps replicating equally in all computers of developers of a team. This way, in theory, one code that works in one developer machine will also work in another developer machine, allowing better workflows of development and bug fixing. This configuration is also responsible to install/bring by default Xdebug, which we can enable and use it to debug our code.

## Syncing Xdebug, Homestead and PHPStorm
As Homestead is another (__guest__) operating system inside the actual operating system we run (__host__), the code of our application inside of it is treated as *remote code*. This means that, for our debugging purposes, it's like the code is in *another machine* that we need to connect to in order to know more about it. As such, we need to sync Xdebug extra information from within Homestead to our PHPStorm installation on our host. To do so, we have a few steps to follow:

### Xdebug configuration in Homestead
You can find where it is located by running `php --ini | grep xdebug` which you show a path where the configuration resides. It may be needed to use escalation of privileges to run the process by using `sudo` to open given path, like `sudo vim <path-to-xdebug-ini>`.

Inside the Xdebug configuration, paste the following content:

```php
zend_extension=xdebug.so
xdebug.remote_enable = 1
xdebug.remote_autostart=1
xdebug.remote_host=10.0.2.2
xdebug.remote_port = 9100
xdebug.remote_log=/home/vagrant/output.txt
```

A short explanation of this configuration:

- Line __#1__ enables the extension to attach itself to the PHP executable;
- Line __#2__ and #3 tells Xdebug to observe remote connections automatically;
- Line __#4__ and #5 tells to Xdebug the IP address and port from where the connection comes from and where it should send its extra data back
- Line __#6__ is a path to a file that Xdebug will log output regarding the remote connection which helps finding issues with Xdebug

After making those changes, save the file, quit the editor you're using and restart the PHP service loading given Xdebug configuration, like `sudo service php-7.1-fpm restart` or the corresponding method of your choice (e.g., `systemctl`).

You can verify if your PHP has Xdebug attached by running `php -v` and looking for Xdebug credits information on the output, like

```php
PHP 7.1.26-1+ubuntu18.04.1+deb.sury.org+1 (cli) (built: Jan 11 2019 14:13:49) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies
        with Zend OPcache v7.1.26-1+ubuntu18.04.1+deb.sury.org+1, Copyright (c) 1999-2018, by Zend Technologies
        with Xdebug v2.6.1, Copyright (c) 2002-2018, by Derick Rethans
        with blackfire v1.24.3~linux-x64-non_zts71, https://blackfire.io, by Blackfire
```

### PHPStorm Configuration on host machine
In PHPStorm we have a few places to configure, namely: *Settings > Languages & Frameworks > PHP > Debug*; and *Settings > Build, Execution, Deployment > Deployment*.

- __Settings > Languages & Frameworks > PHP > Debug__
    - __External connections__
        - Check `Ignore external connections through unregistered server configurations`
        - Uncheck `Break at first line in PHP Scripts`
    - __Xdebug__
        - Set `9100` for `Debug port`
        - Check All
    - __Evaluation__
        - Check All
    - __Advanced Settings__
         - Check All

And for the other we do the following:

- __Settings > Build, Execution, Deployment > Deployment__
    - Click the `+` button and select `SFTP`, and give it a name
    - On the configuration pane that appears do the following:
    - Connection Tab
        - Host: `127.0.0.1`
        - Port: `2222`
        - User name: `vagrant`
        - Authentication: `Password`
        - Password: `vagrant`
        - Check `Save password`
        - Root path: `/home/vagrant/<place where your code lives>` (normally would be `/home/vagrant/code`)
        - Web server URL: the url of your application that you added to your `Homestead.yaml` file
        - Advanced
            - Check `Send keep alive messages each:`
            - Use default value of `300`. 
    - Mappings Tab
        - Local Path: the path where the project files reside
        - Deployment path: normally just `/`
        - Web path: normally just `/`

Click `Apply` and `Ok`

### Debugging Process
Select a file where you would like to debug, add a breakpoint to it by clicking on the left gap between the line numbers and the code area itself so you can see a *red dot*. PHPStorm, when communicating to Xdebug will check if the PHP code reached that specific line and if so will halt the execution so we can check the current variables, objects and properties of the request and application.

Before being able to listen for debug messages, we need to tell the browser to send an extra information, via get parameter on the request, so PHPStorm knows that request should be checked. We do that by adding `?XDEBUG_SESSION_START=PHPSTORM`, like `http://local.application.test/?XDEBUG_SESSION_START=PHPSTORM`. Press end to access the page so the parameter is saved to the session.

After that, we can go to PHPStorm and tell it to start listening for connections by pressing the *button that looks like a telephone*, close to the ones where we see a *play button* and a *bug button*. When PHPStorm *is not* listening for debug connections this telephone button will have a *small red crossed circle* in it. On the other hand, while listening we see *3 small arcs* instead of the *small red crossed circle*.

Now, refresh the page, wait a moment and you should be able to see that PHPStorm has halted the PHP process and has a yellow background on the line that had the breakpoint (red dot) and opened a new area containing information regarding the current debugging request, with the current scope, objects, global variables and the likes.

> If you like this post, let me know through Twitter (@erickpatrick)
