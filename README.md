### Steps when setting up

1. `cp .env.example .env`
2. `composer install`
3. `php artisan key:generate`

Don't forget to fill your mail credentials in your `.env` 

### Endpoints

```
+-------------+------------------------------------------+
| Method      | URI                                      |
+-------------+------------------------------------------+
| GET|HEAD    | api/orders                               |
| GET|HEAD    | api/orders/{order}                       |
| POST|HEAD   | api/orders                               |
| PATCH|HEAD  | api/orders/{order}                       |
| DELETE|HEAD | api/orders/{order}                       |
| GET|HEAD    | api/order-pdf/mail/{id}                  |
| GET|HEAD    | api/order-pdf/export/{id}                |
+----------+---------------------------------------------+
```
