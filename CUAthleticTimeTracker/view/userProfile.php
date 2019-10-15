<?php include "header.html"?>
<script src="js/userMainHandler.js" type="text/javascript" defer></script>
<?php require "../controller/controller.php"; ?>

<body>
<table>
<tr>
<td width="10%"></td>
<td width="50%">
<img src="images/male-profile-image-placeholder.png" height="200" width="200">
</td>
<td width="50%">
<div class="container">

    <!--
    <?php
    $loginData=($_SESSION['loginData']);
    $currentUserData = GetCurrentUserInfo($loginData->userName);
    //Took this out for wireframe
     //print_r($currentUserData);
     ?>
     -->

    <div class="whiteText" style="text-color:white">
        <h3>Welcome <?php echo $currentUserData[0]['first_name']." ".$currentUserData[0]['last_name'];
        $currentUserId = $currentUserData[0]['id']?>
        </h3>
    </div>

    <div class="whiteText">
    <h5>Name:</h5>
    <br>
    <h5>Email:</h5>
        <br>
    <h5>Change Email:</h5>
        <br>
    <h5>Change Password</h5>
        <br>
        <br>
    <h5>Hours worked:</h5>
            <br>
     <h5>Hours total:</h5>
         <br>
     <h5>Hours needed:</h5>
         <br>
    </div>



   <!--
    <div class="whiteText row p-2">
        <h2>Select a Task to Log Time</h2>
    </div>
</div>

<div class="container">
    <!--
    <div class="whiteText row p-2">
        <h2>Your Assigned Event(s)</h2> <br>

    </div>

    <div class="whiteText row p-2">
    <h3>Click on an event to view its details.</h3>
    </div>
    -->


   <!--
   //Took this out for wireframe
   <?php
        $allEventsByUser = GetAllEventsByUser($currentUserId);
        $count = sizeof($allEventsByUser) ?>
   -->
</td>
</tr>
</table>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© <?php echo date("Y") ?> Clarion University Athletics</p>
</footer>
</body>
</html>
