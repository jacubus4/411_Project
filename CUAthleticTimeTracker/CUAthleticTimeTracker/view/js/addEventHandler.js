document.getElementById("btnAddEvent").addEventListener("click", AddEvent);

function AddEvent()
{
    //Gather up the information into the userData array
    var eventData ={location: document.getElementById("locationMenu").value, eventName: document.getElementById("eventname").value, startDate: document.getElementById("startdate").value,
    endDate: document.getElementById("enddate").value, startTime: document.getElementById("starttime").value,
        endTime:document.getElementById("endtime").value};


    $.ajax({
        url: '../controller/adminController.php',
        type: 'POST',
        data:{action: "addevent", eventData: JSON.stringify(eventData)},
        success: function(data) {

            $('#result').html(data);
        }
    });
 //   $.post( "../controller/controller.php" );
}
