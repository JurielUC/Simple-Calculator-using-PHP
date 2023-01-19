<!--Simple Calculator using PHP-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        border: border-box;
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    main {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    section {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        width: 400px;
        height: 400px;
        border-radius: 20px;
    }

    .header {
        width: 100%;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }

    h3 {
        background-color: #808080;
        border-radius: 4px;
        width: 70%;
        padding: 10px;
        text-align: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;
    }

    .numbers {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .numbers input[type=text] {
        width: 70%;
        margin-top: 10px;
        padding: 10px;
        border: 1px solid #808080;
        border-radius: 4px;
        background-color: #f1f1f1;
        font-size: 1rem;
    }

    select, input[type=text]:focus {
        outline: none;
    }

    .op-submit {
        width: 100%;
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .op-submit select, input[type=submit] {
        padding: 10px;
        border: 1px solid #808080;
        border-radius: 4px;
        background-color: #f1f1f1;
        font-size: 1rem;
    }

    input[type=submit]:hover {
        background-color: #000000;
        color: #ffffff;
    }

    select {
        width: 50%;
        margin-right: 5%;
    }

    input[type=submit] {
        width: 20%;
        cursor: pointer;
    }

    .result {
        width: 100%;
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .result input[type=text] {
        width: 70%;
        padding: 10px;
        border: 1px solid #808080;
        border-radius: 4px;
        background-color: #f1f1f1;
        font-size: 1rem;
    }


</style>
<body>
    <?php 
        if(isset($_POST['count'])) {
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $operator=$_POST['operator'];
            switch($operator) {
                case 'Addition':
                    $result = $num1 + $num2;
                    break;
                case 'Subtraction':
                    $result = $num1 - $num2;
                    break;
                case 'Multiplication':
                    $result = $num1 * $num2;
                    break;
                case 'Division':
                    $result = $num1 / $num2;
                    break;
            }
        }
    ?>
    <main>
        <section>
            <div class="header">
                <h3>Simple PHP Calculator</h3>
            </div>
            <form action="index.php" method="post">
                <div class="numbers">
                    <input type="text" name="num1" autocomplete="off" placeholder="First Number">
                    <input type="text" name="num2" autocomplete="off" placeholder="Second Number">
                </div>
                <div class="op-submit">
                    <select name="operator" id="">
                        <option value="Addition">+</option>
                        <option value="Subtraction">-</option>
                        <option value="Multiplication">x</option>
                        <option value="Division">/</option>
                    </select>
                    <input type="submit" value="Equal" name="count">
                </div>
            </form>
            <?php 
                if(isset($_POST['count'])) {
            ?>
            <div class="result">
                <input type="text" value="<?php echo $result ?>" readonly placeholder="0">
            </div>
            <?php 
                }
            ?>
        </section>
    </main>
</body>
</html>