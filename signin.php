<?php session_start();

    if(isset($_POST['Submit'])) {
        $accounts = array('admin' => 'admin');
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

        if(isset($_POST['check'])) {
            setcookie('email', $email, time()+(86400*30));
            setcookie('Password', $Password, time()+(86400*30));
        } else {
            setcookie('email', $email, time()-1);
            setcookie('Password', $Password, time()-1);
        }

        $file = file("accounts.txt");
        for ($i = 0; $i < count($file); $i++) {
            $temp = explode(",", $file[$i]);
            $k = $temp[0];
            $tempv = $temp[1];
            $v = rtrim($tempv);
            $accounts[$k] = $v;
        }
        print_r($accounts);
        if (isset($accounts[$email]) && $accounts[$email] == $Password) {
            $_SESSION['Userdata']['email']=$accounts[$email]; // password
            $_SESSION['email']=$email; // email
            header("location:Jeopardygame.html");
            exit;
        } else {
            $msg= "<span style='color:#ff0000'>Invalid Login Details</span>";
            echo $msg;
        }
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> Jeopardy</title>
        <style>
            body {font-family: Arial, Helvetica, sans-serif; background-color: rgb(166, 255, 0);}
            * {box-sizing: border-box}

            /* Full-width input fields */
            input[type=text], input[type=password] {
              width: 100%;
              padding: 15px;
              margin: 5px 0 22px 0;
              display: inline-block;
              border:aquamarine;
              border-style: double;
              border-radius: 50px;
              background: #f1f1f1;
            }

            input[type=text]:focus, input[type=password]:focus {
              background-color: #ddd;
              outline: none;
            }

            hr {
              border: 1px solid #f1f1f1;
              margin-bottom: 25px;
            }

            /* Set a style for all buttons */
            button {
              background-color: #3f6b36;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: dotted;
              border-radius: 50px;
              cursor: pointer;
              width: 100%;
              opacity: 0.9;
            }

            button:hover {
              opacity:1;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
              padding: 14px 20px;
              background-color: #570f09;
            }

            /* Float cancel and signup buttons and add an equal width */
            .cancelbtn, .signupbtn {
              float: left;
              width: 50%;
            }

            /* Add padding to container elements */
            .container {
              padding: 16px;
            }

            /* Clear floats */
            .clearfix::after {
              content: "";
              clear: both;
              display: table;
            }

            /* Change styles for cancel button and signup button on extra small screens */
            @media screen and (max-width: 300px) {
              .cancelbtn, .signupbtn {
                 width: 100%;
              }
            }
            </style>
    </head>
    <body>
        <div class="main">
            <div class="form">
                <form action="" method="post" class="login-form">
                    <h1>Login</h1>
                    <input class="form-input" type="text" name="email" placeholder="email" value="<?php echo @$_COOKIE['email']; ?>">
                    <input class="form-input" type="password" name="Password" placeholder="password" value="<?php echo @$_COOKIE['Password']; ?>">
                    <input class="check" type="checkbox" name="check" checked>
                    <label for="check">Remember Me</label>
                    <input class="form-input" type="submit" name="Submit" value="LOGIN">
                    <p>Not registered? <a href="signup.html">Create an account</a></p>
                </form>
            </div>
        </div>
    </body>
</html>
