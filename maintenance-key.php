<style>
.key-form {
            margin-top: 20px;
        }
        .key-form input[type="text"] {
            padding: 10px;
            font-size: 18px;
            margin-right: 10px;
        }
        .key-form input[type="submit"] {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .key-form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entered_key = $_POST['maintenance_key'];

    if ($entered_key === $maintenance_key) {
        header('Location: /landing.aspx');
        exit();
    } else {
        header('Location: /maintenance/index.aspx?error=invalid_key');
        exit();
    }
}
?>
 <form class="key-form" method="POST" action="/core/checkkey.php">
        <input type="text" name="maintenance_key" placeholder="Enter Maintenance Key">
        <input type="submit" value="Submit">
