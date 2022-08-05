<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waye</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/work.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
         
        .wrapper{
            display: flex;
            justify-content:unset;
        }
        .close-btn{
            display: none;
        }
        .nav-admin li{
            line-height: 30px;
            padding-left: 20px;
            border-radius: 4px;
        }
        .change-p{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: mymove 0.5s linear;
            animation-fill-mode: forwards;
            display: none;

        }
        @keyframes mymove {
            0% {top: 100px;}
            100% {top: 250px;}
        }
        #edit:checked ~ .change-p{
            display: block;
        }
        #edit:checked ~ .blur{
            display: block;
        }
        .close-p{
            padding: 0;
            margin: 0;
        }
        .blur{
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #333;
            display: none;
            opacity: 0.4;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="header-content">
                <div class="side-head">
                    <span class="text-white text-uppercase">admin panel</span> &nbsp;
                    <i class="fas fa-bars menu-btn text-white"></i>
                    <i class="fas fa-arrow-right text-white close-btn"></i>
                </div>
                <div class="header-nav">
                    <ul>
                        <li><a class="text-white" href="#"><i class="fas fa-shopping-basket"></i> Order</a></li>
                        <li><a class="text-white" href="#"><i class="fas fa-truck"></i> Delivery</a></li>
                        <li><a class="text-white" href="#"><i class="fas fa-users"></i> User</a></li>
                        <li><a class="text-white" href="#"> <i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>