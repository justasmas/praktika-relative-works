# Relative works task

Custom todo website with 2 types of users: casual and admins.

Admins can assign tasks to users and users can retview them and mark them as completed

## Admin

username: justas@gmail.com

pass: justas123

### Prerequisites

Composer

Node

XAMPP (apache, mysql, php 7.3)


### Installing

```
cd danielius-praktika
```

```$xslt
composer install
```

```$xslt
cp .env.example .env
```

```$xslt
php artisan key:generate
```

```$xslt
php artisan migrate
```
```$xslt
php artisan db:seed
```

```$xslt
php artisan serve
```
