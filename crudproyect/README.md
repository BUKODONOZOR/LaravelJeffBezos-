<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


Creación de modelos: 

He creado 2 modelos , el primero es el modelo users que contiene los datos personales del usuario nombres , apellidos, email, gender, address  y country (clave foranea que apunta al id de country)  , el segundo es el modelo countries que contiene id y el  el nombre del país 


Controlador de Usuarios :

En el controlador de usuarios recae toda la lógica  de la aplicación que está dividida en métodos : 

Index() : donde utilizó un Eager Loading para recuperar los datos de las entidades en una misma consulta y el método compat para asociar a un array users y countries 

show(): donde utilizó El método findOrFail de eloquent para reclutar mediante la url el usuario que tenga un id que coincida con el dado en la ruta 

stored(): donde $request validation para verificar que los datos enviados son los correctos

En las vistas Utilice Boostrap

Consideraciones importantes : 

Realizar la migracions de countries primero que la de users  , de lo contrario generará un error por falta de la correcta definición de la clave foránea cuentry_id   



