<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style type="text/css">
        body {
            margin-top: 15px;
        }

        .btn {
            border: 2px solid black;
            background-color: white;
            color: black;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            margin: 5px;
        }

        .df:hover {
            color: white;
            font-size: 16px;
            background-color: #9dc5c3;
            background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);

        }

        button {
            position: relative;
            display: inline-block;
            padding: 12px 36px;
            margin: 10px 0;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 18px;
            letter-spacing: 2px;
            border-radius: 8px;
            background-color: #9dc5c3;
            background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
        }

        img.user {
            height: 60%;
            width: 75%;
        }

        img.bank_transfer {
            height: 60%;
            width: 60%;
        }

        img.money_transfer {
            height: 65%;
            width: 65%;
        }
    </style>
</head>


<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn df" class="nav-link" href="index.php">Home</a>
                </li>

        </div>
    </nav>
    <br />
    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro py-1">
            <div>
                <div>
                    <center>
                        <h1>Welcome to Basic Banking System</h1>
                    </center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
                <img class="user" src="img/user.jpg" class="img-fluid">
                <br><br>
                <a href="transfermoney.php"><button>View all Users</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img class="bank_transfer" src="img/bank_transfer.png" class="img-fluid">
                <br><br>
                <a href="transfermoney.php"><button>Transfer Money</button></a>
            </div>
            <div class="col-md act">
                <br/>
                <img class="money_transfer" src="img/money_transfer.png" class="img-fluid">
                <br/><br/>
                <a href="transactionhistory.php"><button>View Transfer History</button></a>
            </div>
        </div>
    </div>


    <footer class="text-center mt-5 py-2">
        <p>&copy June 2022. Made by <b>Abhinav Verma</b> <br> For the Project of <b>The Sparks Foundation</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>