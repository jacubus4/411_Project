<?php include "header.html"?>
<script src="js/userMainHandler.js" type="text/javascript" defer></script>
<?php require "../controller/controller.php"; ?>

<body>
<div class="container">

    <?php
    $loginData=($_SESSION['loginData']);
    $currentUserData = GetCurrentUserInfo($loginData->userName);

     print_r($currentUserData);
     ?>

    <h3>Welcome <?php echo $currentUserData[0]['first_name']." ".$currentUserData[0]['last_name'];
    $currentUserId = $currentUserData[0]['id']?>
    </h3>
    <div class="whiteText row p-2">
        <h2>Select a Task to Log Time</h2>
    </div>
</div>

<div class="container">
    <div class="whiteText row p-2">
        <h2>Your Assigned Event(s)</h2> <br>

    </div>
    <div class="whiteText row p-2">
    <h3>Click on an event to view its details.</h3>
    </div>
    <?php
        $allEventsByUser = GetAllEventsByUser($currentUserId);
        $count = sizeof($allEventsByUser) ?>

    <table class="bg-light table table-striped" id="selectEventTable">
        <thead>
        <tr>
            <th scope="col">Select Event(s)</th>
            <th scope="col">Id</th>
            <th scope="col">Event Name</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Start Time</th>
            <th scope="col">End Time</th>

        </tr>
        </thead>
        <tbody>

        <?php
        $chkCount = 1;
        for($i=0; $i<$count; $i++)
        {

        ?>
        <tr>

            <th scope="row"><input  type="checkbox" class="big-checkbox"
                                    name="checkBox1" unchecked <?php echo "value=$chkCount id=chkEvent$chkCount"?>></th>


            <td><?php echo ($allEventsByUser[$i]['id']) ?></td>
            <td><?php echo $allEventsByUser[$i]['event_name'] ?></td>
            <td><?php echo $allEventsByUser[$i]['start_date'] ?></td>
            <td><?php echo $allEventsByUser[$i]['end_date'] ?></td>
            <td><?php echo $allEventsByUser[$i]['start_time'] ?></td>
            <td><?php echo $allEventsByUser[$i]['end_time'] ?></td>


        </tr>
        <?php
            $chkCount++;} ?>

        </tbody>
    </table>
</div>
<div class="container">

    <div class="whiteText row p-2">
        <h2> Assign Date and Time for Staff Member to Work</h2>
    </div>

    <div class="whiteText form-group row p-2">
        <label class="col-md-2 col-form-label" for="startdate">Choose Start Date:</label>
        <div class="col-md-10">
            <input type="date" id="startdate" name="startdate" placeholder="MM/DD/YYYY" required>
        </div>
    </div>
    <div class="whiteText form-group row p-2">
        <label class="col-md-2 col-form-label" for="enddate">Choose End Date:</label>
        <div class="col-md-10">
            <input type="date" id="enddate" name="enddate" placeholder="MM/DD/YYYY" required>
        </div>
    </div>

    <div class="whiteText form-group row p-2" >
        <label class="col-md-2 col-form-label" for="time">Choose Start Time:</label>
        <div class="col-md-10">
            <input type="time" id="starttime" name="time" min="9:00" max="12:00" required>
        </div>
    </div>

    <div class="whiteText form-group row p-2" >
        <label class="col-md-2 col-form-label" for="time">Choose End Time:</label>
        <div class="col-md-2 col-sm-6">

            <input type="time" id="endtime" name="time" min="9:00" max="12:00" required>
        </div>
    </div>

    <div> <button type=button class="btn btn-primary" id = "btnSubmit">Submit Assignment(s)</button></div>

</div>
<div>
    <h1><p id="result">Initial Text</p></h1>
</div>


<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© <?php echo date("Y") ?> Clarion University Athletics</p>
</footer>
</body>
</html>
