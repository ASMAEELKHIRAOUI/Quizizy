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
    <title>Quizizy</title>
</head>
<body class="quizbody">
    <div class="row-lg h-100 d-flex align-items-center p-5 flex-wrap">
        <div class="steps col-lg-1">
            <div class="d-flex mb-5">
                <div class="progress" id="progress"></div>
                <div class="step active">
                    <i class="bi bi-info"></i>
                </div>
                <!-- <div class="">
                    Informations
                </div> -->
            </div>
            <div class="d-flex my-5">
                <div class="step">
                    <i class="bi bi-question-lg"></i>
                </div>
                <!-- <div class="">
                    Questionnaire
                </div> -->
            </div>
            <div class="d-flex mt-5">
                <div class="step">
                    <i class="bi bi-boxes"></i>
                </div>
                <!-- <div class="">
                    Result
                </div> -->
            </div>
        </div>
        <div class="col-lg-10">
            <div class="qst d-flex justify-content-center">
                Why is AWS more economical than traditional data centers for applications with varying compute
                workloads?
            </div>
            <div class="choices row-lg h-100 d-flex align-items-center p-5 flex-wrap">
                <div class="col-lg-5">
                    <div class="choice1">
                        Amazon EC1 costs are billed on a monthly basis 
                    </div>
                    <div class="choice2">
                        Amazon EC2 costs are billed on a monthly basis 
                    </div>
                </div>
                <div class="number col-lg-2">
                    1
                </div>
                <div class="col-lg-5">
                    <div class="choice3">
                        Amazon EC3 costs are billed on a monthly basis 
                    </div>
                    <div class="choice4">
                        Amazon EC4 costs are billed on a monthly basis 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1 text-light">
            <button class="btn" id="prev" disabled>Prev</button><button class="btn" id="next">Next</button>
        </div>
    </div>
    <script src="../assets/scripts/stepper.js"></script>
</body>
</html>