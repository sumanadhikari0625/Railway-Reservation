<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="payment1.css">
    <script src="payment1script.js"></script>
    <title>Payment</title>
</head>

<body>


  <div class="bg-image"></div>
    <div class="container">
        <section class="Page-Top" width=100%>
            <!--<marquee behavior="scroll" direction="left" scrollamount="10">-->
                <div class="Heading head">
                    <img id="logo" src="favicon.png" alt="logo"height="100" width="120">
                    <div class="Heading-Text">Railway Reservation System</div>
                </div>
            </marquee>
        </section>

 

<marquee behavior="scroll" class="HeadLine"scrollamount="10" direction="left">Due to COVID-19, only special trains are running. Stay Home, Stay Safe!</marquee>
        


        <!-- bank transfer info -->
<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-5">Payment Details</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> UPI Payment </a> </li>
                            
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form">
                                <div class="form-group"> <label for="username">
                                        <h6>UPI ID</h6>
                                    </label> <input type="email" name="username" placeholder="UPI ID" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Linked Phone Number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Phone number" maxlength="10" class="form-control " required>
                                        <div class="input-group-append">  </div>
                                    </div>
                                </div>
                                
                                <div class="card-footer"> <button type="button" onclick="alert('Your Payment is sucessful. Confirmed Ticket is sent to your email address.');"class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                                    <div class="card-footer"> <button type="button" onclick="window.open('apaymentoption.php');"class="subscribe btn btn-dark btn-block lg"> BACK </button>
                                     </form>
                        </div>
                    </div> <!-- End -->
                   
                    
                    
                    
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
</div>      



          <!-- FOOTER-->
        <section class="background">

        </section>
        <br><br><br><br><br>
        <footer class="footer"> 
            <div class="footer-text">
                 © 2020 Copyright: All Rights Reserved
            </div>
        </footer>
    </nav>
    </div>
</body>

</html>