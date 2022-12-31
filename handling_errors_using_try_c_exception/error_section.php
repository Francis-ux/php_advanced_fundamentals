<?php

function if_not_empty_username()
{
    if (!empty($_POST['username'])) {
        echo "correct";
    }
}

function if_empty_username()
{
    if (empty($_POST['username'])) {
        echo "fill in the space";
    }
}

function if_empty_email()
{
    if (empty($_POST['email'])) {
        echo "fill in the space";
    }
}

function if_not_empty_email()
{
    if (empty($_POST['email'])) {
    } elseif (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "correct";
    } else {
        echo "<p class='text-danger'>Please enter your email address in this format:yourname@gmail.com</p>";
    }
}

function if_empty_password()
{
    if (empty($_POST['password'])) {
        echo "fill in the space";
    }
}

function if_not_empty_password()
{
    if (empty($_POST['password'])) {
    } elseif (!empty($_POST['password']) && strlen($_POST['password']) >= 5) {
        echo "correct";
    } else {
        echo "<p class='text-danger'>Your password must at least contain 5 characters</p>";
    }
}

function if_empty_phone()
{
    if (empty($_POST['phone'])) {
        echo "fill in the space";
    }
}

function if_not_empty_phone()
{
    if (empty($_POST['phone'])) {
    } elseif (!empty($_POST['phone']) != 0 && strlen($_POST['phone']) == 11) {
        echo "correct";
    } else {
        echo "<p class='text-danger'>Invalid phone Number</p>";
    }
}

function if_empty_dob()
{
    if (empty($_POST['dob'])) {
        echo "fill in the space";
    }
}

function if_not_empty_dob()
{
    if (empty($_POST['dob'])) {
    } elseif (!empty($_POST['dob'])  && date("Y") - date("Y", strtotime($_POST['dob'])) >= 18) {
        echo "correct";
    } else {
        echo "<p class='text-danger'>You are not up to 18</p>";
    }
}