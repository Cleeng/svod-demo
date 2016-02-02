## Getting Started

First clone Cleeng SVOD demo project. You have to ways: by git or download compressed package.

```bash
$ git clone https://github.com/sq3hll/svod-demo.git path-to-project
```
Or download compressed package by pushing button “Download ZIP”.

Next go to the project path, and install dependencies by composer .

If you don't have composer, install it locally by:


```bash
$ curl -sS https://getcomposer.org/installer | php
```
or globally by:

```bash
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer
```
Eventually use instruction :  https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx

Install all dependencies by composer installed locally:

```bash
$ php composer.phar install
```
or globally:

```bash
$ composer install
```

Now you can start PHP' built-in web server to verify installation:

```bash
$ php -S 0.0.0.0:8000 -t public/ public/index.php
```

And finally, open your browser and type  this URL 0.0.0.0:8000 into address bar.
