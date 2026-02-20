<p align="center">
      <img style="width: 300px;margin-inline:auto" src="/public/img/logo.png" />
</p>
<h1 align="center">St. Lukes Medical Center</h1>

## Introduction

This project serves as a backend for the CMS and Doctor Finder Web of St. Lukes Medical Center.

## Features

-   Laravel Passport
-   Laravel Sanctum
-   Guzzle

## Getting Started

## Prerequisites

Make sure you have the following installed on your system:

-   PHP 8.2.X
-   MySQL
-   Nginx

## Installation

Clone the Repository :

Create a copy of the .env.example file and rename it to .env
Update the database configuration and other settings as needed.

```bash
cp .env.example .env
```

Install Composer :

```bash
composer install
```

Generate Application Key :

```bash
php artisan key:generate
```

Run the migration for the database :

```bash
php artisan migrate
```

Seed and populate the table :

```bash
php artisan db:seed
```

Install Laravel Passport, choose yes to prompts :

```bash
php artisan passport:install
```

Configure the storage for images and files

```bash
php artisan storage:link
```

## Extras

When a new package/dependency is installed, run :

```bash
composer update
```

Or

```bash
composer install
```

If an .env settings is change or any dependencies modified or updated, run :

```bash
php artisan config:clear
```

```bash
php artisan cache:clear
```

```bash
php artisan config:cache
```

If a route is added or updated, run :

```bash
php artisan route:clear
```

If running the previous commands still results as an error after modifying or updating (especially variables in the .env), try to run this command as a last option :

```bash
composer dump-autoload
```
