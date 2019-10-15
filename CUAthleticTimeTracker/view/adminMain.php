<?php include('header.html'); ?>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<div class="text-white container">
    <div class="py-1 text-right">
    <a href="index.php" style="color:white">
    <h5>Sign Out</h5>
    </a>
    </div>
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/clarionlogo.jpg" alt="Clarion Eagle" width="150" height="100">
        <h2>CU Time Tracker Administrative Page</h2>
    </div>




    <div class="container">
        <div class="row">
         <div class="col-12">
           <h3>Create Events and Assign Users to Tasks</h3> <br/>
         </div>

        </div>
        <div class="row">
            <div class="col-lg-3 p-4">
                <a href="adminAddEvent.php" class="col-lg-12 btn btn-lg btn-success">
                    <i class='fas fa-calendar-alt' style='font-size:48px'></i><br/>
                    <h4>Add Event</h4>
                </a>
            </div>
            <br/>
            <div class="col-lg-3 p-4">
                <a href="adminEditEvent.php" class="col-lg-12 btn btn-lg btn-info">
                    <i class='fas fa-edit' style='font-size:48px'></i><br/>
                    <h4>Edit Event</h4>
                </a>
            </div>

            <div class="col-lg-3 p-4">
                <a href="adminDeleteEvent.php" class="col-lg-12 btn btn-lg btn-danger">
                    <i class="fa fa-remove" style="font-size:48px;"></i><br/>
                    <h4>Delete Event</h4>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 p-4">
                <a href="adminAssignEventToUser.php" class="col-lg-12 btn btn-lg btn-success">
                    <i class="fa fa-user" style="font-size:48px"></i><br/>
                    <h4>Assign User</h4>
                </a>
            </div>
                <div class="col-lg-3 p-4">
                    <a href="adminDeleteAssignments.php" class="col-lg-12 btn btn-lg btn-danger">
                        <i class="fa fa-user" style="font-size:48px"></i><br/>
                        <h4>Unassign User</h4>
                 </a>
            </div>
                <div class="col-lg-3 p-4">
                    <a href="adminDeleteUser.php" class="col-lg-12 btn btn-lg btn-danger">
                        <i class="fa fa-remove" style="font-size:48px;"></i><br/>
                        <h4>Delete User</h4>
                    </a>
                </div>
                </div>
                <br>
                <div class="row">
              <div class="col-lg-3 p-4">
                  <a href="adminAddLocation.php" class="col-lg-12 btn btn-lg btn-success">
                      <i class="fa fa-plus" style="font-size:48px;"></i><br/>
                      <h4>Add Location</h4>
                  </a>
              </div>
            <div class="col-lg-3 p-4">
                    <a href="adminCalendar.php" class="col-lg-12 btn btn-lg btn-info">
                        <i class="fa fa-calendar-alt" style="font-size:48px;"></i><br/>
                        <h4>Calendar</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© <?php echo date("Y") ?> Clarion University Athletics</p>
    </footer>
</div>
</body>
</html>
?>
