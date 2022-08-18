<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="appointment.css">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="https://thumbs.dreamstime.com/b/hospital-logo-template-hospital-logo-template-117487677.jpg"
                alt="Logo">
        </div>
        <ul id="navlist">
            <li class="item"><a href="index.html">Home </a></li>
            <li class="item"><a href="contactUs.html">Contact Us</a></li>
        </ul>
    </nav>

    <div class="main-container">
        <div class="container">
            <h1>Book an appointment</h1>
            <form action="patientInfo.php" method="post">
                <!-- <div class="row">
                    <div class="col-25">
                        <label for="patientId">Patient Id</label>
                    </div>
                    <div class="col-75">
                        <input type="number" id="pid" name="pid" placeholder="Your ID" required>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-25">
                        <label for="doctorId">Doctor Id</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="pdid" name="pdid" placeholder="Doctor ID" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="full Name">Full Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="pname" name="pname" placeholder="Your name.." required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="age">Age</label>
                    </div>
                    <div class="col-75">
                        <input type="number" id="age" name="age" placeholder="Your age..">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="gender">Gender</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="pgender" name="pgender" placeholder="Your gender..">
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-25">
                        <label for="Diagnosed">Health Issue</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="pdiag" name="pdiag" placeholder="Your Problem..">
                    </div>
                </div> -->

                <div class="row" id="loginBtn">
                    <input type="submit" value="Book Now">
                </div>
            </form>
        </div>

        <div class="right-container">
            <h1>Doctor ID's</h1><BR><BR>
            <table style="font-size: 1.3rem;" width="55%;">
                <TR>
                    <TD>
                        1. Dr. William
                    </TD>
                    <TD>
                        047
                    </TD>
                </TR>

                <TR>
                    <TD>
                        2. Dr. Myles

                    </TD>
                    <TD>
                        133
                    </TD>
                </TR>

                <TR>
                    <TD>
                        3. Dr. Fouad. M. Abbas
                    </TD>
                    <TD>
                        099
                    </TD>
                </TR>

                <TR>
                    <TD>
                        4. Dr. Arthur Reese Abright
                    </TD>
                    <TD>
                        1796
                    </TD>
                </TR>

                <TR>
                    <TD>
                        5. Dr. Corrie T.M
                    </TD>
                    <TD>
                        908
                    </TD>
                </TR>

                <TR>
                    <TD>
                        6. Dr. Mark. F. Aaron
                    </TD>
                    <TD>
                        1907
                    </TD>
                </TR>

                <TR>
                    <TD>
                        7. Dr. Sudhansu Bhattacharyya
                    </TD>
                    <TD>
                        6032
                    </TD>
                </TR>

                <TR>
                    <TD>
                        8. Dr. Mona.M.Abaza
                    </TD>
                    <TD>
                        1966
                    </TD>
                </TR>

                <TR>
                    <TD>
                        8. Dr. Edward Jenner
                    </TD>
                    <TD>
                        121
                    </TD>
                </TR>

                <TR>
                    <TD>
                        9. Dr. Elizabeth Blackwell
                    </TD>
                    <TD>
                        076
                    </TD>
                </TR>

                <TR>
                    <TD>
                        10. Dr. Daniel Hale Williams
                    </TD>
                    <TD>
                        779
                    </TD>
                </TR>

                <TR>
                    <TD>
                        11. Dr. Alexander Fleming
                    </TD>
                    <TD>
                        676
                    </TD>
                </TR>

                <TR>
                    <TD>
                        12. Helen Brooke Taussig
                    </TD>
                    <TD>
                        199
                    </TD>
                </TR>

                <TR>
                    <TD>
                        13. Charles Richard Drew
                    </TD>
                    <TD>
                        4530
                    </TD>
                </TR>

                <TR>
                    <TD>
                        14. Michael Ellis DeBakey
                    </TD>
                    <TD>
                        230
                    </TD>
                </TR>

                <TR>
                    <TD>
                        15.Virginia Apgar
                    </TD>
                    <TD>
                        313
                    </TD>
                </TR>
            </table>
        </div>
    </div>

</body>

</html>
