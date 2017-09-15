<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="Images/Redy.png">
    <title>REDY</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/public/../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{URL::to('/')}}/public/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{URL::to('/')}}/public/css/colors/blue.css" id="theme" rel="stylesheet">

<style type="text/css">

    a:hover{
        text-decoration: none;
        color: #00FA9A;
    }

      .register:hover {
                          text-decoration: none;
                          color: white;
                      }


        .language{
                width: 80px;
                height: 30px;
                text-align: center;
                font-family: VAG Rounded;
                color: #1abc9c;
                }

    .navbar{
        background-color: #1abc9c ;
    }

      .register{
                width: 150px;
                height: 45px;
                text-align: center;
                font-family: VAG Rounded;
                background-color: #1abc9c;
                color: #ffffff;
                border: 1pt solid #1abc9c;;
                border-radius: 5px;
                letter-spacing: 2px;
                font-size: 24px;
                font-weight: 500;
              }

      #benifits{
                color: #1abc9c;
                font-family: VAG Rounded;
                font-size: 36px;
              }

      .facts{
                color: #1abc9c;
                font-family: VAG Rounded;
                font-size: 24px;
                font-weight: 500;
              }

/*------ FOR DESKTOP --------*/

      @media only screen and (min-width: 768px) {
        #video{
                width: 45%;
            }

        #solgen{
                color: #FFFFFF;
                font-family: VAG Rounded;
                font-size: 60px;
                font-weight: 600;
                text-align: center;
            }

        #title-row{
        }
      }


/*----------FOR MOBILE-----------*/

      @media only screen and (max-width: 768px) {
            #solgen{
            color: #FFFFFF;
            font-family: VAG Rounded;
            font-size: 24px;
            font-weight: 500;
            text-align: center;
        }

         .register{
                width: 120px;
                height: 45px;
                text-align: center;
                font-family: VAG Rounded;
                background-color: #1abc9c;
                color: #ffffff;
                border: 1pt solid #1abc9c;;
                border-radius: 5px;
                letter-spacing: 2px;
                font-size: 24px;
                font-weight: 500;
              }
      }
    </style>

</head>

<body class="fix-header fix-sidebar card-no-border">

<div class="container-fluid">
    
            
<div class="row" id="top_header" style="padding-top: 10px; padding-bottom: 10px;">
     <div class="col-lg-2 col-xs-3"></div>
       <div class="col-lg-8 col-xs-6" style="text-align: center; display: inline-block; " >
         <span style="font-family: Cooper Black; font-size: 54px; color: #1abc9c; text-align: center;">
          Redy &nbsp;<img src="Images/Redy.png" alt="Logo" style="width: 50px; height: 50px;">
         </span>
       </div>
       <div class="col-lg-2 col-xs-3" style="text-align: center; padding-top: 10px; display: inline-block; float: right;">
         <button class="language">Sinhala</button>&nbsp;&nbsp;&nbsp;
         <button class="language">Tamil</button>
       </div>
   </div>

   <!-- Title Row -->

   <div class="row" id="title-row">
       <div class="col-lg-12 col-xs-12" style="text-align: center; margin-bottom: 5px; background-color: #1abc9c;">
         <p id="solgen">Let Your Customer Know...</p>
       </div>
   </div>

   <br>

   <!-- Register Row -->

   <div class="row">
        <div class="col-lg-12 col-xs-12" style="text-align: center;">

          @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                    <a href="{{ url('/home') }}">Home</a>
                        
                    @else
                        <a href="{{ route('register') }}"><button class="register" style="display: inline;">Register</button></a>&nbsp;&nbsp;&nbsp;
                        <a href="{{ route('login') }}"><button class="register" style="display: inline;">Login</button></a>
                    @endauth
                </div>
            @endif
<!--
            <a href="{{ route('register') }}"><button class="register" style="display: inline;">Register</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{ route('login') }}"><button class="register" style="display: inline;">Login</button></a>
            -->
        </div>
   </div>

   <br><br>

   <!-- Content Row -->

   <div class="row">
        <div class="col-lg-1"></div>
       <div class="col-lg-4 col-xs-12" id="video" style="height: 300px;  text-align: center; border: 2pt solid #1abc9c;">
        <iframe frameborder="0" height="100%" width="100%" 
          src="https://youtu.be/l-hM9KG4VSE?list=PLgcJB6yCX3_BPf4mPHxzBBCmeBKDOsnPb">
        </iframe>
       </div>
       <div class="col-lg-1"></div>
       <div class="col-lg-4">
         <span id="benifits">Benifits</span><br>
         <span style="color: #1abc9c;">___________________________</span><br>
         <span style="padding-left: 50px;">
           <li class="facts">One Click Registration</li>
           <li class="facts">Easy to use interfaces</li>
           <li class="facts">Add Customers instantly</li>
           <li class="facts">Organize Sales</li>
           <li class="facts">Notify Customers via SMS</li>
           <li class="facts">Get Closer to Customers</li>
         </span>
       </div>
   </div>

   </div>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <script src="{{URL::to('/')}}/public/../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{URL::to('/')}}/public/../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="{{URL::to('/')}}/public/../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{URL::to('/')}}/public/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="{{URL::to('/')}}/public/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{URL::to('/')}}/public/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="{{URL::to('/')}}/public/../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="{{URL::to('/')}}/public/js/custom.min.js"></script>
</body>

</html>
