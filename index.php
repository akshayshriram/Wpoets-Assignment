<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wpoets Assigment</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- Custom Style sheet  -->
    <link rel="stylesheet" href="styles/style.css">

    <style>
        /* .arrow-remove{
            color: white;
        } */
        
        .arrow-ok {
            color: #64b4c8!important;
        }
        
        .boxShadow {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
    </style>


</head>

<body>

    <?php
if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    if (isset($_POST['action'])) {
        $itemName = $_POST['itemName'];
        if($itemName == 'assets/DL-Learning-1.jpg'){
            $arrow1 = 'arrow-ok';
            $boxShadow1 = 'boxShadow';
        }
        if($itemName == 'assets/DL-Technology.jpg'){
            $arrow2 = 'arrow-ok';
            $boxShadow2 = 'boxShadow';
        }
        if($itemName == 'assets/DL-Communication.jpg'){
            $arrow3 = 'arrow-ok';
            $boxShadow3 = 'boxShadow';
        }
    }
}
else{
    $itemName = 'assets/DL-Learning-1.jpg';
    if($itemName == 'assets/DL-Learning-1.jpg'){
        $arrow1 = 'arrow-ok';
        $boxShadow1 = 'boxShadow';
    }

}
?>

        <main>
            <section id="Wpoets">
                <div class="container text-center">
                    <h1>DelphianLogic in Action</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo</p>
                    <div class="row">
                        <div class="col-12 col-lg-3 col-sm-3 d-flex justify-content-center align-items-center column1">
                            <ul>
                                <li onclick="item1()" name="assets/DL-Learning-1.jpg" id="item1">
                                    <div class="box d-flex flex-row <?php echo $boxShadow1 ?>">
                                        <div class="content ">
                                            <img src="assets/DL-learning.svg" alt="">
                                            <h4>Learning</h4>
                                        </div>
                                        <div class="buttonMobile">
                                            <?php
                                            if($itemName == 'assets/DL-Learning-1.jpg'){ ?>
                                                <img src="assets/minus-01.svg" alt="">                                            
                                            <?php
                                            }else{?>
                                            <img src="assets/plus-01.svg" alt="">                                            
                                            <?php                                                
                                            }                                            
                                            ?>
                                        </div>
                                    </div>

                                    <i class="fa-solid fa-2x fa-caret-left <?php echo $arrow1 ?>" id="arrow1"></i>
                                </li>
                                <?php
                                if($itemName == 'assets/DL-Learning-1.jpg'){
                                    ?>
                                    <i class="fa-solid fa-3x fa-caret-up <?php echo $arrow1 ?>" id="arrow1"></i>
                                    <div class="mobileContent" style="background: #64b4c8 url('assets/DL-Learning-1.jpg') left no-repeat; ">
                                        <h6>DIGITAL LEARNING INFRASTRUCTURE</h6>
                                        <h2>Usability enhancement and Training for Transaction Portal for Customers</h2>
                                    </div>

                                <?php }
                                ?>
                                <li onclick="item2()" name="assets/DL-Technology.jpg" id="item2">
                                    <div class="box <?php echo $boxShadow2 ?>">
                                        <div class="content">
                                            <img src="assets/DL-technology.svg" alt="">
                                            <h4>Technology</h4>
                                        </div>
                                        <div class="buttonMobile">
                                        <?php
                                            if($itemName == 'assets/DL-Technology.jpg'){ ?>
                                                <img src="assets/minus-01.svg" alt="">                                            
                                            <?php
                                            }else{?>
                                            <img src="assets/plus-01.svg" alt="">                                            
                                            <?php                                                
                                            }                                            
                                            ?>
                                        </div>
                                    </div>
                                    <i class="fa-solid fa-2x fa-caret-left <?php echo $arrow2 ?>" id="arrow2"></i>
                                </li>
                                <?php
                                if($itemName == 'assets/DL-Technology.jpg'){?>
                                    <i class="fa-solid fa-3x fa-caret-up <?php echo $arrow2 ?>" ></i>
                                    <div class="mobileContent" style="background: #64b4c8 url('assets/DL-Technology.jpg') left no-repeat; ">
                                    <h6>DIGITAL TECHNOLOGY INFRASTRUCTURE</h6>
                                        <h2>Enhancing New the Technology in coming year 2023.</h2>
                                    </div>

                                <?php }
                                ?>
                                <li onclick="item3()" name="assets/DL-Communication.jpg" id="item3">
                                    <div class="box <?php echo $boxShadow3 ?>">
                                        <div class="content ">
                                            <img src="assets/DL-communication.svg" id="item3" alt="">
                                            <h4>Communication</h4>
                                        </div>
                                        <div class="buttonMobile">
                                        <?php
                                            if($itemName == 'assets/DL-Communication.jpg'){ ?>
                                                <img src="assets/minus-01.svg" alt="">                                            
                                            <?php
                                            }else{?>
                                            <img src="assets/plus-01.svg" alt="">                                            
                                            <?php                                                
                                            }                                            
                                            ?>
                                        </div>
                                    </div>
                                    <i class="fa-solid fa-2x fa-caret-left <?php echo $arrow3 ?>" id="arrow3"></i>
                                </li>
                                <?php
                                if($itemName == 'assets/DL-Communication.jpg'){?>
                                    <i class="fa-solid fa-3x fa-caret-up <?php echo $arrow3 ?>" ></i>
                                    <div class="mobileContent" style="background: #64b4c8 url('assets/DL-Communication.jpg') left no-repeat; ">
                                    <h6>DIGITAL COMMUNICATION INFRASTRUCTURE</h6>
                                                <h2>Communication is changing drastically with high use of technolgy.</h2>
                                    </div>

                                <?php }
                                ?>
                            </ul>
                        </div>
                        <div class="col-12 col-4 col-sm-4 column2">
                            <?php
                            if($itemName == 'assets/DL-Learning-1.jpg'){
                                ?>
                                <h6>DIGITAL LEARNING INFRASTRUCTURE</h6>
                                <h2>Usability enhancement and Training for Transaction Portal for Customers</h2>
                                <?php
                            }
                            ?>
                                    <?php
                            if($itemName == 'assets/DL-Technology.jpg'){
                                ?>
                                        <h6>DIGITAL TECHNOLOGY INFRASTRUCTURE</h6>
                                        <h2>Enhancing New the Technology in coming year 2023.</h2>
                                        <?php
                            }
                            ?>
                                            <?php
                            if($itemName == 'assets/DL-Communication.jpg'){
                                ?>
                                                <h6>DIGITAL COMMUNICATION INFRASTRUCTURE</h6>
                                                <h2>Communication is changing drastically with high use of technolgy.</h2>
                                                <?php
                            }
                            ?>
                                                    <div class="learnMore d-flex">
                                                        <p>Learn More</p><i class="fa-solid fa-2x fa-arrow-right"></i>
                                                    </div>
                        </div>
                        <div class="col-12 col-4 col-sm-4 column3">
                            <img src="<?php echo $itemName ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </main>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script>
            // Call AJAX
            function ajax($itemName) {
                var itemName = $itemName;
                var action = "action";
                $.ajax({
                    url: './index.php',
                    method: 'POST',
                    data: {
                        action: action,
                        itemName: itemName
                    },
                    success: function(result) {
                        $('body').html(result);
                    }
                });
            }


            function item1() {
                $itemName1 = $("#item1").attr("name");
                // console.log('item name1', $itemName1);
                ajax($itemName1);

            }

            function item2() {
                $itemName2 = $("#item2").attr("name");
                // console.log('item name2', $itemName2);
                ajax($itemName2);
            }

            function item3() {
                $itemName3 = $("#item3").attr("name");
                // console.log('item name3', $itemName3);
                ajax($itemName3);
            }
        </script>
</body>

</html>