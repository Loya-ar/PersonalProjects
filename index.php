<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Vocally Local</title>
    <!-- Favicon -->
    <!-- <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" /> -->
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
            color: #00FFFF;
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
            background-color: #ffffff;
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




    <head>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@600&display=swap" rel="stylesheet">

        <header class="text-gray-600 body-font">
            <div class="container5 mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a href="index.php"> <img src="img/logo0.png" alt="Vocallylocal" style="width: 130px"></a>
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5" href="Cities.php">See all Cities</a>
                    <a class="mr-5" href="Login1.php">Login</a>
                    <a class="mr-5" href="Register.php">Register</a>
                    <a class="mr-5" href="Contactus.php">Contactus</a>

                </nav>

            </div>
        </header>

        <body>
            <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%;">
                            <img src="img/Ocean.jpg" class="block w-full" />
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black opacity-50"></div>
                        </div>
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h3 class="text-xl">GOA</h3>
                            <p>THE PLACE OF BEACHES</p>
                        </div>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%;">
                            <img src="img/Tajmahal.jpg" class="block w-full" />
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black opacity-50"></div>
                        </div>
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">AGRA</h5>
                            <p>THE CITY OF TAJ</p>
                        </div>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%;">
                            <img src="img/Varanasi.jpg" class="block w-full" />
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black opacity-50"></div>
                        </div>
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">VARANASI</h5>
                            <p>THE CITY OF LIGHTS</p>
                        </div>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%;">
                            <img src="img/Mountains.jpg" class="block w-full" />
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black opacity-50"></div>
                        </div>
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">MUSSOORIE</h5>
                            <p>OUEEN OF MOUNTAINS</p>
                        </div>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%;">
                            <img src="img/Rajasthan.jpg" class="block w-full" />
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black opacity-50"></div>
                        </div>
                        <div class="carousel-caption hidden md:block absolute text-center">
                            <h5 class="text-xl">JAIPUR</h5>
                            <p>THE PINK CITY</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
              <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
                <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
              <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>


            <section class="text-gray-600 body-font ">
                <div class="container1 px-5 py-24 mx-auto ">
                    <div class="flex flex-wrap -m-4 text-center ">
                        <div class="p-4 sm:w-1/4 w-1/2 ">
                            <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900 ">1.2K</h2>
                            <b><p class="leading-relaxed "> DAILY TRAVELERS</p></b>
                        </div>
                        <div class="p-4 sm:w-1/4 w-1/2 ">
                            <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900 ">359</h2>
                            <b> <p class="leading-relaxed ">LOCALGUIDES</p></b>
                        </div>
                        <div class="p-4 sm:w-1/4 w-1/2 ">
                            <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900 ">10+</h2>
                            <b> <p class="leading-relaxed ">CITIES</p></b>
                        </div>
                        <div class="p-4 sm:w-1/4 w-1/2 ">
                            <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900 ">5000+</h2>
                            <b> <p class="leading-relaxed ">SUCCESSFUL TRIPS</p></b>
                        </div>
                    </div>
                </div>
            </section>
            <!----start Gallery---->
            <section class="text-gray-600 body-font ">
                <div class="container px-5 py-24 mx-auto ">
                    <div class="flex flex-col text-center w-full mb-20 ">
                        <b><h1 class="sm:text-3xl text-2xl fo
                      nt-medium title-font mb-4 text-gray-900">Best Memories Of Local Travelers</h1></b>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base "> To my mind, the greatest reward and luxury of travel is to be able to experience everyday things as if for the first time, to be in a position in which almost nothing is so familiar it is taken for granted.</p>
                    </div>
                    <div class="flex flex-wrap -m-4 ">
                        <div class="lg:w-1/3 sm:w-1/2 p-4 ">
                            <div class="flex relative ">
                                <img alt="gallery " class="absolute inset-0 w-full h-full object-cover object-center " src="https://1.bp.blogspot.com/-J25r-yVR2jw/Xq8JF8x4zPI/AAAAAAAAJG0/o3AoJT6K5Gc17pXT6FpPCzo0Dbspou63QCLcBGAsYHQ/w1200-h630-p-k-no-nu/water%2Bfall.jpg">
                                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100 ">
                                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1 ">By Abhishek Sharma</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3 ">Chitrakote Waterfalls</h1>
                                    <p class="leading-relaxed ">The Falls is a natural waterfall on the Indravati River, located 38 km to the west of Jagdalpur,Chhattisgarh.</p>

                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/3 sm:w-1/2 p-4 ">
                            <div class="flex relative ">
                                <img alt="gallery " class="absolute inset-0 w-full h-full object-cover object-center " src="https://th.bing.com/th/id/R.4e0d48495a75f8374603d45cc11eeee6?rik=3XPtgwTHdWHcAg&riu=http%3a%2f%2fwww.walkthroughindia.com%2fwp-content%2fuploads%2f2013%2f05%2fsand-dunes-jaisalmer.jpg&ehk=jQooIjUQlupdxUZCcmsTZxZYvD4bb8ymYV2XhYzBmtw%3d&risl=&pid=ImgRaw&r=0">
                                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100 ">
                                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1 ">By Krishna Prasad</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3 ">Thar Desert </h1>
                                    <p class="">The Great Indian Desert, in the northwestern part of India, covers about 320,000 km is in Rajasthan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/3 sm:w-1/2 p-4 ">
                            <div class="flex relative ">
                                <img alt="gallery " class="absolute inset-0 w-full h-full object-cover object-center " src="https://th.bing.com/th/id/OIP.k65ZpbfP5dF-586ziq0l4gHaEK?w=290&h=180&c=7&r=0&o=5&pid=1.7">
                                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100 ">
                                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1 ">By Anush Rajput</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3 ">The Himalyas</h1>
                                    <p class="leading-relaxed ">The Himalayas, are a mountain range of the Indian subcontinent from the Tibetan Plateau.</p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/3 sm:w-1/2 p-4 ">
                            <div class="flex relative ">
                                <img alt="gallery " class="absolute inset-0 w-full h-full object-cover object-center " src="https://globalgrasshopper.com/wp-content/uploads/2015/12/Varanasi-1-1000x656.jpg">
                                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100 ">
                                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1 ">Aauysh Kulkarni</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3 ">Varnasi</h1>
                                    <p class="leading-relaxed ">Varanasi-a sacred city dreamed into existence over the ages. As an old saying puts it: “Banaras is wherever you are”</p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/3 sm:w-1/2 p-4 ">
                            <div class="flex relative ">
                                <img alt="gallery " class="absolute inset-0 w-full h-full object-cover object-center " src="https://assets.traveltriangle.com/blog/wp-content/uploads/2015/07/Blue-waters-of-Andaman-and-Nicobar-Islands.jpg">
                                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100 ">
                                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1 ">Preetika Sharma</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3 ">Andaman And Nicobar</h1>
                                    <p class="leading-relaxed ">
                                        The Andaman and Nicobar Islands is a union territory of India consisting of 572 islands,at the Bay of Bengal and the Andaman Sea.</p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/3 sm:w-1/2 p-4 ">
                            <div class="flex relative ">
                                <img alt="gallery " class="absolute inset-0 w-full h-full object-cover object-center " src="https://globalgrasshopper.com/wp-content/uploads/2011/01/Golden-Temple-in-Amritsar.jpg">
                                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100 ">
                                    <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1 ">Siddu Moosewala</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3 ">Golden Temple</h1>
                                    <p class="leading-relaxed ">The Golden Temple is a gurdwara located in the city of Amritsar, Punjab, India. It is the preeminent spiritual site of Sikhism. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="text-gray-600 body-font ">
                <div class="container3 px-5 py-24 mx-auto flex flex-wrap ">
                    <div class="flex flex-wrap w-full ">
                        <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6 ">
                            <div class="flex relative pb-12 ">
                                <div class="h-full w-10 absolute inset-0 flex items-center justify-center ">
                                    <div class="h-full w-1 bg-gray-200 pointer-events-none "></div>
                                </div>
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-black inline-flex items-center justify-center text-white relative z-10 ">
                                    <svg fill="none " stroke="currentColor " stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " class="w-5 h-5 " viewBox="0 0 24 24 ">
                          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z "></path>
                        </svg>
                                </div>
                                <div class="flex-grow pl-4 ">
                                    <b><h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider ">STEP 1</h2></b>
                                    <b><p class="leading-relaxed ">Select a City & Filter the service you are looking for</p></b>
                                </div>
                            </div>
                            <div class="flex relative pb-12 ">
                                <div class="h-full w-10 absolute inset-0 flex items-center justify-center ">
                                    <div class="h-full w-1 bg-gray-200 pointer-events-none "></div>
                                </div>
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-black inline-flex items-center justify-center text-white relative z-10 ">
                                    <svg fill="none " stroke="currentColor " stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " class="w-5 h-5 " viewBox="0 0 24 24 ">
                          <path d="M22 12h-4l-3 9L9 3l-3 9H2 "></path>
                        </svg>
                                </div>
                                <div class="flex-grow pl-4 ">
                                    <b><h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider ">STEP 2</h2></b>
                                    <b> <p class="leading-relaxed ">Select a City & Filter the service you are looking for.</p></b>
                                </div>
                            </div>
                            <div class="flex relative pb-12 ">
                                <div class="h-full w-10 absolute inset-0 flex items-center justify-center ">
                                    <div class="h-full w-1 bg-gray-200 pointer-events-none "></div>
                                </div>
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-black inline-flex items-center justify-center text-white relative z-10 ">
                                    <svg fill="none " stroke="currentColor " stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " class="w-5 h-5 " viewBox="0 0 24 24 ">
                          <circle cx="12 " cy="5 " r="3 "></circle>
                          <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3 "></path>
                        </svg>
                                </div>
                                <div class="flex-grow pl-4 ">
                                    <b> <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider ">STEP 3</h2></b>
                                    <b> <p class="leading-relaxed ">Select The Local Friend as per Your Perference, and connect with Him.</p></b>
                                </div>
                            </div>
                            <div class="flex relative pb-12 ">
                                <div class="h-full w-10 absolute inset-0 flex items-center justify-center ">
                                    <div class="h-full w-1 bg-gray-200 pointer-events-none "></div>
                                </div>
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-black inline-flex items-center justify-center text-white relative z-10 ">
                                    <svg fill="none " stroke="currentColor " stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " class="w-5 h-5 " viewBox="0 0 24 24 ">
                          <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2 "></path>
                          <circle cx="12 " cy="7 " r="4 "></circle>
                        </svg>
                                </div>
                                <div class="flex-grow pl-4 ">
                                    <b><h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider ">STEP 4</h2></b>
                                    <b><p class="leading-relaxed ">Get Conformation Email From Us and Local Friend.</p></b>
                                </div>
                            </div>
                            <div class="flex relative ">
                                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-black inline-flex items-center justify-center text-white relative z-10 ">
                                    <svg fill="none " stroke="currentColor " stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " class="w-5 h-5 " viewBox="0 0 24 24 ">
                          <path d="M22 11.08V12a10 10 0 11-5.93-9.14 "></path>
                          <path d="M22 4L12 14.01l-3-3 "></path>
                        </svg>
                                </div>
                                <div class="flex-grow pl-4 ">
                                    <b> <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider ">FINISH</h2></b>
                                    <b> <p class="leading-relaxed ">Make a Contract.</p></b>
                                </div>
                            </div>
                        </div>
                        <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12 " src="https://wallpaperbat.com/img/16458-travel-841680617841903511-in-2020-travel-wallpaper.jpg" alt="step ">
                    </div>
                </div>
            </section>

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

        </body>
        <!-- Tailwind Elements JS -->
        <script type="text/javascript" src="js/index.min.js"></script>
        <!-- Custom scripts -->
        <script type="text/javascript"></script>

</html>