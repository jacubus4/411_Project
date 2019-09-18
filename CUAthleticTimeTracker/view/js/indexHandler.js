
window.onload = function() {

    AddLoginButtonListener();
}
function Login()
{
userValue = document.getElementById("userName").value;
pwd = document.getElementById( "password").value;
    var loginInfo = {
        userName: userValue,
        password: pwd
    };
    //Use ajax to send information from the client to PHP


    $.ajax({
        url: '../controller/controller.php',
        type: 'POST',
        data: {action: "alogin", loginData: JSON.stringify(loginInfo)},
        success: function (data) {


                var resultData = data;
                if (resultData==1) {

                    $('#result').html(resultData);
                    window.location = "../view/userMainView.php";
                } else {
                    $('#result').html(resultData);
                   window.location = "../view/index.php";

                }
            }
    });

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

function AddLoginButtonListener()
{
        document.getElementById("login").addEventListener("click", Login);
}








