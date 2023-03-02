# ContactBook

Contactbook es un sistema que sirve APIS para obtener la información de  los clientes que visitan la empresa

### Permite visualisar y almacenar los siguientes datos del cliente
* Nombres,Apellidos,Teléfono, Dirección.
* Permite Filtro por nombre
*  Paginación en los listados

## Requerimientos
```cmd 
Laravel >=  8; PHP 7 
```

### Instalación
Ejecutar los siguientes comandos en orden
```cmd
git clone https://github.com/osoda/contactbook
```
```cmd
cd sistema-prestamos
```
```cmd
composer install
```

Seguidamente se loguea dentro del dashbord de laravel desde 
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

PHP 7
Blade



# Consumo de Api

Usando el software Insomnia, se puede consultar y validar la API solo importando el archivo ``Insomnia_API_EXAMPLE.har`` En este archivo se encuentran todas las peticiones a los endpoints creados (Consultar, crear, actualizar,...)
![image](https://user-images.githubusercontent.com/18646766/222553648-14d1b9ee-1d38-4e4c-af68-8983dba1de09.png)