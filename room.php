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
  <?php require "components/nav.php"; ?>



  <div class="my-8">
    <div class="container mx-auto">
      <div class="md:flex md:items-center">
        <div class="w-full h-72 md:w-1/2 lg:h-96">
          <img class="h-full w-full rounded-2xl object-cover max-w-lg" src="img/penthouse-suite-bedroom.jpg" alt="Nike Air">
        </div>
        <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
          <h3 class="text-2xl font-semibold text-gray-700 uppercase mb-2">Booking</h3>

          <!-- bookbox -->
          <div id="guestdetailpanel">
            <form action="" method="POST" class="guestdetailpanelform">
              <div class="guestinfo">
                <div class="flex flex-row">
                  <input type="text" name="Name" placeholder="Name" class="mb-4 mr-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                  <input type="email" name="Email" placeholder="Email" class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex flex-row w-full">
                  <?php
                  $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                  ?>

                  <select name="Country" class="mb-4 w-1/2 mr-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value selected>Select your country</option>
                    <?php
                    foreach ($countries as $key => $value) :
                      echo '<option value="' . $value . '">' . $value . '</option>';
                    //close your tags!!
                    endforeach;
                    ?>
                  </select>
                  <input type="text" name="Phone" placeholder="Phone Number" class="w-1/2 mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
              </div>
              <div class="reservationinfo">
                <select name="RoomType" class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                  <option value selected>Type Of Room</option>
                  <option value="Single">Single $25/day</option>
                  <option value="Single king">Single King $55/day</option>
                  <option value="Deluxe Super">Deluxe Super $80/day</option>
                </select>
                <select name="NoofRoom" class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                  <option value selected>No of Room</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
                <select name="Meal" class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                  <option value selected>Meal</option>
                  <option value="Breakfast">Breakfast</option>
                  <option value="Half Board">Half Board</option>
                  <option value="Full Board">Full Board</option>
                </select>
                <div class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                  <span>
                    <label for="cin"> Check-In</label>
                    <input name="cin" type="date">
                  </span>
                  <span>
                    <label for="cin"> Check-Out</label>
                    <input name="cout" type="date">
                  </span>
                </div>
              </div>
              <div class="mb-4">
                <input type="checkbox" class="" name="cguide" value="true" />
                If need any guide it just cost $15/day.
              </div>
              <button class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-indigo-600 text-white" name="guestdetailsubmit">Submit</button>

            </form>

            <!-- ==== room book php ====-->
            <?php
            if (isset($_POST['guestdetailsubmit'])) {
              $Name = $_POST['Name'];
              $Email = $_POST['Email'];
              $Country = $_POST['Country'];
              $Phone = $_POST['Phone'];
              $RoomType = $_POST['RoomType'];
              $NoofRoom = $_POST['NoofRoom'];
              $Meal = $_POST['Meal'];
              $cin = $_POST['cin'];
              $cout = $_POST['cout'];
              $cguide = isset($_POST['cguide']) ? $_POST['cguide'] : 'false';

              if ($Name == "" || $Email == "" || $Country == "" || $Phone == "" || $RoomType == "" || $NoofRoom == "" || $Meal == "" || $cin == "" || $cout == "" || $cguide == "") {
                echo "<script>swal({
                        title: 'Fill the with all details',
                        icon: 'error',
                    });
                    </script>";
              } else {
                $sta = "NotConfirm";
                $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,NoofRoom,Meal,cin,cout,cguide,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$NoofRoom','$Meal','$cin','$cout','$cguide','$sta',datediff('$cout','$cin'))";
                $result = mysqli_query($conn, $sql);


                if ($result) {
                  echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
                } else {
                  echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                });
                        </script>";
                }
              }
            }
            ?>
          </div>

        </div>
      </div>
      <div class="mt-16">
        <h3 class="text-gray-600 text-2xl font-medium">Galary view</h3>
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
          <!-- image grid-->


          <div class="grid grid-cols-6 col-span-4 gap-2  ">
            <div class=" overflow-hidden rounded-xl col-span-3 max-h-[20rem]">
              <img class="h-full w-full object-cover " src="img/penthouse-suite-bedroom.jpg" alt="">
            </div>
            <div class=" overflow-hidden rounded-xl col-span-3 max-h-[20rem]">
              <img class="h-full w-full object-cover  " src="img/executive-twin-room-city.jpg" alt="">
            </div>
            <div class=" overflow-hidden rounded-xl col-span-2 max-h-[16rem]">
              <img class="h-full w-full object-cover " src="img/accessible-bathroom-with.jpg" alt="">
            </div>
            <div class=" overflow-hidden rounded-xl col-span-2 max-h-[16rem]">
              <img class="h-full w-full object-cover " src="img/guest-bathroom.jpg" alt="">
            </div>
            <div class="relative overflow-hidden rounded-xl col-span-2 max-h-[16rem]">
              <img class="h-full w-full object-cover " src="img/penthouse-suite-city.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require "components/footer.php"; ?>

</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>