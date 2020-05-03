<?php
session_start();
session_destroy();
session_abort();
 ?>
 <pre>
<?php print_r($_SESSION); ?>
 </pre>
