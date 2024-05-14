<?php
include "connect.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <aside class="Rectangle1">
        <div class="title">
            <span>blog</span><span class="highlight">MASTER</span>
        </div>
        <div class="container">
            <div class="text">ADMIN</div>
            <div class="circle">
                <img src="image/im.png" alt="Profile Image">
            </div>
        </div>
        <div class="cnt-1">
            <button class="btn"><img src="svg/home.svg" class="icon"> Home</button>
            <button class="btn"><img src="svg/article.svg" class="icon"> Articles</button>
            <button class="btn"><img src="svg/user.svg" class="icon"> Users</button>
            <button class="btn"><img src="svg/comment.svg" class="icon"> Comments</button>
            <button class="btn"><img src="svg/set.svg" class="icon"> Settings</button>
        </div>
        <div class="cnt-2">
            <button class="btn"> Logout <img src="svg/logout.svg"></button>
        </div>
    </aside>
    <main class="crud-1  text-center ">
        <table class="table ">
            <thead class="table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Enroll Number</th>
                    <th scope="col">Date of Create</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($dbs, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["Name"] ?></td>
                        <td><?php echo $row["Email"] ?></td>
                        <td><?php echo $row["Phone"] ?></td>
                        <td><?php echo $row["Enroll Number"] ?></td>
                        <td><?php echo $row["Date of create"] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row["id"] ?>"><i class="bi bi-pencil-square text-primary"></i></a>
                            <a href="delete.php?id=<?php echo $row["id"] ?>"><i class="bi bi-trash3-fill text-danger"></i></a>
                        </td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>
