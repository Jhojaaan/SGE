<?php
if (isset($_GET['pagina'])) {
    $rutaUrl = explode("/", $_GET['pagina']);

    //$ruta = $_GET['ruta'];
    $ruta = $rutaUrl[0];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="57x57"href="favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"href="favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"href="favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"href="favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"href="favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"href="favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"href="favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"href="favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"href="favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"href="favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"href="favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"href="favicons/favicon-16x16.png">
    <link rel="manifest"href="favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php if (isset($ruta)) : ?>
        <title><?= $ruta ?></title>
    <?php else : ?>
        <title>SIT</title>
    <?php endif ?>

    <!-- =================================================== 
        PLUGINS CSS
    =================================================== -->
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?= URL_APP ?>views/css/plantilla.css?v=<?= time() ?>">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= URL_APP ?>views/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= URL_APP ?>views/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= URL_APP ?>views/dist/css/adminlte.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="<?= URL_APP ?>views/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= URL_APP ?>views/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Datatables - BUTTONS -->
    <link rel="stylesheet" href="<?= URL_APP ?>views/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= URL_APP ?>views/plugins/daterangepicker/daterangepicker.css">
    <!-- Select2 -->
    <link rel="<?= URL_APP ?>views/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link href="<?= URL_APP ?>views/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?= URL_APP ?>views/plugins/select2-bootstrap4-theme/select2-bootstrap4.css" rel="stylesheet">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= URL_APP ?>views/plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" href="<?= URL_APP ?>views/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- cross-page-tab-navigation -->
    <link rel="stylesheet" href="<?= URL_APP ?>views/plugins/cross-page-tab-navigation/jquery.simpletabs.css">


    <!-- =================================================== 
        PLUGINS JS
    =================================================== -->
    <!-- jQuery -->
    <script src="<?= URL_APP ?>views/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= URL_APP ?>views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= URL_APP ?>views/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= URL_APP ?>views/dist/js/adminlte.js"></script>
    <!-- Datatables -->
    <script src="<?= URL_APP ?>views/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Datatables - BUTTONS -->
    <script src="<?= URL_APP ?>views/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/jszip/jszip.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/pdfmake/vfs_fonts.js"></script>
    <!-- Momentjs -->
    <script src="<?= URL_APP ?>views/plugins/moment/moment-with-locales.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?= URL_APP ?>views/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- ChartJS -->
    <script src="<?= URL_APP ?>views/plugins/chart.js/Chart.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/chart.js/Charjs-plugin-datalabels.min.js"></script>
    <!-- Sweet Alert -->
    <script src="<?= URL_APP ?>views/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- Momentjs -->
    <!-- <script src="<?= URL_APP ?>views/plugins/moment/moment.min.js"></script> -->
    <script src="<?= URL_APP ?>views/plugins/moment/moment-with-locales.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="<?= URL_APP ?>views/select2/js/select2.full.min.js"></script>
    <script src="<?= URL_APP ?>views/plugins/select2/js/select2.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?= URL_APP ?>views/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- iCheck for checkboxes and radio inputs -->
    <script src="<?= URL_APP ?>views/plugins/icheck-bootstrap/icheck.min.js"></script>
    <!-- cross-page-tab-navigation -->
    <script src="<?= URL_APP ?>views/plugins/cross-page-tab-navigation/jquery.simpletabs.js"></script>

</head>

<?php if (strpos($_SERVER['REQUEST_URI'], "busqueda-fuec") !== false) : ?>

    <body>
        <?php include('modulos/contratos/busqueda-fuec.php'); ?>
    </body>
<?php else : ?>

    <body class="hold-transition layout-fixed layout-navbar-fixed sidebar-collapse ">

        <?php if (isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == "ok") : ?>
            <div class="wrapper">

                <!-- =================================================== NAVBAR (cabecera)=================================================== -->
                <?php include('includes/cabecera.php'); ?>

                <!-- =================================================== MAIN SIDE BAR CONTAINER (menu) =================================================== -->
                <?php include('includes/menu.php'); ?>

                <!-- =================================================== CONTENT(contenido) =================================================== -->
                <?php
                if (isset($ruta)/* isset($_GET['pagina']) */) {
                    // $rutaUrl = explode("/", $_GET['pagina']);

                    // //$ruta = $_GET['ruta'];
                    // $ruta = $rutaUrl[0];

                    if (
                        $ruta == "inicio" ||
                        $ruta == "salir"
                    ) {
                        include "modulos/{$ruta}.php";
                    } else if (
                        $ruta == "usuarios" ||
                        $ruta == "roles-usuarios"
                    ) {
                        include "modulos/usuarios/{$ruta}.php";
                    } else if (
                        $ruta == "a-profesores" ||
                        $ruta == "gh-perfil-sd" ||
                        $ruta == "gh-pago-ss" ||
                        $ruta == "gh-alertas-contratos" ||
                        $ruta == "gh-bloqueo-personal" ||
                        $ruta == "gh-ausentismo"
                    ) {
                        include "modulos/administracion/{$ruta}.php";
                    } else if (
                        $ruta == "v-vehiculos" ||
                        $ruta == "v-convenios" ||
                        $ruta == "v-propietarios" ||
                        $ruta == "v-bloqueo-vehiculo" ||
                        $ruta == "v-fuec"
                    ) {
                        include "modulos/vehicular/{$ruta}.php";
                    } else if (
                        $ruta == "cg-gestion-humana" ||
                        $ruta == "cg-vehicular" ||
                        $ruta == "cg-mantenimiento" ||
                        $ruta == "cg-seguridad"
                    ) {
                        include "modulos/conceptos_generales/{$ruta}.php";
                    } else if (
                        $ruta == "contratos-clientes" ||
                        $ruta == "contratos-fijos" ||
                        $ruta == "contratos-cotizaciones" ||
                        $ruta == "contratos-ordenservicio" ||
                        $ruta == "busqueda-fuec"
                    ) {
                        include "modulos/contratos/{$ruta}.php";
                    } else if ( # Mantenimiento
                        $ruta == "m-proveedores" ||
                        $ruta == "m-inventario" ||
                        $ruta == "m-revision-tm"
                    ) {
                        include "modulos/mantenimiento/{$ruta}.php";
                    } else if ( # Operaciones
                        $ruta == "o-fuec" ||
                        $ruta == "o-alistamiento" ||
                        $ruta == "o-rodamiento"
                    ) {
                        include "modulos/operaciones/{$ruta}.php";
                    } else { # P??gina no v??lida
                        include "includes/error404.php";
                    }
                } else {
                    include "modulos/inicio.php";
                }
                ?>

                <!-- =================================================== MAIN FOOTER =================================================== -->
                <?php include('includes/footer.php'); ?>

            </div>
            <!-- ./wrapper -->
        <?php else : ?>
            <div class="login-box">
                <?php include('modulos/ingreso.php'); ?>
            </div>
        <?php endif ?>

        <?php
        /* ===================================================
        MODALS
    ===================================================*/
        include 'includes/modals.php';
        ?>


    </body>
<?php endif ?>

<!-- =================================================== CUSTOM JS =================================================== -->
<script src="<?= URL_APP ?>config/config.js?v=<?= time() ?>"></script>
<script src="<?= URL_APP ?>views/js/plantilla.js?v=<?= time() ?>"></script>
<script src="<?= URL_APP ?>views/js/usuarios.js?v=<?= time() ?>"></script>
<script src="<?= URL_APP ?>views/js/administracion/a-profesores.js?v=<?= time() ?>"></script>
<!-- <script src="<?= URL_APP ?>views/js/gh.js?v=<?= time() ?>"></script>
<script src="<?= URL_APP ?>views/js/vehicular.js?v=<?= time() ?>"></script>
<script src="<?= URL_APP ?>views/js/conceptos.js?v=<?= time() ?>"></script>
<script src="<?= URL_APP ?>views/js/contratos.js?v=<?= time() ?>"></script>
<script src="<?= URL_APP ?>views/js/fuec.js?v=<?= time() ?>"></script>
<script src="<?= URL_APP ?>views/js/mantenimiento.js?v=<?= time() ?>"></script>
<script src="<?= URL_APP ?>views/js/operaciones.js?v=<?= time() ?>"></script> -->



</html>