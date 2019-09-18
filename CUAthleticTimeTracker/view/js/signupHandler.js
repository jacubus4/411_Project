document.getElementById("btnSignUp").addEventListener("click", SignUp);

function SignUp()
{

    //Gather up the information into the userData array
    var userData ={fName: document.getElementById("firstName").value, lName: document.getElementById("lastName").value,
    email: document.getElementById("email").value, userName: document.getElementById("username").value,
        password:document.getElementById("password").value};

    //Use ajax to send information from the client to PHP


    $.ajax({
        url: '../controller/controller.php',
        type: 'POST',
        data:{action: "signup", signUpData: JSON.stringify(userData)},
        success: function(data) {

            $('#result').html(data);
        }
    });
 //   $.post( "../controller/controller.php" );
}
