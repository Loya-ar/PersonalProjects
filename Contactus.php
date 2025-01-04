<html>
<title>Vocallylocal</title>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Vocally Local</title>
    <!-- Favicon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Inter font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind Elements CSS -->
    <link rel="stylesheet" href="css/index.min.css" />
    <!-- Custom styles -->

    <style>
        .snap-x {
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }
        
        .snap-start {
            scroll-snap-align: start;
        }
        
        .mr-5 {
            font-style: Times;
            font-size: 20px;
            font-weight: bolder;
            background-size: cover;
            font-family: 'Encode Sans SC', sans-serif;
            color: black;
        }
        
        .mr-5:hover {
            color: #ffffff;
        }
        
        .p-4 {
            font-size: larger;
            color: black;
        }
        
        .container {
            max-width: 100%;
            height: auto;
        }
        
        .container1 {
            background-color: #00FFFF;
            border-top-width: 50px;
        }
        
        .container3 {
            background-color: #00FFFF;
            font-weight: 500;
            font-size: 20px;
            color: black;
        }
        
        .container5 {
            background-color: #00FFFF;
        }
        
        .md:ml {
            font-family: 'Encode Sans SC', sans-serif;
        }
        
        img {
            max-width: 100%;
            height: auto;
        }
        
        .slide6 {
            border: 2px solid black;
            padding: 25px;
            background: url(mountain.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@600&display=swap" rel="stylesheet">

    <header class="text-gray-600 body-font">
        <div class="container5 mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="index.php"> <img src="img/logo0.png" alt="Italian Trulli" style="width: 130px"></a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5" href="Cities.php">See all Cities</a>
                    <a class="mr-5" href="Login1.php">Login</a>
                    <a class="mr-5" href="Register.php">Register</a>
                    <a class="mr-5" href="Contactus.php">Contactus</a>

                </nav>

        </div>

</head>

<body>
    <!-- Container for demo purpose -->
    <div class="container my-24 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800">
            <div class="flex flex-wrap">
                <div class="grow-0 shrink-0 basis-auto mb-6 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                    <h2 class="text-7xl font-bold mb-6 text-blue-500 align-top pb-8 italic">Contact us</h2>
                    <!-- <p class="text-gray-500 mb-6 font-bold ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, modi accusantium ipsum corporis quia asperiores dolorem nisi corrupti eveniet dolores ad maiores repellendus enim autem omnis fugiat perspiciatis? Ad, veritatis.
                    </p> -->
                    <p class="text-black-500 mb-2 font-bold text-2xl ">Vocallylocal Company, 500060, Hyderabad.</p><br>
                    <a href="tel:8074016703" class="text-black-500 mb-2 font-bold text-2xl">Contact Number: + 91 807 401 6703</a><br><br>
                    <a href="mailto:vocallylocal@gmail.com" class="text-black-500 mb-2 text-2xl bolder font-bold ">Vocallylocal@gmail.com</a>
                </div>
                <div class="grow-0 shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                    <form>
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7" placeholder="Name">
                        </div>
                        <div class="form-group mb-6">
                            <input type="email" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8" placeholder="Email address">
                        </div>
                        <div class="form-group mb-6">
                            <textarea class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              " id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group form-check text-center mb-6">
                            <input type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                                id="exampleCheck87" checked>
                            <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy of this
                message</label>
                        </div>
                        <button type="submit" class="
              w-full
              px-6
              py-2.5
              bg-blue-600
              text-white
              font-medium
              text-xs
              leading-tight
              uppercase
              rounded
              shadow-md
              hover:bg-blue-700 hover:shadow-lg
              focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
              active:bg-blue-800 active:shadow-lg
              transition
              duration-150
              ease-in-out">Send</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->

    </div>

    <!-- Container for demo purpose -->

    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a href="#" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <img src="img/logo0.png" alt="Italian Trulli" style="width: 100px"> </img>


            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 Vocallylocal — All Rights Verified
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
          <a href="https://www.facebook.com/" target="_blank" class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24" style="color: #4267B2">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a  href="https://twitter.com/i/flow/login" target="_blank"  class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24" style="color: #00acee">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a  href="https://www.instagram.com/accounts/login/" target="_blank"  class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24" style="color: #e95950">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a  href="https://www.linkedin.com/" target="_blank"  class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24" style="color: #0072b1">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
        </div>
    </footer>

</html>