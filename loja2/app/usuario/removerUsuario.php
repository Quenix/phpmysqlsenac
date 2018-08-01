<?php

$query = "DELETE FROM usuario WHERE id_usuario = $id_usuario";

mysqli_query($connect, $query);

header("Location: ?page=usuarios");
exit();