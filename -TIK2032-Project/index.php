<?php
include "koneksi.php";

if(isset($_POST['send'])) {
    $urname = $_POST['urname'];
    $email = $_POST['email'];
    $ulasan = $_POST['ulasan'];

    $sql = "INSERT INTO reviewweb (urname, email, ulasan) VALUES 
    ('$urname', '$email', '$ulasan')";

    if($db->query($sql)) {
            echo "Pesan telah dikirim"; 
    }else {
        echo "Error, can't sent message";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="contact-body"> <!-- menambahkan kelas contact-body -->
    <h1>CONTACT</h1>
    <ul>
        <li>
            <strong>EMAIL :</strong>
            <a href="mailto:madewijaya39@gmail.com" target="_blank">Email Pribadi Saya</a>
        </li>
        <br />
        <li>
            <strong>PHONE :</strong>
            <a href="https://wa.me/+6282271363436" target="_blank">Kontak WhatsApp Saya</a>
        </li>
        <br />
        <li>
            <strong>INSTAGRAM :</strong>
            <a href="https://www.instagram.com/hendy_wijaya13?igsh=aTlpdXc1MnVuMnJq" target="_blank">Instagram Saya</a>
        </li>
        <div id="contact">
            
        <form class="review-form" action="index.php" method="POST">
            <input type="text" placeholder="Your Name" id="name" name="urname"/><br>
            <input type="email" placeholder="Email" id="email" name="email"/><br>
            <textarea placeholder="Message" id="ulasan" name="ulasan"></textarea><br>
            <button type="submit" name="send">Send Message</button>
        </form>
            <a href="halcontact.html">Lainnya</a>
        </div>
    </ul>
</body>
</html>
