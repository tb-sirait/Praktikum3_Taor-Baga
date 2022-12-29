<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="formstyle.css">
    <script>
        function validasiForm() {
            let x = document.forms["datadirimu"]["nama"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
    </script>
</head>
<body>
    <div id="ui_style">
        <h1>Form Pekerjaan</h1>
        <form action="process.php" method="post" onsubmit="return validasiForm()" name="datadirimu">
            Nama: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            Alamat: <input type="text" name="address"><br>
            Gender: <select name="gender" id="gender">
              <option value="pria">Pria</option>
              <option value="wanita">Wanita</option>
            </select><br>
            Position: <input type="text" name="position"><br>
            Status: <select name="status" id="status">
                <option value="fulltime">Fulltime</option>
                <option value="parttime">Part-Time</option>
            </select><br>
            <input type="submit">
          </form>
    </div>
</body>
</html>