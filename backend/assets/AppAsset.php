<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'adminLTE/plugins/font-awesome/css/font-awesome.min.css',
        'adminLTE/plugins/fontawesome-free/css/all.min.css',
        'adminLTE/plugins/sweetalert2/sweetalert2.min.css',
        'adminLTEplugins/toastr/toastr.min.css',
        'adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'adminLTE/plugins/ionicons/css/ionicons.min.css',
        'adminLTE/dist/css/adminLTE.min.css',
        'adminLTE/dist/css/skins/_all-skins.min,css',
        'adminLTE/dist/css/adminlte.min.css',
        'adminLTE/plugins/iCheck/flat/blue.css',
        'adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        'adminLTE/plugins/datepicker/datepicker3.css',
        'adminLTE/plugins/daterangepicker/daterangepicker-bs3.css',
        'adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    ];

    public $js = [
        'adminLTE/plugins/jquery/jquery.min.js',
        'adminLTE/plugins/jquery-ui/jquery-ui.min.js',
        'adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'adminLTE/plugins/chart.js/Chart.min.js',
        'adminLTE/plugins/sparklines/sparkline.js',
        'adminLTE/plugins/jqvmap/jquery.vmap.min.js',
        'adminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js',
        'adminLTE/plugins/jquery-knob/jquery.knob.min.js',
        'adminLTE/plugins/moment/moment.min.js',
        'adminLTE/plugins/daterangepicker/daterangepicker.js',
        'adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'adminLTE/plugins/summernote/summernote-bs4.min.js',
        'adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'adminLTE/dist/js/adminlte.js',
        'adminLTE/dist/js/adminlte.min.js',
        'adminLTE/dist/js/pages/dashboard.js',
        'adminLTE/dist/js/demo.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
