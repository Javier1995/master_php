<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">nombre</label>
        <p><input type="text" name="nombre" id="nombre" autofocus="on"></p> 
        
        <label for="apellido">Apellido</label>
        <p><input type="text" name="apellido" id="nombre"></p>
        
        <label for="boton">Apellido</label>
       <p><input type="button" name="boton" id="nombre" value="clic me"></p> 

       <label for="sexo">Sexo:</label>
       <p>
       Hombre<input type="checkbox" name="sexo" id="sexo" value="hombre">
       Mujer<input type="checkbox" name="sexo" id="sexo" value="mujer" checked="checked">
       </p> 

       <label for="color">Color:</label>
       <p><input type="color" name="color" id="color"></p>

       <label for="color">date:</label>
       <p><input type="date" name="date" id="date"> </p> 
        <label for="email">email:</label>
       <p><input type="email" name="email" id="email"></p>

        <label for="file">Archivos</label>
       <p><input type="file" name="file" id="file" multiple="multiple"></p>


       

       <input type="submit" value="Enviar">

    </form>
</body>
</html>