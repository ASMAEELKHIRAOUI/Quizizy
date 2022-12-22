<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../assets/sass/style.css"/>
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css"/>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <title>Quizizy</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" alt="Quizizy" style="height: 70px; width: 90px;"></a>
            <div class="steps d-flex">
                <div class="ms-5">
                    <div class="progress" id="progress"></div>
                    <div class="step active">
                        <i class="bi bi-info"></i>
                    </div>
                </div>
                <div class="ms-5">
                    <div class="step">
                        <i class="bi bi-question-lg"></i>
                    </div>
                </div>
                <div class="ms-5">
                    <div class="step">
                        <i class="bi bi-boxes"></i>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end" id="navbarSupportedContent"><a class="btn" href="#">High Score</a></div>
        </div>
    </nav>
<div id="home" class="home">
    <div class="position-absolute top-50 start-50 translate-middle">
        <h2 class="welcome">Welcome to Quizizy</h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse placerat in quam sit amet vulputate. Donec non lectus consequat, vulputate justo et, pellentesque dui. Proin odio nulla, lobortis tempus lacinia non, blandit in neque. Suspendisse a efficitur risus, finibus iaculis neque. Pellentesque iaculis felis quis sapien malesuada maximus. Pellentesque ornare nibh fermentum auctor suscipit.
        </p>
        <div class="d-flex justify-content-end">
            <button class="btn start" id="start" href="index.php">Start the Quiz <i class="bi bi-arrow-bar-right"></i></button>
        </div>
    </div>
</div>
<div id="quiz" >
    <div class=" quiz row-lg h-100 d-flex align-items-center p-5 flex-wrap">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="qst d-flex justify-content-center">
                Why is AWS more economical than traditional data centers for applications with varying compute
                workloads?
            </div>
            <div class="choices row-lg h-100 d-flex align-items-center p-5 flex-wrap">
                <div class="col-lg-5">
                    <button class="choice1">
                        Amazon EC1 costs are billed on a monthly basis 
                    </button>
                    <button class="choice2">
                        Amazon EC2 costs are billed on a monthly basis 
                    </button>
                </div>
                <div class="number col-lg-2">
                    1
                </div>
                <div class="col-lg-5">
                    <button class="choice3">
                        Amazon EC3 costs are billed on a monthly basis 
                    </button>
                    <button class="choice4">
                        Amazon EC4 costs are billed on a monthly basis 
                    </button>
                </div>
            </div>
            <div class="sumbit d-flex justify-content-end  "><button class="btn p-3">Submit</button></div>
            
        </div>
    </div>
</div>
<script src="../assets/scripts/stepper.js"></script>
<script>
    document.querySelector('#quiz').style.display = 'none';

    document.querySelector('#start').addEventListener('click', function() {
        document.querySelector('#quiz').style.display = 'block';
        document.querySelector('#home').style.display = 'none';
    });

</script>
</body>
</html>