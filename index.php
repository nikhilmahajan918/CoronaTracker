<?php
   include "logic.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 
    
    <script src="https://kit.fontawesome.com/1aee6e4f13.js" crossorigin="anonymous"></script>
    
    <style>
        body {
            font-family: 'Baloo Thambi 2', cursive;
        }
    </style>
    <title>Covid-19 Tracker</title>
</head>
<body>
    <div class="container-fluid bf-light p-5 text-center my-3">
        <h1>Covid-19 Tracker</h1>
        <h5 class="text-muted"> A Simple Open-Source Project </h5>
    </div>

    <div class="container my-3">
       <div class="row text-center">
           <div class="col-4 text-warning">
               <h5>Confirmed </h5>
               <?php echo $total_confirmed; ?>
           </div>
           <div class="col-4 text-success">
               <h5>Recovered </h5>
               <?php echo $total_recovered; ?>
           </div>
           <div class="col-4 text-danger">
               <h5>Deceased </h5>
               <?php echo $total_deaths; ?>
           </div>
       </div>
    </div>

    <div class="container bg-light p-3 my-3 text-center">
        <h5 class="text-info">"Prevention is the cure." ></h5>
        <p class="text-muted">Stay Indoors, Stay Safe. </p>
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col"> Countries</th>
                        <th scope="col"> Confirmed</th>
                        <th scope="col"> Recovered</th>
                        <th scope="col"> Deceased</th>
                    </tr>   
                </thead>
                <tbody>
                    <?php
                        foreach($data as $key => $value){
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                    ?>
                        <tr>
                            <th><?php echo $key;?> </th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase != 0){?>
                                    <small class="text-danger px-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>
                                <?php }?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['recovered'];?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['deaths'];?>
                            </td>
                        </tr>    

                    <?php } ?>
            </table>
        </div>    
    </div>
    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2021, Nikhil_Mahajan </span>
        </div>
    </footer>
    
</body>
</html>