<?php include "header.html"?>
<?php require "../controller/adminController.php";?>
<script src="js/addEventHandler.js" type="text/javascript" defer></script>
<body>
<div class="container">

    <div class="whiteText row p-2">
        <h2> Add Event to the Calendar</h2>
    </div>
    <div class="whiteText form-group row p-2" >
        <?php

        $allLocations = GetAllLocations();
        $count = sizeof($allLocations);

        ?>



        <select class="btn btn-info dropdown-toggle" id="locationMenu">Select

            <option class="dropdown-item" value="0">Select Location</option>
            <?php
            for($i=0; $i<$count; $i++) {

                ?>
                <option class="dropdown-item" value="<?php echo $allLocations[$i]['id']; ?>"><?php echo($allLocations[$i]['location_name']);?></option>

                <?php
            }
            ?>

        </select>
    </div>

        <div class="whiteText form-group row p-2" >
            <label class="col-md-3" for="time">Enter Event Name:</label>
            <div class="col-md-9">
                <input type="text" id="eventname" name="Event Name" placeholder="Event Name" required>
            </div>
        </div>
            <div class="whiteText form-group row p-2">
                    <label class="col-md-3" for="startdate">Choose Start Date:</label>
                    <div class="col-md-9">
                    <input type="date" id="startdate" name="startdate" placeholder="MM/DD/YYYY" required>
                    </div>
            </div>
            <div class="whiteText form-group row p-2">
                <label class="col-md-3 col-form-label" for="enddate">Choose End Date:</label>
                <div class="col-md-9">
                    <input type="date" id="enddate" name="enddate" placeholder="MM/DD/YYYY" required>
                </div>
            </div>

            <div class="whiteText form-group row p-2" >
                    <label class="col-md-3 col-form-label" for="time">Choose Start Time:</label>
                    <div class="col-md-9">
                    <input type="time" id="starttime" name="time" min="9:00" max="12:00" required>
                    </div>
            </div>

        <div class="whiteText form-group row p-2" >
            <label class="col-md-3 col-form-label" for="time">Choose End Time:</label>
            <div class="col-md-9 col-sm-6">

                <input type="time" id="endtime" name="time" min="9:00" max="12:00" required>
            </div>
        </div>

</div>

<div class="container">
            <div class="row p-2">
                <div class="form-group">
                    <div class="col-md-12 col-sm-6">
                        <button class="btn btn-lg btn-success" id="btnAddEvent" name="submit" type="button">
                                    Add Event
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
