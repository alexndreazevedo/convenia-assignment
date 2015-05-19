## Welcome

This is a project for initial CodeIgniter assignment.

---

###REQUIREMENTS###

Required to run:

- PHP: 5.4

- Node.js: 0.12.0 (Bower: 1.3.12)


**MAC OSX:**
  
MacPorts
```
#!terminal

$ sudo port install npm && npm install -g bower && sudo port install composer
```
  
Homebrew
```
#!terminal

$ sudo brew install npm && npm install -g bower && sudo brew install composer
```

**Linux:**
```
#!terminal

$ sudo apt-get install nodejs && npm install -g bower && sudo apt-get install composer
```

**Windows:**

Download the [Node.js](https://nodejs.org/download/) and [Composer](https://getcomposer.org/download/) via website.
When installing, ensure you have chosen option "Add to PATH". After installed both of them, put on command line:
```
#!terminal

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
#!terminal

$ composer install
$ bower install
  
```


3: Over an operational installation of LAMP, WAMP or XAMPP, run the code from the DocRoot Apache folder and open the http://localhost/convenia-dev


License & copyright
-------------------

Convenia-dev is Copyright &copy; 2015 Alexandre Azevedo [@alexndreazevedo](https://github.com/alexndreazevedo) and licensed under theApache License 2.0. All rights not explicitly granted in the Apache License 2.0 are reserved. See the included LICENSE file for more details.