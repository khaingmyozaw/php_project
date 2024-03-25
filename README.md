
# php project

Hello! this is my php project. I train it as my homework. Let's just talk about it!

# Overview
There are some features I tried.Like..
- register
- login/logout
- admin sessions
- manager sessions
- user sessions
- ban, delete and defining roles
and some restrict features I added more that can be faced in real world.

# Prerequisites
Before you begin, ensure you have the following installed on your system:
- PHP (>=7.0)
- composer
- MySQL (I use xampp server)

# Installation

1. clone my project

```cash
  git clone https://github.com/khaingmyozaw/php_project.git
```
2. 
```cash
  cd to_your_project_directory
  ```
3. If your have already install composer, run this command in your project directory

```cash
  composer require fakerphp/fakerphp
  ```
  or
if you don't have, install 
[Composer](https://getcomposer.org/download/) first.

then
- create a database named `php_project`or other.
- and draw two tables in it named `roles` and `users`
4. In `roles` table, create 3 rows
`id (int / auto-increase)` /
`name (varchar - 255)` /
`value (int)`

5. In `users` table, create 11 rows

`id (int / auto-increase)`

`name (varchar-255)`

`email (varchar-255)`

`phone (varchar-255)`

`address (text) `

`password (varchar-255)`

`photo (varchar-255 / null)`

`role_id (int / default-1)`

`suspended (int / default-0)`

`created_at (datetime)`

`update_at (datetime / null)`

Notice that if you used other names for database and tables, you need to adjust in project. Let me know if you need some helps, thank you.


## 🔗 Links
[![portfolio](https://img.shields.io/badge/github-000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/khaingmyozaw)
[![linkedin](https://img.shields.io/badge/facebook-0A66C2?style=for-the-badge&logo=facebook&logoColor=white)](https://www.facebook.com/khaingmyozaw88)

Honesly! I am just a beginner. Sorry for some mistakes. Connect me if you need!
