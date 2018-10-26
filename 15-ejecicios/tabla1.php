<?php

include_once 'ejercicio5.php';
$categorias = array_keys($tabla);

var_dump($categorias);

?>


<table border="1">
    <thead>
        <tr>
            <?php foreach($categorias as $categoria):?>
            
                <th><?= $categoria;?></th>
            
            <?php endforeach;?>
        </tr>
    </thead>

    <tbody>
    <?php foreach($tabla as $table):?>
        <tr>
            <td><?php echo $table[0];?></td>
            <td><?php echo $table[1];?></td>
            <td><?php echo $table[2];?></td>
        </tr>
        
    <?php endforeach;?>
    </tbody>

</table>


