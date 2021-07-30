# INGENIERÍA DE SOFTWARE I -- PROYECTO FINAL :shipit:

_Presentacion del proyecto final de Ingenieria de Software de los alumnos de la Universidad Nacional de San Agustin_


## Propósito del proyecto ⚙️

_colocar texto_


## Funcionalidades ⚙️

_colocar texto_

```
texto.
```

## Práctica de código legible aplicadas ⚙️

- [ ] _1 - Comentar y Documentar_
- [ ] _2 - Sangrado consistente_
- [ ] _3 - Evite Comentarios Obvios_
- [ ] _4 - Agrupación de Código_
- [ ] _5 - Esquema de Nomenclatura Consistente_
```
El mismo PHP es a veces culpable de no seguir esquemas de nomenclatura consistentes:

strpos() vs. str_split()
imagetypes() vs. image_type_to_extension()
En primer lugar, los nombres deberían tener límites en sus palabras. Hay dos opciones populares:

camelCase: La primera letra de cada palabra está en mayúscula, excepto la primera palabra.
Guiones bajos: Guiones bajos entre palabras, tales como: mysql_real_escape_string ().
```

- [ ] _6 - Principio DRY_
- [ ] _7 - Evite la Anidación Profunda_
- [ ] _8 - Organización de Archivos y Carpetas_
- [ ] _9 - Capitalizar Palabras Especiales de SQL_
**resaltar**

## Estilos de Programación aplicados ⚙️

 - [ ] _kick forward Variación del estilo de la fábrica de dulces, con las siguientes limitaciones adicionales:(main_view.php)_

* _Cada función toma un parámetro adicional, generalmente el último, que es otra función_
* _Ese parámetro de función se aplica al final de la función actual_
* _Ese parámetro de función se da como entrada cuál sería la salida de la función actual_
* _El problema más grande se resuelve como una tubería de funciones, pero donde la siguiente función que se aplicará se da como parámetro a la función actual_
* _Esto nos permite optimizar el codigo evitando funciones innecesarias y ademas de la escalabilidad a la hora de usar muchas funciones en el codigo_
* _Este estilo nos permite optimizar el codigo evitando funciones innecesarias y ademas de la escalabilidad a la hora de usar muchas funciones en el codigo_

- [ ] _Constructivist: Este es un estilo de programación que hace que existan subfunciones con los parámetros de una función controladora, si alguna de las subfunciones falla, las demás fallan también. Este estilo es aplicado a la función formEsValido(), en el archivo login_page.php. Esta función, en Java Script, divide su trabajo en subfunciones, con los parámetros nombre_de_usuario y clave_de_usuario independientemente para verificar si son vacíos y enviarle un mensaje al usuario para que ingrese su nombre de usuario y contraseña. De esta forma el código para la función formEsValido() es mucho más entendible._'

- [ ] _Pipeline: Este es un estilo de programacion dentro de registro, que crea un procedimiento hasta un resultado final. (Register_page.php) En el caso de registro requiere de una comprobacion del form  para la realizacion del procedimiento, por lo que pipeline permite la composicion de las funciones, comprobar informacion y realizar cambio. Por lo que podemos usar el pipeline para el funcionamiento de un registro.
- [ ] Cookbook: Es un estilo de programacion sin entradas ni salidas, orientados a procedimientos en forma de una secuencia para resolver un problema. (Register_page.php) Al terminar de manera correcta un registro, el redireccionamiento no necesita de entradas ni salidas, por lo que es una simple secuencia de procedimientos para notificar al usuario y redireccionarlo a una pagina de inicio de sesion.
- [ ] Arrays: Es un estilo de programacion centrado en el uso de los arrays para la resolucion de un problema. (Register_page.php)  Al realizar un registro, es necesario guardar la informacion del usuario para ser enviado mediante AJAX y requiere un procedimiento especial para manejarlo.


## Principios SOLID aplicados ⚙️
- [ ] _S – Single Responsibility Principle (SRP)_
- [ ] _O – Open/Closed Principle (OCP)_
- [ ] _L – Liskov Substitution Principle (LSP)_
- [ ] _I – Interface Segregation Principle (ISP)_
- [ ] _D – Dependency Inversion Principle (DIP)_


## Conceptos DDD aplicados ⚙️
* Poner el foco primario del proyecto en el núcleo y la lógica del dominio.
* Basar los diseños complejos en un modelo.
* Iniciar una creativa colaboración entre técnicos y expertos del dominio para interactuar lo más cercano posible a los conceptos fundamentales del problema.

---

### COLABORADORES 🔩

- [x] Elizabeth Huanca Parqui
- [x] Jack Christopher Huaihua Huayhua
- [x] Rodrigo Jesus Santisteban Pachari
- [x] Santiago Javier Vilca Limachi
- [x] Gabriela Angel Chipana Perez
- [x] Yober Maycol Mendoza Surco
- [x] Juan José Villalobos Baños
