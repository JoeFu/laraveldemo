$(document).ready(
    function () {
        $.ajax({
            type: "GET",
            async: true,
            dataType: 'json',
            url: "backend/APIs.php",
            data: {
                "option": "LoadDepartment"
            },
            success: function (result) {
                var ChooseDep = [];
                $.each(result, function (i, j) {
                    ChooseDep[i] = j['ChooseDep'];
                    $("#ChooseDep").append(
                        " <option id='" + ChooseDep[i] + "'>" + ChooseDep[i] + "</option>"
                    );
                });
            },
            error: function () {
                console.log("ER400");
            }
        },);
        // 加载 联系人函数
        load_contact_table();
        //当部门选择更改时
        $("#ChooseDep").change(
            function () {
                $("#ChooseStaff option").remove();
                $("#ChooseStaff").append(
                    " <option id='PleaseChooseStaff'>请选择您的姓名</option>");
                var Department = $("#ChooseDep option:selected").attr("id");
                $.ajax({
                    type: "get",
                    async: true,
                    url: "backend/APIs.php?",
                    dataType: "json",
                    data: {
                        "option": "LoadStaffName",
                        "Department": Department
                    },
                    success: function (result) {
                        var ChooseStaff = [];
                        $.each(result, function (i, j) {
                            ChooseStaff[i] = j['StaffName'];
                            $("#ChooseStaff").append(
                                " <option id='" + ChooseStaff[i] + "'>" + ChooseStaff[i] + "</option>"
                            );
                        });
                    },
                    error: function () {
                        console.log("ER400");
                    }
                })
            }
        );
        //当员工名称更改时
        $("#ChooseStaff").change(
            function (){
                CheckInStatus = 0;
                isCheckedIn();
                isCheckedOut();
                NotesStauts();
            }
        )
    },
)

$(function () {
    $('#ChooseCheckInTime').timepicker(
        {
            'timeFormat': 'h:i A',
            'minTime': '6:00am',
            'maxTime': '10:30pm',
            'step': 15
        }
    );
    $('#setTime').on('click', function () {
        $('#ChooseCheckInTime').timepicker('setTime', new Date());
    });
    $('#ChooseStartTime').datepicker({
        format : "yyyy-mm-dd",
        todayHighlight : true,
        autoclose : true,
		todayBtn : true,
    });
    $('#ChooseEndTime').datepicker({
        format : "yyyy-mm-dd",
        todayHighlight : true,
        autoclose : true,
		todayBtn : true,
        }
    );
},);


var CheckedInTime = "";
var CheckInStatus = 0;
var CheckOutStatus = 0;
var CheckNotesStatus = 0;

//获取上班打卡记录 
function isCheckedIn(){
    var Department = $("#ChooseDep").val();
    var Name = $("#ChooseStaff").val();
    var Time = $("#ChooseCheckInTime").val();
    //检查当天的 打卡状态
    $.ajax({
        type: "GET",
        async: true,
        dataType: 'json',
        url: "backend/APIs.php",
        data: {
            "option": "CheckCurrentCheckInStatus",
            "Department": Department,
            "StaffName": Name,
        },
        success: function (result) {
            if (result === 1) {
                CheckInStatus = 1;
                console.log("上班打卡记录 - 有数据 - 已打卡"); 
            }
            else if(result === 2){
                CheckInStatus = 2;
                console.log("上班打卡记录 - 有数据 - 未打卡");
            }
            else {
                CheckInStatus = 0;
                console.log("上班打卡记录 - 无数据");   
            }
        },
        error: function () {
            console.log("上班打卡记录 - 数据库无数据");
        }
    });
}

//  获取下班打卡记录
function isCheckedOut(){
    var Department = $("#ChooseDep").val();
    var Name = $("#ChooseStaff").val();
    var Time = $("#ChooseCheckInTime").val();
    $.ajax({
        type: "GET",
        async: true,
        dataType: 'json',
        url: "backend/APIs.php",
        data: {
            "option": "CheckCurrentCheckOutStatus",
            "Department": Department,
            "StaffName": Name,
        },
        success: function (result) {
              
            if (result === 3) {
                CheckOutStatus = 3;
                console.log("下班打卡记录 - 无数据");
            }
            else if (result === 2) {
                CheckOutStatus = 2;
                console.log("下班打卡记录 - 有数据 - 未打卡");
            }
            else if (result === 1){
                CheckOutStatus = 1;
                console.log("下班打卡记录 - 有数据 - 已经打卡");
            }    
        },
        error: function () {
            console.log("下班打卡记录 -数据库无数据");
        }
    });
}
//获取备注状态
function NotesStauts(){
    var Department = $("#ChooseDep").val();
    var Name = $("#ChooseStaff").val();
    var Time = $("#ChooseCheckInTime").val();
    //检查当天的 打卡状态
    $.ajax({
        type: "GET",
        async: true,
        dataType: 'json',
        url: "backend/APIs.php",
        data: {
            "option": "CheckCurrentNotesStatus",
            "Department": Department,
            "StaffName": Name,
        },
        success: function (result) {     
            if (result === 1) {
                CheckNotesStatus = 1;
                console.log("备注记录 - 有数据 - 出差");
            }
            else if(result === 2){
                CheckNotesStatus = 2;
                console.log("备注记录 - 有数据 - 生病");
            }
            else{
                CheckNotesStatus = 3;
                console.log("备注记录 - 无出差/生病 记录");
            }  
        },
        error: function () {
            console.log("备注记录 - 数据库无数据 ");
        }
    });
}

//上班打卡到后台
function CheckIn() {
    var Department = $("#ChooseDep").val();
    var Name = $("#ChooseStaff").val();
    var Time = $("#ChooseCheckInTime").val();
    if (Department != "请选择地点" && Department != "ER400" && Name != "请选择您的姓名") {
        if (isEmpty(Time)) {
            swal('Hi, 您未选择时间 ', '上班打卡失败', 'error');
        }
        else {
            if (CheckInStatus == 1 || CheckInStatus == 2) {
                swal('Hi, ' + Name, '您已经打过卡了, 请打卡下班', 'warning');
            }
            else {
                $.ajax({
                    type: "GET",
                    async: true,
                    // dataType: 'json',
                    url: "backend/APIs.php",
                    data: {
                        "option": "CheckIn",
                        "Department": Department,
                        "StaffName": Name,
                        "Time":Time
                    },
                    success: function (result) {
                        swal('Hi, ' + Name, '您在 ' + Time + ' '+ result , 'success');
                    },
                    error: function () {
                        console.log("ERROR");
                    }
                })
                console.log(CheckInStatus); 
                isCheckedIn();
            }
        }
    }
    else {
        swal('Hi, ' + Name, '您在 ' + Time + ' 上班打卡失败', 'error');
    }
}

//下班打卡到后台
function CheckOut() {
    var Department = $("#ChooseDep").val();
    var Name = $("#ChooseStaff").val();
    var Time = $("#ChooseCheckInTime").val();
    if (Department != "请选择地点" && Department != "ER400" && Name != "请选择您的姓名") {
        if (isEmpty(Time)) {
            swal('Hi, 您未选择时间 ', '下班打卡失败', 'error');
        }
        else 
        {
            if (CheckOutStatus == 1) {
                swal('Hi, ' + Name, '您已经打过卡了', 'warning');
            }
            else if (CheckOutStatus == 3){
                swal('Hi, ' + Name, '您还未打卡上班', 'error');
            }
            else if(CheckOutStatus == 2) {
            $.ajax({
                type: "GET",
                async: true,
                // dataType: 'json',
                url: "backend/APIs.php",
                data: {
                    "option": "CheckOut",
                    "Department": Department,
                    "StaffName": Name,
                    "Time":Time
                },
                success: function (result) {
                    swal('Hi, ' + Name, '您在 ' + Time + ' '+ result , 'success');
                },
                error: function () {
                    console.log("ERROR");
                }
            }) 
            console.log(CheckOutStatus); 
            isCheckedOut();
            }
        }
    }
    else {
        swal('Hi, ' + Name, '您在 ' + Time + ' 下班打卡失败', 'error');
    }
}

var NotesSelection = "";
function AddNotes(NotesSelection) {
    var Department = $("#ChooseDep").val();
    var Name = $("#ChooseStaff").val();
    var Notes = "";
    var Greeting = "";
    if (Department != "请选择地点" && Department != "ER400" && Name != "请选择您的姓名") {
        if (CheckNotesStatus == 1) {
            swal('Hi, ' + Name, '已经申请出差/病假, 您还可以打卡下班', 'warning');
        }
        else if (CheckNotesStatus == 2){
            swal('Hi, ' + Name, '已经申请出差/病假, 您还可以打卡下班', 'warning');
        }
        else if(CheckNotesStatus == 3) {
            switch(NotesSelection) {
                //Away
                case 1:
                Notes = "出差";
                Greeting = "出差记录成功！";
                  break;
                // Sick
                case 2:
                Notes = "病假";
                Greeting ="希望您早日痊愈!";
                  break;
                case 3:
                Notes = "事假";
                Greeting ="感谢您的提交事假的请求!";
                  break;
              }
            $.ajax({
                type: "GET",
                async: true,
                url: "backend/APIs.php",
                data: {
                 "option": "AddNotes",
                 "Department": Department,
                 "StaffName": Name,
                 "Notes":Notes
                },
                success: function (result) {
                    alert(result);
                    swal('Hi, ' + Name,  Greeting , 'success');
                },
                error: function () {
                    console.log("ERROR");
                }
            }) 
        console.log(CheckNotesStatus); 
        NotesStauts();
        }  
    }
    else {
        swal('Hi, ' + Name, '打卡记录失败!', 'error');
    }
}

function Away() {
    NotesSelection = 1;
    AddNotes(NotesSelection);
}

function Sick() {
    NotesSelection = 2;
    AddNotes(NotesSelection);
}
function Away1() {
    NotesSelection = 3;
    AddNotes(NotesSelection);
}

function displayTime() {
    document.getElementById("time").innerHTML = new Date().toTimeString();
}
// 每隔1秒钟调用displayTime函数

$(document).ready(function(){
    $("#buttonShow").click(function(){
        var StartTime = $("#ChooseStartTime").val();
        var EndTime = $("#ChooseEndTime").val();
        if(StartTime=='' || EndTime =='' ||EndTime< StartTime)
        {
            swal('Hi,', 'Please Enter Validate Time!', 'error');
        }
        LoadTableData(StartTime,EndTime);  
        document.title =  ' Time Table '+ StartTime +' to '+ EndTime + ' OWG';
    })
})



function LoadTableData(StartTime,EndTime){
    $.ajax({
        type: "get",
        async: true,
        url: "backend/APIs.php",
        dataType: "json",
        data: {
            "option":"LoadAttendanceTable",
            // "Department":Department,
            "Start":StartTime,
            "End":EndTime
        },
        success: function(result)
        {
            showTable(result);
        }
    });

}

function showTable(data){

    var table = $('#showTable').DataTable({
        destroy: true,
        data: data,
        responsive: true,
        "lengthChange": true,
        
        columns: [
            { title: "名字", data: "name" },
            { title: "上班时间", data: "checkin" },
            { title: "下班时间", data: "checkout" },
            { title: "备注", data: "notes"},
            { title: "打卡地点", data: "place" },
            { title: "合计", data: "Time" },
        ],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
    });

}

function isEmpty(v) {
    switch (typeof v) {
        case 'undefined':
            return true;
        case 'string':
            if (v.replace(/(^[ \t\n\r]*)|([ \t\n\r]*$)/g, '').length == 0) return true;
            break;
        case 'boolean':
            if (!v) return true;
            break;
        case 'number':
            if (0 === v || isNaN(v)) return true;
            break;
        case 'object':
            if (null === v || v.length === 0) return true;
            for (var i in v) {
                return false;
            }
            return true;
    }
    return false;
}

function toggleFullScreen() {
	if (!document.fullscreenElement && // alternative standard method
		!document.mozFullScreenElement && !document.webkitFullscreenElement) {// current working methods
		if (document.documentElement.requestFullscreen) {
			document.documentElement.requestFullscreen();
		} else if (document.documentElement.mozRequestFullScreen) {
			document.documentElement.mozRequestFullScreen();
		} else if (document.documentElement.webkitRequestFullscreen) {
			document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
		}
	} else {
		if (document.cancelFullScreen) {
			document.cancelFullScreen();
		} else if (document.mozCancelFullScreen) {
			document.mozCancelFullScreen();
		} else if (document.webkitCancelFullScreen) {
			document.webkitCancelFullScreen();
		}
	}
}
