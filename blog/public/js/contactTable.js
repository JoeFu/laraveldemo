function load_contact_table() {
    $.ajax({
        type: "get",
        async: true,
        url: "backend/APIs.php",
        dataType: "json",
        data: {
            "option": "getALLContact"
        },
        success: function (result) {
            showContactTable(result);
        }
    });
}

function showContactTable(data) {
    var table = $('#contactTable').DataTable({
        destroy: true,
        data: data,
        responsive: true,
        "lengthChange": true,

        columns: [{
                title: "员工编号",
                data: "staff_code"
            },
            {
                title: "Name",
                data: "staff_name"
            },
            {
                title: "员工中文名",
                data: "staff_chinese_name"
            },
            {
                title: "员工邮箱",
                data: "staff_e-mail"
            },
            {
                title: "部门/组织",
                data: "staff_department_name"
            },
        ],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
    });

}