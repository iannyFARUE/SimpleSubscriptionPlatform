#Simple Subscription Platform
A simple Subscription Platform

## About Simple Subscription Platform

simple subscription platform is a RESTful API that uses MySQL database in where users can subscribe to multiple website. Whenever a new post is published on a particular website, all it's subscribers shall receive an email with the post title and description in it. (no authentication of any kind is required)

## Usage

Change the _.env.example_ to _.env_ and add your database info

For MYSQL, add

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simplesubscriptionplatform
DB_USERNAME=your-mysql-user-name
DB_PASSWORD=your-mysql-server-password
```

Create a database and create your user

## Login to mysql server via terminal

```bash
mysql -u root -p
```

## Create User

```sql
CREATE USER 'someuser'@'localhost' IDENTIFIED BY 'somepassword';
```

## Grant All Priveleges On All Databases

```sql
GRANT ALL PRIVILEGES ON * . * TO 'someuser'@'localhost';
FLUSH PRIVILEGES;
```

## Create Database

```sql
CREATE DATABASE simplesubscriptionplatform;
```

# Run the webserver on port 8000

php artisan serve

```

```
