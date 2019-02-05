<?php if(isset($pedidos)): ?>
<h1>Gestionar Pedidos</h1>
<?php else: ?>
<h1> Mis Pedidos</h1>
<?php endif; ?>
    <table>
        <thead>
            <tr>
                <th>N° Pedido</th>
                <th>Coste</th>
                <th>Fecha</th>
                <th>Dirección</th>
                <th>Estado</th>

            </tr>
        </thead>
        <tbody>
            <?php while($ped = $pedidos->fetch_object()):?>
        
                <tr>
                    <td><a href="<?=BASE_URL?>pedido/detalles&id=<?=$ped->id?>"><?=$ped->id?></a></td>
                    <td>$ <?= $ped->coste; ?></td>
                    <td><?=$ped->fecha.' '.$ped->hora?></td>
                    <td><?=$ped->direccion?></td>
                    <td><?= Utils::showEstado($ped->estado)?></td>
                </tr>
             
            <?php endwhile; ?>
        </tbody>

    </table>
