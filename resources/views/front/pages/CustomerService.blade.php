
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css1/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css1/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css1/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css1/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="css2/owl.carousel.min.css">
    <link rel="stylesoeet" href="css2/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>FAQS</title>



    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }

        .wrapper {
            max-width: 75%;
            margin: auto;
        }

        .wrapper>p,
        .wrapper>h1 {
            margin: 1.5rem 0;
            text-align: center;
        }

        .wrapper>h1 {
            letter-spacing: 3px;
        }

        .accordion {
            background-color: white;
            color: rgba(0, 0, 0, 0.8);
            cursor: pointer;
            font-size: 1.2rem;
            width: 100%;
            padding: 2rem 2.5rem;
            border: none;
            outline: none;
            transition: 0.4s;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
        }

        .accordion i {
            font-size: 1.6rem;
        }

        .active,
        .accordion:hover {
            background-color: #f1f7f5;
        }

        .pannel {
            padding: 0 2rem 2.5rem 2rem;
            background-color: white;
            overflow: hidden;
            background-color: #f1f7f5;
            display: none;
        }

        .pannel p {
            color: rgba(0, 0, 0, 0.7);
            font-size: 1.2rem;
            line-height: 1.4;
        }

        .faq {
            border: 1px solid rgba(0, 0, 0, 0.2);
            margin: 10px 0;
        }

        .faq.active {
            border: none;
        }

        .logo{
          height: 135px;
          width: 200px;
         margin: auto;
         margin-bottom:0px; 
        }
    </style>


</head>


     <div class="logo">
       
        <a href="/">
           <img height="150px" width="200px" src="{{ asset('front/images/main-logo/main-logo.png')}}">
           </a>
      
     </div>
 

    <div class="wrapper">

        <h1>Frequently Asked Questions</h1>

        <div class="faq">
            <button class="accordion">
                Q: How can I place an order on your website?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    To place an order, simply browse our website, select the desired items, and add them to your
                    shopping cart. Follow the checkout process, providing the necessary information, and complete the
                    payment.
                </p>
            </div>
        </div>

        <div class="faq">
            <button class="accordion">
                Q: What payment methods do you accept?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    We accept Two payment methods, including online payment and cash on delivery. You can find the
                    options during the checkout process.
                </p>
            </div>
        </div>

        <div class="faq">
            <button class="accordion">
                Q: How can I track my order?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    Once your order is shipped, you will receive a confirmation email with a tracking number and a link
                    to track your package. You can also log in to your account to view the order status and tracking
                    information.
                </p>
            </div>
        </div>

        <div class="faq">
            <button class="accordion">
                Q: Can I modify or cancel my order after placing it?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    We process orders quickly to ensure prompt delivery. If you need to modify or cancel an order,
                    please contact our customer service as soon as possible. We will do our best to assist you.
                </p>
            </div>
        </div>

        <div class="faq">
            <button class="accordion">
                Q: What is your return policy?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    Our return policy allows you to return items on delivery time. Please visit our terms and conditions
                    page for detailed instructions on how to initiate a return.
                </p>
            </div>
        </div>

        <div class="faq">
            <button class="accordion">
                Q: Are my personal and payment details secure on your website?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    Yes, we take the security of your information seriously. Our website uses [encryption
                    technology/method] to secure your personal and payment details. For more details, refer to our
                    Privacy Policy.
                </p>
            </div>
        </div>

        <div class="faq">
            <button class="accordion">
                Q: How do I contact customer support?
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
                <p>
                    You can contact our customer support team by emailing derssify.online@example.com. We aim to respond
                    within 2 business days.
            </div>
        </div>
    </div>


    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                this.parentElement.classList.toggle("active");

                var pannel = this.nextElementSibling;

                if (pannel.style.display === "block") {
                    pannel.style.display = "none";
                } else {
                    pannel.style.display = "block";
                }
            });
        }
    </script>

