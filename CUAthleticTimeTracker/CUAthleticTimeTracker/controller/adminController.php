<?php
require('../model/model.php');
/**
 * Created by IntelliJ IDEA.
 * User: jastr
 * Date: 7/4/2019
 * Time: 11:47 AM
 */
if (!empty($_POST['action']) && (!empty($_POST['eventData']) || !empty($_POST['assignedData'])
        || !empty($_POST['unassignData']) || !empty($_POST['filterData']) || !empty($_POST['userData'])))
{
    $currentAction = $_POST['action'];

    switch ($currentAction) {
        case "addevent":
            AddEvent();
            break;
        case "editevent":
            EditEvent();
            break;
        case "deleteevent":
            DeleteEvent();
            break;
        case "deleteuser":
            DeleteUser();
            break;
        case "assignusers":
            AssignUsers();
            break;
        case "unassignuser":
            UnassignUsers();
            break;
        case "filterassignments":
            $vals = GetAllAssignments();
            echo $vals;
            break;
        case "allassignments":
             $vals =  GetAllAssignments();
             echo $vals;
             break;
    }
}



function AddEvent(){
    $eventArray=json_decode($_POST['eventData']);
    echo "Processing Add Event";
    ProcessAddEvent($eventArray);
}

function EditEvent(){
    $eventArray=json_decode($_POST['eventData']);
    echo "Processing Edit Event";
    ProcessEditEvent($eventArray);
}

function DeleteEvent(){
    $eventArray=json_decode($_POST['eventData']);
    echo "Processing Delete Event";
    ProcessDeleteEvent($eventArray);
}

function DeleteUser(){
    $userArray=json_decode($_POST['userData']);
    echo "Processing Delete User";
    ProcessDeleteUser($userArray);
}


function GetAllUsers()
{
    $allUsers=ProcessGetAllUsers();
    return $allUsers;
}

function GetAllEvents()
{
    $allEvents=ProcessGetAllEvents();
    return $allEvents;
}
function GetAllEventsBetweenDates($start_date, $end_date)
{
    $selectedEvents = ProcessGetAllEventsBetweenDates($start_date, $end_date);
}
function AssignUsers()
{
    $assignedUserArray=json_decode($_POST['assignedData']);

        ProcessAssignUser($assignedUserArray);

}

function GetAllAssignments()
{
    if(!empty($_POST['action'])) {

        $currentAction = $_POST['action'];
        if ($currentAction == "filterassignments") {
            $filterIdArray = json_decode($_POST['filterData']);
          //  print_r($filterIdArray);
            $filteredAssignments = ProcessGetFilteredEventAssignments($filterIdArray);
            echo json_encode($filteredAssignments);
        }

    else {
        $allAssignments = ProcessGetAllAssignments();

        echo json_encode($allAssignments);
    }
    }

}



function UnassignUsers(){

    $unassignArray=json_decode($_POST['unassignData']);
    ProcessUnassignUser($unassignArray);
}



function GetAllLocations()
{
    $locationData=ProcessGetAllLocations();
    return $locationData;
}
?>
