<?php

include 'config.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Hotel Skyward</title>
</head>

<body>
<?php require "components/nav.php";?>



  <div class="my-5 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Full-width image on mobile, half-width on tablet, one-third on desktop -->
      <div class="col-span-2">
        <div class="relative bg-white shadow-md rounded-3xl p-2 mx-1 my-3 cursor-pointer">
          <div class="overflow-x-hidden rounded-2xl relative">
            <div class="max-h-[530px] w-full overflow-hidden flex flex-nowrap text-center rounded-2xl" id="slider">
              <div class="space-y-4 flex-none w-full flex flex-col items-center justify-center">
                <img src="img/photo4jpg.jpg" alt="">
              </div>
              <div class="space-y-4 flex-none w-full flex flex-col items-center justify-center">
                <img src="img/exterior.jpg" alt="">
              </div>
              <div class="space-y-4 flex-none w-full flex flex-col items-center justify-center">
                <img src="img/outdoor-swimming-pool.jpg" alt="">
              </div>
              <div class="space-y-4 flex-none w-full flex flex-col items-center justify-center">
                <img src="img/aqua-outdoor-pool-deck.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- The same class applied for other images -->
      <div class="col-span-1">
        <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-1 my-3 mb-4 cursor-pointer">
          <div class="overflow-x-hidden rounded-2xl relative">
            <img class="h-fit rounded-2xl w-full object-cover" src="img/deluxe-corner-suite-city.jpg">
          </div>
        </div>
        <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-1 my-3 cursor-pointer">
          <div class="overflow-x-hidden rounded-2xl relative">
            <img class="h-fit rounded-2xl w-full object-cover" src="img/al-safa-meeting-room.jpg">
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="my-5 bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
      <div class="mr-auto place-self-center lg:col-span-7">
        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl ">Welcome To Hotel SKYward</h1>
        <p class="max-w-2xl mb-6 font-light  lg:mb-8 md:text-lg lg:text-xl ">
        Hotel SKYward, located in the city's heart, offers a serene environment with elegantly designed rooms, modern amenities, a world-class restaurant, fitness center, and spa. Dedicated staff provides impeccable service. Enjoy breathtaking city skyline views from rooftop lounge or lush gardens. Hotel SKYward is the perfect choice for a luxurious getaway.
        </p>
        <a href="about.php" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 border border-slate-400">
          Get started
          <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
      <div class="hidden lg:mt-0 lg:col-span-5 lg:flex rounded-lg">
        <img src="img/exterior.jpg" alt="mockup" class="rounded-lg">
      </div>
    </div>
  </div>

  <div class="my-5">
    <h4 class="text-xl font-semibold text-center mb-6">Pick Your Ones...</h4>
    <div class="flex flex-col justify-center">
      <div class="relative mx-3 flex flex-wrap mx-auto justify-center">


        <a href="room.php">
          <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-1 my-3 cursor-pointer">
            <div class="overflow-x-hidden rounded-2xl relative">
              <img class="h-52 rounded-2xl w-full object-cover" src="img/executive-twin-room-city.jpg">
            </div>
            <div class="mt-4 pl-2 mb-2 flex justify-between ">
              <div>
                <p class="text-lg font-semibold text-gray-900 mb-0">Deluxe Super</p>
              </div>
            </div>
          </div>
        </a>


        <a href="room.php">
          <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-1 my-3 cursor-pointer">
            <div class="overflow-x-hidden rounded-2xl relative">
              <img class="h-52 rounded-2xl w-full object-cover" src="img/penthouse-suite-bedroom.jpg">
            </div>
            <div class="mt-4 pl-2 mb-2 flex justify-between ">
              <div>
                <p class="text-lg font-semibold text-gray-900 mb-0">Single King</p>
              </div>
            </div>
          </div>
        </a>


        <a href="room.php">
          <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-1 my-3 cursor-pointer">
            <div class="overflow-x-hidden rounded-2xl relative">
              <img class="h-52 rounded-2xl w-full object-cover" src="img/deluxe-guest-room.jpg">
            </div>
            <div class="mt-4 pl-2 mb-2 flex justify-between ">
              <div>
                <p class="text-lg font-semibold text-gray-900 mb-0">Single</p>
              </div>
            </div>
          </div>
        </a>

      </div>
    </div>
  </div>


<?php require "components/footer.php";?>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- slider script -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('#slider');
    setTimeout(function moveSlide() {
      const max = slider.scrollWidth - slider.clientWidth;
      const left = slider.clientWidth;

      if (max === slider.scrollLeft) {
        slider.scrollTo({
          left: 0,
          behavior: 'smooth'
        })
      } else {
        slider.scrollBy({
          left,
          behavior: 'smooth'
        })
      }

      setTimeout(moveSlide, 2000)
    }, 2000)

  })
</script>

</html>