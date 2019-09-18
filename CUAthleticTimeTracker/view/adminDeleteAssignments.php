<?php include "header.html"?>
<script src="js/UnassignUserEventHandler.js" type="text/javascript" defer></script>
<?php require "../controller/adminController.php";?>

<body>




<div class="container">
    <!-- Example single danger button -->
    <div class="whiteText row p-2">
        <h2>Select Event to Unassign User</h2>
    </div>
    <?php

    $allEvents = GetAllEvents();
    $count = sizeof($allEvents);

    ?>



    <select class="btn btn-info dropdown-toggle" id="eventMenu">Select

        <option class="dropdown-item" value="0">Select Event</option>
        <?php
        for($i=0; $i<$count; $i++) {
            ?>
            <option class="dropdown-item" value="<?php echo $allEvents[$i]['id']; ?>"><?php echo($allEvents[$i]['event_name']);?></option>

            <?php
        }
        ?>

    </select>



</div>


<div class="container">
    <div class="whiteText row p-2">
        <h2> Delete an Assignment</h2>
    </div>



    <table class="bg-light table table-striped" id="unassignUsersTable">
        <thead>
        <tr>
            <th scope="col">Select User</th>
            <th scope="col">Id</th>
            <th scope="col">Event Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Start Time</th>
            <th scope="col">End Time</th>

        </tr>
        </thead>
        <tbody id="assignmentBody">




        </tbody>
    </table>
</div>



<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© <?php echo date("Y") ?> Clarion University Athletics</p>
</footer>
</body>
</html>
