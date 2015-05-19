## Welcome

This is a project for initial CodeIgniter assignment. Is available on [http://alexandreazevedo.me/convenia](http://alexandreazevedo.me/convenia) over production environment

---

###REQUIREMENTS###

Required to run:

- PHP: 5.4

- Node.js: 0.12.0 (Bower: 1.3.12)

- Composer: stable


**MAC OSX:**
  
***MacPorts***
```
$ sudo port install npm
$ npm install -g bower
```
  
***Homebrew***
```
$ sudo brew install npm
$ npm install -g bower
```

**Ubuntu:**
```
$ sudo apt-get install npm
$ npm install -g bower
```

To install Composer on UNIX-based systems, use:
```
$ curl -sS https://getcomposer.org/installer | php

# Global install of Composer
$ sudo mv composer.phar /usr/local/bin/composer
```

**Windows:**

Download the [Node.js](https://nodejs.org/download/) and [Composer](https://getcomposer.org/download/) via website.
When installing, ensure you have chosen option "Add to PATH". After installed both of them, put on command line:
```
$ npm install -g bower
```


### Quick Start

1: Clone the repo

```
$ git clone https://github.com/alexndreazevedo/convenia-dev.git
$ cd convenia-dev
```

2: Install the dependencies:

```
$ composer install
$ bower install
```


3: Over an operational installation of LAMP, WAMP or XAMPP, run the code from the DocRoot Apache folder and open the [http://localhost/convenia-dev](http://localhost/convenia-dev).


License & copyright
-------------------

Convenia-dev is Copyright &copy; 2015 Alexandre Azevedo [@alexndreazevedo](https://github.com/alexndreazevedo) and licensed under theApache License 2.0. All rights not explicitly granted in the Apache License 2.0 are reserved. See the included LICENSE file for more details.