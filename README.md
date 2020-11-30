# Practica04-PHP
Practica04 – PHP


**CARRERA:** Computación |	**ASIGNATURA:**  Programación Hipermedial |

**NRO. PRÁCTICA:**	4	| **TÍTULO PRÁCTICA:** Resolución de problemas sobre PHP y MySQL


## OBJETIVO ALCANZADO:
•	Aprender a realizar php e implemetar con html para genenrar un login que muestre datos de la base de datos


## ACTIVIDADES DESARROLLADAS


### 1.	Crear un repositorio en GitHub con el nombre “Practica04 – PHP” 

Usuario: DomenicaC

Link: https://github.com/DomenicaC/Practica04-PHP.git

![image](https://user-images.githubusercontent.com/49033368/100573153-295ebf80-32a5-11eb-9258-5395246428e3.png)
 
### 2.	Realizar un commit y push por cada requerimiento de los puntos antes descritos.  

![image](https://user-images.githubusercontent.com/49033368/100573360-9eca9000-32a5-11eb-994e-eb023aafc012.png)

### 3.	Luego, se debe crear el archivo README del repositorio de GitHub.

![image](https://user-images.githubusercontent.com/49033368/100574155-60ce6b80-32a7-11eb-8348-888fad5e6dd2.png)

### 4.	Generar informe de los resultados en el formato de prácticas. Debe incluir:
a)	El diagrama E-R.
b)	Nombre de la base de datos
MySQL
c)	Sentencias SQL de la estructura de la base de datos 

CREATE TABLE `usuario` ( 

`usu_codigo` int (11) NOT NULL AUTO_INCREMENT, 

`usu_cedula` varchar (10) NOT NULL, 

`usu_nombres` varchar (50) NOT NULL, 

`usu_apellidos` varchar (50) NOT NULL, 

`usu_direccion` varchar (75) NOT NULL, 

`usu_telefono` varchar (20) NOT NULL, 

`usu_correo` varchar (20) NOT NULL, 

`usu_password` varchar (255) NOT NULL,

`usu_fecha_nacimiento` date NOT NULL, 

`usu_eliminado` varchar (1) NOT NULL DEFAULT 'N', 

`usu_fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, `usu_fecha_modificacion` timestamp NULL DEFAULT NULL, 

PRIMARY KEY (`usu_codigo`), 

UNIQUE KEY `usu_cedula` (`usu_cedula`)

 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
 
d)	El desarrollo de cada uno de los requerimientos antes descritos. 
•	Creación de la base de datos
 
 ![image](https://user-images.githubusercontent.com/49033368/100573401-b43fba00-32a5-11eb-9424-f286c372d5f2.png)

•	Conexión con la base datos
 
 ![image](https://user-images.githubusercontent.com/49033368/100573409-ba359b00-32a5-11eb-95a5-ef682acd5ab0.png)

•	Probar conexión con la base de datos
 
 ![image](https://user-images.githubusercontent.com/49033368/100573437-c7eb2080-32a5-11eb-93e6-33a33ac3d938.png)

•	Crear un usuario
 
 ![image](https://user-images.githubusercontent.com/49033368/100573453-d5080f80-32a5-11eb-94d3-d3e5d128a413.png)

•	Login

![image](https://user-images.githubusercontent.com/49033368/100573468-dd604a80-32a5-11eb-8272-53761ee879e4.png)
  

•	Index donde se mostrará la información
 
 ![image](https://user-images.githubusercontent.com/49033368/100573479-e6e9b280-32a5-11eb-9671-f908fdb470b8.png)

•	Eliminar un usuario
 
 ![image](https://user-images.githubusercontent.com/49033368/100573490-ecdf9380-32a5-11eb-87bf-d476c0000127.png)

•	Modificar un usuario
 
 ![image](https://user-images.githubusercontent.com/49033368/100573503-f23cde00-32a5-11eb-83ac-aeb3d492219c.png)

•	Cambiar contraseña
 
 ![image](https://user-images.githubusercontent.com/49033368/100573515-f832bf00-32a5-11eb-94aa-10a12711fe70.png)

•	Buscar por cedula

![image](https://user-images.githubusercontent.com/49033368/100573541-08e33500-32a6-11eb-8d16-5cb817fa2725.png)

e)	La evidencia del correcto diseño de las páginas HTML usando CSS. Para lo cual, se puede generar fotografías instantáneas (pantallazos). 

![image](https://user-images.githubusercontent.com/49033368/100573557-14cef700-32a6-11eb-8e95-013433edf4be.png)
  
f)	La evidencia del correcto funcionamiento de cada uno de los puntos requeridos. 
 
 ![image](https://user-images.githubusercontent.com/49033368/100573573-21534f80-32a6-11eb-9595-2d0a8c45278b.png)
 
 ![image](https://user-images.githubusercontent.com/49033368/100573749-8444e680-32a6-11eb-8352-e3cfbae88675.png)
 
 ![image](https://user-images.githubusercontent.com/49033368/100574102-41cfd980-32a7-11eb-9f96-57ee0da94f8a.png)

g)	El informe debe incluir conclusiones apropiadas. 
h)	En el informe se debe incluir la información de GitHub (usuario y URL del repositorio de la práctica) 
i)	En el informe se debe incluir la firma digital del estudiante.

## CONCLUSIONES:

•	El uso de estas herramientas nos da paso a un sin fin de posibilidades el uso de estas bases para el respaldo de la información y datos que se pueden almacenar es una herramienta de gran uso por lo que su implementación en diferentes paginas o áreas está presente.

•	Podemos decir que la integración  de páginas web con base de datos son de esencial ayuda para ayuda al desarrollo de páginas web.


----------------------------------------------------------------------------------------------------------------------------------

Nombre de estudiante: Doménica Fernanda Vintimilla Cañizares

Firma de estudiante: 

![image](https://user-images.githubusercontent.com/49033368/100573603-303a0200-32a6-11eb-9919-6a98d9238e33.png)

