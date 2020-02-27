<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Evaluacion <small>Docente</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
<!--                        <a class="dropdown-item" href="#">Settings 1</a>-->
<!--                        <a class="dropdown-item" href="#">Settings 2</a>-->
<!--                    </div>-->
<!--                </li>-->
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">

            <p>En esta seccion el docente puede registrar las evaluacion  <code>Por materia</code></p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus-square"></i> Registrar Materia
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registrar materia</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?=base_url()?>Evaluacion/insert">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="facultad">Facultad</label>
                                        <input name="facultad" required value="FACULTAD NACIONAL DE INGENIERÍA" type="text" class="form-control" id="facultad" placeholder="Facultad">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="carrera">Carrera</label>
<!--                                        <input type="text" class="form-control" id="carrera" placeholder="Carrera">-->
                                        <select name="carrera" id="carrera" class="form-control" required>
                                            <option value="">Seleccionar..</option>
                                            <option value="INGENIERÍA DE SISTEMAS">INGENIERÍA DE SISTEMAS</option>
                                            <option value="INGENIERÍA INFORMÁTICA">INGENIERÍA INFORMÁTICA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="asignatura">Agisnatura</label>
                                        <input name="asignatura" type="text" required class="form-control" id="asignatura" placeholder="Agisnatura">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="sigla">Sigla</label>
                                        <input name="sigla" type="text" required class="form-control" id="sigla" placeholder="Sigla">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="paralelo">Paralelo</label>
                                        <input name="paralelo" type="text" required class="form-control" id="paralelo" placeholder="Paralelo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre del docente</label>
                                    <input name="nombredocente" type="text" class="form-control" id="nombre" placeholder="Nombre del docente" value="<?=$_SESSION['nombre']?>">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="fechaininio">Fecha de inicio</label>
                                        <input name="fechainicio" type="date" value="<?=date('Y-m-d')?>" required class="form-control" id="fechaininio" placeholder="Fecha de inicio">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="fechaconclusion">Fecha de conclusion</label>
                                        <input name="fechaconclusion" type="date" value="<?=date('Y-m-d')?>" required class="form-control" id="fechaconclusion" placeholder="Fecha de conclusion">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gestion">Gestion</label>
                                        <input name="gestion" type="text" required class="form-control" id="gestion" placeholder="Gestion ej: 1/2020">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Temas </label>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control" id="nombretema"  placeholder="Nombre del tema">
                                        </div>
                                        <div class="col-3 ">
                                            <select class="form-control"  name="avanzado" id="estadotema">
                                                <option value="">Estado...</option>
                                                <option value="Avanzado">Avanzado</option>
                                                <option value="No avanzado">No avanzado</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <button  id="agregartema" class="btn btn-success"> <i class="fa fa-save"></i> Agregar tema </button>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Temas</th>
                                            <th scope="col">Estados</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody id="temas">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <label for="justificaciones">Justificaciones de los temas</label>
                                    <input name="justificacion" type="text" class="form-control" id="justificaciones" placeholder="Justificaciones" >
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Examenes </label>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control" id="nombreexamen"  placeholder="Nombre del examen">
                                        </div>
                                        <div class="col-3 ">
                                            <input type="date" class="form-control" id="fechaexamen"  placeholder="fecha del examen">
                                        </div>
                                        <div class="col-3">
                                            <button  id="agregarexamen" class="btn btn-success"> <i class="fa fa-save"></i> Agregar examen </button>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Examen</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody id="examenes">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Practicas </label>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control" id="nombrepractica"  placeholder="Nombre del practica">
                                        </div>
                                        <div class="col-3 ">
                                            <input type="date" class="form-control" id="fechapractica"  placeholder="fecha del practica">
                                        </div>
                                        <div class="col-3">
                                            <button  id="agregarpractica" class="btn btn-success"> <i class="fa fa-save"></i> Agregar practica </button>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Practica</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody id="practicas">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Proyectos, Trabajos de campo, etc. </label>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control" id="nombreproyecto"  placeholder="Nombre del proyecto">
                                        </div>
                                        <div class="col-3 ">
                                            <input type="date" class="form-control" id="fechaproyecto"  placeholder="fecha del proyecto">
                                        </div>
                                        <div class="col-3">
                                            <button  id="agregarproyecto" class="btn btn-success"> <i class="fa fa-save"></i> Agregar proyectos </button>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Proyecto</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody id="proyectos">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <label for="cumplimiento">Cumplimiento del calendario académico por el docente en la asignatura:</label>
                                    <div class="row m-1">
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" name="cumplimiento" id="cumplimiento1" value="90 - 100%" >
                                            <label class="form-check-label" for="cumplimiento1">
                                                90 - 100%
                                            </label>
                                        </div>
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" name="cumplimiento" id="cumplimiento2" value="70 - 89%">
                                            <label class="form-check-label" for="cumplimiento2">
                                                70 - 89%
                                            </label>
                                        </div>
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" name="cumplimiento" id="cumplimiento3" value="50 - 69%">
                                            <label class="form-check-label" for="cumplimiento3">
                                                50 - 69%
                                            </label>
                                        </div>
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" name="cumplimiento" id="cumplimiento4" value="Menor al 50%">
                                            <label class="form-check-label" for="cumplimiento4">
                                                Menor al 50%
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comentarios">Comentarios del Director de Carrera sobre la ejecución del Plan de Trabajo, Puntualidad del docente en la asistencia a clases y otras actividades académicas por el docente </label>
                                    <input name="comentario" type="text" class="form-control" id="comentarios" placeholder="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-trash"></i> Cancelar</button>
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Guardar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">Asignatura</th>
                        <th class="column-title">Sigla</th>
                        <th class="column-title">Gestion</th>
                        <th class="column-title">Fecha inicio</th>
                        <th class="column-title">Fecha conclusion</th>
                        <th class="column-title">Carrera</th>
                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query=$this->db->query("SELECT * FROM evaluacion WHERE iddocente='".$_SESSION['iddocente']."'");
                    foreach ($query->result() as $row){
                        echo "<tr class='even pointer'>
                                <td class='' >$row->asignatura</td>
                                <td class='' >$row->sigla</td>
                                <td class='' >$row->gestion</td>
                                <td class='' >$row->fechainicio</td>
                                <td class='' >$row->fechaconclusion</td>
                                <td class='a-right a-right '>$row->carrera</td>
                                <td class='last'><a href='".base_url()."Evaluacion/exportexcel/$row->idevaluacion'> <i class='fa fa-file-excel-o'></i> Descargar</a>
                                </td>
                            </tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script !src="">
    window.onload=function () {

        $('#agregartema').click(function (e) {
            if ($('#nombretema').val()!='' && $('#estadotema').val()!=''){
                $.ajax({
                    url:'Evaluacion/agregartemporaltema',
                    data:'nombre='+$('#nombretema').val()+'&estado='+$('#estadotema').val(),
                    type:'post',
                    success:function (e) {
                        if(e=='1'){
                            llenado();
                            $('#nombretema').val('');
                            $('#estadotema').val('');
                        }
                    }
                })
            }else{
                toastr.warning('Tienes que agregar materia y estado');
            }
            e.preventDefault();
        });
        var examenes=[];
        $('#agregarexamen').click(function (e) {
            if ($('#nombreexamen').val()!='' && $('#fechaexamen').val()!=''){
                var fila=[$('#nombreexamen').val(),$('#fechaexamen').val()];
                examenes.push(fila);
                $('#nombreexamen').val('')
                $('#fechaexamen').val('')
                // console.log(examenes);

                llenadoexamen();
            }else{
                toastr.warning('Tienes que agregar examen y fecha');
            }
            e.preventDefault();
        });
        var practicas=[];
        $('#agregarpractica').click(function (e) {
            if ($('#nombrepractica').val()!='' && $('#fechapractica').val()!=''){
                var fila=[$('#nombrepractica').val(),$('#fechapractica').val()];
                practicas.push(fila);
                $('#nombrepractica').val('')
                $('#fechapractica').val('')
                // console.log(examenes);

                llenadopractica();
            }else{
                toastr.warning('Tienes que agregar practica y fecha');
            }
            e.preventDefault();
        });
        var proyectos=[];
        $('#agregarproyecto').click(function (e) {
            if ($('#nombreproyecto').val()!='' && $('#fechaproyecto').val()!=''){
                var fila=[$('#nombreproyecto').val(),$('#fechaproyecto').val()];
                proyectos.push(fila);
                $('#nombreproyecto').val('')
                $('#fechaproyecto').val('')
                // console.log(examenes);

                llenadoproyecto();
            }else{
                toastr.warning('Tienes que agregar proyecto y fecha');
            }
            e.preventDefault();
        });
        function llenado() {
            cont=0;
            $('#temas').html('');
            $.ajax({
                url:'Evaluacion/datos',
                type:'post',
                success:function (e) {
                    var datos=JSON.parse(e);
                    // console.log(datos);
                    datos.forEach(function (e) {
                        // console.log(e);
                        cont ++;
                        if (e.estado=='Avanzado')
                            var texto='<select hidden  id="estadotexto'+e.idtemporaltema+'"> <option value="Avanzado" selected >Avanzado</option><option value="No avanzado" >No avanzado</option></select>';
                        else
                            var texto='<select hidden  id="estadotexto'+e.idtemporaltema+'"> <option value="Avanzado" selected >Avanzado</option><option value="No avanzado" selected >No avanzado</option></select>';
                        $('#temas').append('<tr>' +
                            '<td><span>'+cont+'</span></td>' +
                            '<td><span id="nombre'+e.idtemporaltema+'">'+e.nombre+'</span><input type="text" id="nombretexto'+e.idtemporaltema+'" value="'+e.nombre+'" hidden ></td>' +
                            '<td><span id="estado'+e.idtemporaltema+'">'+e.estado+'</span>'+texto+'</td>' +
                            '<td>'+'<button id="modificar'+e.idtemporaltema+'"  type="button" data-idtema="'+e.idtemporaltema+'" class="btn btn-warning p-0 m-0 modificarlibro"> <i class="fa fa-pencil"></i> Modificar </button><button id="eliminar'+e.idtemporaltema+'" data-idtema="'+e.idtemporaltema+'" type="button" class="btn btn-danger p-0 m-0 eliminar"> <i class="fa fa-trash-o"></i> Eliminar </button><button id="guardar'+e.idtemporaltema+'" type="button" class="btn btn-success p-0 m-0 guardar" data-idtema="'+e.idtemporaltema+'" hidden> <i class="fa fa-check"></i> Guardar </button><button id="cancelar'+e.idtemporaltema+'" type="button" class="btn btn-danger p-0 m-0 cancelar" data-idtema="'+e.idtemporaltema+'" hidden> <i class="fa fa-close"></i> Cancelar </button>'+'</td>' +
                            '</tr>');
                    });
                }
            })
        }
        llenado();
        function llenadoexamen() {
            cont=0;

            $('#examenes').html('');
            examenes.forEach(function (e) {
                cont ++;
                $('#examenes').append('<tr>' +
                    '<td><span>'+cont+'</span></td>' +
                    '<td><span >'+e[0]+'  </span><input name="nombreexamen'+cont+'" value="'+e[0]+'" hidden></td>' +
                    '<td><span>'+e[1]+'  </span><input name="fechaexamen'+cont+'" value="'+e[1]+'" hidden></td>' +
                    '<td>'+'<button  data-id="'+cont+'" type="button" class="btn btn-danger p-0 m-0 eliminarexamen"> <i class="fa fa-trash-o"></i> Eliminar </button></td>' +
                    '</tr>');
            })


        }
        llenadoexamen();
        function llenadopractica() {
            cont=0;
            $('#practicas').html('');
            practicas.forEach(function (e) {
                cont ++;
                $('#practicas').append('<tr>' +
                    '<td><span>'+cont+'</span></td>' +
                    '<td><span>'+e[0]+'</span><input name="nombrepractica'+cont+'" value="'+e[0]+'" hidden></td>' +
                    '<td><span>'+e[1]+'</span><input name="fechapractica'+cont+'" value="'+e[1]+'" hidden></td>' +
                    '<td>'+'<button  data-id="'+cont+'" type="button" class="btn btn-danger p-0 m-0 eliminarpractica"> <i class="fa fa-trash-o"></i> Eliminar </button></td>' +
                    '</tr>');
            })


        }
        llenadopractica();
        function llenadoproyecto() {
            cont=0;
            $('#proyectos').html('');
            proyectos.forEach(function (e) {
                cont ++;
                $('#proyectos').append('<tr>' +
                    '<td><span>'+cont+'</span></td>' +
                    '<td><span>'+e[0]+'</span><input name="nombreproyecto'+cont+'" value="'+e[0]+'" hidden></td>' +
                    '<td><span>'+e[1]+'</span><input name="fechaproyecto'+cont+'" value="'+e[1]+'" hidden></td>' +
                    '<td>'+'<button  data-id="'+cont+'" type="button" class="btn btn-danger p-0 m-0 eliminarproyecto"> <i class="fa fa-trash-o"></i> Eliminar </button></td>' +
                    '</tr>');
            })


        }
        llenadoproyecto();
        $("#temas").on("click",".modificarlibro", function(e){
            id=$(this).data('idtema');
            $('#nombre'+id).hide();
            $('#estado'+id).hide();
            $('#modificar'+id).hide();
            $('#eliminar'+id).hide();
            $('#guardar'+id).removeAttr('hidden','');
            $('#nombretexto'+id).removeAttr('hidden','');
            $('#estadotexto'+id).removeAttr('hidden','');
            $('#cancelar'+id).removeAttr('hidden','');
            // console.log($(this).data('idtema'));
            e.preventDefault();
        });
        $("#temas").on("click",".guardar", function(e){
            id=$(this).data('idtema');
            $('#nombre'+id).show();
            $('#estado'+id).show();
            $('#modificar'+id).show();
            $('#eliminar'+id).show();
            $('#guardar'+id).attr('hidden','');
            $('#nombretexto'+id).attr('hidden','');
            $('#estadotexto'+id).attr('hidden','');
            $('#cancelar'+id).attr('hidden','');
            let nombre=$('#nombretexto'+id).val();
            let estado=$('#estadotexto'+id).val();
            $.ajax({
                    url:'Evaluacion/modificartemporaltema',
                    data:'nombre='+nombre+'&estado='+estado+'&id='+id,
                    type:'post',
                    success:function (e) {
                        if(e=='1'){
                            llenado();
                        }
                    }
            })
            e.preventDefault();
        });
        $("#temas").on("click",".cancelar", function(e){
            id=$(this).data('idtema');
            $('#nombre'+id).show();
            $('#estado'+id).show();
            $('#modificar'+id).show();
            $('#eliminar'+id).show();
            $('#guardar'+id).attr('hidden','');
            $('#nombretexto'+id).attr('hidden','');
            $('#estadotexto'+id).attr('hidden','');
            $('#cancelar'+id).attr('hidden','');
            e.preventDefault();
        });

        $("#temas").on("click",".eliminar", function(e){
            id=$(this).data('idtema');
            if (confirm('Seguro de eliminar?')){
                $.ajax({
                    url:'Evaluacion/eliminartemporaltema',
                    data:'id='+id,
                    type:'post',
                    success:function (e) {
                        if(e=='1'){
                            llenado();
                        }
                    }
                })
            }
            e.preventDefault();
        });
        $("#examenes").on("click",".eliminarexamen", function(e){
            if (confirm('Seguro de eliminar?')){
                id=$(this).data('id');
                // console.log(id);
                examenes.splice(id-1,1);
                llenadoexamen();
            }
            e.preventDefault();
        });
        $("#practicas").on("click",".eliminarpractica", function(e){
            if (confirm('Seguro de eliminar?')){
                id=$(this).data('id');
                // console.log(id);
                practicas.splice(id-1,1);
                llenadopractica();
            }
            e.preventDefault();
        });
        $("#proyectos").on("click",".eliminarproyecto", function(e){
            if (confirm('Seguro de eliminar?')){
                id=$(this).data('id');
                // console.log(id);
                proyectos.splice(id-1,1);
                llenadoproyecto();
            }
            e.preventDefault();
        });
    }
</script>
