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


  <div class="py-16 bg-white">
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
      <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
        <div class="md:5/12 lg:w-5/12">
          <img src="https://tailus.io/sources/blocks/left-image/preview/images/startup.png" alt="image" loading="lazy" width="" height="">
        </div>
        <div class="md:7/12 lg:w-6/12">
          <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Hotel SKYward: A Luxury and Comfort Destination in the Heart of the City</h2>
          <p class="mt-6 text-gray-600">Welcome to Hotel SKYward, the epitome of luxury and comfort. Nestled in the heart of the city, our hotel offers a serene and tranquil environment for our guests. Our rooms are elegantly designed with modern amenities to ensure a comfortable stay. The hotel boasts a world-class restaurant serving exquisite cuisine, a state-of-the-art fitness center, and a rejuvenating spa. Our dedicated staff is committed to providing impeccable service, catering to your every need.</p>
          <p class="mt-4 text-gray-600">Whether you're here for business or leisure, Hotel SKYward promises an unforgettable experience. Enjoy breathtaking views of the city skyline from our rooftop lounge, or unwind in our lush, landscaped gardens. With a wide range of facilities and services, Hotel SKYward is the perfect choice for a luxurious getaway. We look forward to welcoming you and making your stay a memorable one. Experience the best of hospitality at Hotel SKYward. Welcome to your home away from home.</p>
        </div>
      </div>
    </div>
  </div>


  <?php require "components/footer.php";?>

</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>