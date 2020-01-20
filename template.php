<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เกี่ยวกับระบบ</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/nso-style.css" rel="stylesheet">

    <link href="js/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
                        <a href="#">เทมเพล็ต</a>
                    </li>
                    <li class="breadcrumb-item active">รายการเทมเพล็ต</li>
                </ol>

                <!-- Page Content -->
                <h1>รายการเทมเพล็ต</h1>
                <hr>
                <p>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#addAndEditCateModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus-square"></i>
                        </span>
                        <span class="text">เพิ่ม</span>
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
                                            ชื่อเทมเพล็ต
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
                                        <th>
                                            เผยแพร่
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="check" name="record" type="checkbox" value="userId"></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#addAndEditCateModal" data-maincate="UUID-001" data-level="1" data-catelv1="UUID-001" data-catelv2="" data-catelv3="" data-catelv4="" data-catename="ประชากรศาสตร์ ประชากรและเคหะ" data-codeid="os_01">
                                                <i class="fas fa-edit text-success"></i>
                                            </a>
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </td>
                                        <td>1</td>
                                        <td>ประชากรศาสตร์ ประชากรและเคหะ</td>
                                        <td>สถิติทางการ</td>
                                        <td>1/10/2020</td>
                                        <td>os_01</td>
                                        <td>1/16/2020</td>
                                        <td><i class="fas fa-check-circle text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td><input class="check" name="record" type="checkbox" value="userId"></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#addAndEditCateModal" data-maincate="UUID-001" data-level="1" data-catelv1="UUID-001" data-catelv2="" data-catelv3="" data-catelv4="" data-catename="ประชากรศาสตร์ ประชากรและเคหะ" data-codeid="os_01">
                                                <i class="fas fa-edit text-success"></i>
                                            </a>
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </td>
                                        <td>2</td>
                                        <td>-ประชากรศาสตร์</td>
                                        <td>สถิติทางการ</td>
                                        <td>2/10/2020</td>
                                        <td>dem</td>
                                        <td>1/16/2020</td>

                                        <td><i class="fas fa-ban text-danger"></i></td>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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
                    <form>
                        <div class="form-group" id="mainCate">
                            <label for="inputMainCate" class="col-form-label text-danger">หมวดหลัก* :</label>
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
                        <div class="form-group hide" id="cateLv1">
                            <label for="inputCateLv1" class="col-form-label">หมวดหมู่ Level 1 :</label>
                            <select class="selectpicker" id="inputCateLv1" data-live-search="true" title="กรุณาเลือก">
                                <option value="">กรุณาเลือก</option>
                                <option value="UUID-001">ประชากรศาสตร์ ประชากรและเคหะ</option>
                                <option value="UUID-002">แรงงาน</option>
                                <option value="UUID-003">การศึกษา</option>
                                <option value="UUID-004">ศาสนา ศิลปะ วัฒนธรรม</option>
                                <option value="UUID-005">สุขภาพ</option>
                                <option value="UUID-006">สวัสดิการสังคม</option>
                                <option value="UUID-007">หญิงและชาย</option>
                                <option value="UUID-008">รายได้และรายจ่ายของครัวเรือน</option>
                                <option value="UUID-009">ยุติธรรม ความมั่นคง การเมืองและการปกครอง</option>
                            </select>
                        </div>
                        <div class="form-group hide" id="cateLv2">
                            <label for="inputCateLv2" class="col-form-label">หมวดหมู่ Level 2 :</label>
                            <select class="selectpicker" id="inputCateLv2" data-live-search="true" title="กรุณาเลือก">
                                <option value="">กรุณาเลือก</option>
                                <option value="UUID-001">ประชากรศาสตร์</option>
                                <option value="UUID-002">ประชากร</option>
                                <option value="UUID-003">เคหะ</option>
                            </select>
                        </div>
                        <div class="form-group hide" id="cateLv3">
                            <label for="inputCateLv3" class="col-form-label">หมวดหมู่ Level 3 :</label>
                            <select class="selectpicker" id="inputCateLv3" data-live-search="true" title="กรุณาเลือก">
                                <option value="">กรุณาเลือก</option>
                                <option value="UUID-001">อัตราเกิดอย่างหยาบ</option>
                                <option value="UUID-002">อัตราตายอย่างหยาบ</option>
                                <option value="UUID-003">อัตราย้ายถิ่น</option>
                                <option value="UUID-003">ภาวะเจริญพันธ์</option>
                            </select>
                        </div>
                        <!--<div class="form-group hide" id="cateLv4">
              <label for="inputCateLv4" class="col-form-label">หมวดหมู่ Level 4 :</label>
              <select class="selectpicker" id="inputCateLv4" data-live-search="true" title="กรุณาเลือก">
                <option value="">กรุณาเลือก</option>
                <option value="UUID-001">ประชากรศาสตร์ ประชากรและเคหะ</option>
                <option value="UUID-002">แรงงาน</option>
                <option value="UUID-003">การศึกษา</option>
              </select>
            </div>-->
                        <div class="form-group">
                            <label for="inputCateID" class="col-form-label">Level :</label>
                            <input type="text" id="inputLevel" class="form-control" placeholder="Level" required="required" readonly>
                        </div>
                        <div class="form-group">
                            <label for="inputCateName" class="col-form-label text-danger">สร้างโดย* :</label>
                            <input type="text" id="inputCateName" class="form-control" placeholder="ชื่อผู้สร้าง" required="required">
                        </div>

                        <div class="form-group" id="status">
                            <label for="inputStatus" class="col-form-label">เผยแพร่:</label>
                            <input type="checkbox" id="inputStatus" checked data-toggle="toggle">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="addrow" class="btn btn-success"><i class="far fa-save"></i> บันทึก</button>
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
                    <button type="button" class="btn btn-success" id="addrow"><i class="far fa-save"></i> บันทึก</button>
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
            "bInfo" : true,

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
            $('#inputStatus').bootstrapToggle('off')

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

            if (mainCate != '') {
                modal.find('.modal-title').text('แก้ไขข้อมูลหมวดหมู่')
            } else {
                modal.find('.modal-title').text('เพิ่มข้อมูลหมวดหมู่')
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
                        console.log("level1");
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
                        console.log("level2");

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
                        console.log("level3");

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
                        console.log("level4");

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
        $(document).ready(function() {
            $("#addrow").click(function() {
                var mainCate = $("#inputMainCate option:selected").text();
                var level = $("#inputLevel").val();
                var cateLv1 = $("#inputCateLv1 option:selected").text();
                var cateLv2 = $("#inputCateLv2 option:selected").text();
                var cateLv3 = $("#inputCateLv3 option:selected").text();
                var cateLv4 = $("#inputCateLv4 option:selected").text();
                var cateName = $("#inputCateName").val();
                var status = $("#inputStatus").val();
                var result = "";

                if (mainCate != 'กรุณาเลือก') {
                    result = "-" + mainCate;
                }
                if (cateLv1 != 'กรุณาเลือก') {
                    result = "--" + mainCate + " " + cateLv1;
                }
                if (cateLv2 != 'กรุณาเลือก') {
                    result = "---" + mainCate + " " + cateLv1 + " " + cateLv2;
                }
                if (cateLv3 != 'กรุณาเลือก') {
                    result = "----" + mainCate + " " + cateLv1 + " " + cateLv2 + " " + cateLv3;
                }

                console.log(result);
                console.log(cateName);
                console.log(status);
                var table = document.getElementById("dataTable");
                var totalRowCount = table.rows.length;
                var row = table.insertRow();
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);
                var cell6 = row.insertCell(5);
                var cell7 = row.insertCell(6);
                var cell8 = row.insertCell(7);
                var cell9 = row.insertCell(8);

                cell1.innerHTML = `<input id="checkAll" class="check" name="record" type="checkbox" value="">`;
                cell2.innerHTML = `<a href="#" data-toggle="modal" data-target="#addAndEditCateModal" data-maincate="UUID-001" data-level="1" data-catelv1="UUID-001" data-catelv2="" data-catelv3="" data-catelv4="" data-catename="ประชากรศาสตร์ ประชากรและเคหะ" data-codeid="os_01">
                                                <i class="fas fa-edit text-success"></i>
                                            </a>
                                            <i class="fas fa-trash-alt text-danger"></i>`;
                cell3.innerHTML = totalRowCount;
                cell4.innerHTML = result;
                cell5.innerHTML = cateName;
                cell6.innerHTML = "1/20/2020";
                cell7.innerHTML = " ";
                cell8.innerHTML = " ";
                cell9.innerHTML = `<i class="fas fa-check-circle text-success"></i>`;
                countrow();




            });
            $("#removeall").click(function(){
            $("#dataTable tbody").find('input[name="record"]').each(function(){
            	if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }


            });
            countrow();
        });

    });
    function countrow(){
  $.ajax({
    url: "template.php",
    method: "POST",
    success: function(data) {
      var rowCount = $('#dataTable').find('tr').length-1;
      $("#dataTable_info").text('Showing 1 to '+rowCount+' of '+rowCount+' entries');
    }
  });
}

    </script>

</body>

</html>