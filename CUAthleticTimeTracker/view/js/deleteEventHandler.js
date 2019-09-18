//alert("Loaded");
var eventId=0;


window.onload = function() {
    AddButtonEventListener();
}
function AddButtonEventListener()
{

        var table = document.getElementById("deleteTable");
        var rows = table.getElementsByTagName("tr");

        for (i = 1; i < rows.length; i++) {
            document.getElementById("btnDelete" + i).addEventListener("click", DeleteEvent);
        }
}

function DeleteEvent() {


    var table = document.getElementById("deleteTable");
    var rows = table.getElementsByTagName("tr");

    for (var i = 1; i < rows.length; i++) {
        if (this.id == "btnDelete" + i) {

            //Want to ignore the header columns
            //Cell 2 is the name of the event
            eventId = table.rows[i].cells[1].innerHTML;

        }
    }
    alert("EVENT ID"+eventId);
    var eventData = {
        eventId: eventId,
    };
    //Use ajax to send information from the client to PHP


    $.ajax({
        url: '../controller/adminController.php',
        type: 'POST',
        data: {action: "deleteevent", eventData: JSON.stringify(eventData)},
        success: function (data) {

            location.reload();

        }
    });

}




