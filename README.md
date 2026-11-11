## laravel-reference

To understand the MVC software architectural pattern, see [Model-view-controller](http://theonary.vercel.app/main/model-view-controller).

## Guide

Create Eloquent model and database migration. See [Database: Getting Started](https://laravel.com/framework/docs/database/migrations).

```bash
php artisan make:model Department --migration
```

Run the migration to create the database.

```bash
php artisan migrate
```

Create store  and update form requests to validate user input, enforce rules such as required, nullable, string only, and max characters. See [Validation](https://laravel.com/framework/docs/validation).

```bash
php artisan make:request StoreDepartmentRequest
php artisan make:request UpdateDepartmentRequest
```

Create a resource controller to define business logic for CRUD. See [Controllers](https://laravel.com/framework/docs/controllers).

```bash
php artisan make:controller DepartmentController --model=Department --resource
```
