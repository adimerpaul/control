
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Control actividades! | </title>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url()?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=base_url()?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>vendors/toastr/css/toastr.css">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post" action="<?=base_url()?>Welcome/login">
                    <h1>Ingresar sistema</h1>
                    <div>
                        <input type="text" name="usuario" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="password" name="clave" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button class="btn btn-success btn-block" type="submit">Ingresar</button>
                        <a class="reset_pass" href="#">Perdiste tu contraseña?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Desas crear una cuenta?
                            <a href="#signup" class="bg bg-info text-white p-1 to_register"> Docente </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Control de Actividades !</h1>
                            <p>©<?=date('Y')?> All Rights Reserved.  Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form id="formulario">
                    <h1>Crear cuenta</h1>
                    <div>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre competo del docente" required="" />
                    </div>
                    <div>
                        <input type="text"  name="usuario" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="password" id="clave" name="clave" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <input type="password" id="clave2" name="clave2" class="form-control m-1" placeholder="Repetir password" required="" />
                        <small id="mensaje" class="form-text text-muted bg bg-warning m-1">Las contraseñas no son iguales</small>
                    </div>
                    <div>
                        <button class="btn btn-success btn-block submit" type="submit">Crear</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">
                            Ya eres usuario ?
                            <a href="#signin" class="to_register">
                                Iniciar sesión
                            </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Control de activiades !</h1>
                            <p>©<?=date('Y')?> All Rights Reserved. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
<script src="<?=base_url()?>vendors/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>vendors/toastr/js/toastr.min.js"></script>
</body>
</html>
<script !src="">
    window.onload=function () {
        // console.log($('#formulario').serialize());
        $('#mensaje').hide();
        $('#clave2').keyup(function (e) {
            e.preventDefault();
            if ($('#clave').val()!=$('#clave2').val()){
                $('#mensaje').show();
            }else{
                $('#mensaje').hide();
            }
        });
        $('#formulario').submit(function (e) {
            $.ajax({
                type:'POST',
                data:$('#formulario').serialize(),
                url:'Welcome/insert',
                success:function (e) {
                    console.log(e);
                    if (e=='1'){
                        toastr.success('Creado correctamnte','ahora puedes logearte')
                        $('#formulario')[0].reset();
                    }else{
                        toastr.error('No se pudo crear al usuario por que el nombre de docente o el nombre de usuario ya fue creado');
                    }
                }
            });
            return false;
        });
    }
</script>
