<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditionals_homework</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card w-75 mx-auto">
            <div class="card-header text-center">
                REGISTRATION
            </div>
            <div class="card-body mt-3">
                <form action="" method="post">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                    <label for="">Year Level</label>
                    <select name="year" id="year" class="form-control">
                        <option value="year">CHOOSE YOUR CURRENT YEAR LEVEL</option>
                        <option value="first year">First year</option>
                        <option value="second year">Second year</option>
                        <option value="third year">Third year</option>
                        <option value="fourth year">Fourth year</option>
                    </select>
                    <label for="">Total Units</label>
                    <input type="number" name="unit" class="form-control" placeholder="max of 23" min="0" max="23">
                    <div class="text-center">
                    <input type="radio" name="lab" id="with" value="with" required>
                    <label for="yes">With lab</label>
                    <input type="radio" name="lab" id="without" value="without" required>
                    <label for="no">Without lab</label>
                    </div>
                    <button type="submit" value="submit" name="btn_submit" class="btn btn-outline-success btn-block mt-5">Submit</button>
                </div>
                </form>
            </div>
        </div>
    
    
        <?php

            include "school.php";

            if(isset($_POST['btn_submit'])){

                $name = $_POST['name'];
                $year = $_POST['year'];
                $unit = $_POST['unit'];
                $lab = $_POST['lab'];

                $price = new Price;

                $price->setDetails($name, $year, $unit, $lab);

                echo $price -> getDetails();

            }


        ?>
    </div>
    

</body>
</html>