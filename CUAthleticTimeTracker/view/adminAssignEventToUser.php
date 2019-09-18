<?php include "header.html"?>
<script src="js/assignUsersToEventsHandler.js" type="text/javascript" defer></script>
<?php require "../controller/adminController.php";?>

<body>
<div class="container">
    <div class="whiteText row p-2">
        <h2>Select a User or Users to Assign to a Task</h2>
    </div>
    <?php
    $allUsers = GetAllUsers();
    $count = sizeof($allUsers) ?>

    <table class="bg-light table table-striped" id="assignUserTable">
        <thead>
        <tr>
            <th scope="col">Select User(s)</th>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">User Name</th>


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
                                        name="checkBox1" unchecked <?php echo "value=$chkCount id=chkAssign$chkCount"?>></th>

                <td><?php echo ($allUsers[$i]['id']) ?></td>
                <td><?php echo $allUsers[$i]['first_name'] ?></td>
                <td><?php echo $allUsers[$i]['last_name'] ?></td>
                <td><?php echo $allUsers[$i]['email'] ?></td>
                <td><?php echo $allUsers[$i]['user_name'] ?></td>

            </tr>
            <?php
            $chkCount++;} ?>

        </tbody>
    </table>
</div>

<div class="container">
    <div class="whiteText row p-2">
        <h2>Assign Selected User(s) to Event(s)</h2>
    </div>
    <?php
        $allEvents = GetAllEvents();
        $count = sizeof($allEvents) ?>

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


            <td><?php echo ($allEvents[$i]['id']) ?></td>
            <td><?php echo $allEvents[$i]['event_name'] ?></td>
            <td><?php echo $allEvents[$i]['event_start_date'] ?></td>
            <td><?php echo $allEvents[$i]['event_end_date'] ?></td>
            <td><?php echo $allEvents[$i]['event_start_time'] ?></td>
            <td><?php echo $allEvents[$i]['event_end_time'] ?></td>


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
