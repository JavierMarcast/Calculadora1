<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 

    <div class="container">  
        <h1>Calculadora 1</h1>
    <form method="post" action="cliente.php" name="calculadora">
        <label>Introduzca el primer numero </label> <br>
        <input  type="text" name="n1" placeholder="Numero 1"> <br><br>
        <label>Introduzca el segundo numero: </label> <br>
        <input type="text" name="n2" placeholder="Numero 2"> <br><br>
        <label>Selecciona la operacion:</label  name="lista"><br>
                <select name="lista">
               <option value="suma">Sumar</option> 
               <option value="resta">Restar</option>
               <option value="multiplicacion">Multiplicar</option>  
               <option value="divicion">Dividir</option> <br>
            
        </select>
        <div class="igual">
        <input  type="submit" value="Calcular">
        </div>
               
    </form>
   
</div>
</body>
</html>