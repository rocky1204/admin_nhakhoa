<!DOCTYPE html>
<html lang="en">

<head>
  @include('widgets.head_admin')
</head>

<body class="nav-md">
    <div class="container body">
        @include('widgets.rightbar_admin')
            <!-- top navigation -->
            @include('widgets.header_admin')
            <!-- /top navigation -->

            <!-- page content <--></-->
            <div class="right_col" role="main">
                <!-- top tiles -->
                @include('modules.header_count')                
                <!-- /top tiles -->
           @yield('maincontent')
            <!-- /page content -->
                 
                </div>
            <!-- footer content -->
             
            <footer>
@include('widgets.footer_admin')
            </footer>
            <!-- /footer content -->
        </div>
    </div>
@include('widgets.scriptfooter_admin')
</body>

</html>