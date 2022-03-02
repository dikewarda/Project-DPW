<?php 
    session_start();
    session_destroy();

    echo "<script type='text/javascript'>
                    alert('Anda Berhasil Log Out');
                    document.location='index.html'</script>";;
?>