<?php
header('Content-type: text/plain');
header('Content-Disposition: attachment; filename="myconfig.php"');
readfile(find_in_path('pgrfilemanager-myconfig.php')) ;
exit(0);
?>
