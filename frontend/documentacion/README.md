# **Universidad Mariano Gálvez de Guatemala**

**Facultad de Ingeniería en Sistemas de Información y Ciencias de la
Computación**

PROYECTO FINAL ÁREA ANÁLISIS Y DESARROLLO

**PROPUESTA DE SITIO WEB PARA LA GESTIÓN DE CASOS Y DOCUMENTOS EN LÍNEA**

![](https://umgingenieria.files.wordpress.com/2009/06/logoumg2.jpg?w=300&h=266)

Presentado por

Aura Marisol Camey del Cid

GUATEMALA, SEPTIEMBRE 2019



Introducción 
=============

En la actualidad, el ser humano se ha visto en la necesidad de utilizar la
tecnología como un medio trabajo que le permita facilitar y optimizar los
procesos que realiza diariamente, por lo que requiere cada vez más de
herramientas tecnológicas que le permitan llevar a cabo cada una de sus
actividades de una manera más organizada. Es por ese motivo que en este informe
se presenta como propuesta un proyecto de software, el cual consiste en la
presentación de un sitio web dedicado a todas aquellas empresas que se dedican
principalmente a llevar el control de todo tipo de documentación y de casos
dentro de la misma, tal sitio le permite a la compañía registrarse y así mismo
el administrador de su sitio podrá crear los usuarios que la integran así como
también podrá registrar las oficinas con las que cuenta, crear roles para cada
uno de los usuarios, y el flujo de todos los casos que tramitan internamente,
dependiendo del plan de pago a elegir.

 Objetivos 
===========

General
=======

Desarrollar un sitio web para las compañías que se dedican a la gestión de casos
y documentos.

Específicos 
============

-   Definir los requerimientos necesarios para la elaboración del sitio web que
    permita llevar el control de casos y documentos.

-   Elaborar una herramienta tecnológica que apoye en el proceso de la gestión y
    control de casos y documentos.

-   Implementar un sitio web dedicado especialmente a las empresas que manejan
    diferente tipo de documentación.

Planteamiento del problema
==========================

La empresa de sistemas y desarrollo SkyNet, se dedica a ofrecer servicios de
Gestión de casos y documentos a diferentes clientes en todo el país de
Guatemala; debido a la alta carga de clientes, se ve en la necesidad de invertir
en la creación de una plataforma de servicios en la nube, la cual será el centro
de atención y trabajo según el modelo de negocio que la empresa utiliza.

MARCO TEÓRICO 
==============

Metodología RUP
===============

RUP (Rational Unified Process) Significa "Proceso unificado racional". RUP es un
proceso de desarrollo de software de Rational, una división de IBM. Divide el
proceso de desarrollo en cuatro fases distintas, cada una de las cuales
involucra modelado, análisis y diseño de negocios, implementación, pruebas e
implementación. Las cuatro fases son:

**Inicio**: se establece la idea del proyecto. El equipo de desarrollo determina
si vale la pena seguir el proyecto y qué recursos se necesitarán.

**Elaboración**: la arquitectura del proyecto y los recursos necesarios se
evalúan más a fondo. Los desarrolladores consideran posibles aplicaciones del
software y los costos asociados con el desarrollo.

**Construcción**: el proyecto se desarrolla y se completa. El software está
diseñado, escrito y probado.

**Transición**: el software se lanza al público. Los ajustes o actualizaciones
finales se realizan en función de los comentarios de los usuarios finales.

La metodología de desarrollo RUP proporciona una forma estructurada para que las
empresas visualicen la creación de programas de software. Dado que proporciona
un plan específico para cada paso del proceso de desarrollo, ayuda a evitar el
desperdicio de recursos y reduce los costos de desarrollo inesperados.

1.  **Dimensiones de RUP**

>   El eje horizontal representa tiempo y demuestra los aspectos del ciclo de
>   vida del proceso, muestra el aspecto dinámico del proceso y se expresa en
>   términos de fases, de iteraciones, y la finalización de las fases.

>   El eje vertical representa el aspecto estático del proceso: cómo se describe
>   en términos de componentes de proceso, las disciplinas, las actividades, los
>   flujos de trabajo, los artefactos, y los roles.

![](https://i2.wp.com/s3.amazonaws.com/production-wordpress-assets/blog/wp-content/uploads/2017/03/14112636/ruplogo-e1489519636642.jpg?fit=480%2C320&ssl=1)

1.  **Iteraciones**
1.  **Proceso iterativo e incremental**

>   Este proceso se refiere a la realización de un ciclo de vida de un proyecto
>   y se basa en la evolución de prototipos ejecutables que se muestran a los
>   usuarios y clientes. En este ciclo de vida iterativo a cada iteración se
>   reproduce el ciclo de vida en cascada a menor escala, estableciendo los
>   objetivos de una iteración en función de la evaluación de las iteraciones
>   precedentes y las actividades se encadenan en una mini-cascada con un
>   alcance limitado por los objetivos de la iteración.

![](https://proactiveoffice.com/wp-content/uploads/2018/05/project-lifecycle-1.png)

>   Para la realización de cada iteración se tiene que tomar en cuenta la
>   planificación de la iteración, estudiando los riesgos que conlleva su
>   realización, también incluye el análisis de los casos de uso y escenarios,
>   el diseño de opciones arquitectónicas, la codificación y pruebas, la
>   integración gradual durante la construcción del nuevo código con el
>   existente de iteraciones anteriores, la evaluación de la entrega ejecutable
>   (evaluación del prototipo en función de las pruebas y de los criterios
>   definidos) y la preparación de la entrega (documentación e instalación del
>   prototipo). Algunos de estos elementos no se realizan en todas las fases.

1.  **DISCIPLINA:**

>   Determina las etapas a realizar durante el proyecto de creación del
>   software.

>   Ingeniería o modelado del negocio: Analizar y entender las necesidades del
>   negocio para el cual se está desarrollando el software.

>   Requisitos: Proveer una base para estimar los costos y tiempo de desarrollo
>   del sistema.

>   Análisis y diseño: Trasladar los requisitos analizados anteriormente a un
>   sistema automatizado y desarrollar una arquitectura para el sistema.

>   Implementación: Crear software que se ajuste a la arquitectura diseñada y
>   que tenga el comportamiento deseado.

>   Pruebas: Asegurarse de que el comportamiento requerido es correcto y que
>   todo lo solicitado está presente.

>   Despliegue: Producir distribuciones del producto y distribuirlo a los
>   usuarios.

1.  Organización y elementos en RUP

![](http://stc.obolog.net/photos/4ffe/4ffe366db587ds12365_p.jpg)

>   **Actores**: Son los personajes encargados de la realización de las
>   actividades definidas dentro de los flujos de trabajo de cada una de las
>   disciplinas del RUP, estos actores se dividen en varias categorías:
>   Analistas, Desarrolladores, Probadores, Encargados, Otros actores.

>   **Artefactos**: Los artefactos son el resultado parcial o final que es
>   producido y usado por los actores durante el proyecto. Son las entradas y
>   salidas de las actividades, realizadas por los actores, los cuales utilizan
>   y van produciendo estos artefactos para tener guías. Un artefacto puede ser
>   un documento, un modelo o un elemento de modelo.

UML
===

![](https://d2slcw3kip6qmk.cloudfront.net/marketing/pages/chart/UML-Class-Diagram-Example-Transparent.png)

El lenguaje de modelado unificado (UML) es un estándar para la representación
visual de objetos, estados y procesos dentro de un sistema. Por un lado, el
lenguaje de modelado puede servir de modelo para un proyecto y garantizar así
una arquitectura de información estructurada; por el otro, ayuda a los
desarrolladores a presentar la descripción del sistema de una manera que sea
comprensible para quienes están fuera del campo. UML se utiliza principalmente
en el desarrollo de software orientado a objetos

-   Diagrama

Un diagrama es una proyección gráfica de los elementos que configuran un
sistema. Por ejemplo, se podría tener cientos de clases en el diseño de un
sistema de recursos humanos de un empresa, pero no se podría ver la estructura o
el comportamiento de ese sistema observando un gran diagrama con todas sus
clases y relaciones, es entonces preferible realizar varios diagramas que
especifiquen las vistas relevantes solamente a ese subsistema definido, este
tipo de manejo de diagramas representativos por clases permite realizar
agrupaciones que muestran el funcionamiento general del sistema de forma
particular pero denotando el funcionamiento general del sistema con todos sus
elementos constitutivos.

Con el modelado de sistemas se obtienen diferentes tipos de vistas, las vistas
estáticas de los sistemas en UML se representan con 4 tipos de diagramas que se
describen a continuación

-   **Diagramas Estructurales:**

>   Los cuales comprenden los siguientes diagramas

#### Diagramas de Clases

Representa un conjunto de clases, interfaces y colaboraciones, y las relaciones
entre ellas. Los diagramas de clases los diagramas más comunes en el modelado de
sistemas orientados a objetos. Estos diagramas se utilizan para describir las
vistas de diseño estática de un sistema, incluyen clases activas se utilizan
para cubrir la vista de procesos estática de un sistema

#### Diagramas de Objetos

Representa un conjunto de objetos y sus relaciones. Se utiliza para describir
estructuras de datos y las instancias de los elementos encontrados en los
diagramas de clases. Cubren la vista de diseño estática o la vista de proceso
estática de un sistema al igual que los diagramas de clases. Pero desde la
perspectiva de casos reales prototipos.

#### Diagramas de Componentes

Muestra un conjunto de componentes y relaciones, se utilizan para describir la
vista de implementación estática de un sistema, se relacionan con los diagramas
de clases en que un componente normalmente se corresponde con una o más clases.
Interfaces o colaboraciones

#### Diagramas de despliegue

Muestra un conjunto de nodos y sus relaciones, se utilizan para describir la
vista de despliegue estática de una arquitectura, se relacionan con los
diagramas de componentes en que un nodo normalmente incluye uno o más
componentes.

-   Diagramas de Comportamiento:

>   Los cuales están compuestos por los siguientes diagramas

#### Diagramas de casos de uso

En el modelado orientado a objetos los diagramas de casos de uso, son los que
representan en general el funcionamiento del sistema siendo estos los más
utilizados como base del desarrollo de un modelo real, representan casos de uso,
actores y relaciones, se utilizan especialmente para organizar y modelar el
comportamiento de un sistema.

#### Diagramas de Secuencia

Es un diagrama de interacción que resalta la ordenación temporal de los
mensajes, este presenta un conjunto de objetos y los mensajes enviados por
ellos. Los objetos suelen ser instancias con nombre, pueden representar
instancias de otros elementos, tales como colaboraciones, componentes y nodos,
se utilizan para describir la vista dinámica de un sistema.

#### Diagramas de colaboración

Son diagramas de interacción que resalta la organización estructural de los
objetos que envían y reciben mensajes, pueden representar instancias de otros
elementos como colaboraciones, componentes y nodos. Se utilizan para describir
la vista dinámica de un sistema.

#### Diagramas de estado

Representan una máquina de estados constituida por estados, transacciones,
eventos y actividades, se utilizan para representar la vista dinámica de un
sistema son especialmente importantes para modelar el comportamiento de una
interfaz, clase o una colaboración, resaltan en comportamiento dirigido por
eventos de un objeto.

#### Diagrama de Actividades

Muestra el flujo de actividades en un sistema, muestra el flujo secuencial o
ramificado de actividades y los objetos en los que actúa, son importantes para
modelar la función de un sistema, así como para resaltar el flujo de control
entre objetos

![](https://www.ibiblio.org/pub/linux/docs/LuCaS/Tutoriales/doc-modelado-sistemas-UML/multiple-html/figuras/figure12.png)

PHP
===

![](https://upload.wikimedia.org/wikipedia/commons/c/c1/PHP_Logo.png)

>   PHP es un lenguaje de código abierto muy popular, adecuado para desarrollo
>   web y que puede ser incrustado en HTML. Es popular porque un gran número de
>   páginas y portales web están creadas con PHP. Código abierto significa que
>   es de uso libre y gratuito para todos los programadores que quieran usarlo.
>   Incrustado en HTML significa que en un mismo archivo vamos a poder combinar
>   código PHP con código HTML, siguiendo unas reglas.

Slim
====

![](https://miro.medium.com/max/1200/0*PLxUgqCpTvm-BW2J)

>   Slim es un micro framework para PHP y permite escribir aplicaciones y APIs
>   de forma muy rápida y con muy poco código. No tiene la potencia de sus
>   hermanos mayores (Laravel, Symfony, KumbiaPHP, …) pero cumple bien su
>   cometido. Y como buen framework, se puede vitaminar para aumentar sus
>   funcionalidades, como dotarlo de un ORM con conexión a BDD, un gestor de
>   templates como Twig, … no ha límite.

Mysql
=====

![](https://www.redeszone.net/app/uploads/2014/10/mysql_logo.jpg?x=768)

> **MySQL**, es un sistema de gestión de base de datos relacional o SGBD. Este
> gestor de base de datos en multihilo y multiusuario, lo que le permite ser
> utilizado por varias personas al mismo tiempo, e incluso, realizar varias
> consultas a la vez, lo que lo hace sumamente versátil.
>
> Nació como una iniciativa de **Software Libre** y aún sigue ofreciéndose como
> tal, para usuarios particulares. Pero si se desea utilizarlo para promover datos
> en una empresa, se puede comprar una licencia, como un software propietario, que
> es autoría de la empresa patrocinante (Actualmente Oracle Corporation).

PHPStorm
========

![](https://pbs.twimg.com/profile_images/674918306000711680/3rPeiTKt_400x400.png)

> PhpStorm es un IDE de programación desarrollado por
> [JetBrains](http://www.jetbrains.com/). Es uno de los entornos de programación
> más completos de la actualidad, permite editar código no sólo del lenguaje de
> programación php como lo indica su nombre.
>
> En esta entrada se proporcionará el enlace para la descarga completa de PhpStorm
> así como una licencia para poder registrarlo (opcional).
>
> algunas características:
>
> -   Actualmente es compatible con Sistemas Operativos Windows, Linux y Mac OS X.
>
> -   Permite la gestión de proyectos fácilmente.
>
> -   Proporciona un fácil **autocompletado de código.**
>
> -   Soporta el trabajo con **PHP 5.5**
>
> -   Sintaxis abreviada.
>

DBeaver
=======

![](https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/DBeaver_logo.svg/480px-DBeaver_logo.svg.png)

> DBeaver es un software que actúa como una herramienta de base de datos universal
> destinada a desarrolladores y administradores de bases de datos.
>
> DBeaver tiene una interfaz de usuario bien diseñada, la plataforma basada en un
> marco de código abierto y permite escribir múltiples extensiones, así como
> también es compatible con cualquier base de datos.

Docsify.js
====================

![](https://i1.wp.com/www.encode8.com/wp-content/uploads/2018/07/docsify.png?fit=245%2C224&ssl=1)

> Docsify genera un sitio web de documentación sobre la marcha. A diferencia de GitBook, no genera archivos html estáticos. En cambio, carga y analiza de forma inteligente sus archivos Markdown y los muestra como un sitio web. Para comenzar a usarlo, todo lo que necesita hacer es crear un index.html e implementarlo en las páginas de GitHub.

Quill.js
====================

![](https://www.jqueryscript.net/images/Quill-Editor-Bootstrap-4.jpg)

> Quill es un editor WYSIWYG gratuito y de código abierto creado para la web moderna. Personalízalo completamente para cualquier necesidad con su arquitectura modular y API.

Tesseract.js
====================

![](https://ourcodeworld.com/public-media/articles/articleocw-59c67746e23df.jpg)

> Tesseract es un motor OCR libre. Fue desarrollado originalmente por Hewlett Packard como software propietario entre 1985 y 1995. Tras diez años sin ningún desarrollo, fue liberado como código abierto en el año 2005 por Hewlett Packard y la Universidad de Nevada, Las Vegas.


Tecnologías API REST
====================

Es una interfaz de programación de aplicaciones que se apoya en la arquitectura
REST para el desarrollo de aplicaciones en red. Aprovechando el lenguaje HTML,
permite que cualquier empresa cree aplicaciones web sin problemas, aunque
siempre en base a las restricciones que supone.

REST son las siglas de Representational State Transfer (Transferencia de Estado
Representacional), un concepto que establece una serie de restricciones
importantes para definir a los sistemas que responden a sus principios. Las
restricciones son las siguientes:

-   Conexión cliente-servidor libre. El cliente no necesita saber los detalles
    de la implementación del server, y este tampoco debe preocuparse por cómo se
    usan los datos que envía.

-   Cada petición enviada al servidor es independiente.

-   Compatibilidad con un sistema de almacenamiento en caché.

-   Cada recurso del servicio REST debe tener una única dirección, manteniendo
    una interfaz genérica.

-   Disposición de diferentes capas para la implementación del servidor.

Del mismo modo, son cuatro las operaciones que más se usan en la api de rest:
GET (consulta y lectura), POST (crear), DELETE (eliminar) y PUT (editar).

La mayoría de empresas modernas utilizan esta API para el desarrollo de webapps
con las que mejorar sus servicios internos, incluso para aquellas que quieran
ofrecerlos a los consumidores.

![](media/c6080ba21235ee2a5bbc5b58e4be8dde.png)

MARCO CONCEPTUAL
================

APLICACIÓN DE LA METODOLOGÍA RUP EN EL PROYECTO FINAL DE ANÁLISIS Y DESARROLLO
==============================================================================

### Título del sistema

GESTIÓN DE CASOS Y DOCUMENTOS ONLINE

Descripción general del sistema
-------------------------------

El proyecto se basa en un sitio web en el que se pueden registrar todas aquellas
empresas o compañías que se dedican al control y gestión de casos y documentos
internamente. el sitio dispone de diferentes planes de pago con lo que permitirá
al administrador hacer uso de la plataforma de acuerdo a las necesidades
requeridas.

Dentro del sitio web, el administrador podrá crear: Roles, Usuarios, Oficinas,
Responsables de oficinas, Procesos y flujos. cada usuario registrado por el
administrador podrá ver los documentos, casos o procesos que le pertenecen a la
oficina que se le fue asignada.

El administrador podrá llevar el control de los casos y documentos, podrá
generar reportes y ver el flujo de los documentos.

Requerimientos a satisfacer
---------------------------

La solución debe funcionar con el modelo de negocio de servicios, en el cual se
le ofrece al cliente una suscripción para que pueda adquirir el acceso al
sistema.

>   \- Gestión adecuada de planes

>   \- Gestión de los diferentes accesos con base al plan adquirido

Desarrollo de la API de comunicación utilizando tecnologías REST

>   \- Podrá ser utilizada por terceros

>   \- La solución debe funcionar únicamente por medio de la API

>   \- La base de datos servirá los datos a través de procedimientos almacenados

La parametrización debe permitir registrar a las diferentes empresas, los
diferentes casos que se registran en las oficinas y los responsables de estas.

Se requiere gestionar el flujo de casos automáticamente, con esto el responsable
de la empresa deberá crear dinámicamente las diferentes rutas que se debe seguir
para llegar a ser finalizado.

Al finalizar cada caso el sistema debe emitir automáticamente un documento tipo
acta, en el cual se establezca el dictamen final del mismo, considerando que el
dictamen puede ser positivo o negativo.

Para cada caso registrado en el sistema, se debe almacenar los documentos, que
respalden el mismo. \*\* se sugiere la utilización de OCR\*\*

El sistema debe contemplar el manejo de usuarios en perfiles y roles.

Proveer de pantallas de captura y mantenimiento de la información (gerenciales,
reportaría, mantenimientos, así como de todos los catálogos que maneje).

Reportaría

>   \- Presentar tablero de visualización de casos para cada oficina

>   \- Proveer registro adecuado de auditoria de datos y sesiones

>   \- Proveer el grafo de movimientos que el caso siguió durante las diferentes
>   rutas

>   \- Proporcionar la siguiente información (tanto en pantalla como PDF)

>   o Casos por fecha, oficina, tipo, dictamen

>   o Casos por responsable y fecha

>   o Estadísticas de atención y tiempo muertos, las cuales deben ser dinámicas
>   y generar gráficas con la información obtenida

Stakeholder y descripciones de usuarios
---------------------------------------

Los Stakeholder, son las personas u organizaciones que están directamente
envueltas en la elaboración o tomas de decisiones claves a cerca de la
funcionalidad y propiedades del Sistema. En este caso son los desarrolladores
del mismo.

Los usuarios son las entidades individuales que utilizan el Sistema, tanto el
administrador que tiene el control de todo el sistema como los demás usuarios
que lo utilizarán con base a sus roles.

Ambiente a utilizar
-------------------

**Back End**

PHP

Mysql

**Front End**

Javascript

Jquery

html

Bootstrap 4

Diagramas
=========

Diagramas Estructurales
-----------------------

-   Diagrama de clases

-   Diagrama de objetos

-   diagrama de componentes

Conclusiones 
=================

Las tecnologías son una herramienta muy efectiva en la actualidad para la
realización de cualquier proceso de manera óptima por lo que las personas
dedicadas a la informática tienen a su cargo realizar herramientas tecnológicas
que permitan a la sociedad realizar sus actividades cotidianas de una forma más
práctica. Con la realización de este proyecto se puede concluir que:

-   Se desarrolló un sitio web para las compañías que se dedican a la gestión de
    casos y documentos.

-   Se definió todos los requerimientos necesarios para la elaboración del sitio
    web.

-   Se elaboró una herramienta tecnológica que apoye en el proceso de la gestión
    y control de casos y documentos.

-   Se implementó un sitio web dedicado especialmente a las empresas que manejan
    diferente tipo de documentación.

# Anexos

Anexo 1 Chárter del Proyecto
============================

**Acta de constitución**

**del proyecto**

*GESTIÓN DE CASOS Y DOCUMENTOS*

*Fecha: 30/07/2019*

Información del proyecto
========================

Datos
-----

| Empresa / Organización |                               |
|------------------------|-------------------------------|
| Proyecto               | Gestión de Casos y Documentos |
| Fecha de preparación   | 29/07/2019                    |
| Cliente                |                               |
| Patrocinador principal |                               |
| Gerente de proyecto    | Aura Marisol Camey del Cid    |

Propósito y justificación del proyecto
======================================

> El propósito del proyecto Gestión y Casos de Documentos se realizará con la finalidad de brindar un servicio web a las empresas que se dedican a la resolución de casos según sus requerimientos de una manera óptima y efectiva.


Descripción del proyecto y entregables
======================================

> El proyecto por realizarse está estructurado en diferentes fases estructuradas para su implementación, las cuales se dividen de la siguiente manera: 


-   Análisis

-   Diseño

-   Base de Datos

-   Desarrollo

-   Reportería

-   Estadísticas

-   Manuales

Requerimientos de alto nivel
============================

Requerimientos del producto
---------------------------

> Implementación de un sitio web para la resolución de casos y gestión de documentos en línea.
>


-   Crear un plan para la prestación del servicio

-   Permitir al Administrador de la empresa que pueda asignar sus oficinas
    virtuales, responsables y que pueda gestionar toda la reportería basado al
    plan de pago elegido

Requerimientos del proyecto
---------------------------

> Se debe realizar basado en la metodología RUP
>


-   Se debe administrar desde la nube

-   Se debe ofrecer diferentes opciones en el servicio basados con el plan de
    pago

Objetivos
=========

| **Objetivo**                                                 |      |
| ------------------------------------------------------------ | ---- |
| **Alcance**                                                  |      |
| Elaborar un análisis que permita mostrar las herramientas necesarias para la creación del sistema de Gestión de documentos |      |
| Desarrollar un sistema que permita la gestión de documentos en línea para las diferentes empresas |      |
| Implementar un sitio web que brinde a las diferentes empresas la oportunidad de realizar la gestión de documentos de una manera óptima |      |
| **Cronograma (Tiempo)**                                      |      |
| Ver Anexo No.2                                               |      |
| Cronograma realizado en Microsoft Project                    |      |
|                                                              |      |
| **Costo**                                                    |      |
|                                                              |      |
|                                                              |      |
|                                                              |      |
| **Calidad**                                                  |      |
| Control en el proceso de cada caso ingresado en el sistema   |      |
| Mostrar el seguimiento de cada caso                          |      |
| Generar reportes basados en la fecha, responsable, oficina, dictamen o tipo de caso |      |
| **Otros**                                                    |      |
|                                                              |      |
|                                                              |      |
|                                                              |      |

Premisas y restricciones
========================

> Las empresas que estén interesadas en la utilización de este servicio deben estar conectados directamente a internet. 
>


-   El responsable de cada oficina Debe tener equipo de cómputo o dispositivo
    tecnológico para llevar el control de los procesos que se le sean asignados
    en el sistema.

Cronograma de hitos principales
===============================

| **Hito**                                 | **Fecha tope** |
|------------------------------------------|----------------|
| PROYECTO GESTIÓN DE DOCUMENTOS           | mar 06/08/19   |
| DISEÑO                                   | mar 06/08/19   |
| BASE DE DATOS                            | jue 08/08/19   |
| DESARROLLO                               | lun 12/08/19   |
| PARAMETRIZACIÓN                          | mié 14/08/19   |
| SUSCRIPCIONES                            | jue 15/08/19   |
| REPORTERÍA                               | mar 20/08/19   |
| ESTADÍSTICAS DE ATENCIÓN Y TIEMPO MUERTO | jue 22/08/19   |
| GRÁFICOS                                 | mar 20/08/19   |
| ACTA FINAL                               | mié 21/08/19   |
| MANUALES                                 | jue 22/08/19   |

Presupuesto inicial asignado
============================

| **SERVICIOS**             | **COSTO**  | **TIEMPO**         |                 |
|---------------------------|------------|--------------------|-----------------|
| HOSTING (incluye dominio) | \$56.4     | 1 año              |                 |
| **STAKEHOLDER**           | **DÍAS**   | **COSTO POR DÍAS** | **COSTO TOTAL** |
| Marisol Camey             | 90         |                    |                 |

Requisitos de aprobación del proyecto
=====================================

La solución debe funcionar con el modelo de negocio de servicios, en el cual se le ofrece al cliente una suscripción para que pueda adquirir el acceso al sistema. 



>   \- Gestión adecuada de planes

>   \- Gestión de los diferentes accesos con base al plan adquirido

Desarrollo de la API de comunicación utilizando tecnologías REST

>   \- Podrá ser utilizada por terceros

>   \- La solución debe funcionar únicamente por medio de la API

>   \- La base de datos servirá los datos a través de procedimientos almacenados

La parametrización debe permitir registrar a las diferentes empresas, los
diferentes casos que se registran en las oficinas y los responsables de estas.

Se requiere gestionar el flujo de casos automáticamente, con esto el responsable
de la empresa deberá crear dinámicamente las diferentes rutas que se debe seguir
para llegar a ser finalizado.

Al finalizar cada caso el sistema debe emitir automáticamente un documento tipo
acta, en el cual se establezca el dictamen final del mismo, considerando que el
dictamen puede ser positivo o negativo.

Para cada caso registrado en el sistema, se debe almacenar los documentos, que
respalden el mismo. \*\* se sugiere la utilización de OCR\*\*

El sistema debe contemplar el manejo de usuarios en perfiles y roles.

Proveer de pantallas de captura y mantenimiento de la información (gerenciales,
reportaría, mantenimientos, así como de todos los catálogos que maneje).

Reportaría

>   \- Presentar tablero de visualización de casos para cada oficina

>   \- Proveer registro adecuado de auditoria de datos y sesiones

>   \- Proveer el grafo de movimientos que el caso siguió durante las diferentes
>   rutas

>   \- Proporcionar la siguiente información (tanto en pantalla como PDF)

>   o Casos por fecha, oficina, tipo, dictamen

>   o Casos por responsable y fecha

>   o Estadísticas de atención y tiempo muertos, las cuales deben ser dinámicas
>   y generar gráficas con la información obtenida

Asignación del gerente de proyecto y nivel de autoridad
=======================================================

Gerente de proyecto
===================

| **Nombre**                 | **Cargo**       | **Departamento / División** | **Rama ejecutiva (Vicepresidencia)** |
|----------------------------|-----------------|-----------------------------|--------------------------------------|
| AURA MARISOL CAMEY DEL CID | PROJECT MANAGER | TIC                         | Análisis y desarrollo de sistemas    |

Niveles de autoridad
--------------------

| **Área de autoridad**                            | **Descripción del nivel de autoridad** |
|--------------------------------------------------|----------------------------------------|
| Decisiones de personal (Staffing)                |                                        |
| Gestión de presupuesto y de sus variaciones      |                                        |
| Decisiones técnicas                              |                                        |
| Resolución de conflictos                         |                                        |
| Ruta de escalamiento y limitaciones de autoridad |                                        |

Personal y recursos preasignados
--------------------------------

| **Recurso**                | **Cargo**            | **Departamento** |
|----------------------------|----------------------|------------------|
| Aura Marisol Camey del Cid | Analista y developer | Informática      |

Aprobaciones
============

| **Patrocinador** | **Fecha** | **Firma** |
|------------------|-----------|-----------|
|                  |           |           |
|                  |           |           |


