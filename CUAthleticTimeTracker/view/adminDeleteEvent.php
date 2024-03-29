<?php include "header.html"?>
<script src="js/deleteEventHandler.js" type="text/javascript" defer></script>
<?php require "../controller/adminController.php";?>

<body>

<div class="container">
    <div class="whiteText row p-2">
        <h2>Delete an Event</h2>
    </div>
    <?php
        $allEvents = GetAllEvents();
        $count = sizeof($allEvents) ?>

    <table class="bg-light table table-striped" id="deleteTable">
        <thead>
        <tr>
            <th scope="col">Delete Event</th>
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
        $btnCount = 1;
        for($i=0; $i<$count; $i++)
        {

        ?>
        <tr>

            <th scope="row"><button type=button class="btn btn-danger" <?php echo "value=$btnCount id=btnDelete$btnCount"?>>Delete</button></th>


            <td><?php echo ($allEvents[$i]['id']) ?></td>
            <td><?php echo $allEvents[$i]['event_name'] ?></td>
            <td><?php echo $allEvents[$i]['event_start_date'] ?></td>
            <td><?php echo $allEvents[$i]['event_end_date'] ?></td>
            <td><?php echo $allEvents[$i]['event_start_time'] ?></td>
            <td><?php echo $allEvents[$i]['event_end_time'] ?></td>

        </tr>
        <?php
            $btnCount++;} ?>

        </tbody>
    </table>
</div>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© <?php echo date("Y") ?> Clarion University Athletics</p>
</footer>
</body>
</html>
