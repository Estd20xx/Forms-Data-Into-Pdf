<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['Type'])) {
        $Account = $_POST['Type'];
    }
    if (isset($_POST['Sal'])) {
        $Status = $_POST['Sal'];
    }
    $FirstName = $_POST['fname'];
    $MiddleName = $_POST['mname'];
    if ($MiddleName == null) {
        $MiddleName = "Null";
    }
    $Mobile = $_POST['mobile'];
    $Phone = $_POST['phone'];
    $DateBS = $_POST['datebs'];
    $DateAd = $_POST['datead'];
    $LastName = $_POST['lname'];
    $Email = $_POST['email'];
    $Country = "Nepal";
    require '../fpdf/fpdf.php';
    // require("/xampp/htdocs/php/FirstTry/fpdf/fpdf.php"); // includeing the file 
    if ($FirstName == null || strlen($FirstName) < 5) {
        header('location:http://'.$_SERVER['HTTP_HOST']. '/php/FirstTry/index.php');

    } else {
        if ($DateAd != null) {
            if ($DateBS != null) {
                if ($LastName != null) {
                    if ($Email != null) {
                        if ($Mobile == null || strlen($Mobile) < 10) {
                            $alert = "<script>alert('Please Enter Your 10 Digit Mobile Number.');</script>";
                        } else {
                            if ($Phone == null || strlen($Phone) < 7) {
                                header('location:http://'.$_SERVER['HTTP_HOST']. '/php/FirstTry/index.php');
                            } else {
                                if ($Account == null) {
                                    header('location:http://'.$_SERVER['HTTP_HOST']. '/php/FirstTry/index.php');
                                } else {
                                    if ($Status == null) {
                                        header('location:http://'.$_SERVER['HTTP_HOST']. '/php/FirstTry/index.php');
                                    } else {
                                        $pdf = new FPDF();
                                        $pdf->AddPage();
                                        $pdf->SetFont("Courier", "", 18);
                                        // $pdf->Cell(0, 20, "Registration Details", 1, 1, 'C',false,'index.php');
                                        /* 0 = width from the first 
                                            13 = Height of the cell
                                            1 = border 
                                            1 = line for the next element 
                                            false = filling the background color
                                            index.php = linking the text with the other page or link. It is require for the social media account link purpose or redirect the user to the required pagex*/
                                        $pdf->Cell(0, 20, "Registration Details", 1, 1, 'C');
                                        $pdf->Cell(70, 15, "First Name", 1, 0, 'C');
                                        $pdf->Cell(0, 15, $FirstName, 1, 1, 'C');

                                        $pdf->Cell(70, 15, "Middle Name", 1, 0, 'C');
                                        $pdf->Cell(0, 15, $MiddleName, 1, 1, 'C');

                                        $pdf->Cell(70, 15, "Last Name", 1, 0, 'C');
                                        $pdf->Cell(0, 15, $LastName, 1, 1, 'C');

                                        $pdf->Cell(70, 15, "Mobile No", 1, 0, 'C');
                                        $pdf->Cell(0, 15, $Mobile, 1, 1, 'C');

                                        $pdf->Cell(70, 15, $Phone, 1, 0, 'C');
                                        $pdf->Cell(0, 15, "First Name", 1, 1, 'C');

                                        $pdf->Cell(70, 15, "Email", 1, 0, 'C');
                                        $pdf->Cell(0, 15, $Email, 1, 1, 'C');


                                        $pdf->Cell(70, 15, "Account Type", 1, 0, 'C');
                                        $pdf->Cell(0, 15, $Account, 1, 1, 'C');

                                        $pdf->Cell(70, 15, "Status", 1, 0, 'C');
                                        $pdf->Cell(0, 15, $Status, 1, 1, 'C');

                                        $pdf->Cell(70, 15, "Date of Birth(A.D)", 1, 0, 'C');
                                        $pdf->Cell(0, 15, $DateAd, 1, 1, 'C');

                                        $pdf->Cell(70, 15, "Date of Birth(B.S)", 1, 0, 'C');
                                        $pdf->Cell(0, 15, $DateBS, 1, 1, 'C');

                                        $pdf->Cell(70, 15, "Country", 1, 0, 'C');
                                        $pdf->Cell(0, 15, $Country, 1, 1, 'C');
                                        $pdf->Cell(70, 15, "Owner : ", 0, 0, 'C');
                                        $pdf->Cell(25, 15, "Sushant Khadka", 0, 1, 'C', false, 'https://www.instagram.com/sushant.exe_/');
                                        // $pdf->output("$FirstName".".pdf");
                                        $pdf->output();
                                    }
                                }
                            }
                        }
                    } else {
                        header('location:http://'.$_SERVER['HTTP_HOST']. '/php/FirstTry/index.php');
                    }
                } else {
                    header('location:http://'.$_SERVER['HTTP_HOST']. '/php/FirstTry/index.php');
                }
            } else {
                header('location:http://'.$_SERVER['HTTP_HOST']. '/php/FirstTry/index.php');
            }
        } else {
            header('location:http://'.$_SERVER['HTTP_HOST']. '/php/FirstTry/index.php');
        }
    }
}
?>