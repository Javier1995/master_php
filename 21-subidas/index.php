<?php
 $carpeta = opendir("./images");
 $i =1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivos con php</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">

        <input type="file" name="archivo"/>
        <input type="submit">
    
    </form>

    <h1>Listado de imagenes subidads</h1>


    <table border="1">

        <thead>
            <tr>
                <th>#</th>
                <th>Imagen</th>
            </tr>
        </thead>

        <tbody>
        <?php if($carpeta):?>
            <?php while(false != ($imagenes = readdir($carpeta))):?>
                <?php if($imagenes!='.' && $imagenes!='..'):?>
                <tr>
                    <td><?=$i;?></td>
                    <td><a href=""><img src="./images/<?=$imagenes?>" alt="" width="80px" height="50px"></a></td>

                </tr>
                <?php endif;?>
            <?php $i++; endwhile;?>
        <?php endif;?>
        </tbody>
    </table>

</body>
</html>