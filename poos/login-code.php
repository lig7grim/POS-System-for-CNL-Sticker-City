<?php

require 'config/function.php';

if(isset($_POST['loginBtn']))
{
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if($email != '' && $password != '')
    {
        $query = "SELECT * FROM admins WHERE email='$email' LIMIT 1 ";
        $result = mysqli_query($conn, $query);

        if($result){
            
            if(mysqli_num_rows($result) == 1){
                
                $row = mysqli_fetch_assoc($result);
                $hasshedPassword = $row['password'];

                if(!password_verify($password, $hasshedPassword)){
                    redirect('login.php','Invalid Password');
                }

                if($row['is_ban'] == 1){
                    redirect('login.php','The account is banned. Contact Admin');
                }

                $_SESSION['loggedIn'] = true;
                $_SESSION['loggedInUser'] = [
                    'user_id' => $row['id'],
                    'name' => $row['name'],
                    'email' => $row['email'],
                    'phone' => $row['phone']
                ];

                redirect('admin/index.php', 'Logged in successfully');

            }else{
                redirect('login.php','Invalid Email Address');
            }

        }else{
            redirect('login.php', 'OOPSIE! Something went wrong');
        }
    }
    else
    {
        redirect('login.php','All fields required');
    }
}

?>