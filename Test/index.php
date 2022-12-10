<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/form_style.css" />
    <title>Quiz</title>
</head>

<body>
    <div class="container">
        <div class="questionForm">

            <div class="col-lg-7 wrraper">
                <div class="five-star-line"></div>
                <form id="q-form" method="post" action="../test-back/back-end/saveData.php">

                    <div class="inputs row">
                        <div class="col-lg-12">
                            <div class="form-group ">
                                <i class="fa-solid fa-user icon"></i>
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group ">
                                <i class="fa-solid fa-user icon"></i>
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group ">
                                <i class="fa-solid fa-user icon"></i>
                                <input type="text" name="phoneNumber" class="form-control" placeholder="phoneNumber" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group ">
                                <i class="fa-solid fa-user icon"></i>
                                <input type="text" name="university" class="form-control" placeholder="University" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group ">
                                <i class="fa-solid fa-user icon"></i>
                                <input type="text" name="college" class="form-control" placeholder="Faculty" required>
                            </div>
                        </div>

                        
                   </div>
                </form>
            </div>
        </div>
    </div>



    <script type="module" src="./scripts/script.js"></script>
</body>

</html>