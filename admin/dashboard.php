<?php
session_start();
include '../config.php';

// roombook
$roombooksql = "Select * from roombook";
$roombookre = mysqli_query($conn, $roombooksql);
$roombookrow = mysqli_num_rows($roombookre);

// staff
$staffsql = "Select * from staff";
$staffre = mysqli_query($conn, $staffsql);
$staffrow = mysqli_num_rows($staffre);

// room
$roomsql = "Select * from room";
$roomre = mysqli_query($conn, $roomsql);
$roomrow = mysqli_num_rows($roomre);


$query = "SELECT * FROM payment";
$result = mysqli_query($conn, $query);
$tot = 0;
while ($row = mysqli_fetch_array($result)) {
  $tot = $tot + $row["total_amount"];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Hotel Skyward</title>
</head>

<body>
  <div class="p-4 flex">
    <div class="w-2/6 text-white border border-gray-200 rounded-lg px-5 py-6 m-4 bg-gradient-to-r from-cyan-500 to-blue-500">
      <h2>Total Booked Room</h1>
        <h1><?php echo $roombookrow ?> / <?php echo $roomrow ?></h1>
    </div>
    <div class="w-2/6 text-white border border-gray-200 rounded-lg px-5 py-6 m-4 bg-gradient-to-r from-cyan-500 to-blue-500">
      <h2>Total Staff</h1>
        <h1><?php echo $staffrow ?></h1>
    </div>
    <div class="w-2/6 text-white border border-gray-200 rounded-lg px-5 py-6 m-4 bg-gradient-to-r from-cyan-500 to-blue-500">
      <h2>Profit</h1>
        <h1>$<?php echo $tot ?></h1>
    </div>
  </div>
  <div class="flex p-6 mx-auto">
    <table class="w-full my-4 border-t border-slate-200" id="table-data">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Country</th>
          <th scope="col">Phone</th>
          <th scope="col">Type of Room</th>
          <th scope="col">No of Room</th>
          <th scope="col">Meal</th>
          <th scope="col">Check-In</th>
          <th scope="col">Check-Out</th>
          <th scope="col">No of Day</th>
          <th scope="col">guide</th>
          <th scope="col">Status</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $roombooktablesql = "SELECT * FROM roombook ORDER BY id DESC LIMIT 10";
        $roombookresult = mysqli_query($conn, $roombooktablesql);
        while ($res = mysqli_fetch_array($roombookresult)) {
        ?>
          <tr class="text-md">
            <td><?php echo $res['id'] ?></td>
            <td><?php echo $res['Name'] ?></td>
            <td><?php echo $res['Email'] ?></td>
            <td><?php echo $res['Country'] ?></td>
            <td><?php echo $res['Phone'] ?></td>
            <td><?php echo $res['RoomType'] ?></td>
            <td><?php echo $res['NoofRoom'] ?></td>
            <td><?php echo $res['Meal'] ?></td>
            <td><?php echo $res['cin'] ?></td>
            <td><?php echo $res['cout'] ?></td>
            <td><?php echo $res['nodays'] ?></td>
            <td><?php echo $res['cguide'] ?></td>
            <td><?php echo $res['stat'] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>