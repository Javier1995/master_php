<?php 



$personas = array(

    'nombre' => 'Victor',
    'apellidos' => 'Robles',
    'web' => 'javierquiroga.es'

);


var_dump($personas);

echo '<table border="1">';
    echo '<thead>
        <tr>
            <th>Nombre</th>
        <tr>
          <thead>';
    
foreach($personas as $key => $persona) {
        echo '<tr>';
            echo "<td>".$key.'=>'.$persona."</td>";
        echo '</tr>';
} 
echo '</table>';


//array Multidimensionales

$contactos = array( 
                array("nombre" => 'Javier',
                    "email" => 'quiroga218@gmail.com'
                ),
                array("nombre" => 'Carlos',
                    "email" => 'carlos218@gmail.com'
                ),
                array("nombre" => 'Hector',
                    "email" => 'hector218@gmail.com'
                    )


);

var_dump($contactos);

echo $contactos[0]['nombre'];

foreach($contactos as $key => $contacto){
    echo $contacto['nombre'].'<br>';
}


