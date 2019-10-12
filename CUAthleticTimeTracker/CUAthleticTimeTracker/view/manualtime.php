<?php include "header.html"?>
<body>
<div class="container">

            <div class="whiteText row p-2">
                <h2> Enter your start and end date/time manually.</h2>

                </div>

            <div class="whiteText form-group row p-2">
                    <label class="col-md-2 col-form-label" for="selectdate">Choose Date:</label>
                    <div class="col-md-10">
                    <input type="date" id="selectdate" name="selectdate" placeholder="MM/DD/YYYY" required>
                    </div>
            </div>


            <div class="whiteText form-group row p-2" >
                    <label class="col-md-2 col-form-label" for="time">Choose Start Time:</label>
                    <div class="col-md-10">
                    <input type="time" id="time" name="time" min="9:00" max="12:00" required>
                    </div>
            </div>

        <div class="whiteText form-group row p-2" >
            <label class="col-md-2 col-form-label" for="time">Choose End Time:</label>
            <div class="col-md-2 col-sm-6">

                <input type="time" id="time" name="time" min="9:00" max="12:00" required>
            </div>
        </div>
            <div class="row p-2">
                <div class="form-group">
                    <div class="col-md-12 col-sm-6">
                        <button class="btn btn-primary " name="submit" type="submit">
                                    Submit Time
                        </button>
                    </div>
                </div>

            </div>

    </div>
</body>
</html>
