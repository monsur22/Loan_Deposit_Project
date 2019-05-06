<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Creative Software || Acounting Software Management</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('public/admin/')}}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{asset('public/admin/')}}/assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href="{{asset('public/admin/')}}/assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="{{asset('public/admin/css/bercodeform.css')}}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('public/admin/')}}/assets/css/main.min.css" rel="stylesheet" />
    <link href="{{asset('public/admin/')}}/assets/css/mystyle.css" rel="stylesheet" />



    <!-- PAGE LEVEL STYLES-->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
     <!-- CORE PLUGINS-->
    <script src="{{asset('public/admin/')}}/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- PAGE LEVEL PLUGINS-->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('public/admin/')}}/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('public/admin/')}}/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/assets/js/app.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/assets/js/scripts/form-plugins.js" type="text/javascript"></script>

    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script> --}}
</head>

<body class="fixed-navbar">
    <div class="page-wrapper" >
     
        <!-- START HEADER-->
          @include('admin.includes.header')



        <!-- END HEADER-->
        <!-- START SIDEBAR-->
          @include('admin.includes.slidebar')
       

        <!-- END SIDEBAR-->
        <div class="content-wrapper"style="min-height: 1300px;">
            <!-- START PAGE CONTENT-->
         @yield('content')


            <!-- END PAGE CONTENT-->
          @include('admin.includes.footer')
      </div>
           
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <div class="theme-config">
        {{-- <div class="theme-config-toggle"><i class="fa fa-cog theme-config-show"></i><i class="ti-close theme-config-close"></i></div> --}}
        <div class="theme-config-box">
            <div class="text-center font-18 m-b-20">SETTINGS</div>
            <div class="font-strong">LAYOUT OPTIONS</div>
            <div class="check-list m-b-20 m-t-10">
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedNavbar" type="checkbox" checked>
                    <span class="input-span"></span>Fixed navbar</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedlayout" type="checkbox">
                    <span class="input-span"></span>Fixed layout</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input class="js-sidebar-toggler" type="checkbox">
                    <span class="input-span"></span>Collapse sidebar</label>
            </div>
            <div class="font-strong">LAYOUT STYLE</div>
            <div class="m-t-10">
                <label class="ui-radio ui-radio-gray m-r-10">
                    <input type="radio" name="layout-style" value="" checked="">
                    <span class="input-span"></span>Fluid</label>
                <label class="ui-radio ui-radio-gray">
                    <input type="radio" name="layout-style" value="1">
                    <span class="input-span"></span>Boxed</label>
            </div>
            <div class="m-t-10 m-b-10 font-strong">THEME COLORS</div>
            <div class="d-flex m-b-20">
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Default">
                    <label>
                        <input type="radio" name="setting-theme" value="default" checked="">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-white"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Blue">
                    <label>
                        <input type="radio" name="setting-theme" value="blue">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-blue"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Green">
                    <label>
                        <input type="radio" name="setting-theme" value="green">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-green"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Purple">
                    <label>
                        <input type="radio" name="setting-theme" value="purple">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-purple"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Orange">
                    <label>
                        <input type="radio" name="setting-theme" value="orange">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-orange"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Pink">
                    <label>
                        <input type="radio" name="setting-theme" value="pink">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-pink"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
            </div>
            <div class="d-flex">
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="White">
                    <label>
                        <input type="radio" name="setting-theme" value="white">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Blue light">
                    <label>
                        <input type="radio" name="setting-theme" value="blue-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-blue"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Green light">
                    <label>
                        <input type="radio" name="setting-theme" value="green-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-green"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Purple light">
                    <label>
                        <input type="radio" name="setting-theme" value="purple-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-purple"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Orange light">
                    <label>
                        <input type="radio" name="setting-theme" value="orange-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-orange"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Pink light">
                    <label>
                        <input type="radio" name="setting-theme" value="pink-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-pink"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    {{-- <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div> --}}
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="{{asset('public/admin/')}}/asset/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/asset/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/asset/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/asset/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/asset/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{asset('public/admin/')}}/asset/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/asset/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/asset/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="{{asset('public/admin/')}}/asset/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('public/admin/')}}assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{asset('public/admin/')}}/asset/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
</body>

<script type="text/javascript">
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10,
            //"ajax": './assets/demo/data/table_data.json',
            /*"columns": [
                { "data": "name" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]*/
        });
    })
</script>
 <script>
  $( function() {

    $('#purchase_date').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    $('#sles_date').datepicker({ dateFormat: 'yy-mm-dd' }).val();

  } );
  </script>

    <script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
<script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<script>
$("#delete-button").click(function(){
    if(confirm("Are you sure you want to delete this?")){
      return true;
    }
    else{
        return false;
    }
});
</script>
</html>