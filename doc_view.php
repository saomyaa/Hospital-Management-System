<?php
    $con = mysqli_connect('localhost', 'root', '','mini');
    $sql = "SELECT * from book_appoint";
    $rs = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" > -->
    <title>View Appointments</title>
</head>
<body style="background-color: #edf7f5;">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">List Of Appointments</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>ID</td>
                                <td>Patient Name</td>
                                <td>Specialist want to see</td>
                                <td>Phone number</td>
                                <td>Description of symptoms</td>
                            </tr>
                            <tr>
                                <?php
                                while($row = mysqli_fetch_assoc($rs)){

                                ?>
                                <td> <?php echo $row['id'] ?> </td>
                                <td> <?php echo $row['loginName'] ?> </td>
                                <td> <?php echo $row['specialist'] ?> </td>
                                <td> <?php echo $row['loginphone'] ?> </td>
                                <td> <?php echo $row['symptom'] ?> </td>
                                </tr>
                                <?php
                                }

                                ?>
                            
                        </table>
                        <div class="logout">
                            <a href="home.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>

        
</body>
</html>