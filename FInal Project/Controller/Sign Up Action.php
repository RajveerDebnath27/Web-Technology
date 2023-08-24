 <?php

    $name = $email = $username = $password = $confirmpassword = $gender = $dob = "";
    $nameErr = $emailErr = $usernameErr = $passwordErr = $confirmpasswordErr = $genderErr = $dobErr = "";
    $isValid = true;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        #Name Varification
        if (empty($_POST["name"])) {
            $isValid = false;
            $nameErr = "Name is required";
        }
        else{
            $name = $_POST["name"];

            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $isValid = false;
                $nameErr = "Only letters and white space allowed";
            }
            else if (str_word_count($_POST["name"])<2) {
                $isValid = false;
                $nameErr = "Name must contain at least 2 word";
            }           
        }

        # Email Verification
        if (empty($_POST["email"])) {
            $isValid = false;
                $emailErr = "Email is required";
            }   
        else{
            $email = $_POST["email"];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $isValid = false;
                $emailErr = "Invalid email format";
            }
        }

        #User Name Varification
        if (empty($_POST["username"])) {
            $isValid = false;
            $usernameErr = "User Name is required";
        }
        else{
            $username = $_POST["username"];

            if (!preg_match("/^[a-zA-Z-0-9' ]*$/", $username)) {
                $isValid = false;
                $usernameErr = "User name must contain a number";
            }           
        }

        #Password Verification
        if (empty($_POST["password"])) {
            $isValid = false;
            $passwordErr = "New password is required";
        }
        else{
            $password = $_POST["password"];
        }

        #Confirm Password
        if (empty($_POST["confirmpassword"])) {
            $isValid = false;
            $confirmpasswordErr = "Confirm password is required";
        }
        else{
            $confirmpassword = $_POST["confirmpassword"];

            if ($confirmpassword != $password) {
                $isValid = false;
                $confirmpasswordErr = "Confirm Password did not match";
            }
        }



        #Gender Varification
        if (empty($_POST["gender"])) {
            $isValid = false;
            $genderErr = "Gender is required";
    } 
    else {
        $gender = $_POST["gender"];
    }

    #Date of Birth Varification
    if (empty($_POST["dob"])) {
        $isValid = false;
        $dobErr = "Date of Birth is required";
    }
    else{
        $dob = $_POST["dob"];
    }

    } 



    



    ?>
