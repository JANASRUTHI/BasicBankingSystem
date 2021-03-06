<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">


    <style type="text/css">
        button {
            transition: 1.0s;
        }

        button:hover {
            background-color: #616C6F;
            color: white;
        }

        body,
        html {
            height: 100%;
        }

        .bg {
            /* The image used */
            background-image: url("images/b5.gif");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
           
        }
    </style>
</head>

<body style=" background-color:black;">
    <div class="bg">
        <?php
        include 'config.php';
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        ?>

<?php
        include 'navbar.php';
        ?>

        <div class="container">
            <b><i><h2 class="text-center pt-4"style="color:white;font-size:27px;">TRANFER MONEY</h2></i></b>
            <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                            <thead>
                                <tr style="color: seashell">
                                    <th scope="col" class="text-center py-2">ID</th>
                                    <th scope="col" class="text-center py-2">NAME</th>
                                    <th scope="col" class="text-center py-2">E-MAIL</th>
                                    <th scope="col" class="text-center py-2">BALANCE</th>
                                    <th scope="col" class="text-center py-2">DETAILS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($rows = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr style="color: seashell">
                                        <td class="py-2"><?php echo $rows['id'] ?></td>
                                        <td class="py-2"><?php echo $rows['name'] ?></td>
                                        <td class="py-2"><?php echo $rows['email'] ?></td>
                                        <td class="py-2"><?php echo $rows['balance'] ?></td>
                                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn">Show Details/Transfer</button></a></td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </div>
</body>

</html>