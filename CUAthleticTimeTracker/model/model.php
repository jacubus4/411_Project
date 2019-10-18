<?php
/**
 * Created by IntelliJ IDEA.
 * User: jastr
 * Date: 7/3/2019
 * Time: 9:41 PM
 */
function getDbConnection(){
    /* Connect to a MySQL database using driver invocation */
    $dsn = 'mysql:dbname=custaffing;host=localhost';
    $user = 'root';
    $password = '';

    try {

        $dbh = new PDO($dsn, $user, $password);
    //    echo 'Connection success: ';
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $dbh;
}

function ProcessLoginUser($loginData)
{
    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $checkLoginSql = "SELECT * FROM cu_users WHERE (user_name='$loginData->userName') AND (password='$loginData->password')";
        $statement = $conn->prepare($checkLoginSql);
        $statement->execute();
        $foundLogin = $statement->fetchAll();
        $statement->closeCursor();

        if($foundLogin != null) {
            return true;
        }
        else{
            return false;
        }
    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }

}


function ProcessUserSignUp($signUpData)
{
    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $signUpSql = "INSERT INTO cu_users (first_name, last_name, email, user_name, password, isAdmin) VALUES ('$signUpData->fName', '$signUpData->lName', '$signUpData->email', '$signUpData->userName', '$signUpData->password', 'false')";
      $conn->exec($signUpSql);

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }
    echo ("User successfully added.");

}



function ProcessAddEvent($eventData)
{
    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $addEventSql = "INSERT INTO task_event (event_name, event_start_date, event_end_date, event_start_time, event_end_time, location_id) ".
         " VALUES ('$eventData->eventName', '$eventData->startDate', '$eventData->endDate', '$eventData->startTime', '$eventData->endTime',
         '$eventData->location')";
        $conn->exec($addEventSql);
        echo ("Event successfully added.");
    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }


}


function ProcessEditEvent($eventData)
{
    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print_r($eventData);
        $updateEventSql = "UPDATE task_event SET event_name='$eventData->eventName', event_start_date='$eventData->startDate',
         event_end_date = '$eventData->endDate', event_start_time='$eventData->startTime', event_end_time = '$eventData->endTime'
         WHERE (id='$eventData->eventId')";

        $conn->exec($updateEventSql);
        echo ("Event successfully updated.");
    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }


}

function ProcessDeleteEvent($eventData)
{
    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print_r($eventData);
        $deleteEventSql = "DELETE FROM task_event WHERE (id='$eventData->eventId')";

        $conn->exec($deleteEventSql);
        echo ("Event successfully updated.");

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data delete invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }


}


function ProcessGetAllEvents()
{
    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $getAllEventsSql = "SELECT * FROM task_event";
        $statement = $conn->prepare($getAllEventsSql);
        $statement->execute();
        $allEvents = $statement->fetchAll();
        $statement->closeCursor();
        return $allEvents;           // Assoc Array of Rows

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }

}

function ProcessGetAllEventsBetweenDates($start, $end)
{
    try {
        $conn = getDbConnection();
        $getDatedEventsSql = " SELECT event_name, event_start_time, event_end_time, event_start_date FROM task_event WHERE event_start_date BETWEEN '$start' AND '$end'";
        $statement = $conn->prepare($getDatedEventsSql);
        $statement->execute();
        $selectedEvents = $statement->fetchAll();
        $statement->closeCursor();

        return $selectedEvents;           // Assoc Array of Rows

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }

}

function ProcessGetAllUsers()
{
    try {
        $conn = getDbConnection();
        $getAllUsersSql = "SELECT * FROM cu_users";
        $statement = $conn->prepare($getAllUsersSql);
        $statement->execute();
        $allUsers = $statement->fetchAll();
        $statement->closeCursor();
        return $allUsers;           // Assoc Array of Rows

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }

}


function ProcessGetAllLocations()
{
    try {
        $conn = getDbConnection();
        $getAllLocationsSql = "SELECT * FROM location";
        $statement = $conn->prepare($getAllLocationsSql);
        $statement->execute();
        $allLocations = $statement->fetchAll();
        $statement->closeCursor();
        return $allLocations;           // Assoc Array of Rows

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }

}

function ProcessDeleteUser($userData)
{
    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print_r($userData);
        $deleteEventSql = "DELETE FROM cu_users WHERE (id='$userData->userId')";

        $conn->exec($deleteEventSql);
        echo ("Event successfully updated.");

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data delete invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }


}

function ProcessAssignUser($assignedUserData)
{
    print_r($assignedUserData);
    $usersArray = $assignedUserData->assignedUsersList;
    $eventsArray = $assignedUserData->eventList;

    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        for ($i = 0; $i<count($usersArray); $i++)
        {
            for ($j = 0; $j<count($eventsArray); $j++) {
                echo("EVENT . $eventsArray[$j]");
                echo("USER . $usersArray[$i]");
                $assignUserToEventSql = "INSERT INTO staff_assignments (task_id, staff_id, start_date, end_date, start_time, end_time) 
          VALUES ('$eventsArray[$j]', '$usersArray[$i]', 
          '$assignedUserData->startDate', '$assignedUserData->endDate', '$assignedUserData->startTime', '$assignedUserData->endTime')";
                $conn->exec($assignUserToEventSql);
                //echo ("Event successfully added.");
            }
        }

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }
}

function ProcessGetAllAssignments()
{
    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $getAllAssignmentsSql = "SELECT staff_assignments.id, staff_assignments.task_id, staff_assignments.staff_id,
 staff_assignments.start_date, staff_assignments.end_date, staff_assignments.start_time, staff_assignments.end_time, task_event.event_name, 
 cu_users.first_name, cu_users.last_name FROM
 staff_assignments INNER JOIN task_event ON task_event.id=staff_assignments.task_id 
 INNER JOIN cu_users ON cu_users.id = staff_assignments.staff_id";
            


        $statement = $conn->prepare($getAllAssignmentsSql);
        $statement->execute();
        $allAssignments = $statement->fetchAll();
        $statement->closeCursor();
        return $allAssignments;           // Assoc Array of Rows

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }
}

function ProcessUnassignUser($unassignData)
{
    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $unassignSql = "DELETE FROM staff_assignments WHERE (id='$unassignData->unassignmentId')";
        echo ($unassignData->unassignmentId);
        $conn->exec($unassignSql);
        echo ("Event successfully updated.");

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data delete invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }


}


function ProcessGetFilteredEventAssignments($eventId)
{

    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $getFilteredAssignmentsSql = "SELECT staff_assignments.id, staff_assignments.task_id, staff_assignments.staff_id,
 staff_assignments.start_date, staff_assignments.end_date, staff_assignments.start_time, staff_assignments.end_time, task_event.event_name, 
 cu_users.first_name, cu_users.last_name FROM
 staff_assignments INNER JOIN task_event ON task_event.id=staff_assignments.task_id 
 INNER JOIN cu_users ON cu_users.id = staff_assignments.staff_id 
 WHERE task_event.id=$eventId";


        $statement = $conn->prepare($getFilteredAssignmentsSql);
        $statement->execute();
        $filteredAssignments = $statement->fetchAll();
        $statement->closeCursor();
        return $filteredAssignments;           // Assoc Array of Rows

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }
}


function ProcessGetUserAssignments($userId)
{


    try {
        $conn = getDbConnection();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $getFilteredAssignmentsSql = "SELECT staff_assignments.id, staff_assignments.task_id, staff_assignments.staff_id,
 staff_assignments.start_date, staff_assignments.end_date, staff_assignments.start_time, staff_assignments.end_time, task_event.event_name
  FROM staff_assignments INNER JOIN task_event ON task_event.id=staff_assignments.task_id 
 WHERE staff_assignments.staff_id=$userId";

        $statement = $conn->prepare($getFilteredAssignmentsSql);
        $statement->execute();
        $filteredAssignments = $statement->fetchAll();
        $statement->closeCursor();
        print_r ($filteredAssignments);
        return $filteredAssignments;           // Assoc Array of Rows

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }
}

function ProcessGetUserInfo($userName)
{
    try {
        $conn = getDbConnection();
        $getSelectedUsersSql = "SELECT * FROM cu_users WHERE user_name='$userName'";
        $statement = $conn->prepare($getSelectedUsersSql);
        $statement->execute();
        $selectedUserData = $statement->fetchAll();
        $statement->closeCursor();
        return $selectedUserData;           // Assoc Array of Rows

    }

    catch (PDOException $e) {
        $errorMessage = $e->getMessage();
        echo "Data entry invalid".$errorMessage;
        // include '../view/errorPage.php';
        die;
    }

}
?>
