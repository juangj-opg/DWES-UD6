# DWES-UD6
DWS - Ejercicios del Tema 6 - POO y MVC 

# Ejercicio 1 - POO - Constructores
 - **ejercicio1.php**:
   - Desarrollar el código PHP necesario para crear una clase de nombre **Persona** que almacene las siguientes variables:
     - Nombre
     - DNI
     - Sexo
     - Peso
     - Altura
   - Crea un constructor que reciba todos los valores necesario para inicializar el objeto.
   - Añade los métodos **consultores** (Get) y **modificadores** (Set) de todos los atributos.
   - Crea una función **Mostrar** que muestre una línea con todos los atributos.
   - Dentro del archivo, pero fuera de la clase, llama al constructor de la clase y al método Mostrar.
   - Llama a los métodos modificadores y vuelve a invocar al método mostrar.

# Ejercicio 2 - POO - Subclases
 - **ejercicio2.php**:
   - Utiliza el código del **ejercicio1.php** para crear una clase **Trabajador** que extienda a **Persona**
   - La clase Trabajador tendrá un único atirbuto que será el **nombre de la empresa** (nombreEmpresa).
   - Realizar los Get y Set necesarios.
   - Crea un método Mostrar que llame al método Mostrar de la clase padre (Persona).
   - Crea un método MostrarCompleto que muestre toda la información del trabajador
   - Probar ambos métodos.

# Ejercicio 3 - POO - Métodos especiales
 - **ejercicio3.php**:
   - Utiliza el código del **ejercicio2.php** para crear un método especial **__toString** en la clase **Persona**, de forma que devuelva una cadena con todos los atributos.
   - Crea un objeto **Persona** y muestralo con echo.
   - Crea otro método especial __toString en la clase **Trabajador** de forma que llame al método __toString de **Persona** y concatene la empresa del trabajador.
   - Crea un objeto trabajador y muestralo con echo.

