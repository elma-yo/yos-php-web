<?php

require('../app/functions.php');

include('../app/_parts/_header.php');

?>

<form action="result.php" method="get">
  <textarea name="message"></textarea>
  <button>Send</button>
</form>

<?php

include('../app/_parts/_footer.php');