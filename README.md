## Creación del proyecto
```bash
laravel new ej1
```
### Tipo de opciones a elegir:
- **Would you like to install a starter kit?:** `Laravel Breeze`
- **Which Breeze stack would you like to install?:** `Blade with Alpine`
- **Would you like dark mode support?:** `No`
- **Which testing framework do you prefer?:** `PHPUnit`
- **Which database will your application use?:** `SQLite`
- **Would you like to run the default database migrations?:** `Yes`

## Importación DaisyUI

```bash
npm i -D daisyui@latest
```
## Creación de ficheros

```shell
📂
└── 📂 resources
    ├── 📂 views
    │   └── 📂 components
    │       └── 📂 layouts
    │       │   ├── 📄 footer.blade.php
    │       │   ├── 📄 header.blade.php
    │       │   ├── 📄 layout.blade.php
    │       │   └── 📄 nav.blade.php
    │       └── 📂 templates
    │           └── 📄 navComponent.blade.php
    └── 📄 home.blade.php
```

***IMPORTANTE***: Redirigir la ruta de la página principal por defecto al `main.blade.php` desde el archivo `routes/web.php`

### Antes:
```php
Route::get('/', function () {
    return view('welcome');
});
```
### Después:
```php
Route::get('/', function () {
    return view('home');
});
```

## HomeController
Creamos el controlador ```HomeController.php``` con el siguiente comando en el terminal:
```bash
php artisan make:Controller HomeController
```
Añadimos el siguiente código dentro del fichero creado:

```php
class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}
```

En ```web.php```, añadimos la siguiente línea:
```php
ROUTE::get('/', [HomeController::class, 'index'])
-> name('home');
```

## Autenticación
### Cargar layout
En la carpeta ```resources/views/auth``` moficiar todos los ficheros de autenticación (```login.blade.php``` y ```register.blade.php```, etc.) para añadirles el layout que hemos creado.
### Decoración
Dentro de cada ```<x-layouts.layout>``` de los ficheros, englobar el código de la siguiente forma:
```bladehtml
<x-layouts.layout>
    <div class="flex flex-row justify-center items-center min-h-full bg-gray-300">
        <div class="bg-white p-4 rounded-xl">
            [...]
            RESTO DEL CÓDIGO
            [...]
        </div>
    </div>
</x-layouts.layout>
```
### Cambiar rutas
Al registrarse, iniciar sesión, etc., se envía al usuario a dashboard.blade.php.

Para corregir el problema, debemos entrar en la carpeta ```app/Http/Controllers``` y modificar en todos los ficheros la ruta ``dashboard`` por la ruta ```main``` (incluyendo los ficheros dentro de la carpeta ```Auth```.

Por ejemplo, en ```ProfileController.php```, hay que cambiar la siguiente línea:

```php
return Redirect::to('dashboard');
```
por:
```php
return Redirect::to('home');
```

Una vez realizado los cambios, se puede eliminar el fichero ```dashboard.blade.php``` junto con su ruta en ```web.php```

## Base de datos
Para la base de datos, es necesario ejecutar los siguientes comandos.
### Controller
Genera un controlador llamado ```TartaController```. Los controladores en Laravel son responsables de manejar la lógica de negocio detrás de las rutas y de interactuar con los modelos para procesar las solicitudes del usuario. En este caso, el controlador se encargará de manejar todo lo relacionado con la entidad ```Tarta```, como la creación, actualización, visualización y eliminación de tartas.
```shell
php artisan make:controller TartaController
```
### Migration
Genera un archivo de migración llamado ```create_tartas_table```. Las migraciones son una forma de versionar y gestionar la estructura de la base de datos. En este caso, la migración se usará para crear la tabla tartas en la base de datos, especificando las columnas y tipos de datos necesarios para almacenar la información de las tartas.
```shell
php artisan make:migration create_tartas_table
```
### Factory
Crea un archivo de fábrica llamado ```TartaFactory```. Las fábricas en Laravel se utilizan para generar datos de prueba o ficticios. El archivo ```TartaFactory``` será utilizado para crear instancias de tartas con datos aleatorios o predefinidos para facilitar el desarrollo o las pruebas.
```shell
php artisan make:factory TartaFactory
```
### Seeder
Crea un archivo de sembrador llamado ```TartaSeeder```. Los sembradores permiten llenar la base de datos con datos iniciales o de prueba. El archivo ```TartaSeeder``` se utilizará para insertar registros de tartas en la tabla tartas utilizando la fábrica ```TartaFactory``` o datos definidos manualmente.
```shell
php artisan make:seeder TartaSeeder
```
### Model
Genera un modelo llamado ```Tarta```. El modelo representa la tabla tartas en la base de datos y permite interactuar con ella. Laravel facilita las operaciones ```CRUD``` (crear, leer, actualizar y eliminar) mediante este modelo, que se encarga de gestionar la lógica relacionada con la base de datos para la entidad ```Tarta```.
```shell
php artisan make:model Tarta
```

## API
### L5 Swagger
Se descarga y se instala la librería de Swagger para Laravel.
```shell
composer require darkaonline/l5-swagger
```
Una vez instalada la librería, se publica los archivos de configuración y recursos.
```shell
php artisan vendor:publish --provider="L5Swagger\L5SwaggerServiceProvider"
```
A continuación, se generar la documentación de Swagger.
```shell
php artisan l5-swagger:generate
```
### Controlador
Creamos la API para la aplicación con el siguiente comando:
```shell
php artisan make:controller Api/TartaApiController
```

Dentro de TartaApiController, es necesario añadir el Swagger instalado:
```php
/**
* @OA\Get(
*     path="/api/tartas",
*     tags={"Tartas"},
*     summary="Lista todas las tartas",
*     @OA\Response(
*         response=200,
*         description="Lista de tartas",
*         @OA\JsonContent(
*             type="array",
*             @OA\Items(ref="#/components/schemas/Tarta")
*         )
*     )
* )
*/
```
### Acceso a la API
Para acceder a la API, es necesario acceder al siguiente enlace:
```http request
localhost:8000/api/tartas
```
