<?php
$message = "";
function validate($case, $data)
{
    switch ($case) {
        case 'email':
            if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
            break;
        case 'username':
            if (!empty($_POST['username'])) {
                return true;
            } else {
                return false;
            }
            break;
        case 'password':
            if (!empty($_POST['password']) && strlen($_POST['password']) >= 5) {
                return true;
            } else {
                return false;
            }

            break;
        case 'phone':
            $phone1 = (int) $_POST['phone'];
            if (!empty($phone1) && is_int($phone1) && strlen($_POST['phone']) == 11) {
                return true;
            } else {
                return false;
            }

            break;
        case 'dob':
            $date = $_POST['dob'];
            $equation = date("Y") - date("Y", strtotime($date));
            if ($equation >= 18) {
                return true;
            } else {
                return false;
            }

            break;
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        if (validate('email', $_POST['email'])) {
            $message = "Registration complete";
        } else {
            throw new \Exception("");
        }
        if (validate('username', $_POST['username'])) {
            $message = "Registration complete";
        } else {
            throw new \Exception("");
        }
        if (validate('password', $_POST['password'])) {
            $message = "Registration complete";
        } else {
            throw new \Exception("");
        }
        if (validate('phone', $_POST['phone'])) {
            $message = "Registration complete";
        } else {
            throw new \Exception("");
        }
        if (validate('dob', $_POST['dob'])) {
            $message = "Registration complete";
        } else {
            throw new \Exception("");
        }
    } catch (\Exception $error) {
        $message = $error->getMessage();
    }
}