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
        <div class="card w-75 mx-auto mt-5">
            <h3 class="card-header text-center text-white bg-success fw-bold">
                Net Income Calculator
            </h3>
            <div class="card-body">
                <form action="" method="post">
                    <label for="" class="fw-bold">Name</label>
                    <input type="text" name="name" class="form-control">
                    <div class="fw-bold">Position</div>
                    <input type="radio" name="position" id="staff" value="staff">
                    <label for="yes">Staff</label>
                    <input type="radio" name="position" id="admin" value="admin">
                    <label for="no">Admin</label>
                    <div class="fw-bold">Civil Status</div>
                    <input type="radio" name="civil" id="single" value="single">
                    <label for="yes">Single</label>
                    <input type="radio" name="civil" id="married" value="married">
                    <label for="no">Married</label>
                    <div class="fw-bold">Employment Status</div>
                    <select name="status" id="status" class="form-control">
                        <option value="contractual">Contractual</option>
                        <option value="probationary">Probationary</option>
                        <option value="regular">Regular</option>
                    </select>
                    <label for="" class="fw-bold">No. of Hours Worked</label>
                    <input type="number" name="hours" class="form-control">
                    <button type="submit" value="submit" name="btn_submit" class="btn btn-success btn-block mt-5 w-100">Compute</button>
                </form>
            </div>
        </div>
        <div class="card w-75 mx-auto mt-2 mb-5">
            <div class="card-body">
            <?php

                include "employee.php";

                if(isset($_POST['btn_submit'])){
                    
                    $income = new Income($_POST['name'], $_POST['position'], $_POST['civil'],  $_POST['status'],  $_POST['hours']);     
            ?>
            
            <div class="mt-2">Name: <span class =fw-bold><?php echo $income->name ?></span></div>
            <div class="mt-2">Regular Pay: <?php echo $income->getRegularPay() ?></div>
            <div class="mt-2">Overtime Pay: <?php echo $income->getOverPay() ?></div>
            <div class="text-danger mt-2">Healthcare: <?php echo $income->healthCare() ?></div>
            <div class="text-danger mt-2">Tax: <?php echo $income->tax() ?></div>
            <div class="fw-bold mt-2">Net Income: <?php echo round($income->netIncome()) ?></div>
    
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>