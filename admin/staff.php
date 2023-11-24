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
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hotel Skyward</title>
</head>

<body>
    <div class="p-4">
        <form action="" method="POST">
            <label for="troom">Name :</label>
            <input type="text" name="staffname" class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

            <label for="bed">Work :</label>
            <select name="staffwork" class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value selected></option>
                <option value="Manager">guide</option>
                <option value="Cook">Cook</option>
                <option value="Helper">Helper</option>
                <option value="cleaner">cleaner</option>
                <option value="weighter">weighter</option>
            </select>

            <button type="submit" class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-indigo-600 text-white" name="addstaff">Add Room</button>
        </form>

        <?php
        if (isset($_POST['addstaff'])) {
            $staffname = $_POST['staffname'];
            $staffwork = $_POST['staffwork'];

            $sql = "INSERT INTO staff(name,work) VALUES ('$staffname', '$staffwork')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: staff.php");
            }
        }
        ?>
    </div>


    <!-- here room add because room.php and staff.php both css is similar -->
    <div class="flex">
        <?php
        $sql = "select * from staff";
        $re = mysqli_query($conn, $sql)
        ?>
        <?php
        while ($row = mysqli_fetch_array($re)) {
            echo "<div class='min-w-fit text-black border border-gray-200 rounded-lg px-10 py-4 m-4 bg-slate-200'>
						<div>
							<h3 class='text-lg py-1 font-semibold capitalize'>" . $row['name'] . "</h3>
                            <div class='text-base mb-2'>" . $row['work'] . "</div>
                            <a href='staffdelete.php?id=" . $row['id'] . "'><button class='p-1'>✖</button></a>
						</div>
                    </div>";
        }
        ?>
    </div>

</body>

</html>