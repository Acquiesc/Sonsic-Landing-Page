<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sonsic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,400i,700,700i&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

        <!--CSS-->
        <link rel="stylesheet" href="/css/styles.css">

        <style>
            body {
                font-family: 'Oswald', 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-light">
        @include('inc.notifications')

        <nav class="navbar navbar-expand-lg bg-dark fixed-top px-3 w-100" style="background-color: rgba(27, 27, 27, .3)">
            <div class="container-fluid">
                <a class="navbar-brand" href="/landing"><img src="/imgs/Sonsic White Logo (2).svg" width="150" alt=""></a>
                
                <ul class=" navbar-nav me-3 mb-2 mb-lg-0 w-auto text-start">
                    <a href="#signup" class="btn btn-primary w-auto text-nowrap d-none d-sm-flex">Become Unforgettable</a>
                </ul>
            </div>
        </nav>

        <div class="container-fluid d-flex flex-column justify-content-center bg-dark text-white">
            <section class="row">
                <div class="col-12 h-50 text-center mx-auto" style="max-width: 90%; margin-top: 15vh;">
                    <img src="/imgs/Sonsic White Logo (2).svg" class="img-fluid" style="" alt="">
                    <h1 class="fw-bold display-1 mt-3 mx-auto mb-5" style="">Connecting Brands to Customers like Never Before</h1>
                    <a href="#signup" class="btn btn-primary">Become Unforgettable</a>
                </div>
                <div class="col-12 d-flex flex-column" style="max-height: 800px;">
                    <img src="/imgs/Hero Section Img (5).svg" class="img-fluid mx-auto mt-5" style="width: 100%; max-width: 1000px; box-shadow: 0 5px 30px var(--red);" alt="">
                </div>
            </section>
        </div>

        <div class="container-fluid mx-0 mb-5 bg-dark" style="padding-top: 15vh; padding-bottom: 15vh;">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 text-center mx-auto">
                    <h3 class="fw-bold text-white">We turn ordinary objects like business cards, restaurant menus, and product packaging
                        into unique, interactive augmented reality displays which creates a memorable experience to increase user retention and brand recognition
                    </h3>
                </div>
            </div>
        </div>

        <div class="container-fluid mb-5">
            <div class="row mb-5" style="width: 100vw; height: 50vh;">
                <div class="col-12 col-md-6 mx-auto p-0 text-end" style="max-width: 600px; height: 50vh;">
                    <h3 class="display-3 fw-bold mb-3 header">Make your first impression unique & memorable</h3>
                    <p class="d-none d-md-block subheader fs-5">Stand out from the competition by leaving a lasting and 
                        unforgettable impact on potential customers. With our interactive 
                        augmented reality displays, your business cards, restaurant menus, 
                        and other physical materials become unique experiences 
                        that captivate and engage. Elevate your brand recognition with 
                        a first impression that stands out in customers' minds.
                    </p>
                </div>
                <div class="col-12 col-md-6 p-0">

                </div>
            </div>

            <div class="row mb-5" style="width: 100vw;">
                <div class="col-12 col-md-6 p-0">

                </div>
                <div class="col-12 col-md-6 mx-auto p-0" style="max-width: 600px; height: 50vh;">
                    <h3 class="display-3 fw-bold header">Transform almost any physical medium into an interactive display</h3>
                    <p class="d-none d-md-block subheader fs-5">
                        Take traditional marketing mediums to a whole new level with our interactive AR technology. 
                        We seamlessly integrate augmented reality into your menus, product packaging, and more, 
                        turning them into captivating and interactive displays. Engage your customers in innovative 
                        ways that are sure to leave a lasting impression.
                    </p>
                </div>
            </div>

            <div class="row mb-5" style="width: 100vw;">
                <div class="col-12 col-md-6 mx-auto p-0 text-end" style="max-width: 600px; height: 50vh;">
                    <h3 class="display-3 fw-bold header">Update your display anytime, anywhere</h3>
                    <p class="d-none d-md-block subheader fs-5">
                        Stay ahead of the curve by updating your augmented reality displays on-the-go. 
                        Our user-friendly business dashboard empowers you to make real-time changes to 
                        your marketing materials without the need for reprints or redesigns. Keep your 
                        content fresh and relevant, ensuring your audience always sees the latest and 
                        most compelling offers.
                    </p>
                </div>
                <div class="col-12 col-md-6 p-0">

                </div>
            </div>

            <div class="row mb-5" style="width: 100vw;">
                <div class="col-12 col-md-6 p-0">

                </div>
                <div class="col-12 col-md-6 mx-auto p-0" style="max-width: 600px; height: 50vh;">
                    <h3 class="display-3 fw-bold header">One click access to all of your existing online marketing materials</h3>
                    <p class="d-none d-md-block subheader fs-5">
                        Simplify your customers' journey with a single tap. Our augmented reality experiences 
                        provide one-click access to all your online marketing materials, including your website, 
                        social media profiles, email, and phone. Make it effortless for potential customers to 
                        get in touch and explore everything your brand has to offer.
                    </p>
                </div>
            </div>

            <div class="row mb-5" style="width: 100vw;">
                <div class="col-12 col-md-6 mx-auto p-0 text-end" style="max-width: 600px; height: 50vh;">
                    <h3 class="display-3 fw-bold header">Monthly user interaction analytic reports</h3>
                    <p class="d-none d-md-block subheader fs-5">
                        Gain valuable insights into customer behavior 
                        with our comprehensive monthly analytic reports. 
                        Understand how users interact with your augmented 
                        reality displays and make data-driven decisions to optimize 
                        your marketing strategy. Measure the success of your campaigns and refine your approach 
                        to maximize engagement and conversions.
                    </p>
                </div>
                <div class="col-12 col-md-6 p-0">

                </div>
            </div>

            <div class="row mb-5" style="width: 100vw;">
                <div class="col-12 col-md-6 p-0">

                </div>
                <div class="col-12 col-md-6 mx-auto p-0" style="max-width: 600px; height: 50vh;">
                    <h3 class="display-3 fw-bold header">Increased user interaction and retention</h3>
                    <p class="d-none d-md-block subheader fs-5">
                        Elevate customer engagement and increase brand loyalty with our 
                        interactive augmented reality experiences. Create memorable interactions that keep 
                        customers coming back for more. The immersive and interactive nature of our technology 
                        fosters a stronger connection between your brand and your audience, resulting in higher 
                        retention rates.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row my-5 py-5">
                <div class="col-12">
                    <h3 class="display-3 fw-bold header text-center">Accessible on All Modern Devices</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-evenly">
                <div class="col-auto bg-dark text-white text-center circle-icon animation-delay-1 mb-3">
                    <i class="bi bi-phone display-1"></i>
                    <p>Mobile</p>
                </div>
                <div class="col-auto bg-dark text-white text-center circle-icon animation-delay-2 mb-3">
                    <i class="bi bi-tablet display-1"></i>
                    <p>Tablet</p>
                </div>
                <div class="col-auto bg-dark text-white text-center circle-icon animation-delay-3 mb-3">
                    <i class="bi bi-laptop display-1"></i>
                    <p>Laptop</p>
                </div>
                <div class="col-auto bg-dark text-white text-center circle-icon animation-delay-4 mb-3">
                    <i class="bi bi-pc-display display-1"></i>
                    <p>Desktop</p>
                </div>
            </div>
        </div>

        <div class="container-fluid my-5" style="height: 20vh; max-height: 250px; overflow: hidden;">
            <img src="/imgs/divider_2.svg" alt="" style="object-fit: cover;">
        </div>

        <div class="container" style="">
            <div class="row d-flex justify-content-evenly px-0 mx-0 py-5">
                <div class="col-12 col-md-6 mb-3">
                    <div class="card mx-auto" style="width: 100%; max-width: 450px;">
                        <div class="card-body d-flex flex-column">
                          <h3 class="card-title fw-bold text-center mb-4">Standard Business Card Package</h3>
                          <ul class="card-text mx-auto" style="width: fit-content;">
                            <li><i class="bi bi-check-square fs-5"></i> Bring your own card design</li>
                            <li><i class="bi bi-check-square fs-5"></i> 14pt matte cardstock</li>
                            <li><i class="bi bi-check-square fs-5"></i> Business dashboard for content updates at any time</li>
                            <li><i class="bi bi-check-square fs-5"></i> Simple one-click access to contact methods</li>
                            <ul class="ps-5">
                              <li>phone</li>
                              <li>email</li>
                              <li>website</li>
                            </ul>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <div class="card mx-auto" style="width: 100%; max-width: 450px;">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title fw-bold text-center mb-4">Custom Marketing Package</h3>
                            <ul class="card-text mx-auto" style="width: fit-content;">
                                <li><i class="bi bi-check-square fs-5"></i>  Free consultation</li>
                                <li><i class="bi bi-check-square fs-5"></i>  Display design</li>
                                <li><i class="bi bi-check-square fs-5"></i>  Custom AR layout</li>
                                <li><i class="bi bi-check-square fs-5"></i>  3D model placement</li>
                                <li><i class="bi bi-check-square fs-5"></i>  Video placement</li>
                                <li><i class="bi bi-check-square fs-5"></i>  Interaction animations</li>
                                <li><i class="bi bi-check-square fs-5"></i>  Monthly interaction analytic reports</li>
                                <li><i class="bi bi-check-square fs-5"></i>  Custom business dashboard for content updates at any time</li>
                                <li><i class="bi bi-check-square fs-5"></i>  Applicable to almost any physical medium with a QR code</li>
                                <ul class="ps-5">
                                    <li>Business cards</li>
                                    <li>Restaurant menus</li>
                                    <li>Museum displays</li>
                                    <li>Product packaging</li>
                                    <li>Flyers, banners, billboards</li>
                                </ul>
                                <li><i class="bi bi-check-square fs-5"></i>  Simple one-click access to other contact methods</li>
                                <ul class="ps-5">
                                    <li>phone</li>
                                    <li>email</li>
                                    <li>website</li>
                                    <li>social media</li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <h2 class="fw-bold text-center mb-4">Frequently Asked Questions</h2>
        
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="faqHeading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                            Question 1: How does it work?
                        </button>
                    </h3>
                    <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            
                        </div>
                    </div>
                </div>
        
                <div class="accordion-item">
                    <h3 class="accordion-header" id="faqHeading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                            Question 2: When is the expected launch date?
                        </button>
                    </h3>
                    <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header" id="faqHeading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                            Question 3: What devices does it work on?
                        </button>
                    </h3>
                    <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-dark">
            <div class="row py-5">
                <div class="col-12 text-center">
                    <h3 class="text-white display-3 mb-5">Ready to Boost your Brand?</h3>
                    <form action="/signup" method="POST" id="newsletter">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 col-md-4 mb-3 text-start">
                                <label for="first_name" class="text-white">First Name</label>
                                <input class="form-control" type="text" name="first_name" placeholder="First Name...">
                            </div>
                            <div class="col-12 col-md-4 mb-3 text-start">
                                <label for="last_name" class="text-white">Last Name</label>
                                <input class="form-control" type="text" name="last_name" placeholder="Last Name...">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex justify-content-center">
                            <div class="col-12 col-md-8 col-lg-6 text-start">
                                <label for="email" class="text-white">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Email...">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col text-center">
                                <input type="submit" value="Join Our Waitlist" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="container-fluid bg-dark">
            <div class="row d-flex justify-content-center">
                <div class="col-12 text-center" style="width: fit-content;">
                    <p class="fw-bold fs-3 text-white mb-0">Sonsic</p>
                    <ul class="d-flex gap-3 p-0 justify-content-end mb-0">
                        <li class="d-flex justify-content-center"><a class="text-white" href="#"><i class="bi bi-twitter fs-4"></i></a></li>
                        <li class="d-flex justify-content-center"><a class="text-white" href="#"><i class="bi bi-facebook fs-4"></i></a></li>
                        <li class="d-flex justify-content-center"><a class="text-white" href="#"><i class="bi bi-instagram fs-4"></i></a></li>
                        <li class="d-flex justify-content-center"><a class="text-white" href="#"><i class="bi bi-tiktok fs-4"></i></a></li>
                        <li class="d-flex justify-content-center"><a class="text-white" href="#"><i class="bi bi-youtube fs-4"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const headings = document.querySelectorAll('h3');
                const sub_headers = document.querySelectorAll('.subheader');
                const options = {
                    threshold: 0.3 // Change this value to adjust when the transitions should be triggered
                };
        
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('fade-in');
                            observer.unobserve(entry.target);
                        }
                    });
                }, options);
        
                headings.forEach(heading => {
                    observer.observe(heading);
                });

                sub_headers.forEach(sub_header => {
                    observer.observe(sub_header);
                });
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const circleIcons = document.querySelectorAll('.circle-icon');
                const options = {
                    threshold: 0.3
                };

                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = 1;
                            entry.target.style.transform = 'translateY(0)';
                            observer.unobserve(entry.target);
                        }
                    });
                }, options);

                // Add an index to stagger the animation delay
                circleIcons.forEach((icon, index) => {
                    icon.style.transitionDelay = `${index * 150}ms`; // Adjust the delay here as needed
                    observer.observe(icon);
                });
            });
        </script>
    </body>
</html>
