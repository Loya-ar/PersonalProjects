<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $fristname = mysqli_real_escape_string($conn, $_POST['fristname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

 $error[]= 'user already exist!';

}else{
    $insert = "INSERT INTO user_form(fristname, lastname, email, password, user_type) VALUES('$fristname','$lastname','$email','$pass','$user_type')";
   mysqli_query($conn, $insert);
   header('location:login1.php');
}
};


?>

<html>
<title>Vocallylocal</title>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>



<body class="font-mono bg-gray-400">
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://th.bing.com/th/id/OIP.4FM6kbZ5PRqUDklTezruHQHaL2?pid=ImgDet&rs=1')"></div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
                    <?php
                    if(isset($error)){
                        foreach($error as $error) {
                           echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                    ?>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="" method="Post">
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-black-700" for="firstName">
                                    First Name
                                </label>
                                <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="First Name" name="fristname">
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-black-700" for="lastName">
                                    Last Name
                                </label>
                                <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" placeholder="Last Name" name="lastname">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-black-700" for="email">
                                Email
                            </label>
                            <input class=" w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email" name="email">
                        </div>

                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-black-700" for="password" name="password" type="password">
                                    Password
                                </label>
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="password">

                            </div>
                        </div>
                        <div class="mb-4">
                            <select class="block mb-10 text-sm font-bold text-black-700 w-full py-2" id="country" name="user_type">  
                             <option value="">Login as</option>
                             <option value="LT">LocalTraveller</option>
                             <option value="LG">LocalGuide</option>
                             
                            </select>
                        </div>
                        <div class="mb-6 text-center">
                            <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit" name="submit">
                                Register Account
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="#">
                                Forgot Password?
                            </a>
                        </div>
                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="Login1.html">
                                Already have an account? Login!
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>