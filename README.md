# Practica04-PHP
Practica04 – PHP

 	FORMATO DE INFORME DE PRÁCTICA DE LABORATORIO / TALLERES / CENTROS DE SIMULACIÓN – PARA ESTUDIANTES

CARRERA: Computación 	ASIGNATURA:  Programación Hipermedial
NRO. PRÁCTICA:	4	TÍTULO PRÁCTICA: Resolución de problemas sobre PHP y MySQL
OBJETIVO ALCANZADO:
•	
ACTIVIDADES DESARROLLADAS
1.	Crear un repositorio en GitHub con el nombre “Practica04 – PHP” 
Usuario: DomenicaC
Link: https://github.com/DomenicaC/Practica04-PHP.git
 
2.	Realizar un commit y push por cada requerimiento de los puntos antes descritos.  
3.	Luego, se debe crear el archivo README del repositorio de GitHub.
4.	Generar informe de los resultados en el formato de prácticas. Debe incluir:
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
 
•	Conexión con la base datos
 
•	Probar conexión con la base de datos
 
•	Crear un usuario
 

•	Login
Html                                                     PHP
    

•	Index donde se mostrará la información
 
•	Eliminar un usuario
 
•	Modificar un usuario
 
•	Cambiar contraseña
 
•	Buscar por cedula
e)	La evidencia del correcto diseño de las páginas HTML usando CSS. Para lo cual, se puede generar fotografías instantáneas (pantallazos). 
  
f)	La evidencia del correcto funcionamiento de cada uno de los puntos requeridos. 
 
 


g)	El informe debe incluir conclusiones apropiadas. 
h)	En el informe se debe incluir la información de GitHub (usuario y URL del repositorio de la práctica) 
i)	En el informe se debe incluir la firma digital del estudiante.
5.	
6.	





CONCLUSIONES:
•	

Nombre de estudiante: Doménica Fernanda Vintimilla Cañizares
Firma de estudiante: 
