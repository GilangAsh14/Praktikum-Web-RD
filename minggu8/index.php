<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GILANG ASHARI ABIMANYU MINGU 8</title>
    <style>
        * {
            margin: 20;
            padding: 20;
        }
        body {
            min-height: 100vh;
            position: relative;
            background: linear-gradient(263deg, #00000059, #00000036);
            background-color : white ;
        }

        .body-bg {
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .bucket {
            width: 25vw;
            background-color: rgba(67, 0, 220, 0.4);
            /* margin: 25vh auto; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 25px;
            font-size: 12pt;
            /* box-shadow: 10px 10px 5px grey; */
        }
        .bucket p {
            text-align: center;
            text-transform: uppercase;
        }
        .login-field {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            /* background: transparent; */
            border: none;
            text-shadow: 0 0 whitesmoke;
            font-weight: 600;
            opacity: 0.8;
            /* color: white; */
            border-radius: 7px;
        }
        .login-btn-submit {
            background-color: black;
            color: green;
            font-size: 20pt;
            width: 100%;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- <img src="./assets/wave.svg" alt="wave background" class="body-bg"> -->
    <div class="bucket">
        <p>SILAHKAN LOGIN UNTUK MELANJUTKAN </p>
        <form action="./login.php" method="post" class="login">
            <label for="uname">Masukkan username anda</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field">
            <label for="pass">Masukkan password  anda</label>
            <input type="password" name="pass" id="pass" placeholder="Pasword..." class="login-field">
            <input type="submit" name="login" value="Login" class="login-btn-submit">
        </form>
    </div>
</body>
</html>