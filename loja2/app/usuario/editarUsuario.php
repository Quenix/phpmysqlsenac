<?php

$query = "UPDATE usuario SET nome='$nome', sobrenome='$sobrenome' WHERE id_usuario='$id_usuario';";

mysqli_query($connect, $query);

header("Location: ?page=usuarios");
exit();