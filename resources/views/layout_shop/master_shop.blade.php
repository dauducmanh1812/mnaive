<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Shop Webpage</title>

    <!-- Bootstrap Core CSS -->
    <link href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- MetisMenu CSS -->
    <link href="admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
    @include('layout_shop.header_shop')
    <!-- /#wrapper -->
      <div id="page-wrapper">
             <div class="container-fluid">
    @yield('content')
                </div>
    </div>

    </div>

    <!-- jQuery -->
    <script src="admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="admin/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });

       /* $(document)
            .on('click', '.accept-discount', function (event) {
                let link = $(this).data('link');
                location.href = link;
            })*/
    });
    </script>
     <script type="text/javascript" language="javascript" src="admin/ckeditor/ckeditor.js" ></script>
</body>

</html>
