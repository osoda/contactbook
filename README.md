# ContactBook

Contactbook es un sistema que sirve APIS para obtener la información de  los clientes que visitan la empresa



### Permite visualisar y almacenar los siguientes datos del cliente
* Nombres,Apellidos,Teléfono, Dirección.
* Permite Filtro por nombre
*  Paginación en los listados

![image](https://user-images.githubusercontent.com/18646766/222559659-d3c5d481-a011-4d19-9629-b2c4c7676ecd.png)

### Requerimientos
```cmd 
Laravel >=  8; PHP 7 
```

### Instalación
Ejecutar los siguientes comandos en orden
```cmd
git clone https://github.com/osoda/contactbook
```
```cmd
cd contactbook
```
```cmd
composer install
```

Seguidamente recuerda que por seguridad el archivo <b>"<em>.env</em>"</b> no se copia, para ello dispones del mismo pero con el nombre
<b>"<em>.env.example</em>"</b> el cual deberás renombrar a <b>"<em>.env</em>"</b> solamente.

Recuerda también ingresar en el archivo <b>"<em>.env</b>"</em> los datos de conexión a la base de datos que deberas haber creado previamente, esto es importante para poder continuar con el siguiente paso

Luego se crea y configura la DB, con el nombre que se le haya colocado en el archivo 
<b>"<em>.env</em>"</b>. Por defecto esta con <b>"<em>contactbook</em>"</b>


```cmd
mysqladmin -u root create contactbook
```

```cmd
php artisan key:generate
```

```cmd
php artisan migrate
```

### Ejecución

Se corre el servidor desde consola:
```cmd
php artisan serve
```

loguea dentro del dashbord de laravel desde 
la pagina 

```cmd
http://127.0.0.1:8000
```

Despues de logueado se dirije a la ruta principal

```cmd
http://127.0.0.1:8000/clientes
```


## Plugins usados:

https://packagist.org/packages/ibex/crud-generator

## Programado en:
```cmd
PHP 7
Blade
```



# Consumo de Api

Usando el software Insomnia, se puede consultar y validar la API solo importando el archivo ``Insomnia_API_EXAMPLE.har`` En este archivo se encuentran todas las peticiones a los endpoints creados (Consultar, crear, actualizar,...)
![image](https://user-images.githubusercontent.com/18646766/222553648-14d1b9ee-1d38-4e4c-af68-8983dba1de09.png)
