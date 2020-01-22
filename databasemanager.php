<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เกี่ยวกับระบบ</title>

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
                        <a href="#">ฐานข้อมูล</a>
                    </li>
                    <li class="breadcrumb-item active">รายการฐานข้อมูลภายนอก</li>
                </ol>

                <!-- Page Content -->
                <h1>รายการฐานข้อมูลภายนอก</h1>
                <hr>
                <p>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#addAndEditCateModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus-square"></i>
                        </span>
                        <span class="text">สร้างการเชื่อมโยงฐานข้อมูล</span>
                    </a>

                    <a href="#" class="btn btn-danger btn-icon-split" id="removeall">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">ลบ</span>
                    </a>
                </p>


                <!-- DataTables Example -->
                <div class="card mb-3">

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th> <input id="checkAll" class="check" name="checkAll" type="checkbox" value=""> </th>
                                        <th>
                                            จัดการ
                                        </th>
                                        <th>
                                            ลำดับ
                                        </th>
                                        <th>
                                            ชื่อเชื่อมต่อฐานข้อมูล
                                        </th>
                                        <th>
                                            สร้างโดย
                                        </th>
                                        <th>
                                            วันที่สร้าง
                                        </th>
                                        <th>
                                            แก้ไขโดย
                                        </th>
                                        <th>
                                            วันที่แก้ไข
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="tr1">
                                        <td><input class="check" name="record" type="checkbox" value="userId"></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#addAndEditCateModal" data-maincate="UUID-001" data-level="1" data-catelv1="UUID-001" data-catelv2="" data-catelv3="" data-catelv4="" data-catename="ประชากรศาสตร์ ประชากรและเคหะ" data-codeid="os_01">
                                                <i class="fas fa-edit text-success"></i>
                                            </a>
                                            <a href="#" id="btndel" onclick="numdel(this);"><i class="fas fa-trash-alt text-danger"></i></a> </td>
                                        </td>
                                        <td>1</td>
                                        <td>localhost</td>
                                        <td>admin1</td>
                                        <td>1/1/2020</td>
                                        <td>os_01</td>
                                        <td>1/16/2020</td>
                                    </tr>
                                    <tr id="tr2">
                                        <td><input class="check" name="record" type="checkbox" value="userId"></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#addAndEditCateModal" data-maincate="UUID-001" data-level="1" data-catelv1="UUID-001" data-catelv2="" data-catelv3="" data-catelv4="" data-catename="ประชากรศาสตร์ ประชากรและเคหะ" data-codeid="os_01">
                                                <i class="fas fa-edit text-success"></i>
                                            </a>
                                            <a href="#" id="btndel" onclick="numdel(this);"><i class="fas fa-trash-alt text-danger"></i></a> </td>
                                        </td>
                                        <td>2</td>
                                        <td>127.0.0.1</td>
                                        <td>admin2</td>
                                        <td>2/1/2020</td>
                                        <td>dem</td>
                                        <td>1/16/2020</td>

                                    </tr>
                                    <tr id="tr2">
                                        <td><input class="check" name="record" type="checkbox" value="userId"></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#addAndEditCateModal" data-maincate="UUID-001" data-level="1" data-catelv1="UUID-001" data-catelv2="" data-catelv3="" data-catelv4="" data-catename="ประชากรศาสตร์ ประชากรและเคหะ" data-codeid="os_01">
                                                <i class="fas fa-edit text-success"></i>
                                            </a>
                                            <a href="#" id="btndel" onclick="numdel(this);"><i class="fas fa-trash-alt text-danger"></i></a> </td>
                                        </td>
                                        <td>8</td>
                                        <td>127.0.0.1</td>
                                        <td>thunwa</td>
                                        <td>2/1/2020</td>
                                        <td>dem</td>
                                        <td>1/16/2020</td>

                                    </tr>
                                    <tr id="tr2">
                                        <td><input class="check" name="record" type="checkbox" value="userId"></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#addAndEditCateModal" data-maincate="UUID-001" data-level="1" data-catelv1="UUID-001" data-catelv2="" data-catelv3="" data-catelv4="" data-catename="ประชากรศาสตร์ ประชากรและเคหะ" data-codeid="os_01">
                                                <i class="fas fa-edit text-success"></i>
                                            </a>
                                            <a href="#" id="btndel" onclick="numdel(this);"><i class="fas fa-trash-alt text-danger"></i></a> </td>
                                        </td>
                                        <td>2</td>
                                        <td>127.0.0.1</td>
                                        <td>admin2</td>
                                        <td>2/1/2020</td>
                                        <td>dem</td>
                                        <td>1/16/2020</td>

                                    </tr>
                                    <tr id="tr2">
                                        <td><input class="check" name="record" type="checkbox" value="userId"></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#addAndEditCateModal" data-maincate="UUID-001" data-level="1" data-catelv1="UUID-001" data-catelv2="" data-catelv3="" data-catelv4="" data-catename="ประชากรศาสตร์ ประชากรและเคหะ" data-codeid="os_01">
                                                <i class="fas fa-edit text-success"></i>
                                            </a>
                                            <a href="#" id="btndel" onclick="numdel(this);"><i class="fas fa-trash-alt text-danger"></i></a> </td>
                                        </td>
                                        <td>2</td>
                                        <td>127.0.0.1</td>
                                        <td>admin2</td>
                                        <td>2/1/2020</td>
                                        <td>dem</td>
                                        <td>1/16/2020</td>

                                    </tr>
                                    <tr id="tr2">
                                        <td><input class="check" name="record" type="checkbox" value="userId"></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#addAndEditCateModal" data-maincate="UUID-001" data-level="1" data-catelv1="UUID-001" data-catelv2="" data-catelv3="" data-catelv4="" data-catename="ประชากรศาสตร์ ประชากรและเคหะ" data-codeid="os_01">
                                                <i class="fas fa-edit text-success"></i>
                                            </a>
                                            <a href="#" id="btndel" onclick="numdel(this);"><i class="fas fa-trash-alt text-danger"></i></a> </td>
                                        </td>
                                        <td>4</td>
                                        <td>127.0.0.1</td>
                                        <td>admin2</td>
                                        <td>2/1/2020</td>
                                        <td>dem</td>
                                        <td>1/16/2020</td>

                                    </tr>
                                    <tr id="tr2">
                                        <td><input class="check" name="record" type="checkbox" value="userId"></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#addAndEditCateModal" data-maincate="UUID-001" data-level="1" data-catelv1="UUID-001" data-catelv2="" data-catelv3="" data-catelv4="" data-catename="ประชากรศาสตร์ ประชากรและเคหะ" data-codeid="os_01">
                                                <i class="fas fa-edit text-success"></i>
                                            </a>
                                            <a href="#" id="btndel" onclick="numdel(this);"><i class="fas fa-trash-alt text-danger"></i></a> </td>
                                        </td>
                                        <td>5</td>
                                        <td>127.0.0.1</td>
                                        <td>admin2</td>
                                        <td>2/1/2020</td>
                                        <td>dem</td>
                                        <td>1/16/2020</td>

                                    </tr>
                                    <tr id="tr2">
                                        <td><input class="check" name="record" type="checkbox" value="userId"></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#addAndEditCateModal" data-maincate="UUID-001" data-level="1" data-catelv1="UUID-001" data-catelv2="" data-catelv3="" data-catelv4="" data-catename="ประชากรศาสตร์ ประชากรและเคหะ" data-codeid="os_01">
                                                <i class="fas fa-edit text-success"></i>
                                            </a>
                                            <a href="#" id="btndel" onclick="numdel(this);"><i class="fas fa-trash-alt text-danger"></i></a> </td>
                                        </td>
                                        <td>3</td>
                                        <td>127.0.0.1</td>
                                        <td>admin2</td>
                                        <td>2/1/2020</td>
                                        <td>dem</td>
                                        <td>1/16/2020</td>

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
                    <h5 class="modal-title" id="addCateModalLabel">สร้างการเชื่อมโยงฐานข้อมูล</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="col-12 mx-auto" id="centerdiv">
                            <div class="input-group" style="margin-top:20px; width:380px;">
                                <span class="">ชื่อ Connection *: &nbsp;&nbsp;</span>
                                <input type="text" placeholder="Connection NameXXX" class="form-control">
                            </div>
                            <div class="input-group" style="margin-top:20px;">
                                <span class="">Database Type *: &nbsp;&nbsp;</span>
                                <div style="width: 250px;">
                                    <select class="form-control" name="location">
                                        <option>MsSQL</option>
                                        <option>Oracle</option>
                                        <option>Postgre</option>
                                    </select>
                                </div>
                                <div class="input-group" style="margin-top:20px;">
                                    <span class="" style="margin-left:60px">Driver *: &nbsp;&nbsp;</span>
                                    <div style="width: 250px;">
                                        <select class="form-control" name="location">
                                            <option>MsSQL</option>


                                        </select>
                                    </div>

                                </div>
                                <div class="input-group" style="width:100%;margin:20px 30px;">
                                    <span>Driver File *: &nbsp;&nbsp;</span>
                                    <div class="custom-file" style="width: 250px;">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span>Connect URL :</span>
                                </div>
                                <div class="input-group">

                                    <div class="card col-12" style="width: auto;">
                                        <div class="card-body">

                                            <div class="input-group">
                                                <span>Host Name *:</span>
                                                <input type="text" placeholder="Localhost" class="form-control">
                                                <span>Port *:</span>
                                                <input type="text" placeholder="1433" class="form-control">

                                            </div>
                                            <div class="input-group" style="margin-top: 10px;">
                                                <span>Database Name *:</span>
                                                <input type="text" placeholder="Dbname NameXXX" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group col-12" style="margin-top:25px;">
                                        <span>User Database Connect *:</span>
                                        <input type="text" placeholder="Db_user_connectXXX" class="form-control">
                                        <span>Password *:</span>
                                        <input type="password" placeholder="********" class="form-control">

                                    </div>

                                </div>

                            </div>
                            <div style="float:right;margin-top:10px;">
                                <button class="btn btn-secondary">Test Connection</button>
                            </div><br>
                            <div style="margin-left:30%;margin-top:20px;">
                                <button class="btn btn-primary" id="sidebarCollapse">บันทึก</button>
                                <button class="btn btn-danger">ยกเลิก</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="importCateModal" tabindex="-1" role="dialog" aria-labelledby="importCateModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCateModalLabel">นำเข้า File หมวดหมู่</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group" id="mainCate">
                                <label for="inputMainCate" class="col-form-label">หมวดหลัก:</label>
                                <select class="selectpicker" id="inputMainCate" data-live-search="true" title="กรุณาเลือก">
                                    <option value="">กรุณาเลือก</option>
                                    <option value="UUID-001">สถิติทางการ</option>
                                    <option value="UUID-002">สำมะโนและสำรวจ</option>
                                    <option value="UUID-003">ตัวชี้วัดที่สำคัญ</option>
                                    <option value="UUID-004">เฉพาะเรื่อง</option>
                                    <option value="UUID-005">กลุ่มจังหวัด</option>
                                    <option value="UUID-006">การบริหารงานภายใน</option>
                                </select>
                            </div>
                            <div class="form-group" id="fileCate">
                                <label class="col-form-label">File ข้อมูลหมวดหมู่ csv:</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputFile">
                                    <label class="custom-file-label" for="inputFile">Choose file</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success"><i class="far fa-save"></i> บันทึก</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/function.js"></script>


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
                    modal.find('.modal-title').text('แก้ไขข้อมูลการเชื่อมโยงฐานข้อมูล')
                } else {
                    modal.find('.modal-title').text('สร้างการเชื่อมโยงฐานข้อมูล')
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

        //---------------------------------------------------------------ลบข้อมูลในตาราง-----------------------------------------
$("#removeall").click(function() {
    $("#dataTable tbody").find('input[name="record"]').each(function() {
        if ($(this).is(":checked")) {
            $(this).parents("tr").remove();
        }


    });
    countrow();
});
 //-----------------------------------ฟังชั่นหาid แถว ที่คลิ้ก--------------------------------------
 var id = "";
        var table = $('#dataTable').DataTable();
        $('#dataTable').on('click', 'tr', function() {
            id = table.row(this).id();
            console.log(id);

        });
        //------------------------------------ฟังชันนับจำนวนแถว-----------------------------
        function countrow() {
            $.ajax({
                url: "template.php",
                method: "POST",
                success: function(data) {
                    var rowCount = $('#dataTable').find('tr').length - 1;
                    $("#dataTable_info").text('Showing 1 to ' + rowCount + ' of ' + rowCount + ' entries');
                }
            });
        }
        </script>
</body>

</html>