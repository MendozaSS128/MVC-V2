<h1 class="page-header">
    <?php echo $alm->Idmedidor != null ? $alm->Nummedi : 'Nuevo Medidor'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Medidor">Medidores</a></li>
  <li class="active"><?php echo $alm->Idmedidor != null ? $alm->Nummedi : 'Nuevo Medidor'; ?></li>
</ol>

<form action="?c=Medidor&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Idmedidor" value="<?php echo $alm->Idmedidor; ?>" />
    
    <div class="form-group">
        <label>Numero de medidor</label>
        <input type="text" name="Numero" value="<?php echo $alm->Nummedi; ?>" class="form-control" placeholder="Ingrese el numero de medidor" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Tipo de medidor</label>
        <input type="text" name="Tipo" value="<?php echo $alm->Tipomedi; ?>" class="form-control" placeholder="Ingrese el tipo de medidor" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Fecha de instalacion</label>
        <input type="date" name="FechaInstalacion" value="<?php echo $alm->Fechains; ?>" class="form-control" placeholder="Ingrese la fecha de instalacion" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Id Cliente</label>
        <input type="text" name="Cliente" value="<?php echo $alm->Idcliente; ?>" class="form-control" placeholder="Ingrese el id del cliente" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Fecha Ultima lectura</label>
        <input type="date" name="FechaUltima" value="<?php echo $alm->FechaUlti; ?>" class="form-control" placeholder="Ingrese la fecha de la ultima lectura" data-validacion-tipo="requerido|date" />
    </div>

    <div class="form-group">
        <label>Id Factura activa</label>
        <input type="text" name="FacturaActiva" value="<?php echo $alm->IdFacAct; ?>" class="form-control" placeholder="Ingrese el id de la factura activa" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Marca de medidor</label>
        <input type="text" name="MarcaMedidor" value="<?php echo $alm->Marcamedi; ?>" class="form-control" placeholder="Ingrese la marca del medidor" data-validacion-tipo="requerido|min:3" />
    </div>
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
