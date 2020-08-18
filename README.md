# EasyAdmin Free Laravel Bootstrap Admin Template


[![Bootstrap Admin Template](https://drive.google.com/file/d/1OYqxCqdpFZvLqY1u8ewIe-YTUCd2D4i_/view?usp=sharing)](https://drive.google.com/file/d/1OYqxCqdpFZvLqY1u8ewIe-YTUCd2D4i_/view?usp=sharing)


EasyAdmin is meant to be the UX game changer. Pure & transparent code is devoid of redundant components, so the app is light enough to offer ultimate user experience. This means mobile devices also, where the navigation is just as easy and intuitive as on a desktop or laptop. The CoreUI Layout API lets you customize your project for almost any device – be it Mobile, Web or WebApp – CoreUI covers them all!

## Table of Contents

* [Versions](#versions)
* [Installation](#installation)
* [Usage](#Usage)
* [Features](#Features)




## Installation

``` bash
# clone the repo
 composer create-project yousry943/easyadmin

# go into app's directory
cd easyadmin

# run database migration
php artisan migrate

#run database seed
php artisan db:seed

```


Copy file ".env.example", and change its name to ".env".
Then in file ".env" replace this database configuration:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=laravel
* DB_USERNAME=root
* DB_PASSWORD=





## Usage

``` bash
# start local server
php artisan serve


```
Open your browser with address: [http://localhost:8000/public/admin/login](http://localhost:8000/public/admin/login)  
Click "Login" on sidebar menu and log in with credentials:

* E-mail: _manager@manager.com_
* Password: _123456_

This user has roles: super admin_


* E-mail: _admin@admin.com_
* Password: _123456_

This user has roles: without any permation _


Open your browser with address: [http://localhost:8000/public/login](http://localhost:8000/public/login)  
Click "Login" on sidebar menu and log in with credentials:

* E-mail: _user@user.com_
* Password: _123456_


---


## Features


#### Role management
Allows you to create, edit, delete and reorder user roles.
When a user has more than one role, the highest hierarchical role is used to create a menu for him.

#### Manage media
It allows to:
* Create virtual media folders.
* Send media to applications.
* Move media between folders,
* Cut images,

## Support EasyAdmin Development

EasyAdmin is an  open source project and completely free to use.  You can support development  by connecting to me  on [Gmail](mailto:ayousry943@gmail.com)
