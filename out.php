<?php
echo "<script>
alert('Good Bye!!');
</script>";
session_start();
session_destroy();
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';