<?php
if (!isset($_SESSION['a_username'])){
header("Location: ../mobile table-checkbox fix.html?login=unauthorised");
exit();
}