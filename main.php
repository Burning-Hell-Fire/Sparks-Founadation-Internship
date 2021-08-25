<!DOCTYPE HTML>
<html>
    <head lang="en">
        <title>
                Hero Bank
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device=width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
            <nav id="navbar">
                <div class="header">
                    <div class="inner_header">
                        <div class="logo">
                            <a href="main.php" >Hero Bank</a>
                        </div>
                        <div class="header_link">
                            <a href="#">Sign Up</a>
                        </div>
                        <div class="header_link">
                            <a href="#">Login</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="banner_image">
                    <div class="inner_banner_image">
                        <div class="banner_content">
                            <p style="font-size: 50px">Our Services<p><br>
                            <a id="button" href="customer.php">Our Customers</p></a><br><br>
                            <a id="button" href="transaction.php" >Transaction</a><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container">
                <div class="items">
                    <a href="customer.php" > 
                        <img src="images/customer.jpg" alt="" class="thumbnail"> 
                        <div class="caption"> 
                            <h2>Our Customers</h2> 
                            <p>Check out all our customers.</p> 
                        </div> 
                    </a> 
                </div>
                <div class="items">
                    <a href="transaction.php" > 
                        <img src="images/transaction.jpg" alt="" class="thumbnail"> 
                        <div class="caption"> 
                            <h2>Transaction</h2> 
                            <p>Check out all our transactions we have done.</p> 
                        </div> 
                    </a> 
                </div>
                <div class="items">
                    <a href="#" > 
                        <img src="images/LOAN.jpg" alt="" class="thumbnail"> 
                        <div class="caption"> 
                            <h2>Loan</h2> 
                            <p>Check out all our interest rate.</p> 
                        </div> 
                    </a> 
                </div>
            </div>
            <script>
                window.onscroll = function() {scrollFunction()};
                
                function scrollFunction() {
                  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("navbar").style.top = "0";
                  } else {
                    document.getElementById("navbar").style.top = "-100px";
                  }
                }
            </script>
            <footer>
                <div class="container">
                    <p style="text-align: center;">Copyright © Hero Bank. All Rights Reserved | Contact Us: +91 90000 00000</p>
                </div>
            </footer>
    </body>
</html>
