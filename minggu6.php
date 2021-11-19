<html lang="en">
    <head>
        <title>Tugas Praktikum RD</title>
        <style>
            form {

                font-family : arial ;
                font-size : 20px;
                padding : 30px;
            }
            h1{
                color : black ;
            }
            h2{
                color : black ;
            }
            body {
                background-image : url("naruto.jpg");
                position: fixed;
                width : 100%;
                height : 100%;
                background-size : 100%;
                position: relative;
            }
            button {
                background-color : green ;
            }
            </style>
    </head>
    <body>
        <section>
            <div>
                <p>
                    <h1> HARGA BUAH </h1>
                </p>
                <form action="belanjaan.php" method="POST" id="belanjaan" name="belanjaan" >
                    <tr align="center">
                        <td><label>MANGGA</label></td>
                        <td><label>Rp.15000</label></td>
                    </tr>
                    <input type="number" id="MANGGA" onchange="nilai()" name="MANGGA">
                    <label>Kg</label>
                    <br>
                    <tr align="center">
                        <td><label>JAMBU</label></td>
                        <td><label>Rp.13000</label></td>
                    </tr>
                    <input type="number" id="JAMBU" onchange="nilai()" name="JAMBU">
                    <label>Kg</label>
                    <br>
                    <tr align="center">
                        <td><label>SALAK</label></td>
                        <td><label>Rp.10000</label></td>
                    </tr>
                    <input type="number" id="SALAK" onchange="nilai()" name="SALAK">
                    <label>Kg</label>
                    <br> <br>
                    <button type="submit">KONFIRMASI</button>
                    <br> <br>
                    <label>Total : </label>
                    <input type="number" id="Total" name="Total" readonly>
                    <br>
                </form>
            </div>
        </section>
    </body>
    <h2> hasil </h2>
    <script>
        <tr align="center";
        function nilai(){
            var MANGGA = document.getElementById("MANGGA").value*15000;
            var MANGGA = document.getElementById("JAMBU").value*13000;
            var MANGGA = document.getElementById("SALAK").value*10000;
            var Total = document.getElementById("Total");
            console.log(MANGGA + JAMBU + SALAK);
            var hasil = MANGGA + JAMBU + SALAK ;
            Total.value = hasil;
        }
    </script>
</html>