## Getting Started

### Clone the Repository

To get started, clone the repository using:

```bash
git clone https://github.com/tauraigombera/simple-blogging.git
```

### Project Setup
Install the necessary dependencies:

```bash
npm install
npm run build
composer install
```

### .env File Setup
To configure your environment, duplicate the .env.example file and rename it to .env.

### Database Setup
You can use PHP MyAdmin or any MySQL client of your choice to set up the databases. Create the following databases:

- simple-blogging

In your .env file, locate and modify the following blocks of code:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simple-blogging 
DB_USERNAME=[YOUR_DB_USERNAME]
DB_PASSWORD=[YOUR_DB_PASSWORD]
```

### Run migrations
Run the following commands to complete the setup:
```bash
php artisan migrate
```

Run the following command to populate seed data to the database
```bash
php artisan db:seed
```

### Generate encryption key
```bash
php artisan key:generate
```

### Make files accessible from the web - create a symbolic link from public/storage to storage/app/public
```bash
php artisan storage:link
```

### Start the server to serve the app
```bash
php artisan serve
```
### Contributing
