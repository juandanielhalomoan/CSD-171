<?php
    session_start();
    $_SESSION['alogin']=="";
    session_unset();
    //session_destroy();
    $_SESSION['errmsg']="Kamu berhasil logout";
?>
<script language="javascript">
    document.location="indexbsp.php";
</script>
