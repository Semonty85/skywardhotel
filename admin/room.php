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
            <select name="troom" class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value selected>room type</option>
                <option value="Single">Single</option>
                <option value="Single king">Single King</option>
                <option value="Deluxe Super">Deluxe Super</option>
            </select>
            <input type="number" name="roomno" placeholder="roomno" class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

            <button type="submit" class="mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-indigo-600 text-white" name="addroom">Add Room</button>
        </form>

        <?php
        if (isset($_POST['addroom'])) {
            $typeofroom = $_POST['troom'];
            $roomno = $_POST['roomno'];

            $sql = "INSERT INTO room(type,roomno) VALUES ('$typeofroom', '$roomno')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: room.php");
            }
        }
        ?>
    </div>

    <div class="flex">
        <?php
        $sql = "select * from room";
        $re = mysqli_query($conn, $sql)
        ?>
        <?php
        while ($row = mysqli_fetch_array($re)) {
            $id = $row['type'];
            echo "<div class='min-w-fit text-black border border-gray-200 rounded-lg px-10 py-4 m-4 bg-slate-200'>
						<div class='text-center no-boder'>
							<h3 class='text-lg py-1 font-semibold capitalize'>" . $row['type'] . "</class=>
                            <div class='text-base mb-2'> #" . $row['roomno'] . "</div>
                            <a href='roomdelete.php?id=" . $row['id'] . "'><button class='p-1'>✖</button></a>
						</div>
                    </div>";
        }
        ?>
    </div>

</body>

</html>