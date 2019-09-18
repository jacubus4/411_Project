//alert("Loaded");
var eventId=0;


window.onload = function() {
    CreateMenuListeners();
    DisplayAll();
    CreateUnassignButtonUserListeners();

}


function CreateMenuListeners() {

        document.getElementById("eventMenu").addEventListener("change", SelectMenuItem);

}


function CreateUnassignButtonUserListeners()
{

    var table = document.getElementById("unassignUsersTable");
    var rows = table.getElementsByTagName("tr");

    for (i = 1; i < rows.length; i++) {
        document.getElementById("btnUnassign" + i).addEventListener("click", UnassignUser);
    }

}

function SelectMenuItem(){

    var table = document.getElementById("assignmentBody");
if (this.value == null)
{

    var filterId = 0;
}
else {
    var filterId = this.value;
}
   $.ajax({
       url: '../controller/adminController.php',
       type: 'POST',
       data: {action: "filterassignments", filterData: JSON.stringify(filterId)},
       success: function (data) {
           var table = document.getElementById("unassignUsersTable");
//or use :  var table = document.all.tableid;
           for(var i = table.rows.length - 1; i > 0; i--)
           {
               table.deleteRow(i);
           }
           var results = JSON.parse(data);

           for(var i=0; i<results.length; i++) {
               var tr = document.createElement('tr');

               addCell(tr,    "<scope='row'><button type='button' class='btn btn-danger'>Unassign</button>");
               addCell(tr, results[i].id);
               addCell(tr, results[i].event_name);
               addCell(tr, results[i].first_name);
               addCell(tr, results[i].last_name);
               addCell(tr, results[i].start_date);
               addCell(tr, results[i].end_date);
               addCell(tr, results[i].start_time);
               addCell(tr, results[i].end_time);
               table.appendChild(tr)
           }

        }
    });


}


function DisplayAll(){
    var table = document.getElementById("assignmentBody");

    var filterId = -1;
    $.ajax({
        url: '../controller/adminController.php',
        type: 'POST',
        data: {action: "allassignments", filterData: JSON.stringify(filterId)},
        success: function (data) {
           var results = JSON.parse(data);

    for(var i=0; i<results.length; i++) {
        var tr = document.createElement('tr');

        addCell(tr,    "<scope='row'><button type='button' class='btn btn-danger'>Unassign</button>");
        addCell(tr, results[i].id);
        addCell(tr, results[i].event_name);
        addCell(tr, results[i].first_name);
        addCell(tr, results[i].last_name);
        addCell(tr, results[i].start_date);
        addCell(tr, results[i].end_date);
        addCell(tr, results[i].start_time);
        addCell(tr, results[i].end_time);






        table.appendChild(tr)
    }
        }
    });


}

function addCell(tr, val) {
    var td = document.createElement('td');

    td.innerHTML = val;

    tr.appendChild(td)
}

function UnassignUser() {

    var table = document.getElementById("unassignUsersTable");
    var rows = table.getElementsByTagName("tr");

    for (var i = 1; i < rows.length; i++) {
        if (this.id == "btnUnassign" + i) {

            //Want to ignore the header columns
            //Cell 2 is the name of the event
            unassignmentId = table.rows[i].cells[1].innerHTML;

        }
    }

    var unassignData = {
        unassignmentId: unassignmentId
    };
    //Use ajax to send information from the client to PHP


    $.ajax({
        url: '../controller/adminController.php',
        type: 'POST',
        data: {action: "unassignuser", unassignData: JSON.stringify(unassignData)},
        success: function (data) {
            location.reload();

        }
    });
}



