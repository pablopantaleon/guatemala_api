# Guatemala API
Laravel

Requerimientos:

- Tener instalado PHP
- Tener composer 

Para configurar la db:

1. Ir al archivo `.env`
2. Crear la db y ponerle "guateapi" (aqui tengo postgres pero puede ser cualquiera)
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=guateapi
DB_USERNAME=postgres
DB_PASSWORD=postgres
```

Para correrlo:

```
$: php artisian serve
```

Generar Dummy data para las promos:

```
$: php artisan db:seed 
```

Correr test cases:

```
$: composer test
```


### Postman
El archivo de [Guatemala API Postman](https://github.com/pablopantaleon/guatemala_api/blob/master/https://github.com/pablopantaleon/guatemala_api/blob/master/Guatemala%20API.postman_collection.json) el cual se puede importar para probar el `login, register, CRUD promos`

### Screenshots
![Imagen 1](https://github.com/pablopantaleon/guatemala_api/blob/master/1.png?raw=true)
![Imagen 2](https://github.com/pablopantaleon/guatemala_api/blob/master/2.png?raw=true)
![Imagen 3](https://github.com/pablopantaleon/guatemala_api/blob/master/3.png?raw=true)

