@extends('layouts.app')

@section('title','Create')

@section('content')


    <div class="container">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ng-scope">

            <form action="{{route('formulario.store')}}" id="formulario" method="post">
             @csrf

                <div class="row" style="font-family: arial;color: black">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ng-scope">
                        <div class="header">
                            <h3 style="color: #3d9745">Datos Basicos Del Reporte</h3>
                            <hr style="color: #36853d">
                        </div>
                    </div>

                    {{-- DATOS BASICOS DEL REPORTE -PRIMER SELECT --}}
                    <div class="mb-1">
                        <select name="tipo_de_denuncia" id="tipo_de_denuncia" class="form-select">
                            <option selected>---Tipo De Denuncia---</option>
                            <option value="Acoso">Acoso</option>
                            <option value="Administración de la información">Administración de la información</option>
                            <option value="Amenazas">Amenazas</option>
                            <option value="Conflicto de interés">Conflicto de interés</option>
                            <option value="Discriminación">Discriminación</option>
                            <option value="Estilos de liderazgo y comportamiento">Estilos de liderazgo y comportamiento</option>
                            <option value="Fraude,hurto y corrupción">Fraude,hurto y corrupción</option>
                            <option value="Imagen corporativa">Imagen corporativa</option>
                            <option value="Irregularidades en incumplimiento de políticas">Irregularidades en incumplimiento de políticas</option>
                            <option value="Manejo de recursos y activos de la compañía">Manejo de recursos y activos de la compañía</option>
                            <option value="Responsabilidad social corporativa">Responsabilidad social corporativa</option>
                            <option value="Relación con accionistas">Relación con accionistas</option>
                            <option value="Soborno y extorsión">Soborno y extorsión</option>
                            <option value="SARLAFT y listas de control">SARLAFT y listas de control</option>
                            <option value="Soborno transnacional">Soborno transnacional</option>
                            <option value="Otros">Otros</option>
                        </select>
                    </div>

                    <div class="mb-1">
                        <textarea class="form-control" id="situacion" name="situacion" rows="3"
                                  placeholder="por favor describa la situación presentada"></textarea>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                      <input type="date" id="fecha" name="fecha" class="form-control"
                               placeholder="indique la fecha del evento">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i
                                class="fas fa-calendar-days"></i></span>
                    </div>


                    {{-- PERSONAS RELACIONADAS EN EL REPORTE-INGRESO DATOS --}}
                    <div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ng-scope">
                            <div class="header">
                                <h3 style="color: #3d9745">Personas Relacionadas En El Reporte</h3>
                                <hr style="color: #36853d">
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <div class="col">
                                    <input type="text" class="form-control" name="nombre_relacionada_reporte" id="nombre_relacionada_reporte" placeholder="Nombre"
                                           aria-label="First name">
                                </div>

                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo" aria-label="Last name">
                            </div>
                        </div>


                        <div class="mb-1">
                            <textarea class="form-control" id="detalles_ad" name="detalles_ad" rows="3"
                                      placeholder="Detalles adicionales"></textarea>
                        </div>


                        {{-- DATOS DE PERSONA QUE REPORTA --}}

                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ng-scope">
                            <div class="header">
                                <h3 style="color: #3d9745">Datos de Persona que Reporta</h3>
                                <hr style="color: #36853d"></hr>
                                <p class="" style="background-color: #fcf8e3;">
                                    “Recuerde que el Línea de Transparencia es un canal anónimo y confidencial, por lo
                                    que usted
                                    no está obligado a suministrarnos ninguno de sus datos de contacto. En caso de
                                    querer
                                    ser contactado, por favor diligencie la siguiente información:
                                </p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <select name="t_vinculacion" id="t_vinculacion" class="form-select">
                                    <option selected>---Seleccione el tipo de vinculación---</option>
                                    <option value="Empleado">Empleado</option>
                                    <option value="Cliente">Cliente</option>
                                    <option value="Proveedor">Proveedor</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>

                            <div class="col form-check">
                                <input class="form-check-input" type="checkbox" name="anonimo" id="anonimo" value="true" onclick="document.getElementById('nombre_persona_reporta').disabled=this.checked
;">
                                <label class="form-check-label" for="anonimo">
                                    anonimo
                                </label>
                            </div>

                            <div class="form-group">
                                <div class="mb-1">
                                    <input type="text" id="nombre_persona_reporta" name="nombre_persona_reporta" class="form-control"
                                           placeholder="Digite su nombre" >
                                </div>
                                <div class="mb-1">
                                    <input type="email" id="email" name="email" class="form-control"
                                           placeholder="Digite su email">
                                </div>
                                <div class="mb-1">
                                    <input type="text" id="numero" name="numero" class="form-control"
                                           placeholder="Digite un numero de telefono o celular">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                        </div>

                        {{-- BOTON ENVIAR --}}
                        <div class="form-group col-md-2 col-lg-2 col-sm-2 col-xs-2" style="color: white">

                            <button type="submit" id="enviar" class="" style="cursor: pointer;background-color: #3d9745; color: white;  font-weight: bolder;
                           width: 264px;border-radius: 10px;margin-center: 20px;">
                                <i class="fas fa-location-arrow"></i>Enviar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </html>

    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#formulario").submit(function (e) {
                e.preventDefault();

                var formulario = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{url('formulario')}}",
                    data: formulario,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log(data);
                            swal.fire(" ¡Registrado! ", " Registrado correctamente ", "success").then(() => {
                                window.location.href = "{{ route('formulario.index') }}"
                            });
                    },
                    error: function (json, xhr, status) {
                        swal.fire(" ¡no registrado! ",
                            "Complete toda la informacion y valide los datos", "error");
                    }
                });
            });

        });


    </script>
@endsection
