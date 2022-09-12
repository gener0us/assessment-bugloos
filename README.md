Assessment Bugloos

The purpose of this test is to design a code that receives the output from a API and converts this response into another object.

## Tech Stack

- Mysql Database
- [Laravel framework](https://github.com/laravel/framework)
- [Nwidart - Laravel Modules](https://github.com/nWidart/laravel-modules)

## Installation and Usage:

1. Install assessment-bugloos with git:

```bash
git clone git@github.com:gener0us/assessment-bugloos.git
```
2. Switch to the repo folder

```bash
cd laravel-realworld-example-app
```
3. Install all the dependencies using composer


```bash
composer install
```
4. Copy the example env file and make the required configuration changes in the .env file


```bash
cp .env.example .env
```
5. Run the database migrations (Set the database connection in .env before migrating)

```bash
php artisan migrate
```
6. Start the local development server

```bash
php artisan serve
```
You can now access the server at http://127.0.0.1:8000

7. For change url api just change variable in .env

```bash
RESPONSE_API_SINGLE_URL="example.com"
```
and run this command:

```bash
php artisan config:clear
```
## Authors

- [@gener0us](https://www.github.com/gener0us)


## License

[The MIT License (MIT).](https://choosealicense.com/licenses/mit/)

