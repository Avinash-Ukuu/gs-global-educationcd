<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/styles/index.css') }}">
    <title>Gs Global Education</title>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M7GMB5MC');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7GMB5MC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main>
        <section class="banner">
            <header>
                <div class="container">
                    <div class="logo">
                        <span class="logoMain"><img src="{{ asset('assets/frontend/asset/images/logoNew.jpeg') }}"
                                alt=""></span>
                    </div>
                    <div class="menuIcon">
                        <span class="menuIconImg"><img src="{{ asset('assets/frontend/asset/images/menu.png') }}"
                                alt="menu"></span>
                    </div>
                    <div class="menu">
                        <nav>
                            <ul class="list_menu">
                                <a href="javascript:void(0)" class="sidebarCross">×</a>
                                <a href="javascript:void(0)">
                                    <li>Home</li>
                                </a>
                                <a href="#about-section" class="navSection">
                                    <li>About us</li>
                                </a>
                                <a href="#course-section" class="navSection">
                                    <li>Courses</li>
                                </a>
                                <!-- <li>Blogs</li> -->
                                <a href="#contact-us-section" class="navSection">
                                    <li>Contact us</li>
                                </a>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <div class="container">

                <div class="kitchen">
                    <div class="comandish">
                        <img src="{{ asset('assets/frontend/asset/images/bannerDish.png') }}" alt="">
                    </div>
                    <div class="premium">
                        <p class="comanparagraph bold">#Premium Cooking Class</p>
                        <h1>Best Hotel Management & Cooking Institute <br /> in India</h1>

                        <div class="comanbutton">
                            <button class="comanbutton white coustomOpenForm">
                                Enroll Now
                            </button>
                            <button class="comanbutton white coustomOpenForm">
                                Fill Our Form
                            </button>
                        </div>
                    </div>
                </div>
                <div class="dishing">
                    <div class="kitchendish">
                        <img src="{{ asset('assets/frontend/asset/images/plateOne.png') }}" alt="">
                        <p class="kitchendish bold">Learn Indian</p>
                        <p>Bolognese</p>
                    </div>
                    <div class="kitchendish">
                        <img src="{{ asset('assets/frontend/asset/images/plateTwo.png') }}" alt="">
                        <p class="kitchendish bold">Learn bakery</p>
                        <p>Bolognese</p>
                    </div>
                    <div class="kitchendish">
                        <img src="{{ asset('assets/frontend/asset/images/plateOne.png') }}" alt="">
                        <p class="kitchendish bold">Learn Continental</p>
                        <p>Bolognese</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="chef">
            <div class="container">
                <div class="cooking">
                    <div class="cookingdish one">
                        <p>#online</p>
                        <h3>Learn How to cook</h3>
                        <p>As a global institute, we embrace diversity and multiculturalism. Our students come from
                            diverse backgrounds and cultures, providing a rich learning environment that fosters
                            cross-cultural understanding and collaboration. We also offer international exchange
                            programs and internship opportunities to give students a global perspective on the
                            hospitality industry.</p>
                        <div class="comanbutton">
                            <button class="comanbutton brown coustomOpenForm">Get Join course</button>
                        </div>
                    </div>
                    <span class="cookingdish imgCustom">
                        <img src="{{ asset('assets/frontend/asset/images/cookingChefv1.jpeg') }}" alt="">
                    </span>
                </div>

                <div class="cooking">
                    <span class="cookingdish one">

                        <img src="{{ asset('assets/frontend/asset/images/cookingChefv2.jpeg') }}" alt="">
                    </span>

                    <div class="cookingdish imgCustom">
                        <p>#Culinary course</p>
                        <h3>Master The Art Of Cooking with Chef </h3>
                        <p>Our curriculum is designed in collaboration with industry experts to ensure that it is
                            up-to-date, relevant, and aligned with the latest trends and best practices in the
                            hospitality industry. We focus on providing a well-rounded education that covers all aspects
                            of hotel management, including operations, finance, marketing and guest services.</p>
                        <div class="comanbutton">
                            <button class="comanbutton brown coustomOpenForm">Get Join course</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </section>
        <section class="cooking_class">
            <div class="container">
                <div class="best_chef">
                    <p>#our cooking class</p>
                    <h3>
                        Be The Best Chef As
                        <h3>You Can Be </h3>
                    </h3>
                </div>
                <div class="indiabest_chef">
                    <div class="indiabest_chefing">
                        <span> <img src="{{ asset('assets/frontend/asset/images/cooking1.jpg') }}"
                                alt=""></span>
                        <p class=" comanparagraph bold">Basic Culinary</p>
                        <p>Understanding the structure and dynamics of the hospitality industry, including hotels,
                            restaurants, resorts, and other related businesses.</p>
                        <div class="comanbutton">
                            <button class="comanbutton brown coustomOpenForm">Get a Call</button>
                        </div>
                    </div>

                    <div class="indiabest_chefing">
                        <span><img src="{{ asset('assets/frontend/asset/images/cooking2.jpg') }}"
                                alt=""></span>
                        <p class=" comanparagraph bold">Advanced culinary</p>
                        <p>Gaining insights into the management of restaurant and catering services, including menu
                            planning, kitchen operations, and quality control.</p>
                        <div class="comanbutton">
                            <button class="comanbutton brown coustomOpenForm">Get a Call</button>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </section>
        <section class="bestculinary" id="about-section">
            <div class="container">
                <div class="BestCulinarycourse">
                    <div class="indiabest_culinary">
                        <p class=" comanparagraph bold">Welcome To GS EDUCATION</p>
                        <p class="parah">Global skill education in the field of hotel management. Hotel management
                            institutes are educational institutions that provide training and education in various
                            aspects of managing and operating hotels, resorts, and other hospitality-related
                            establishments. These institutes aim to equip students with the necessary skills and
                            knowledge to succeed in the dynamic and fast-paced hospitality industry.</p>
                        <p class="comanparagraph bold size">Ravi Behel</p>
                        <p class="comanparagraph brown">Executive Chef</p>
                    </div>
                    <div class="indiabest_img">
                        <img src="{{ asset('assets/frontend/asset/images/certificate-in-culinury-arts.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="Recentblog" id="course-section">
            <div class="container">
                <div class="comancooking">
                    <div class="recent_log">
                        <p>#Courses we Provide</p>
                        <h2>Courses </h2>
                    </div>

                    <div class="recent_log">
                        <p>Through our dedication to academic excellence, student success, and continuous improvement,
                            we aim to inspire and empower individuals to reach their full potential, contribute
                            meaningfully to their communities, and become lifelong learners and leaders in their
                            respective fields.</p>
                    </div>
                </div>
                <div class="comancooktraning">
                    <div class="comantraning">
                        <img src="{{ asset('assets/frontend/asset/images/cook importance.jpg') }}" alt="">
                        <div class="traning">
                            <p class="comanparagraph bold">Masters In Hotel Management</p>
                            <p>Our Master’s in Hotel Management from UGC approved University is a postgraduate academic
                                degree program that focuses on providing advanced knowledge and skills in the field of
                                hotel and hospitality management. </p>
                            <div class="comanbutton">
                                <button class="comanbutton brown coustomOpenForm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="comantraning">
                        <img src="{{ asset('assets/frontend/asset/images/Wonderful And Contentful.jpg') }}"
                            alt="">
                        <div class="traning">
                            <p class="comanparagraph bold">Degree In Hotel Management</p>
                            <p>Global Skill Education offers a three year degree in hotel management from UGC approved
                                University; it’s likely to provide a comprehensive education in various aspects of the
                                hospitality industry. </p>
                            <div class="comanbutton">
                                <button class="comanbutton brown coustomOpenForm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="comantraning">
                        <img src="{{ asset('assets/frontend/asset/images/Turning Students Into Chefs.jpg') }}"
                            alt="">
                        <div class="traning">
                            <p class="comanparagraph bold">Degree In Culinary Arts</p>
                            <p>A degree in Culinary Arts typically provides students with a comprehensive education in
                                various aspects of food preparation, culinary techniques, kitchen management, and the
                                culinary industry.</p>
                            <div class="comanbutton">
                                <button class="comanbutton brown coustomOpenForm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="comantraning">
                        <img src="{{ asset('assets/frontend/asset/images/cook importance.jpg') }}" alt="">
                        <div class="traning">
                            <p class="comanparagraph bold">Post Graduate Diploma In Hotel & Hospitality Management</p>
                            <p>A Postgraduate Diploma (P.G. Diploma) in Hotel Management is a specialized program
                                designed to provide advanced knowledge and skills in the field of hotel management.</p>
                            <div class="comanbutton">
                                <button class="comanbutton brown coustomOpenForm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="comantraning">
                        <img src="{{ asset('assets/frontend/asset/images/Wonderful And Contentful.jpg') }}"
                            alt="">
                        <div class="traning">
                            <p class="comanparagraph bold">Diploma In Hotel Management(Hotel & Hospitality)</p>
                            <p>“HM” could refer to various fields or industries, but commonly, it is associated with
                                “Hospitality Management.” A Diploma in Hospitality Management is a program that provides
                                education and training in various aspects of the hospitality industry, including Hotel
                                Management, Restaurant Management, Event Management, Tourism, and related fields.</p>
                            <div class="comanbutton">
                                <button class="comanbutton brown coustomOpenForm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="comantraning">
                        <img src="{{ asset('assets/frontend/asset/images/Turning Students Into Chefs.jpg') }}"
                            alt="">
                        <div class="traning">
                            <p class="comanparagraph bold">Diploma In Culinary Arts</p>
                            <p>A diploma in Culinary Arts from Global Skill Education is a program designed to provide
                                students with a comprehensive education in various aspects of food preparation, culinary
                                techniques, kitchen management, and the culinary industry.</p>
                            <div class="comanbutton">
                                <button class="comanbutton brown coustomOpenForm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="comantraning">
                        <img src="{{ asset('assets/frontend/asset/images/Wonderful And Contentful.jpg') }}"
                            alt="">
                        <div class="traning">
                            <p class="comanparagraph bold">Certificate In Hotel Management</p>
                            <p>A certificate in hotel management is a short-term 6 months program that provides students
                                with foundational knowledge and skills related to various aspects of hotel operations
                                and management. Here’s an overview of what you might expect from a certificate program
                                in hotel management</p>
                            <div class="comanbutton">
                                <button class="comanbutton brown coustomOpenForm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="comantraning">
                        <img src="{{ asset('assets/frontend/asset/images/Turning Students Into Chefs.jpg') }}"
                            alt="">
                        <div class="traning">
                            <p class="comanparagraph bold">Certificate In Culinary Arts</p>
                            <p>A certificate in Culinary Arts is a short-term 6 months program that provides students
                                with foundational knowledge and practical skills related to food preparation, cooking
                                techniques, kitchen operations, and culinary creativity. Here’s an overview of what you
                                might expect from a certificate program in Culinary Arts</p>
                            <div class="comanbutton">
                                <button class="comanbutton brown coustomOpenForm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
        <section class="contactdetail" id="contact-us-section">
            <div class="container">
                <div class="persondetail">
                    <div class="Contactus">
                        <p># contact us</p>
                        <h2 class="touch">Get in touch</h2>
                        <p class="contactParah">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut elit
                            tellus, luctus nec
                            ullamcorper mattis, pulvinar dapibus leo</p>
                        {{-- <input type="text" placeholder="Your Name">
                        <input type="text" placeholder="Your Email">
                        <input type="text" placeholder="title">
                        <textarea>Your Massage*</textarea>
                        <div class="comanbutton">
                            <button class="comanbutton brown">Save Now</button>
                        </div> --}}
                        <form class="enquiry-form" autocomplete="off">
                            @csrf
                            <input type="hidden" name="honeyspot">
                            <label for="name">Your Name</label> &nbsp;<span style="color: red">*</span>
                            <div class="inputContainer">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>

                            <label for="email">Email</label>&nbsp;<span style="color: red">*</span>
                            <div class="inputContainer">
                                <input type="email" name="email" placeholder="Email">
                            </div>

                            <label for="mobile">Number</label>&nbsp;<span style="color: red">*</span>
                            <div class="inputContainer">
                                <input type="tel" name="number" id="phone"
                                    placeholder="Your Mobile Number">
                            </div>

                            <label for="message">Message</label>&nbsp;<span style="color: red">*</span>
                            <div class="inputContainer">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="concentMain">
                                <input class="checkbox" type="checkbox" name="contactConsent" id="checkConsent">
                                <label class="checkparah" for="checkConsent">By submitting this enquiry I agree to be
                                    contacted in the
                                    most suitable manner (by phone or email) in order to respond to my
                                    enquiry.</label>
                            </div>
                            <p id="contact-consent"
                                style="transform: translateX(20px);
                            margin-bottom:0;margin-top:20px;color:red;display:none;">
                                We
                                cannot submit your enquiry without contact consent</p>
                            <input class="submit_button" type="submit" value="Submit">
                        </form>
                    </div>
                    <div>
                        <div class="personidea">
                            <div class="clockList">
                                <img class="clock"
                                    src="{{ asset('assets/frontend/asset/images/icons8-clock.gif') }}"
                                    alt="">
                                <p class="comanparagraph bold">Opening Hours</p>
                                <p>Saturday: 10.00 AM - 06.00 PM</p>
                                <p>Sunday: 10.00 AM - 04.00 PM</p>
                            </div>
                            <div class="clockList">
                                <img src="{{ asset('assets/frontend/asset/images/address.png') }}" alt="">
                                <p class="comanparagraph bold">Address</p>
                                <p>SG Block, D-216/2, near J&K Govt School, Pocket J & K, Dilshad Garden, Delhi, 110095
                                </p>
                            </div>
                            <div class="clockList">
                                <img src="{{ asset('assets/frontend/asset/images/icons8-contacts-50.png') }}"
                                    alt="">
                                <p class="comanparagraph bold">Our Contact</p>
                                <p>Telephone:+91 9319126476</p>
                                <p>Email:info@gseducation.co.in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <div class="container">
                <div class="comanfooter">
                    <div class="comanservice">
                        <span class="logoMain"><img src="{{ asset('assets/frontend/asset/images/logobg.png') }}"
                                alt=""></span>
                        <P>Global skill education is one of the leading and foremost hotel management institute in Delhi
                            India</P>
                    </div>
                    <div class="comanservice">
                        <p>Website Home</p>
                        <p>Website About us</p>
                        <p>Website Examination</p>
                        <P>Website Placements</P>
                    </div>
                    <div class="comanservice">
                        <p> Master in HM</p>
                        <p>Degree in Culinery Arts</p>
                        <p>PG Diploma in HM</p>
                        <p>Diploma in Culinery Arts</p>
                        <p>Study online</p>
                    </div>
                    <div class="comanservice">
                        <p>Get In Touch</p>
                        <p>SG Block, D-216/2, near J&K Govt School, Pocket J & K, Dilshad Garden, Delhi, 110095</p>
                        <p>+91 9319126476</p>
                        <p>Email:info@gseducation.co.in</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="popup" style="display: none">
            <div class="container">
                <div class="popupmain">

                    {{-- <div class="form">
                        <a href="javascript:void(0)" class="close-btn">×</a>
                        <form class="enquiry-form" autocomplete="off">
                            @csrf
                            <input type="hidden" name="honeyspot">
                            <label for="name">Your Name</label>&nbsp;<span style="color: red">*</span>
                            <input type="text" name="name" placeholder="Your Name">

                            <label for="email">Email</label>&nbsp;<span style="color: red">*</span>
                            <input type="email" name="email" placeholder="Email">

                            <label for="mobile">Number</label>&nbsp;<span style="color: red">*</span>
                            <input type="tel" name="number" id="phonePopup" placeholder="Your Mobile Number">

                            <label for="message">Message</label>&nbsp;<span style="color: red">*</span>
                            <textarea name="message" placeholder="Message"></textarea>

                            <div class="concentMain">
                                <input type="checkbox" name="contactConsent" id="checkConsentPopup">
                                <label for="checkConsentPopup">By submitting this enquiry I agree to be contacted in the
                                    most suitable manner (by phone or email) in order to respond to my
                                    enquiry.</label>
                            </div>
                            <p id="contact-consent"
                                style="transform: translateX(20px);
                            margin-bottom:0;margin-top:20px;color:red;display:none;">
                                We
                                cannot submit your enquiry without contact consent</p>
                            <input class="submit_button" type="submit" value="Submit">
                        </form>
                    </div> --}}
                    <div class="form">
                        <form class="enquiry-form" autocomplete="off">
                            <a href="javascript:void(0)" class="close-btn">×</a>
                            @csrf
                            <input type="hidden" name="honeyspot">
                            <label for="name">Your Name</label> &nbsp;<span style="color: red">*</span>
                            <div class="inputContainer">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>

                            <label for="email">Email</label>&nbsp;<span style="color: red">*</span>
                            <div class="inputContainer">
                                <input type="email" name="email" placeholder="Email">
                            </div>

                            <label for="mobile">Number</label>&nbsp;<span style="color: red">*</span>
                            <div class="inputContainer">
                                <input type="tel" name="number" id="phonePopup"
                                    placeholder="Your Mobile Number">
                            </div>

                            <label for="message">Message</label>&nbsp;<span style="color: red">*</span>
                            <div class="inputContainer">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="concentMain">
                                <input class="checkbox" type="checkbox" name="contactConsent"
                                    id="checkConsentPopup">
                                <label class="checkparah" for="checkConsentPopup">By submitting this enquiry I agree
                                    to be contacted in the
                                    most suitable manner (by phone or email) in order to respond to my
                                    enquiry.</label>
                            </div>
                            <p id="contact-consent"
                                style="transform: translateX(20px);
                        margin-bottom:0;margin-top:20px;color:red;display:none;">
                                We
                                cannot submit your enquiry without contact consent</p>
                            <input class="submit_button" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="loader">
            <h1>Please Wait</h1>
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id=area>
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>
<script>
    $(document).ready(function() {

        $('.navSection').on('click', function(event) {
            event.preventDefault();
            var targetSectionID = $(this).attr('href');
            var targetSection = $(targetSectionID)[0];
            targetSection.scrollIntoView({
                behavior: 'smooth'
            });
        });

        $(".menuIconImg").on("click", function() {
            $(".menu").css("right", "0");
            $(".sidebarCross").css("display", "block");
            $(this).addClass('active');
        });

        $(".sidebarCross").on("click", function() {
            $(".menu").css("right", "-500px");
            $(this).css("display", "none");
            $(".menuIconImg").removeClass('active');
        });

        $(".coustomOpenForm").on('click', function() {
            $(".popup").css('display', 'flex');
        });
        $(".close-btn").on('click', function() {
            $(".popup").css('display', 'none');
        });

        $("#phonePopup").on('input', function() {
            var inputValue = $("#phonePopup").val();
            var filteredInput = inputValue.replace(/[^0-9]/g, '');
            if (filteredInput.length > 10) {
                filteredInput = filteredInput.substring(0, 10);
            }
            $("#phonePopup").val(filteredInput);
        });
        $("#phone").on('input', function() {
            var inputValue = $("#phone").val();
            var filteredInput = inputValue.replace(/[^0-9]/g, '');
            if (filteredInput.length > 10) {
                filteredInput = filteredInput.substring(0, 10);
            }
            $("#phone").val(filteredInput);
        });
    });

    $('.enquiry-form').on('submit', function() {


        event.preventDefault();
        var isValid = true;
        var $form = $(this);


        $form.find('#contact-consent').hide();

        var $name = $form.find('input[name="name"]');
        var $email = $form.find('input[name="email"]');
        var $number = $form.find('input[name="number"]');
        var $message = $form.find('textarea[name="message"]');

        // Clear previous error messages
        $form.find('.error-message').remove();

        // Validate name
        if ($.trim($name.val()) === '') {
            isValid = false;
            $name.attr("placeholder", "Name Field is Required");
            // Add a class to your name input when validation fails
            $name.addClass("error-placeholder");
        }

        // Validate email
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test($email.val())) {
            isValid = false;
            $email.attr("placeholder", "Email Field is Required");
            // Add a class to your email input when validation fails
            $email.addClass("error-placeholder");
        }

        // Validate phone number (exactly 10 digits)
        var phonePattern = /^\d{10}$/;
        if (!phonePattern.test($number.val())) {
            isValid = false;
            $number.attr("placeholder", "Number Field is Required");
            $number.val(null);
            // Add a class to your number input when validation fails
            $number.addClass("error-placeholder");
        }

        // Validate message
        if ($.trim($message.val()) === '') {
            isValid = false;
            $message.attr("placeholder", "Message Field is Required");
            // Add a class to your message input when validation fails
            $message.addClass("error-placeholder");
        }

        if (!isValid) {
            // If validation fails, stop form submission and alert the user
            alert('Please enter correct data in the form.');
            return;
        }
        if ($form.find('input[name="contactConsent"]').is(":checked") != true) {
            $form.find('#contact-consent').show();
            return false;
        } else {
            $('.submit_button').prop('disabled', true);

            var popupForm = $('.popup').css('display');

            if (popupForm !== 'none') {
                $('.popup').css('display', 'none');
            }
            $('#loader').css('display', 'block');
            var formData = $form.serialize();
            var route = "{{ route('enquirySubmit') }}";
            $.ajax({
                url: route,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response == 'true') {
                        $('#loader').css('display', 'none');

                        window.open("{{ route('thankyou') }}", '_blank');
                    }
                },
                error: function(err) {
                    console.log(err);
                    $('#loader').css('display', 'none');
                }
            });
        }
    });
</script>

</html>
