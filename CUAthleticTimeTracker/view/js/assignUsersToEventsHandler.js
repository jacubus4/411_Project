

window.onload = function() {

    AddButtonAssignListener();
}
function GetSelectedUserIds()
{
    var selectedUsers = Array();
    var table = document.getElementById("assignUserTable");
    var rows = table.getElementsByTagName("tr");

    for (i = 1; i < rows.length; i++) {
        if(document.getElementById("chkAssign" + i).checked)
        {
            selectedUsers.push(table.rows[i].cells[1].innerHTML);
        }
    }
    return selectedUsers;
}

function GetSelectedEvents()
{
    var selectedEvents = Array();
    var table = document.getElementById("selectEventTable");
    var rows = table.getElementsByTagName("tr");

    for (i = 1; i < rows.length; i++) {
        alert(document.getElementById("chkEvent" + i).checked)
        if(document.getElementById("chkEvent" + i).checked)
        {
            selectedEvents.push(table.rows[i].cells[1].innerHTML);
        }
    }
    return selectedEvents;
}

function AddButtonAssignListener()
{

        document.getElementById("btnSubmit").addEventListener("click", AssignUsers);

}

function AssignUsers() {


    var table = document.getElementById("selectEventTable");
    var rows = table.getElementsByTagName("tr");

    var userList = GetSelectedUserIds();
    var eventList = GetSelectedEvents();
    var startDate = document.getElementById('startdate').value;
    var endDate =document.getElementById('enddate').value;
    var startTime = document.getElementById('starttime').value;
    var endTime =document.getElementById('endtime').value;

    var assignData = {
        eventList: eventList,
        assignedUsersList: userList,
        startDate: startDate,
        endDate: endDate,
        startTime: startTime,
        endTime: endTime
    };
    //Use ajax to send information from the client to PHP


    $.ajax({
        url: '../controller/adminController.php',
        type: 'POST',
        data: {action: "assignusers", assignedData: JSON.stringify(assignData)},
        success: function (data) {
            alert(data);
//            location.reload();

        }
    });

}






