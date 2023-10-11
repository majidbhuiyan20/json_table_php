<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    


    <table class="table table-bordered table-hover">

        <tr>
            <th>Roll</th>
            <th>Name</th>
            <th>Department</th>
            <th>Gender</th>
            <th>District</th>
            <th>Actions</th>
        </tr>

            <?php
            
            $json_data = file_get_contents("informations.json");
            $informations = json_decode($json_data, true);
            if(count($informations)!=0){
                foreach($informations as $info){
                   ?>
                    <tr>
            <td><?php echo $info['roll'] ?></td>
            <td><?php echo $info['name'] ?></td>
            <td><?php echo $info['department'] ?></td>
            <td><?php echo $info['gender'] ?></td>
            <td><?php echo $info['district'] ?></td>
            <td><!--This is Actions -->
                <select name="actions" id="actions">
                    <option value="">Select action</option>
                    <option value="">Remove</option>
                    <option value="">Edit</option>
                </select>
            </td>
        </tr>
                   <?php
                }
            }
            
            ?>

       
        

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>