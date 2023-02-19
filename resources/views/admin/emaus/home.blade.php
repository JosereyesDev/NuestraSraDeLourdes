@extends('admin.layout')
  
@section('content')
<div class="row">
    <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Agregar</a>
                <h4 class="card-title">Datos de Emausianos</h4>
                <p class="card-text">
                    Se Mostraran los datos del Emausiano
                </p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped" style="width:100%"></table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form id="add-form" name="add-form" class="form-horizontal">
                <input type="hidden" class="form-control" id="mode" name="mode" value="add">
                <div class="modal-header">
                    <h5 class="modal-title">AGREGAR DATOS DEL SERVIDOR</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-2 mb-2">
                            <div class="form-outline">
                                <input type="number" id="nro" name="nro" min="1" placeholder="N°" class="form-control" required/>
                                <label class="form-label">Nro</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="nombres" name="nombres" placeholder="Ingrese el nombre" class="form-control" required/>
                                <label class="form-label">Nombres</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="apellidos" name="apellidos" placeholder="Ingrese el Apellido" class="form-control" required/>
                                <label class="form-label">Apellidos</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="cedula" name="cedula" placeholder="Ingrese la Cédula de Identidad" class="form-control c_identity" required/>
                                <label class="form-label">Cédula de Identidad</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Ingrese la Fecha de nacimiento" class="form-control date" required/>
                                <label class="form-label">Fecha de Nacimiento</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="numero_telefono" name="numero_telefono" placeholder="Ingrese el Número de Telefono" class="form-control tlfn" required/>
                                <label class="form-label">Número de Telefono</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col col-md-8">
                            <div class="form-outline">
                                <input type="text" id="direccion_habitacion" name="direccion_habitacion" placeholder="Ingrese la Dirección" class="form-control" required/>
                                <label class="form-label">Dirección</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-field col s12">
                                <select class="form-select" name="estado_civil">
                                    <option value="" disabled selected>Estado Civil</option>
                                    <option value="Soltero">Soltero</option>
                                    <option value="Casado - Civil">Casado - Civil</option>
                                    <option value="Casado - Iglesia">Casado - Iglesia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-3 row-cols-sm-3 row-cols-md-4">
                        <div class="form-group col col-md-2">
                            <label>Bautizo:</label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="bautismo" id="bautismo" value="0" checked>
                                <label class="btn btn-info" for="bautismo">No</label>
                                <input type="radio" class="btn-check" name="bautismo" id="bautismo_yes" value="1">
                                <label class="btn btn-info" for="bautismo_yes">Si</label>
                            </div>
                        </div>
                        <div class="form-group col col-md-2">
                            <label>Comunión:</label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="comunion" id="comunion" value="0" checked>
                                <label class="btn btn-info" for="comunion">No</label>
                                <input type="radio" class="btn-check" name="comunion" id="comunion_yes" value="1">
                                <label class="btn btn-info" for="comunion_yes">Si</label>
                            </div>
                        </div>
                        <div class="form-group col col-md-2">
                            <label>Confirmación:</label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="confirmacion" id="confirmacion" value="0" checked>
                                <label class="btn btn-info" for="confirmacion">No</label>
                                <input type="radio" class="btn-check" name="confirmacion" id="confirmacion_yes" value="0">
                                <label class="btn btn-info" for="confirmacion_yes">Si</label>
                            </div>
                        </div>
                        <div class="form-group col col-md-2">
                            <label>Matrimonio:</label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="matrimonio" id="matrimonio" value="0" checked>
                                <label class="btn btn-info" for="matrimonio">No</label>
                                <input type="radio" class="btn-check" name="matrimonio" id="matrimonio_yes" value="1">
                                <label class="btn btn-info" for="matrimonio_yes">Si</label>
                            </div>
                        </div>
                        <div class="form-group col col-md-2">
                            <label>Sexo:</label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="sexo" id="gender_male" value="M">
                                <label class="btn btn-info" for="gender_male">Masculino</label>
                                <input type="radio" class="btn-check" name="sexo" id="gender_female" value="F">
                                <label class="btn btn-info" for="gender_female">Femenino</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col mb-2">
                            <div class="form-outline">
                                <input type="number" min="1" max="100" id="nro_retiro" name="nro_retiro" placeholder="Ingrese el número de retiro" class="form-control" required/>
                                <label class="form-label">Número de Retiro</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="fecha_retiro" name="fecha_retiro" placeholder="Ingrese la Fecha del Retiro" class="form-control date" required/>
                                <label class="form-label">Fecha del Retiro</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6 mb-2">
                            <div class="form-outline">
                                <input type="text" id="parroquia" name="parroquia" placeholder="Ingrese la Parroquia donde hizo el retiro" class="form-control" required/>
                                <label class="form-label">Parroquia</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline">
                                <input type="text" id="pueblo_ciudad" name="pueblo_ciudad" placeholder="Ingrese el pueblo o ciudad donde hizo el retiro" class="form-control" required/>
                                <label class="form-label">Pueblo / Ciudad</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-info" type="button" data-bs-dismiss="modal" data-original-title="" title="">Cerrar</button>
                    <button class="btn btn-info" type="submit" data-original-title="" title="" id="btn-save">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- En Modal -->

<!-- Start Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form id="update-form" name="update-form" class="form-horizontal">
                <input type="hidden" class="form-control" id="e_mode" name="mode" value="update">
                <input type="hidden" id="e_id" name="id">
                <div class="modal-header">
                    <h5 class="modal-title">EDITAR DATOS DEL SERVIDOR</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-2 mb-2">
                            <div class="form-outline">
                                <input type="number" id="e_nro" name="nro" min="1" placeholder="N°" class="form-control active" required/>
                                <label class="form-label">Nro</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="e_nombres" name="nombres" placeholder="Ingrese el nombre" class="form-control active" required/>
                                <label class="form-label">Nombres</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="e_apellidos" name="apellidos" placeholder="Ingrese el Apellido" class="form-control active" required/>
                                <label class="form-label">Apellidos</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="e_cedula" name="cedula" placeholder="Ingrese la Cédula de Identidad" class="form-control active c_identity" required/>
                                <label class="form-label">Cédula de Identidad</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="e_fecha_nacimiento" name="fecha_nacimiento" placeholder="Ingrese la Fecha de nacimiento" class="form-control active date" required/>
                                <label class="form-label">Fecha de Nacimiento</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="e_numero_telefono" name="numero_telefono" placeholder="Ingrese el Número de Telefono" class="tlfn form-control active" required/>
                                <label class="form-label">Número de Telefono</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col col-md-8">
                            <div class="form-outline">
                                <input type="text" id="e_direccion_habitacion" name="direccion_habitacion" placeholder="Ingrese la Dirección" class="form-control active" required/>
                                <label class="form-label">Dirección</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-field col s12">
                                <select id="e_estado_civil" class="form-select" name="estado_civil">
                                    <option value="" disabled selected>Estado Civil</option>
                                    <option value="Soltero">Soltero</option>
                                    <option value="Casado - Civil">Casado - Civil</option>
                                    <option value="Casado - Iglesia">Casado - Iglesia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col col-md-2">
                            <label>Bautizo:</label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="bautismo" id="e_bautismo" value="0">
                                <label class="btn btn-info" for="e_bautismo">No</label>
                                <input type="radio" class="btn-check" name="bautismo" id="e_bautismo_yes" value="1">
                                <label class="btn btn-info" for="e_bautismo_yes">Si</label>
                            </div>
                        </div>
                        <div class="form-group col col-md-2">
                            <label>Comunión:</label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="comunion" id="e_comunion" value="0">
                                <label class="btn btn-info" for="e_comunion">No</label>
                                <input type="radio" class="btn-check" name="comunion" id="e_comunion_yes" value="1">
                                <label class="btn btn-info" for="e_comunion_yes">Si</label>
                            </div>
                        </div>
                        <div class="form-group col col-md-2">
                            <label>Confirmación:</label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="confirmacion" id="e_confirmacion" value="0">
                                <label class="btn btn-info" for="e_confirmacion">No</label>
                                <input type="radio" class="btn-check" name="confirmacion" id="e_confirmacion_yes" value="0">
                                <label class="btn btn-info" for="e_confirmacion_yes">Si</label>
                            </div>
                        </div>
                        <div class="form-group col col-md-2">
                            <label>Matrimonio:</label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="matrimonio" id="e_matrimonio" value="0">
                                <label class="btn btn-info" for="e_matrimonio">No</label>
                                <input type="radio" class="btn-check" name="matrimonio" id="e_matrimonio_yes" value="1">
                                <label class="btn btn-info" for="e_matrimonio_yes">Si</label>
                            </div>
                        </div>
                        <div class="form-group col col-md-2">
                            <label>Sexo:</label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="sexo" id="e_gender_male" value="M">
                                <label class="btn btn-info" for="e_gender_male">Masculino</label>
                                <input type="radio" class="btn-check" name="sexo" id="e_gender_female" value="F">
                                <label class="btn btn-info" for="e_gender_female">Femenino</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col mb-2">
                            <div class="form-outline">
                                <input type="number" min="1" max="100" id="e_nro_retiro" name="nro_retiro" placeholder="Ingrese el número de retiro" class="form-control active" required/>
                                <label class="form-label">Número de Retiro</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="e_fecha_retiro" name="fecha_retiro" placeholder="Ingrese la Fecha del Retiro" class="form-control active date" required/>
                                <label class="form-label">Fecha del Retiro</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6 mb-2">
                            <div class="form-outline">
                                <input type="text" id="e_parroquia" name="parroquia" placeholder="Ingrese la Parroquia donde hizo el retiro" class="form-control active" required/>
                                <label class="form-label">Parroquia</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline">
                                <input type="text" id="e_pueblo_ciudad" name="pueblo_ciudad" placeholder="Ingrese el pueblo o ciudad donde hizo el retiro" class="form-control active" required/>
                                <label class="form-label">Pueblo / Ciudad</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="updateEmpId" id="updateEmpId" class="form-control">
                    <button class="btn btn-outline-info" type="button" data-bs-dismiss="modal" data-original-title="" title="">Cerrar</button>
                    <button class="btn btn-info" type="submit" data-original-title="" title="" id="btn-save">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- En Modal -->

<!-- Delete Modal -->
<form id="deleteCForm" method="post">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteModalLabel">Alerta</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Confirma Para Eliminar Al Usuario Seleccionado.</div>
                <div class="modal-footer">
                    <input type="hidden" name="deleteEmpId" id="deleteEmpId" class="form-control">
                    <button class="btn btn-outline-danger" type="button" data-bs-dismiss="modal" data-original-title="" title="">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection