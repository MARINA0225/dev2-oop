<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card w-50 mx-auto mt-5">
            <div class="card-header">
                <h3 class="text-center fw-bold">FARE</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                <div class="row m-3">
                    <input type="number" name="age" id="" placeholder="Age">
                </div>
                <div class="row m-3">
                    <input type="number" name="distance" id="" placeholder="Distance(km)">
                </div>
                <div class="row m-3">
                    <button type="submit" value="submit" name="btn_submit" class="btn btn-outline-success btn-block mt-5">Compute</button>
                </div>
                </form>
                <?php

                        include "Fare.php";

                        if(isset($_POST['btn_submit'])){
                        
                            $age = $_POST['age'];
                            $distance = $_POST['distance'];

                            
                            $price = new Price;
                            
                            $price->setDetails($age,$distance);
                            
                            echo $price -> getDetails();

                ?>
                <div class="text-danger fw-bold">
                    <?php
                    echo $price -> getFare();
                    ?>
                </div>
                <?php

                }

                ?>
                
            </div>
        </div>
    </div>

</body>
</html>

