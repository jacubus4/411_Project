<?php include "header.html"?>
<?php require "../controller/adminController.php";?>
<script src="js/editEventHandler.js" type="text/javascript" defer></script>
<script src="js/UnassignUserEventHandler.js" type="text/javascript" defer></script>
<script src="js/admincalendar.js" type="text/javascript" defer></script>

<div class="col-lg-1 p-0" >
    <a href="adminMain.php" class="col-lg-12 btn btn-lg-1" style = "background: #d4af37" >
        <img class="d-block mx-auto mb-4" src="images/return.jpg" alt="Return" width="30" height="30"></img>
        <h4>Return To Home Page</h4>
    </a>
</div>
<div class="py-3 text-center">
        <h2>CU Time Tracker Calendar Page</h2>
    </div>
<div class="container" style=" margin-bottom: 100px">
    <div class=" row whiteText">
        <div class="col border  text-center">
        <h1>
    <?php
         $month_year=date('M Y');
         echo $month_year;
    ?>
        <?php
            $allEvents = GetAllEvents();
             $count = sizeof($allEvents);
            ?>
        </h1>
        </div>
    </div>
    <div class="row  whiteText text-center">
        <div class="col-sm border largeText">Sunday</div>
        <div class="col-sm border largeText">Monday</div>
        <div class="col-sm border largeText">Tuesday</div>
        <div class="col-sm border largeText">Wednesday</div>
        <div class="col-sm border largeText">Thursday</div>
        <div class="col-sm border largeText">Friday</div>
        <div class="col-sm border largeText">Saturday</div>
    </div>
    <?php
        $today = date("d"); // Current day
        $month = date("m"); // Current month
        $year = date("Y"); // Current year
        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year); // Days in current month
        $lastmonth = date("t", mktime(0, 0, 0, $month - 1, 1, $year)); // Days in previous month
        $start = date("N", mktime(0, 0, 0, $month, 1, $year)); // Starting day of current month
        $finish = date("N", mktime(0, 0, 0, $month, $days, $year)); // Finishing day of  current month
        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year); // Days in current month
        $last_days = cal_days_in_month(CAL_GREGORIAN, $month-1, $year); // Days in current month
        $num_days= 1;
        $newMonth = false;
        $currentDate = date('Y-m-d');
        for ($i=0; $i<5; $i++) {
            ?>
            <div class="row  whiteText text-center">
                <?php
                    if ($start != 7 && $i==0)  //If the month doesn't start on sunday
                    {
                        $num_days= $last_days-$start+1; //need to add one since we started at zero
                    }
                    //This means we are starting the new month on a Monday
                    else if ($newMonth == false)
                    {
                        $num_days = 32;
                    }
                for ($j = 0; $j < 7; $j++) {
                    //Check if we reached the end of last month's days
                    if (($num_days > $last_days) && $newMonth == false)
                    {
                        $num_days = 1;
                        $newMonth = true;
                    }
                    //Check if we reached the end of this months days
                    if ($newMonth == true && $num_days>$days)
                    {
                        $num_days=1;
                    }
                       $events = GetAllEventsBetweenDates($currentDate, $currentDate);
                    ?>

              <div class="border largeText text-right" style="background: #d4af37; height:170px; width:162.8px"><?php echo $num_days.'<br>';
              ?>

                 <div class="largeText text-left" style ="position:relative; left:10px; top:-40px; color:white; font-size: 80%">
                 <?php
                        if($num_days == 9 )
                        {
                         echo $allEvents[$i]['event_name'], '<br>';
                         echo $allEvents[$i]['event_start_time'], '<br>';
                         echo $allEvents[$i]['event_end_time'], '<br>';
                         ?>
                         <a href="eventDetails.php" ><h4>Event Details</h4><?php '<br>';?>
                         </a>

                        <?php }
                        else
                        {
                        ?>
                        <a href="adminAddEvent.php" style="position:relative; left:10px; top:5px; color:white"><h4>Add Event</h4><?php '<br>';?>
                        </a>
                       <?php }
                        ?> </div>

                </div>
                <?php
                $num_days++;
                echo $events;
                } ?>
            </div>
            <?php
    }
    ?>

</div>


</body>
</html>