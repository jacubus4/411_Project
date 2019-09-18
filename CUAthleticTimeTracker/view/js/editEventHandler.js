//alert("Loaded");
var eventId=0;
document.getElementById("btnEditEvent").addEventListener("click", SubmitEvent);

window.onload = function() {
    AddButtonEventListener();
}
function AddButtonEventListener()
{

        var table = document.getElementById("editTable");
        var rows = table.getElementsByTagName("tr");

        for (i = 1; i < rows.length; i++) {
            document.getElementById("btnEdit" + i).addEventListener("click", EditEvent);
        }
}


function EditEvent() {
    //this.id gives the id of the button that was clicked The row should be the id
    var table = document.getElementById("editTable");
    var rows = table.getElementsByTagName("tr");

    for (var i = 1; i < rows.length; i++) {
        if (this.id == "btnEdit" + i) {

            //Want to ignore the header columns
            //Cell 2 is the name of the event
            eventId = table.rows[i].cells[1].innerHTML;
            document.getElementById('eventname').value = table.rows[i].cells[2].innerHTML;
            document.getElementById('startdate').value = table.rows[i].cells[3].innerHTML;
            document.getElementById('enddate').value = table.rows[i].cells[4].innerHTML;
            document.getElementById('starttime').value = table.rows[i].cells[5].innerHTML;
            document.getElementById('endtime').value = table.rows[i].cells[6].innerHTML;

        }
    }
}
function SubmitEvent() {

    alert("EVENT ID"+eventId);
    var eventData = {
        eventId: eventId,
        eventName: document.getElementById("eventname").value,
        startDate: document.getElementById("startdate").value,
        endDate: document.getElementById("enddate").value,
        startTime: document.getElementById("starttime").value,
        endTime: document.getElementById("endtime").value
    };
    //Use ajax to send information from the client to PHP


    $.ajax({
        url: '../controller/adminController.php',
        type: 'POST',
        data: {action: "editevent", eventData: JSON.stringify(eventData)},
        success: function (data) {
            $('#result').html(data);
        }
    });
}




