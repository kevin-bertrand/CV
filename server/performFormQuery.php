<?php
    $data = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "message" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messageError" => "", "formIsSuccess" => false);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data['firstname'] = verifyInputs($_POST['firstname']);
        $data['firstnameError'] = empty($data['firstname']) ? "Laissez-moi connaitre votre prénom" : "";

        $data['name'] = verifyInputs($_POST['name']);
        $data['nameError'] = empty($data['name']) ? "Laissez-moi connaitre votre nom" : "";

        $data['email'] = verifyInputs($_POST['email']);
        $data['emailError'] = isEmail($data['email']) ? "" : "Laissez-moi la posibilité de vous recontacter";

        $data['phone'] = verifyInputs($_POST['phone']);
        $data['phoneError'] = isPhone($data['phone']) ? "" : "Seuls les espaces et les nombres sont acceptés (Ex: 0123456789)";

        $data['message'] = verifyInputs($_POST['message']);
        $data['messageError'] = empty($data['message']) ? "Pourquoi voulez-vous me contacter?" : "";

        $data['formIsSuccess'] = empty($data['firstnameError']) && empty($data['nameError']) && empty($data['emailError']) && empty($data['phoneError']) && empty($data['messageError']);

        if ($data['formIsSuccess']) {
            sendEmail($data['firstname'], $data['name'], $data['email'], $data['phone'], $data['message']);
        }

        echo json_encode($data);
    }

    function sendEmail($firstname, $name, $email, $phone, $message) {
        $emailTo = "kevin.bertrand.04@gmail.com";

        $emailText = "Firstname: $firstname\n";
        $emailText .= "Name: $name\n";
        $emailText .= "Email: $email\n";
        $emailText .= "Phone: $phone\n\n\n";
        $emailText .= "Message:\n$message\n";

        $mailSubject = "Message from $firstname $name on kevin.desyntic.com";
        $headers = "From: $firstname $name <$email>\r\nReply-To: $email";

        mail($emailTo, $mailSubject, $emailText, $headers);
    }

    function verifyInputs($var) {
        $var = trim($var);
        $var = stripcslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }

    function isEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function isPhone($phone) {
        return preg_match('/^[0-9 ]*$/', $phone);
    }
?>