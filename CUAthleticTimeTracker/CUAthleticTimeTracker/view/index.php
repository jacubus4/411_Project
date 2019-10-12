
<?php
include('header.html');
// Initialize the session
session_start();

?>
<script src="js/indexHandler.js" type="text/javascript" defer></script>

<div class="text-white container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/clock.jpg" alt="Clock" width="72" height="72">
        <h2>CU Athletic Time Tracker</h2>
    </div>
        <h5>This application is designed to track employee times.  Please log your time at the start and end of each time you work.</h5>


    <div class="row">
        <div class="col-md-6">
            <h4 class="mb-3">Sign In</h4>
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-10 mb-3">

                        <input type="text" class="form-control" id="userName" placeholder="User Name" value="" required="">
                        <div class="invalid-feedback">
                            Valid user name is required.
                        </div>
                    </div>

                    <div class="col-md-10 mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password" value="" required="">
                        <div class="invalid-feedback">
                            Valid password is required.
                        </div>
                    </div>
                    <div class="col-md-10 mb-3">
                        <button class="btn btn-primary btn-md btn-block" id = "login" type="button">Login</button>
                    </div>
                    <div class="col-md-10 mb-3">
                        <a href="signup.php" class="btn btn-danger btn-md btn-block">Sign Up</a>
                    </div>
                    <div class="col-md-10 mb-3">
                        <button class="btn btn-secondary btn-md btn-block" type="button">Login As Admin</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 mb-4">
            <h4 class="col-md-8 justify-content-between align-items-center mb-3">
                <span class="text-muted">Upcoming Events</span>

            </h4>
            <!-- This needs to be auto generated -->
            <ul class="list-group mb-3">
                <li class="list-group-item col-md-10 justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0 text-muted">Event name</h6>
                        <small class="text-muted">Event Details</small>
                    </div>

                </li>
                <li class="list-group-item col-md-10 justify-content-between lh-condensed">
                    <div>
                        <h6 class="text-muted">Event name</h6>
                        <small class="text-muted">Event Details</small>
                    </div>
                </li>
                <li class="list-group-item col-md-10 justify-content-between lh-condensed">
                    <div>
                        <h6 class="text-muted">Event Name</h6>
                        <small class="text-muted">Event Details</small>
                    </div>
                </li>

            </ul>


        </div>
    </div>
    <div>
        <h1><p id="result"></p></h1>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© <?php echo date("Y") ?> Clarion University Althletics</p>
    </footer>
</div>
</body>
</html>
