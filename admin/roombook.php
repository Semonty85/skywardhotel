<?php
session_start();
include '../config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hotel Skyward</title>
</head>

<body>

    <div class="p-4 text-sm" class="table-responsive-xl">
        <a href="newroombook.php" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
            <span>New Booking</span>
        </a>
        <?php
        $roombooktablesql = "SELECT * FROM roombook";
        $roombookresult = mysqli_query($conn, $roombooktablesql);
        $nums = mysqli_num_rows($roombookresult);
        ?>
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
                    <th scope="col" class="action">Action</th>
                    <!-- <th>Delete</th> -->
                </tr>
            </thead>

            <tbody>
                <?php
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
                        <td class="action">
                            <?php
                            if ($res['stat'] == 'Confirm') {
                                echo "<a href='roomcheckout.php?id=" . $res['id'] . "'><button class='btn btn-success'>Check Out</button></a>";
                            }
                            if ($res['stat'] == 'Confirm' || $res['stat'] == 'checkout') {
                                echo "";
                            } else {
                                echo "<a href='roomconfirm.php?id=" . $res['id'] . "'><button class='btn btn-success'>Confirm</button></a>";
                            }
                            ?>
                            <a href="roombookedit.php?id=<?php echo $res['id'] ?>"><button class="btn btn-primary">Edit</button></a>
                            <a href="roombookdelete.php?id=<?php echo $res['id'] ?>"><button class='btn btn-danger'>Delete</button></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>