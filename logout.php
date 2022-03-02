<!DOCTYPE html>
<html>
    <head>
        <title>Logout Confirm</title>
    </head>
    <body>
    <script>
        var yakin = confirm("Apakah anda yakin ingin logout?");

        if (yakin) {
            document.location='logoutProses.php';
        } else {
            history.back(self);
        }
    </script>
    </body>
</html>