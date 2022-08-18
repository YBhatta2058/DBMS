<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<style>
    /* reseting the css */
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: 'Ubuntu Condensed', sans-serif;
    }

    body {
        background-color: #e7dfc4;
        /* height: 2273px; */
    }

    #logo {
        margin: 12px 39px 12px 12px;
    }

    #logo img {
        display: inline;
        height: 65px;
        width: 65px;
        border-radius: 50%;
        filter: invert(100%);
        transition: all .5s ease-in;
    }

    #logo img:hover {
        cursor: pointer;
        transform: scale(1.08);
        background-color: black;
        filter: brightness(1);
    }


    #navbar::before {
        content: "";
        background-color: #b67272;
        position: absolute;
        height: 80%;
        width: 100%;
        opacity: 1;
        z-index: -1;
    }

    #navbar ul {
        display: flex;
    }


    #navbar {
        display: flex;
        align-items: center;
        position: relative;
        top: 0px;
    }

    #navbar ul li {
        list-style: none;
        font-size: 1.3rem;
    }

    #navbar ul li a {
        text-decoration: none;
        padding: 12px 36px;
        color: black;
        border-radius: 32px;
        font-family: 'Ubuntu Condensed', sans-serif;
        font-weight: bold;
        transition: all .4s ease-in;

    }

    #navbar ul li a:hover {
        color: white;
        background-color: black;
        font-size: 1.4rem;
    }

    .displaySection {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .displaySection input[type='text'] {
        width: 50%;
        font-size: 1.2rem;
    }

    .displaySection input[type='submit'] {
        width: 20%;
        font-size: 1.2rem;
    }

    .table-responsive {
        margin: 50px 170px;
    }

    form {

        display: flex;
        justify-content: center;
    }
</style>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="https://thumbs.dreamstime.com/b/hospital-logo-template-hospital-logo-template-117487677.jpg" alt="Logo">
        </div>
        <ul id="navlist">
            <li class="item"><a href="index.html">Home </a></li>
            <li class="item"><a href="contactUs.html">Contact Us</a></li>
        </ul>
    </nav>

    <section class="displaySection">
        <h1>Doctors Panel</h1><BR>
        <form action="" method="post">
            <input type="text" name="search" id="search" placeholder="Search by Patient Id" style="border-radius: 10px; height: 40px; padding-left: 10px;margin-top: 80px; width: 500px;">
            <input type="submit" value="Search" name="submit" style="border-radius: 10px; height: 40px; padding-left: 5px; margin-top: 80px;">
        </form>
    </section>


    <?php
    $connection = mysqli_connect("localhost", "root", "", "shristi");
    if (isset($_POST['submit'])) {
        $id = $_POST['search'];
        $query = "SELECT * FROM patientinfo WHERE pid = '$id'";
        $query_run = mysqli_query($connection, $query);
        
    ?>
        <div class="table-responsive">
            <table class="table table-bordered" style="border-color: black;">
                <thead>
                    <tr>
                        <th scope="col">Patient Id</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Diagnosed With</th>
                        <th scope="col">Doctor Id</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                            <tr>
                                <td><?php echo $row['pid']; ?></td>
                                <td><?php echo $row['pname']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['pgender']; ?></td>
                                <td><?php echo $row['pdiag']; ?></td>
                                <td><?php echo $row['pdid']; ?></td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="6">No Record Found</td>
                        </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>

    <form action="diagnosed.php" method="post">
        <P>
            Patient ID:     <input type="text" name="patientid" id="patientid" placeholder="Update by Patient Id" style="border-radius: 10px; height: 40px; padding-left: 5px; margin-top: 20px;"><BR>
            Health Status:  <input type="text" name="pdiag" id="pdiag" placeholder="Diagonised With" style=" border-radius: 10px; height: 40px; padding-left: 5px; margin-top: 20px;"><BR>
            <input type="submit" value="Update" name="submit" style="border-radius: 10px; margin-top: 20px;  width:120px;">
        </P>
        </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</html>