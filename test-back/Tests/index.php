<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./form_style.css" />
    <title>Quiz</title>
</head>

<body>
    <div class="container">
        <div class="questionForm">
            
            <div class="col-lg-7 wrraper">
                
                <form id="q-form" method="post" action="../back-end/saveData.php">
                    <input name="name" placeholder="name"/>
                    <br>
                    <input name="email" placeholder='email'/><br>
                    <input name="phoneNumber" placeholder='phoneNumber'/><br>
                    <input name="college" placeholder='college'/> <br>
                    <input name="university" placeholder='university' /> <br>
                    <input name="workshopID" placeholder='workshopID'/>
                </form>
            </div>
        </div>
    </div>



    <script type="module" src="./script.js"> </script>
</body>

</html>