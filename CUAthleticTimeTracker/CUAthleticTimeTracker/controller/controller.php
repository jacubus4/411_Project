<?php
require('../model/model.php');
/**
 * Created by IntelliJ IDEA.
 * User: jastr
 * Date: 7/4/2019
 * Time: 11:47 AM
 */
session_start();
if (!empty($_POST['action']) && (!empty($_POST['signUpData'])||!empty($_POST['loginData']))) {
    $currentAction = $_POST['action'];

    switch ($currentAction) {
        case "signup":
            SignUp();
            break;
        case "alogin":
            Login();
            break;

    }
}

function GetCurrentUserInfo($userName)
{
    echo $userName;
    $selectedUserData=ProcessGetUserInfo($userName);
    return $selectedUserData;
}

function SignUp(){
    $signUpArray=json_decode($_POST['signUpData']);
    echo "Processing SignUp";
    ProcessUserSignUp($signUpArray);
}

function Login()
{
    $loginArray=json_decode($_POST['loginData']);

    $_SESSION['loginData'] = $loginArray;
    $loginSuccess=ProcessLoginUser($loginArray);
    if ($loginSuccess)
    {

        $result = true;
    }
    else
    {
        $result= false;
    }
    echo $result;
}

function GetAllEventsByUser($userId)
{

    echo $userId;
    //  print_r($filterIdArray);
    $userAssignments = ProcessGetUserAssignments($userId);
    return $userAssignments;
}


?>
