<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ config('app.name') }} - Panel Administrativo</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/256337292.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/mdbootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/responsive.dataTables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="mini-sidebar">
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/img/997051093.png') }}" alt="Logo">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset('assets/img/logo_parroquia.jpg') }}" width="31" alt="Seema Sisty">
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset('assets/img/256337292.png') }}" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>EMAUS</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="general.html">Configuración</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Salir</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="index.html"><i class="fe fe-home"></i> <span>Inicio</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fe fe-users"></i> <span> Emausianos</span><span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="users.html">Hombres</a></li>
                                <li><a href="blocked-users.html">Mujeres</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blank-page.html">
                                <i class="fe fe-file"></i> <span>Asistencia</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-sm-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-primary">
                                        <i class="fe fe-users"></i>
                                    </span>
                                    <div class="dash-count">
                                        <a class="count-title">Emausianos</a>
                                        <a class="count"> 0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-danger">
                                        <i class="fe fe-phone"></i>
                                    </span>
                                    <div class="dash-count">
                                        <a class="count-title">Hombres</a>
                                        <a class="count"> 0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon bg-warning">
                                        <i class="fe fe-comments"></i>
                                    </span>
                                    <div class="dash-count">
                                        <a class="count-title">Mujeres</a>
                                        <a class="count"> 0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @yield('content')
                <!-- Content Fluid La parte de aqui va para el footer -->
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/mdbootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/mask/jquery-mask.min.js') }}"></script>
    <script src="{{ asset('assets/js/masklist.js') }}"></script>

    <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script type="text/javascript">
        const uri = "http://localhost/app/public/api/emausiano";

        $('#add-form').submit(function(e) {
            e.preventDefault();

            $('#btn-save').attr('disabled', true);

            $.ajax({
                url: uri,
                type: "POST",
                data: $(this).serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response.status) {
                        $('#btn-save').attr('disabled', false);
                        $('#exampleModal').modal('hide');
                        $('#add-form').trigger("reset");

                        toastr.success("El Usuario Se ha creado correctamente.", "¡ENHORABUENA!");
                        dataTable.ajax.reload(); // Refrescamos la Datatable
                    } else {
                        toastr.error(response.error_string, "ERROR");
                        $('#btn-save').attr('disabled', false);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, "ERROR");
                    $('#btn-save').attr('disabled', false);
                }
            });
        });

        /**
         * EDIT MODAL
         * */
         $('body').on('click', '.edit', function () {
            var id = $(this).data('id');
            $('#updateEmpId').val(id);

            // Cacheo de elementos DOM
            const $id = $('#e_id');
            const $nro = $('#e_nro');
            const $nombres = $('#e_nombres');
            const $apellidos = $('#e_apellidos');
            const $cedula = $('#e_cedula');
            const $fechaNacimiento = $('#e_fecha_nacimiento');
            const $numeroTelefono = $('#e_numero_telefono');
            const $direccionHabitacion = $('#e_direccion_habitacion');
            const $estadoCivil = $('#e_estado_civil');
            const $bautismo = $('#e_bautismo');
            const $comunion = $('#e_comunion');
            const $confirmacion = $('#e_confirmacion');
            const $matrimonio = $('#e_matrimonio');
            const $genderMale = $('#e_gender_male');
            const $genderFemale = $('#e_gender_female');
            const $nroRetiro = $('#e_nro_retiro');
            const $fechaRetiro = $('#e_fecha_retiro');
            const $parroquia = $('#e_parroquia');
            const $puebloCiudad = $('#e_pueblo_ciudad');

            // Consolidación de selección de elementos
            const $checkboxes = $bautismo.add($comunion).add($confirmacion).add($matrimonio).add($genderMale).add($genderFemale);

            $.ajax({
                url: `${uri}/${id}`,
                type: "GET",
                data: { id: id },
                dataType : 'JSON',

                success: function(result) {
                // Actualización de valores de elementos DOM
                    $id.val(result.id);
                    $nro.val(result.nro);
                    $nombres.val(result.nombres);
                    $apellidos.val(result.apellidos);
                    $cedula.val(result.cedula);
                    $fechaNacimiento.val(result.fecha_nacimiento);
                    $numeroTelefono.val(result.numero_telefono);
                    $direccionHabitacion.val(result.direccion_habitacion);
                    $estadoCivil.val(result.estado_civil);

                    // Uso de propiedades de elementos en lugar de atributos
                    $bautismo.prop('checked', result.bautismo == '0');
                    $comunion.prop('checked', result.comunion == '0');
                    $confirmacion.prop('checked', result.confirmacion == '0');
                    $matrimonio.prop('checked', result.matrimonio == '0');
                    $genderMale.prop('checked', result.sexo == 'M');
                    $genderFemale.prop('checked', result.sexo == 'F');

                    $nroRetiro.val(result.nro_retiro);
                    $fechaRetiro.val(result.fecha_retiro);
                    $parroquia.val(result.parroquia);
                    $puebloCiudad.val(result.pueblo_ciudad);
                }
            }); 
        });

        $('#update-form').submit(function(e) {
            e.preventDefault(); 
            var id = $('#updateEmpId').val();
            $.ajax({
                url:`${uri}/${id}`,
                type: "PUT",
                data: $(this).serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response.status) {
                       $('#editModal').modal('hide')
                       toastr.success("Usuario Editado Correctamente", "El Usuario ha sido Editado.");
                       dataTable.ajax.reload();
                    } else {
                        toastr.error(response.error_string, "ERROR");
                        $('#btn-save').attr('disabled', false);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, "ERROR");
                    $('#btn-save').attr('disabled', false);
                }
            });
        }); 
        /**
         * END EDIT FORM
         * */ 

        $('body').on('click','.delete', function() {
            var empId = $(this).data('id');
            $('#deleteEmpId').val(empId);
        });

         $('#deleteCForm').on('submit',function(){
            var empId = $('#deleteEmpId').val();
            $.ajax({
                type : "DELETE",
                url  : `${uri}/${empId}`,
                dataType : "JSON",  
                data : {id:empId},
                success: function(response) {
                    $('#deleteModal').modal('hide');

                    dataTable.ajax.reload();
                    toastr.error("El Usuario ha sido Eliminado.","Usuario Eliminado");
                }
            });
            return false;
        });

        var dataTable = $('#myTable').DataTable({
            ajax: {
                url: uri,
                type: "GET"
            },
            responsive: true,
            lengthMenu : [ [10,20,30,40,50,-1], [10,20,30,40,50,"Todos"] ],
            
            columns: [
                { data: 'nro', title: 'Nro' },
                { data: 'nombres', title: 'Nombres' },
                { data: 'apellidos', title: 'Apellidos' },
                { data: 'cedula', title: 'C/Identidad' },
                { data: 'fecha_nacimiento', title: 'F/Nacimiento' },
                { data: 'numero_telefono', title: 'N/Teléfono' },
                { data: 'direccion_habitacion', title: 'D/Habitación' },
                { data: 'estado_civil', title: 'E/Civil' },
                { data: 'sexo', title: 'Género' },
                { data: 'nro_retiro', title: 'Número de Retiro' },
                { data: 'fecha_retiro', title: 'Fecha de Retiro' },
                { data: 'parroquia', title: 'Parroquia' },
                { data: 'pueblo_ciudad', title: 'Pueblo o Ciudad' },
                { data: 'bautismo', title: 'Bautismo' },
                { data: 'comunion', title: 'Comunión' },
                { data: 'confirmacion', title: 'Confirmación' },
                { data: 'matrimonio', title: 'Matrimonio' },
                { 
                    data : null,
                    bSortable: false,
                    responsivePriority: 1,
                    mRender: function(data, type, value) {
                        return `<div class="btn-group">
                        <a href="#viewBookModal" class="view btn btn-sm btn-secondary" onclick="displayViewForm(${value.nro})" data-toggle="modal"><i class="fe fe-eye" data-toggle="tooltip" title="Ver"></i></a>
                        <a href="#printBookModal" class="view btn btn-sm btn-secondary" onclick="displayPrintForm(${value.nro})" data-toggle="modal"><i class="fe fe-print" data-toggle="tooltip" title="Imprimir"></i></a>
                        <a class="edit btn btn-sm btn-secondary me-1" data-bs-toggle="modal" data-bs-target="#editModal" data-id="${value.id}"><i class="fe fe-pencil" data-toggle="tooltip" title="Editar"></i></a>
                        <a class="delete btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="${value.id}"><i class="fe fe-trash" data-toggle="tooltip" title="Eliminar"></i></a>
                        </div>`;
                    },
                    title: 'Acciones'
                }
            ]
        });

        /**
         * Jquery Mask
         */
        $('.date').mask('00/00/0000', {
            placeholder: '00/00/0000'
        });

        $(document).ready(function() {
            function mask_phone() {
                function setMask() {
                    let matrix = "+###############";

                    maskList.forEach(item => {
                        let code = item.code.replace(/[\s#]/g, "");
                        let phone = $(this).val().replace(/[\s#-)(]/g, "");

                        if (phone.includes(code)) {
                            matrix = item.code;
                        }
                    });

                    let i = 0;
                    let val = $(this).val().replace(/\D/g, "");

                    $(this).val(matrix.replace(/(?!\+)./g, function(a) {
                        return /[#\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a;
                    }));
                }

                $(this).focus(function() {
                    if (!$(this).val()) {
                        $(this).val("+58");
                        $(this).addClass("active");
                    }
                });

                $(this).on("input", setMask);
                $(this).on("focus", setMask);
                $(this).on("blur", setMask);
            }

            $(".tlfn").each(mask_phone);
        });

        /** 
        * Sistema de Cedula de Identidad
        */

        const options = {
            translation: {
                '0': {pattern: /\d/},
                '1': {pattern: /[1-9]/},
                '9': {pattern: /\d/, optional: true},
                '#': {pattern: /\d/, recursive: true},
                'C': {pattern: /[VvEe]/, fallback: 'V'}
            }
        };

        $('.c_identity').mask('C-19999999', options);

        $('.c_identity').on('input', function (e) {
            var identity = $(this).val();
            var identityUpper = identity.toUpperCase();
            $(this).val(identityUpper);
            if (identityUpper.length > 9) {
                var cedula = identityUpper.substring(2);
                if (cedula > 80000000) {
                    $(this).val('E-' + cedula);
                }
            }
        });
    </script>
</body>
</html>