<?php

include '../config.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hotel Skyward</title>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <!-- main section -->
    <section id="auth_section">

                <?php              
                    if (isset($_POST['Emp_login_submit'])) {
                        $Email = $_POST['Emp_Email'];
                        $Password = $_POST['Emp_Password'];

                        $sql = "SELECT * FROM emp_login WHERE Emp_Email = '$Email' AND Emp_Password = BINARY'$Password'";
                        $result = mysqli_query($conn, $sql);

                        if ($result->num_rows > 0) {
                            $_SESSION['usermail']=$Email;
                            $Email = "";
                            $Password = "";
                            header("Location: index.php");
                        } else {
                            echo "<script>
                        alert('signin failed');
                        </script>";
                        }
                    }
                ?> 

            <div class="bg-white p-10 rounded-2xl shadow-xl flex flex-wrap justify-between items-center neumorphic-shadow" style="width: 780px;">
                <div class="text-left w-full md:w-1/2 pr-4">
                    <h1 class="text-4xl font-bold mb-2">Hotel Skyward</h1>
                    <br>
                    <h2 class="text-3xl font-semibold mb-2">Welcome Back!</h2>
                    <p class="mb-10">To keep connected with us please login with your personal info</p>
                </div>

                <div class="text-left w-full md:w-1/2 mt-10 md:mt-0">
                    <h2 class="text-3xl font-bold mb-2">Sign In to Account</h2>
                    <div class="flex justify-center my-4">
                        <!-- Social media icons will go here -->
                    </div>
                    <p class="mb-6">or use your email for registration:</p>

                    <form class="employee_login" id="employeelogin" action="" method="POST">
                        <input type="email" name="Emp_Email" placeholder="Email" class="mb-4 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

                        <input type="password" name="Emp_Password" placeholder="Password" class="mb-4 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

                        <button type="submit" name="Emp_login_submit" class="text-white bg-blue-500 px-6 py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                            Sign in
                        </button>
                    </form>
                </div>
            </div>
    </section>
</body>

</html>

