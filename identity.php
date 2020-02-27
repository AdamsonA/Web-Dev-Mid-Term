<?php
    session_start();

    $isAdmin = isAdmin();
    $isLoggedin = isLoggedin();
    $currentUser = getCurrentUser();

    function login($username, $password, $redirect)
    {
        if ($username == 'admin' && $password == '12345') {
            $_SESSION['valid'] = true;
            $_SESSION['username'] = 'admin';
            
            redirect($redirect);
            exit();  
        } else {
            return 'Wrong username or password';
        }
    }

    function logout()
    {
        unset($_SESSION["username"]);
        unset($_SESSION["valid"]);
        
        redirect('login.php');
    }

    function redirect($location)
    {
        header("Location: $location");
    }

    function isAdmin()
    {
        return isLoggedin() && $_SESSION['username'] == 'admin';
    }

    function isLoggedin()
    {
        return isset($_SESSION['valid']) && 
               isset($_SESSION['username']) && 
               $_SESSION['valid'] == true;
    }

    function getCurrentUser()
    {
        if (isset($_SESSION['username'])) {
            return $_SESSION['username'];
        }
    }
?>