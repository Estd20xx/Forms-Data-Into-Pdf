<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Form to Php Data</title>
</head>

<body>

    <div class="container">
        <form action="./mydata/mydata.php" method="POST">
            <div class="header">
                <h2>Registration Form</h2>
            </div>
            <div class="radioValue">
                <div class="left">
                    <h1>Account Type<sup>&nbsp;*</sup></h1>
                    <input type="radio" name="Type" id="" value="Individual">Individual</input>
                    <input type="radio" name="Type" id="" value="Minor">Minor</input>
                </div>
                <div class="right">
                    <h1>Salutation</h1>
                    <input type="radio" name="Sal" id="" value="Mr.">Mr.</input>
                    <input type="radio" name="Sal" id="" value="Mrs.">Mrs.</input>
                    <input type="radio" name="Sal" id="" value="M/S">M/S</input>
                    <input type="radio" name="Sal" id="" value="Miss">Miss</input>
                    <input type="radio" name="Sal" id="" value="Minor">Minor</input>
                </div>
            </div>
            <div class="ActualData">
                <div class="first">
                    <label for="" class="data">First Name<sup>&nbsp;*</sup></label><br>
                    <input type="text" name="fname" placeholder="First Name">
                    <label for="" class="data">Mobile No<sup>&nbsp;*</sup></label><br>
                    <input type="text" name="mobile" placeholder="Mobile No.">
                    <label for="" class="data">Data of Birth(B.S)<sup>&nbsp;*</sup></label><br>
                    <input type="date" name="datebs" placeholder="Data of Birth(B.S)">
                </div>
                <div class="second">
                    <label for="" class="data">Middle Name<sup>&nbsp;*</sup></label><br>
                    <input type="text" name="mname" placeholder="Middle Name">
                    <label for="" class="data">Phone No<sup>&nbsp;*</sup></label><br>
                    <input type="text" name="phone" placeholder="Phone No">
                    <label for="" class="data">Data of Birth(A.D)<sup>&nbsp;*</sup></label><br>
                    <input type="date" name="datead" placeholder="Data of Birth(A.D)">
                    <button type="submit" name="submit">Download in Pdf</button>
                </div>
                <div class="third">
                    <label for="" class="data">Last Name<sup>&nbsp;*</sup></label><br>
                    <input type="text" name="lname" placeholder="Last Name">
                    <label for="" class="data">Email<sup>&nbsp;*</sup></label><br>
                    <input type="email" name="email" placeholder="Email">
                    <label for="" class="data">Applying From the Country<sup>&nbsp;*</sup></label><br>
                    <input type="text" id="country" placeholder="Nepal" disabled="disabled">
                </div>
            </div>
    </div>
    </form>
    </div>
</body>

</html>