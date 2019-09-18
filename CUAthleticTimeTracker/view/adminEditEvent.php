<?php include "header.html"?>
<script src="js/editEventHandler.js" type="text/javascript" defer></script>
<?php require "../controller/adminController.php";?>

<body>

<div class="container">
    <div class="whiteText row p-2">
        <h2> Edit an Event</h2>
    </div>
    <?php
        $allEvents = GetAllEvents();
        $count = sizeof($allEvents) ?>

    <table class="bg-light table table-striped" id="editTable">
        <thead>
        <tr>
            <th scope="col">Select Event</th>
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

            <th scope="row"><button type=button class="btn btn-info" <?php echo "value=$btnCount id=btnEdit$btnCount"?>>Edit</button></th>


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
<div class="container">



        <div class="whiteText form-group row p-2" >
            <label class="col-md-2 col-form-label" for="time">Enter Event Name:</label>
            <div class="col-md-10">
                <input type="text" id="eventname" name="Event Name" placeholder="Event Name" required>
            </div>
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
            <div class="row p-2">
                <div class="form-group">
                    <div class="col-md-12 col-sm-6">
                        <button class="btn btn-lg btn-success" id="btnEditEvent" name="submit" type="button">
                                    Edit Event
                        </button>
                    </div>
                </div>

            </div>

    </div>
<div>
    <h1><p id="result">Initial Text</p></h1>
</div>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© <?php echo date("Y") ?> Clarion University Athletics</p>
</footer>
</body>
</html>
