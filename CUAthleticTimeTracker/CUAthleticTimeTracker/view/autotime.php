<?php include "header.html"?>
<body>

    <!-- HTML Form (wrapped in a .bootstrap-iso div) -->


    <div class="container">
        <div class="row p-2">

                <div class="col-3">
                    <button class="btn btn-lg btn-success " name="submit" type="submit">
                        Clock In
                    </button>
                </div>
                    <div class="col-9">
                        <input type="text" readonly class="whiteText form-control-plaintext" id="clockTime" value="1/1/2019 8:00AM">
                    </div>
                </div>

        <div class="row p-2">

            <div class="col-3">
                <button class="btn btn-lg btn-danger" name="submit" type="submit">
                    Clock Out
                </button>
            </div>
            <div class="col-9">
                <input type="text" readonly class="whiteText form-control-plaintext" id="clockTime" value="1/1/2019 8:00AM">
            </div>
        </div>

    </div>
</body>
</html>
