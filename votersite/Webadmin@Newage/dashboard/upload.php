<?php

    $targetFile = 'uploads/' . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
      //file was successfully uploaded
    }

?>