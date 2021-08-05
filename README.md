# INGENIERÍA DE SOFTWARE I -- PROYECTO FINAL :shipit:

_Presentacion del proyecto final de Ingenieria de Software de los alumnos de la Universidad Nacional de San Agustin_


## Propósito del proyecto ⚙️

El propósito es poder desarrollar plena y satisfactoriamente el software que ha sido elegido “Sistema de Publicación de Eventos Relacionados a Computación”, y llevarlo a cabo sin alguna complicación significativa, aplicando los conocimientos y técnicas aprendidos a lo largo del curso de Ingeniería de Software 1, que van desde realizar documentos de descripción de requisitos y acerca de la arquitectura de nuestro software, hasta aplicar estilos de programación a la implementación de este sistema.

Va dirigido a nosotros mismos, ya que seremos nosotros los usaremos dicho sistema , además a cualquier otra persona que esté interesada en la computación le podrá ser de utilidad para que pueda visualizar los eventos y que pueda tener un control sobre ellos.


## Funcionalidades ⚙️
- [ ] Registrar Usuario: Esta es una funcionalidad mediante la cual un usuario puede ser registrado en el sistema de forma fácil y rápida
- [ ] Mostrar Participantes: Tanto el usuario como el administrador pueden visualizar quienes van a participar de cierto evento.
- [ ] Visualización de fechas importantes: Las fechas importantes son: conferencias, debates, simposios y cualquier otro tipo de evento que sea relacionado a Ciencias de la Computación.
El usuario podrá visualizar un calendario, donde estarán publicadas las fechas importantes más cercanas.
- [ ] Publicación de documentos: Los administradores pueden publicar documentos relevantes a cierto evento.
- [ ] Descargar documentos relevantes: Los usuarios pueden descargar documentos relevantes a cierto evento.
- [ ] Buscar evento: Se pueden buscar eventos mediante filtros como: área, tópico, país o palabras clave.
- [ ] Mostrar estadísticas del evento: Se deben mostrar ciertas estadísticas de un evento para los administradores como: scopus, web of science, número de accesos, más accedidos.
- [ ] Mostrar detalles del evento: Se debe mostrar detalles de un evento.
- [ ] Agregar Evento: El administrador puede agregar eventos al sistema, los cuales se publicarán automáticamente, para que puedan ser vistos y buscados por los usuarios del sistema
![image](https://user-images.githubusercontent.com/42560116/128414202-7ddd2d1b-c08e-46d4-801b-b0b020b9fa68.png)

- [ ] Registrarse como oyente en una reunión: Los usuarios tendrán la opción de registrarse en una evento cualquiera.
- [ ] Actualización de Eventos: Las fechas en el calendario deben mostrarse de manera organizada y actualizada.

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

- [ ] LOGIN:

→ Constructivist: Este es un estilo de programación que hace que existan subfunciones con los parámetros de una función controladora, si alguna de las subfunciones falla, las demás fallan también. Este estilo es aplicado a la función formEsValido(), en el archivo login_page.php. Esta función, en Java Script, divide su trabajo en subfunciones, con los parámetros nombre_de_usuario y clave_de_usuario independientemente para verificar si son vacíos y enviarle un mensaje al usuario para que ingrese su nombre de usuario y contraseña. De esta forma el código para la función formEsValido() es mucho más entendible.

→ Lazy Rivers: Este es un estilo de programación en el que el flujo de datos en una función en particular viene en "arroyos" y no agrupa todo de frente. En el caso de la función  $(document).ready( function() ... ) es en donde se usa este estilo de programación, no está todo dentro de esta función, si no que acá se usa otro "arroyo" (función), esta función es la de ejecutarInicioSesion(), lo que hace es procesar los datos y verificar en la base de datos si estos son correctos. De esta forma el código es más entendible y no está todo agrupado en una sola función

→ Restful: Este es un estilo de programación muy usado en páginas web en donde se separa la interfaz del usuario con la parte del procesamiento de datos en el servidor, en el Login, se puede usó este estilo para trabajar de forma más cómoda, ya que en la parte de ejecutarInicioSesion() se trabaja con los datos recolectados a partir de la parte que ve el usuario.


- [ ] REGISTER:

→ Pipeline: Este es un estilo de programacion dentro de registro, que crea un procedimiento hasta un resultado final, en el caso de registro requiere de una comprobacion del form  para la realizacion del procedimiento, por lo que pipeline permite la composicion de las funciones, comprobar informacion y realizar cambio. Por lo que podemos usar el pipeline para el funcionamiento de un registro.

→ Cookbook: Es un estilo de programacion sin entradas ni salidas, orientados a procedimientos en forma de una secuencia para resolver un problema. Al terminar de manera correcta un registro, el redireccionamiento no necesita de entradas ni salidas, por lo que es una simple secuencia de procedimientos para notificar al usuario y redireccionarlo a una pagina de inicio de sesion.

→ Arrays:  Es un estilo de programacion centrado en el uso de los arrays para la resolucion de un problema. Al realizar un registro, es necesario guardar la informacion del usuario para ser enviado mediante AJAX y requiere un procedimiento especial para manejarlo.

→ Restful: Este es un estilo de programación muy usado en páginas web en donde se separa la interfaz del usuario con la parte del procesamiento de datos en el servidor, en el Register, se usó este estilo para trabajar de forma más cómoda, ya que al registar necesitamos recolectar la informacion del usuario.
- [ ] MAIN VIEW:


→ Kick forward: Variación del estilo de la fábrica de dulces, con las siguientes limitaciones adicionales:(main_view.php)_

* _Cada función toma un parámetro adicional, generalmente el último, que es otra función_
* _Ese parámetro de función se aplica al final de la función actual_
* _Ese parámetro de función se da como entrada cuál sería la salida de la función actual_
* _El problema más grande se resuelve como una tubería de funciones, pero donde la siguiente función que se aplicará se da como parámetro a la función actual_
* _Esto nos permite optimizar el codigo evitando funciones innecesarias y ademas de la escalabilidad a la hora de usar muchas funciones en el codigo_
* _Este estilo nos permite optimizar el codigo evitando funciones innecesarias y ademas de la escalabilidad a la hora de usar muchas funciones en el codigo_


## Conceptos DDD aplicados ⚙️

* SERVICIOS:
  - Servicio de Dominio: 
    Es donde se implementó toda la lógica del negocio (cumpliendo los requisitos).
  - Servicio de Aplicación:
    Es usada en casi cualquier funcionalidad implementada en los archivos
  - Servicio de Infraestructura:
    Son las funciones que no dependen del negocio (dominio).
    
  Se han creado servicios tanto en PHP como en JavaScript, las cuales cumplen con ejecutar uno de los servicios en especial para dar funcionamiento al proyecto.
   
* ENTIDADES:
  Se han creado clases que representan entidades en el proyecto, tales como Clases Usario, Organizador, Evento cuyas instancias tienen una identidad PROPIA para que puedan ser identificados, sus valores si pueden cambiarse a diferencia de los Value Object.
  
* VALUE OBJECT:
  Similares a la entidades, pero carecen de identidad y son muy requeridos por sus atributos
  Usos en el proyecto:
  - Clases creadas para almacenar exclusivamente los valores que son inmutables (carecen de metodos para modificarlos), sus valores son inicializados en su construcción
  - Las imágenes incluidas  
  
* REPOSITORIES: 
  La logica del programa permite acceder a la capa de datos desde un elemento externo (ceonexion a MySQL desde PHP)  de modo que los modelos y los datos no estan acoplados
  
  
* AGREGADOS: 
  Son elementos abstractos que engloban un Concepto general
  Usos en el proyecto:
  - Un Evento en general incluye varias elementos como las clases:  Simposio, Ponencia, Ssesion, etc; los engloba en un mismo concepto: EVENTO los cuales pueden ser construidos por un Factory

* EVENTOS DE DOMINIOS: (Aún no usado)
  Indica que lo eventos referentes a los elementos del programa deben ser almacenados 

* FACTORIAS: 
  Son Clases que pueden crear objetos para que luego sean usados como bloques.
  
  Al momento de crear Eventos se hace uso del patron de diseño Factory para poder crear un elemento nuevo (Evento)  a partir de los datos relacionados a éste.

* ARQUITECTURA EN CAPAS: 
  Se distinguen al menos 4 capas:
  - Vista: Implementadas en los archivos HTML y CSS (junto con Bootstrap) que representa la vista de cada funcionalidad del proyecto
  - Modelo: son las funciones vinculadas con el CRUD del proyecto a nivel interno.
  - Controlador: Implementadas exclusivamente  en los archivos PHP. Establece la conexión entre Vista y Modelo
  - Persistencia: Los datos que deben persisitir a lo largo del funcionamiento y ejecución del programa se envían al SGBD MySQL
  

* LENGUAJE UBIQUO: 
  El lenguaje usado ha sido ubiquo en el sentido que ha sido un lenaguje común entre los programadores y los usuarios, esto es:
  la definición de nombres, variables, funciones, clases, etc son autoexplicativas. Por ejemplo, los verbos indican acciones que se realizan (métodos) mientras que
  los sustantivos representan objetos sobre los cuales se realiza esas operaciones.
  y por lo tanto se pudo implemntar el codigo desde el diseño de la mejor forma y haciendo una representación fiel de lo que es la realidad.
  Además se pudo basar los diseños complejos en un modelo en específico, iniciar una creativa colaboración entre técnicos y expertos del dominio para interactuar lo más cercano posible a los conceptos fundamentales del problema.
  
* BOUNDED CONTEXT:
  Sirve para acotar los distintos dominios que hay, esto es, delimitar conceptos en cada parte del dominio agrupando elementos que están relacionados. 
  Se hizo esto al modularizar la logica de funcionamiento en archivos, clases, funciones, etc.







## Principios SOLID aplicados ⚙️
- [ ] _S – Single Responsibility Principle (SRP)_
- [ ] _O – Open/Closed Principle (OCP)_
- [ ] _L – Liskov Substitution Principle (LSP)_
- [ ] _I – Interface Segregation Principle (ISP)_
- [ ] _D – Dependency Inversion Principle (DIP)_


---

### COLABORADORES 🔩

- [x] Elizabeth Huanca Parqui
- [x] Jack Christopher Huaihua Huayhua
- [x] Rodrigo Jesus Santisteban Pachari
- [x] Santiago Javier Vilca Limachi
- [x] Gabriela Angel Chipana Perez
- [x] Yober Maycol Mendoza Surco
- [x] Juan José Villalobos Baños
