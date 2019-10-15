<?php include "header.html"?>
<?php require "../controller/adminController.php";?>
<script src="js/addLocationHandler.js" type="text/javascript" defer></script>
<body>
<div class="col-lg-1 p-0">
    <a href="adminMain.php" class="col-lg-12 btn btn-lg-1" style = "background: #d4af37" >
        <img class="d-block mx-auto mb-4" src="images/return.jpg" alt="Return" width="30" height="30"></img>
        <h4>Return To Home Page</h4>
    </a>
</div>
<div class="container">

    <div class="whiteText row p-2">
        <h2> Current Locations</h2>
    </div>
    <div class="whiteText form-group row p-2" >
        <?php

        $allLocations = GetAllLocations();
        $count = sizeof($allLocations);

        ?>
        <table class="bg-light table table-striped" id="locationTable">
        <thead>
        <tr>
            <th scope="col">Delete Location</th>
            <th scope="col">Location</th>
        </tr>
        </thead>
        <tbody>


        <?php
        $btnCount = 1;
        for($i=0; $i<$count; $i++)
        {


            ?>

                <td scope="row"><button type=button class="btn btn-info" <?php echo "value=$btnCount id=btnDeleteLoc$btnCount"?>>Delete Location</button></td>
                <td><?php echo $allLocations[$i]['location_name'] ?></td>

            </tr>
            <?php
        } ?>

        </tbody>
        </table>
    </div>


        <div class="whiteText form-group row p-2" >
            <label class="col-md-3" for="time">Enter New Location:</label>
            <div class="col-md-9">
                <input type="text" id="locationname" name="Location Name" placeholder="Location Name" required>
            </div>

        </div>
</div>

<div class="container">
            <div class="row p-2">
                <div class="form-group">
                    <div class="col-md-12 col-sm-6">
                        <button class="btn btn-lg btn-success" id="btnAddEvent" name="submit" type="button">
                                    Add Location
                        </button>
                    </div>
                </div>

            </div>

    </div>
<div>
    <h1><p id="result"></p></h1>
</div>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© <?php echo date("Y") ?> Clarion University Athletics</p>
</footer>
</body>
</html>
