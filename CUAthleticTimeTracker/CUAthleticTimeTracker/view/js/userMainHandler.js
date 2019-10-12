

window.onload = function() {


}

function GetAllEventsByUser()
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










