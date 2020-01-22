<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>การนำขึ้นสู่ระบบ</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/nso-style.css" rel="stylesheet">

</head>

<body id="page-top">

    <?php require_once('navbar.php'); ?>

    <div id="wrapper">

        <!-- Sidebar Main Menu -->
        <?php require_once('menu-left.php'); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">การอัพโหลดข้อมูล</a>
                    </li>
                    <li class="breadcrumb-item active">การนำขึ้นสู่ระบบ</li>
                </ol>

                <!-- Page Content -->
                <h1>การนำขึ้นสู่ระบบ</h1>
                <hr>
                <p>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#addAndEditCateModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus-square"></i>
                        </span>
                        <span class="text">Upload</span>
                    </a>

                </p>


                <!-- DataTables Example -->
                <div class="card mb-3">

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                    <th>
                            ลำดับ
                        </th>
                        <th>
                            รายการข้อมูล
                        </th>
                        <th>
                            File Nmae
                        </th>
                        <th>
                            Date Time
                        </th>
                        <th>
                            User Name
                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>1</td>

                                        <td>รายการอัปโหลดที่1</td>
                                        <td>
                                         newfile.CV1
                                        </td>
                                        <td><?php echo date("y/m/d"); ?></td>
                                        <td>admin1</td>

                                    </tr>
                                    <tr>
                                    <td>2</td>

                                        <td>รายการอัปโหลดที่2</td>
                                        <td>
                                         newfile.CV2
                                        </td>
                                        <td><?php echo date("y/m/d"); ?></td>
                                        <td>admin2</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © NSO-GIS 2019-2020</span>
            </div>
        </div>
    </footer>

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <div class="modal fade" id="addAndEditCateModal" tabindex="-1" role="dialog" aria-labelledby="addAndEditCateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCateModalLabel">เพิ่มหมวดหมู่</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="mx-auto">

<div class="input-group" style="margin-top:20px">
    <span class="">รายการข้อมูล *: &nbsp;&nbsp;</span>
    <div style="width: 250px;">
        <select class="form-control" name="location">
            <option>Connection_Name</option>

        </select>
    </div>
</div>
<div class="input-group" style="margin-top:20px;">
    <span class="">Upload FIle *:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <div class="custom-file" style="width: 250px;">
        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    </div>
</div>
<br><br>
<p style="text-align: center;">
    <button class="btn btn-primary">Upload</button>
    <button class="btn btn-danger"data-dismiss="modal" >ยกเลิก</button>
</p>
</div>

            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <!--<script src="vendor/chart.js/Chart.min.js"></script>-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <!--script src="js/demo/chart-area-demo.js"></script>-->

    <script src="js/bootstrap-select/dist/js/bootstrap-select.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $('#dataTable').DataTable({
            "columns": [{
                "orderable": false
            }, {
                "orderable": false
            }, {
                "orderable": false
            }, {
                "orderable": false
            }, {
                "orderable": false
            }],
            "order": [
                [2, "asc"]
            ]
        });

        /*Checkbox check list all*/
        $("#checkAll").click(function() {
            $(".check").prop('checked', $(this).prop('checked'));
        });

        function toggleOn() {
            $('#inputStatus').bootstrapToggle('on')
        }

        $('#inputMainCate').on('change', function() {
            if ($(this).val() != '') {
                $('#cateLv1').removeClass('hide');
                $('#inputLevel').val('1');
            } else {
                $('#cateLv1').addClass('hide');
            }
        });

        $('#inputCateLv1').on('change', function() {
            if ($(this).val() != '') {
                $('#cateLv2').removeClass('hide');
                $('#inputLevel').val('2');
            } else {
                $('#cateLv2').addClass('hide');
            }
        });

        $('#inputCateLv2').on('change', function() {
            if ($(this).val() != '') {
                $('#cateLv3').removeClass('hide');
                $('#inputLevel').val('3');
            } else {
                $('#cateLv3').addClass('hide');
            }
        });

        $('#inputCateLv3').on('change', function() {
            if ($(this).val() != '') {
                /*$('#cateLv4').removeClass('hide');*/
                $('#inputLevel').val('4');
            }
            /*else {
                   $('#cateLv4').addClass('hide');
                 }*/
        });

        $('#addAndEditCateModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var mainCate = button.data('maincate')
            var level = button.data('level')
            var cateLv1 = button.data('catelv1')
            var cateLv2 = button.data('catelv2')
            var cateLv3 = button.data('catelv3')
            var cateLv4 = button.data('catelv4')
            var cateName = button.data('catename')
            var codeID = button.data('codeid')
            var modal = $(this)
            if (mainCate != undefined) {
                modal.find('.modal-title').text('แก้ไขข้อมูลหมวดหมู่')
            } else {
                modal.find('.modal-title').text('Upload CSV')
            }

            $("#inputMainCate option:selected").removeAttr("selected");
            $("#inputCateLv1 option:selected").removeAttr("selected");
            $("#inputCateLv2 option:selected").removeAttr("selected");
            $("#inputCateLv3 option:selected").removeAttr("selected");

            if (level != '') {
                switch (level) {
                    case 1:
                        $("#inputMainCate option[value='" + mainCate + "']").attr("selected", "selected");
                        $("#inputCateLv1 option[value='']").attr("selected", "selected");
                        $("#inputCateLv2 option[value='']").attr("selected", "selected");
                        $("#inputCateLv3 option[value='']").attr("selected", "selected");
                        $("#inputCateName").val(cateName);
                        $("#inputLevel").val(level);
                        $('#inputCateID').val(codeID);
                        $('#inputID').val(cateLv1);
                        $('#cateLv1').removeClass('hide');
                        break;
                    case 2:
                        $("#inputMainCate option[value='" + mainCate + "']").attr("selected", "selected");
                        $("#inputCateLv1 option[value='" + cateLv1 + "']").attr("selected", "selected");
                        $("#inputCateLv2 option[value='']").attr("selected", "selected");
                        $("#inputCateLv3 option[value='']").attr("selected", "selected");
                        $("#inputCateName").val(cateName);
                        $("#inputLevel").val(level);
                        $('#inputCateID').val(codeID);
                        $('#inputID').val(cateLv2);
                        $('#cateLv1').removeClass('hide');
                        $('#cateLv2').removeClass('hide');
                        break;
                    case 3:
                        $("#inputMainCate option[value='" + mainCate + "']").attr("selected", "selected");
                        $("#inputCateLv1 option[value='" + cateLv1 + "']").attr("selected", "selected");
                        $("#inputCateLv2 option[value='" + cateLv2 + "']").attr("selected", "selected");
                        $("#inputCateLv3 option[value='']").attr("selected", "selected");
                        $("#inputCateName").val(cateName);
                        $("#inputLevel").val(level);
                        $('#inputCateID').val(codeID);
                        $('#inputID').val(cateLv3);
                        $('#cateLv1').removeClass('hide');
                        $('#cateLv2').removeClass('hide');
                        $('#cateLv3').removeClass('hide');
                        break;
                    case 4:
                        $("#inputMainCate option[value='" + mainCate + "']").attr("selected", "selected");
                        $("#inputCateLv1 option[value='" + cateLv1 + "']").attr("selected", "selected");
                        $("#inputCateLv2 option[value='" + cateLv2 + "']").attr("selected", "selected");
                        $("#inputCateLv3 option[value='" + cateLv3 + "']").attr("selected", "selected");
                        $("#inputCateName").val(cateName);
                        $("#inputLevel").val(level);
                        $('#inputCateID').val(codeID);
                        $('#inputID').val(cateLv4);
                        $('#cateLv1').removeClass('hide');
                        $('#cateLv2').removeClass('hide');
                        $('#cateLv3').removeClass('hide');
                        break;
                    default:
                        $("#inputMainCate option[value='']").attr("selected", "selected");
                        $("#inputCateLv1 option[value='']").attr("selected", "selected");
                        $("#inputCateLv2 option[value='']").attr("selected", "selected");
                        $("#inputCateLv3 option[value='']").attr("selected", "selected");
                        $("#inputCateName").val('');
                        $("#inputLevel").val('1');
                        $('#inputCateID').val('');
                        $('#inputID').val('');
                        $('#cateLv1').addClass('hide');
                        $('#cateLv2').addClass('hide');
                        $('#cateLv3').addClass('hide');
                        break;
                }
                $('#inputMainCate').selectpicker('refresh');
                $('#inputCateLv1').selectpicker('refresh');
                $('#inputCateLv2').selectpicker('refresh');
                $('#inputCateLv3').selectpicker('refresh');
            }

        });

        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
</body>

</html>