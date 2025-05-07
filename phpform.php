<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $number = trim($_POST["number"]);
    $clubs = isset($_POST["club"]) ? $_POST["club"] : [];
    $membership = isset($_POST["membership"]) ? $_POST["membership"] : "";
    $feedback = trim(strtolower($_POST["feedback"]));

    $errors = [];

    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $errors[] = "Name must contain only letters";
    }

    if (!ctype_digit($number)) {
        $errors[] = "Number must contain digits only";
    }

    if (strlen($number) !== 8) {
        $errors[] = "Number must be exactly 8 digits long";
    }

    if (count($clubs) < 1 || count($clubs) > 2) {
        $errors[] = "Select at least one and at most two clubs";
    }

    if (empty($membership)) {
        $errors[] = "Membership type must be selected";
    }

    if ($feedback !== "yes" && $feedback !== "no") {
        $errors[] = "Feedback must be 'yes' or 'no'";
    }

    if (!empty($errors)) {
        echo "Invalid:\n";
        foreach ($errors as $error) {
            echo "- $error\n";
        }
    } else {
        echo "Form Submitted Successfully!";
    }
}
?>