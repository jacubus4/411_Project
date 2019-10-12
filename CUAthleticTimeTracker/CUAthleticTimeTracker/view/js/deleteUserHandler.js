//alert("Loaded");
var userId=0;


window.onload = function() {
    AddButtonUserListener();
}
function AddButtonUserListener()
{

        var table = document.getElementById("deleteUserTable");
        var rows = table.getElementsByTagName("tr");

        for (i = 1; i < rows.length; i++) {
            document.getElementById("btnDelete" + i).addEventListener("click", DeleteUser);
        }
}

function DeleteUser() {


    var table = document.getElementById("deleteUserTable");
    var rows = table.getElementsByTagName("tr");

    for (var i = 1; i < rows.length; i++) {
        if (this.id == "btnDelete" + i) {
            //Want to ignore the header columns
            //Cell 2 is the name of the event
            userId = table.rows[i].cells[1].innerHTML;

        }
    }

    var userData = {
        userId: userId
    };
    //Use ajax to send information from the client to PHP


    $.ajax({
        url: '../controller/adminController.php',
        type: 'POST',
        data: {action: "deleteuser", eventData: JSON.stringify(userData)},
        success: function (data) {

            location.reload();

        }
    });

}




