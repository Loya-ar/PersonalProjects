<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $fristname = mysqli_real_escape_string($conn, $_POST['fristname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_array($result);
    if($row['user_type'] == 'admin'){
        
        $_SESSION['admin_name'] = $row['name'];
        header('location:index.php');

    }elseif($row['user_type'] == 'user'){
        
        $_SESSION['user_name'] = $row['name'];
            header('location:index.php');
        }
    }else{
        $error[] = 'incorrect email or password!';
    }
};


?>

<html>
<title>Vocallylocal</title>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-mono bg-gray-400">

    </h1>
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-image: url('https://i0.wp.com/www.tearfreetravel.com/wp-content/uploads/2018/08/Inspiring-Travel-Quotes.png?resize=683%2C1024&ssl=1')"></div>
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Welcome Back!</h3>
                    <?php
                    if(isset($error)){
                        foreach($error as $error) {
                           echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                    ?>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="" method="post">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-black-700" for="username">
									Username
								</label>
                            <input class="w-full px-3 py-2 text-sm leading-tight text-black-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" name="fristname">
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-Black-700" for="password">
									Password
								</label>
                            <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-black-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="password" >
                            <!-- <p class="text-xs italic text-red-500">Please choose a password.</p> -->
                        </div>
                        <!-- <div class="mb-5">
                            <select class="block mb-5 text-sm font-bold text-black-700 w-full py-2" id="country">  
                             <option value="">Login as</option>
                             <option value="US">LocalTraveller</option>
                             <option value="KE">LocalGuide</option>
                             
                            </select>
                        </div> -->
                        <div class="mb-4">
                            <input class="mr-2 leading-tight" type="checkbox" id="checkbox_id" />
                            <label class="text-sm" for="checkbox_id">
									Remember Me
								</label>
                        </div>
                        <div class="mb-6 text-center">
                            <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="button" name="submit">
									Sign In
								</button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="./register.php">
									Create an Account!
								</a>
                        </div>
                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="#">
									Forgot Password?
								</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>