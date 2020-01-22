window.numdel = function(ele) {
        var retVal = confirm("Are you sure you want to delete ?");
        if (retVal == true) {
            alert("User wants to delete!");
            var row = $(ele).closest('tr');
            row.remove();
            countrow();
            return true;
        } else {
            alert("User does not want to delete!");
            return false;
        }
    }
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