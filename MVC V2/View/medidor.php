<h1 class="page-header">CFE<br> Selma Mendoza</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Medidor&a=Crud">Agregar Medidor</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Id Medidor</th>
            <th>Numero de medidor</th>
            <th>Tipo de medidor</th>
            <th >Fecha de instalacion</th>
            <th >Id Cliente</th>
            <th >Fecha Ultima lectura</th>
            <th >Id Factura activa</th>
            <th >Marca de medidor</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Idmedidor; ?></td>
            <td><?php echo $r->Nummedi; ?></td>
            <td><?php echo $r->Tipomedi; ?></td>
            <td><?php echo $r->Fechains; ?></td>
            <td><?php echo $r->Idcliente; ?></td>
            <td><?php echo $r->FechaUlti; ?></td>
            <td><?php echo $r->IdFacAct; ?></td>
            <td><?php echo $r->Marcamedi; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Medidor&a=Crud&Idmedidor=<?php echo $r->Idmedidor; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Medidor&a=Eliminar&Idmedidor=<?php echo $r->Idmedidor; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
