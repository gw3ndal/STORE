<?php
unset($_SESSION["user"]);
header("Location:index.php?module=customer&action=closed_session");