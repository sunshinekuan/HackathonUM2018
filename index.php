<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My first PHP page</title>
</head>
<body>
    <?php
    $command = "curl -X GET --header 'Accept: application/json' --header 'Authorization: Bearer 6ddc1cc5-4e7d-3e7f-89e5-d7a11f84e022' 'https://api.data.umac.mo/service/facilities/computer_room_pc_status/v1.0.0/all'";

    $output = shell_exec($command);

    var_dump($output);
    ?>
</body>
</html> 