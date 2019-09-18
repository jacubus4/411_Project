<?php include "header.html"?>
<?php require "../controller/adminController.php";?>
<script src="js/admincalendar.js" type="text/javascript" defer></script>

<div class="container">
    <div class="row  whiteText">
        <div class="col border  text-center">
        <h1>
    <?php
         $month_year=date('M Y');
         echo $month_year;
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
            <div class="row  whiteText text-center cal-height">
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
                    //Check if we reached the end of this month;s days
                    if ($newMonth == true && $num_days>$days)
                    {
                        $num_days=1;
                    }
                    echo $currentDate;
                        $events = GetAllEventsBetweenDates($currentDate, $currentDate);
                    ?>

                <div class="col-sm border largeText cal-height" id="square"><?php echo $num_days.'<br>';
                print_r ($events);?></div>
                <?php
                $num_days++;
                } ?>
            </div>
            <?php
    }
    ?>

</div>


</body>
</html>
