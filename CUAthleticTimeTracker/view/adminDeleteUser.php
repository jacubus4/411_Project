<?php include "header.html"?>
<script src="js/deleteUserHandler.js" type="text/javascript" defer></script>
<?php require "../controller/adminController.php";?>

<body>

<div class="container">
    <div class="whiteText row p-2">
        <h2>Delete a User</h2>
    </div>
    <?php
        $allUsers = GetAllUsers();
        $count = sizeof($allUsers) ?>

    <table class="bg-light table table-striped" id="deleteUserTable">
        <thead>
        <tr>
            <th scope="col">Delete User</th>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">User Name</th>


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
            <td><?php echo ($allUsers[$i]['id']) ?></td>
            <td><?php echo $allUsers[$i]['first_name'] ?></td>
            <td><?php echo $allUsers[$i]['last_name'] ?></td>
            <td><?php echo $allUsers[$i]['email'] ?></td>
            <td><?php echo $allUsers[$i]['user_name'] ?></td>

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
