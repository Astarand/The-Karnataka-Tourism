<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/logo/favicon.ico" type="image" sizes="20x20">
    <title>Plan Your Trip with Ease – Start Your Travel Journey Today</title>
    <meta name="description" content="Plan your trip effortlessly with our expert tips and guidance. Find practical advice for creating a stress-free and memorable travel experience.">
    <meta name="geo.region" content="IN">
    <link rel="canonical" href="https://www.thekarnatakatourism.com/book.php">
    <?php include('include/common-link.php'); ?>

    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
</head>

<body>
    <?php include('include/header.php'); ?>

    <div class="breadcrumb-section" style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(assets/img/img/breadcum.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Book Now</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page pt-80 mb-40">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-8">
                    <div class="contact-form-area">
                        <h3>Plan Your Trip</h3>
                        <p class="mb-5">Are you planning to spend your next vacation in our resorts? Book your room now. Just fill out the online booking form with all the required information, and we will take care of the rest.</p>
                        <form id="booking-form" method="post" action="booking_data.php">
                            <div class="row">
                                <div class="col-lg-12 mb-20">
                                    <div class="form-inner">
                                        <label>Select Eco Resort*</label>
                                        <select class="form-select" aria-label="select-resort" name="resort">
                                            <option value="" disabled selected>Select Resort</option>
                                            <option value="Bandipur Safari Lodge">Bandipur Safari Lodge</option>
                                            <option value="Kabini River Lodge">Kabini River Lodge</option>
                                            <option value="K Gudi Wilderness Camp">K Gudi Wilderness Camp</option>
                                            <option value="Old Magazine House">Old Magazine House</option>
                                            <option value="Kali Adventure Camp">Kali Adventure Camp</option>
                                            <option value="River Ten Lodge">River Ten Lodge</option>
                                            <option value="Galibore Narure Camp">Galibore Narure Camp</option>
                                            <option value="Devbagh Beach Resort">Devbagh Beach Resort</option>
                                            <option value="Om Beach Resort">Om Beach Resort</option>
                                            <option value="Dubare Elephant Camp">Dubare Elephant Camp</option>
                                            <option value="Hampi Heritage & Wilderness Resort">Hampi Heritage & Wilderness Resort</option>
                                            <option value="Sharavati Adventure Camp">Sharavati Adventure Camp</option>
                                            <option value="Kings Sanctuary Resort Nagarhole">Kings Sanctuary Resort Nagarhole</option>
                                            <option value="Bheemeshwari Adventure Camp">Bheemeshwari Adventure Camp</option>
                                            <option value="Bannerghatta Narure Camp">Bannerghatta Narure Camp</option>
                                        </select>
                                    </div>
                                    <span class="error-message error-resort">*Please Select a Resort.</span>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <div class="form-inner">
                                        <label>Planned Arrival Date*</label>
                                        <input type="text" id="inDate" name="arrival_date" placeholder="5 Jan, 2024">
                                    </div>
                                    <span class="error-message error-arrival-date">*Please Select Arrival Date.</span>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <div class="form-inner">
                                        <label>Planned Departure Date*</label>
                                        <input type="text" id="outDate" name="departure_date" placeholder="5 Jan, 2024">
                                    </div>
                                    <span class="error-message error-departure-date">*Please Select Departure Date.</span>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <div class="booking-form-item-type">
                                        <div class="form-inner">
                                            <label class="number-input-lable">Adult (12 Years+)*</label>
                                        </div>
                                        <div class="number-input-item adult" style="margin-bottom: 0">
                                            <div class="quantity-counter">
                                                <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>
                                                <input name="adult" type="text" class="quantity__input" value="00">
                                                <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>
                                            </div>
                                        </div>
                                        <span class="error-message error-adult">*Enter Adult visitor Count</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <div class="form-inner">
                                        <label class="number-input-lable">Children (0-12 Years)</label>
                                    </div>
                                    <div class="booking-form-item-type">
                                        <div class="number-input-item children" style="margin-bottom: 0">
                                            <div class="quantity-counter">
                                                <a href="#" class="quantity__minus"><i class="bi bi-dash"></i></a>
                                                <input name="children" type="text" class="quantity__input" value="00">
                                                <a href="#" class="quantity__plus"><i class="bi bi-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <div class="form-inner">
                                        <label>Name*</label>
                                        <input type="text" placeholder="Enter your Name" name="name">
                                    </div>
                                    <span class="error-message error-name">*Please Enter your Name</span>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <div class="form-inner">
                                        <label>Phone*</label>
                                        <input type="number" placeholder="Phone Number" name="phone">
                                    </div>
                                    <span class="error-message error-phone">*Enter Valid 10 Digit Phone Number</span>
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <div class="form-inner">
                                        <label>Email*</label>
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                    <span class="error-message error-email">*Enter a Valid E-mail</span>
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <div class="form-inner">
                                        <textarea placeholder="Please describe your plan" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Need Travel Assistance?</label>
                                    </div>
                                    <div class="checkbox-container row">
                                        <div class="col-3">
                                            <label class="check-container">Flight
                                                <input type="checkbox" class="services_check" name="flight" value="0">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-9">
                                            <label class="check-container">Pick up & Drop off Service
                                                <input type="checkbox" class="services_check" name="pickupdrop" value="1">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-20">
                                    <div class="g-recaptcha" data-sitekey="6LeRnooqAAAAAIlgkTOyGS0OgGHUJz3pCAjmUqk9"></div>
                                </div>
                                <div class="col-lg-12 mt-25">
                                    <p>Please make sure that you fill in all the fields correctly. We can promptly email you the customized quote, speeding up the booking process.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner d-flex justify-content-center">
                                        <button class="primary-btn1 btn-hover" type="submit">
                                            Submit Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">


                    <div class="banner2-card mb-40">
                        <img src="assets/img/innerpage/support-img.jpg" alt="Karnataka Tourism">
                        <div class="banner2-content-wrap">
                            <div class="banner2-content">
                                <div class="hotline-area">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                                            <path d="M27.2653 21.5995L21.598 17.8201C20.8788 17.3443 19.9147 17.5009 19.383 18.1798L17.7322 20.3024C17.6296 20.4377 17.4816 20.5314 17.3154 20.5664C17.1492 20.6014 16.9759 20.5752 16.8275 20.4928L16.5134 20.3196C15.4725 19.7522 14.1772 19.0458 11.5675 16.4352C8.95784 13.8246 8.25001 12.5284 7.6826 11.4893L7.51042 11.1753C7.42683 11.0269 7.39968 10.8532 7.43398 10.6864C7.46827 10.5195 7.56169 10.3707 7.69704 10.2673L9.81816 8.61693C10.4968 8.08517 10.6536 7.1214 10.1784 6.40198L6.39895 0.734676C5.91192 0.00208106 4.9348 -0.21784 4.18082 0.235398L1.81096 1.65898C1.06634 2.09672 0.520053 2.80571 0.286612 3.63733C-0.56677 6.74673 0.0752209 12.1131 7.98033 20.0191C14.2687 26.307 18.9501 27.9979 22.1677 27.9979C22.9083 28.0011 23.6459 27.9048 24.3608 27.7115C25.1925 27.4783 25.9016 26.932 26.3391 26.1871L27.7641 23.8187C28.218 23.0645 27.9982 22.0868 27.2653 21.5995ZM26.9601 23.3399L25.5384 25.7098C25.2242 26.2474 24.7142 26.6427 24.1152 26.8128C21.2447 27.6009 16.2298 26.9482 8.64053 19.3589C1.0513 11.7697 0.398595 6.75515 1.18669 3.88421C1.35709 3.28446 1.75283 2.77385 2.2911 2.45921L4.66096 1.03749C4.98811 0.840645 5.41221 0.93606 5.62354 1.25397L7.67659 4.3363L9.39976 6.92078C9.60612 7.23283 9.53831 7.65108 9.24392 7.88199L7.1223 9.53232C6.47665 10.026 6.29227 10.9193 6.68979 11.6283L6.85826 11.9344C7.45459 13.0281 8.19599 14.3887 10.9027 17.095C13.6095 19.8012 14.9696 20.5427 16.0628 21.139L16.3694 21.3079C17.0783 21.7053 17.9716 21.521 18.4653 20.8753L20.1157 18.7537C20.3466 18.4595 20.7647 18.3918 21.0769 18.5979L26.7437 22.3773C27.0618 22.5885 27.1572 23.0128 26.9601 23.3399ZM15.8658 4.66809C20.2446 4.67296 23.7931 8.22149 23.798 12.6003C23.798 12.858 24.0069 13.0669 24.2646 13.0669C24.5223 13.0669 24.7312 12.858 24.7312 12.6003C24.7257 7.7063 20.7598 3.74029 15.8658 3.73494C15.6081 3.73494 15.3992 3.94381 15.3992 4.20151C15.3992 4.45922 15.6081 4.66809 15.8658 4.66809Z"></path>
                                            <path d="M15.865 7.46746C18.6983 7.4708 20.9943 9.76678 20.9976 12.6001C20.9976 12.7238 21.0468 12.8425 21.1343 12.93C21.2218 13.0175 21.3404 13.0666 21.4642 13.0666C21.5879 13.0666 21.7066 13.0175 21.7941 12.93C21.8816 12.8425 21.9308 12.7238 21.9308 12.6001C21.9269 9.2516 19.2134 6.53813 15.865 6.5343C15.6073 6.5343 15.3984 6.74318 15.3984 7.00088C15.3984 7.25859 15.6073 7.46746 15.865 7.46746Z"></path>
                                            <path d="M15.865 10.267C17.1528 10.2686 18.1964 11.3122 18.198 12.6C18.198 12.7238 18.2472 12.8424 18.3347 12.9299C18.4222 13.0174 18.5409 13.0666 18.6646 13.0666C18.7883 13.0666 18.907 13.0174 18.9945 12.9299C19.082 12.8424 19.1312 12.7238 19.1312 12.6C19.1291 10.797 17.668 9.33589 15.865 9.33386C15.6073 9.33386 15.3984 9.54274 15.3984 9.80044C15.3984 10.0581 15.6073 10.267 15.865 10.267Z"></path>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <span>For Online Assistance:</span>
                                        <h6><a href="tel:+919449244567">94492-44567</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-contact mb-40">
                        <div class="title">
                            <h6>Email us</h6>
                        </div>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path d="M19.9018 8.6153C19.5412 5.99522 18.1517 3.62536 16.0393 2.02707C13.9268 0.428777 11.2643 -0.267025 8.63745 0.0927308C6.01063 0.452486 3.63468 1.83833 2.03228 3.94539C0.42988 6.05245 -0.267711 8.70813 0.0929693 11.3282C0.388972 13.4966 1.38745 15.509 2.9363 17.0589C4.48516 18.6088 6.49948 19.6113 8.67243 19.9136C9.11786 19.9713 9.56656 20.0002 10.0157 20C11.8278 20.0033 13.606 19.5101 15.1563 18.5744C15.2358 18.5318 15.3058 18.4735 15.362 18.4031C15.4182 18.3326 15.4595 18.2516 15.4833 18.1648C15.5072 18.078 15.5131 17.9872 15.5007 17.8981C15.4884 17.8089 15.458 17.7232 15.4114 17.6461C15.3648 17.569 15.303 17.5021 15.2298 17.4496C15.1565 17.397 15.0733 17.3599 14.9853 17.3403C14.8972 17.3208 14.806 17.3193 14.7173 17.336C14.6287 17.3527 14.5443 17.3871 14.4694 17.4373C12.7129 18.4904 10.6392 18.8886 8.61629 18.5613C6.59339 18.2339 4.75224 17.2022 3.4197 15.6492C2.08717 14.0962 1.34948 12.1225 1.3376 10.0784C1.32573 8.03438 2.04043 6.05225 3.35483 4.48397C4.66923 2.91568 6.49828 1.86271 8.51723 1.512C10.5362 1.16129 12.6144 1.53554 14.383 2.56829C16.1515 3.60104 17.4959 5.22548 18.1776 7.1532C18.8592 9.08092 18.8338 11.1872 18.1061 13.0981C17.9873 13.4102 17.7626 13.6709 17.4711 13.8349C17.1795 13.999 16.8396 14.056 16.5104 13.996C16.1811 13.9361 15.8833 13.763 15.6687 13.5068C15.454 13.2506 15.3362 12.9275 15.3356 12.5936V5.37867C15.3356 5.2024 15.2654 5.03336 15.1404 4.90872C15.0155 4.78408 14.846 4.71406 14.6693 4.71406C14.4925 4.71406 14.3231 4.78408 14.1981 4.90872C14.0731 5.03336 14.0029 5.2024 14.0029 5.37867V6.52578C13.2819 5.70734 12.3261 5.12961 11.265 4.8708C10.204 4.61198 9.08877 4.68456 8.0704 5.07873C7.05203 5.47289 6.17966 6.16961 5.57134 7.07458C4.96303 7.97954 4.64814 9.04908 4.66929 10.1384C4.69045 11.2278 5.04663 12.2843 5.68962 13.1651C6.33262 14.0459 7.23139 14.7084 8.2643 15.0629C9.2972 15.4175 10.4144 15.4469 11.4646 15.1473C12.5149 14.8477 13.4475 14.2335 14.1362 13.3878C14.3015 13.9385 14.6358 14.4237 15.092 14.775C15.5482 15.1263 16.1033 15.326 16.6793 15.3461C17.2553 15.3662 17.8231 15.2057 18.3028 14.887C18.7825 14.5684 19.15 14.1078 19.3535 13.5699C19.9483 11.99 20.1368 10.2866 19.9018 8.6153ZM10.0051 14.0185C9.21436 14.0185 8.4414 13.7847 7.78396 13.3465C7.12651 12.9083 6.61409 12.2856 6.3115 11.5569C6.00891 10.8283 5.92974 10.0265 6.08399 9.25296C6.23825 8.47943 6.61902 7.7689 7.17813 7.21122C7.73724 6.65354 8.4496 6.27376 9.22511 6.1199C10.0006 5.96603 10.8045 6.045 11.535 6.34681C12.2655 6.64863 12.8899 7.15973 13.3292 7.8155C13.7685 8.47126 14.0029 9.24223 14.0029 10.0309C14.0019 11.0882 13.5803 12.1018 12.8308 12.8494C12.0813 13.597 11.065 14.0175 10.0051 14.0185Z" />
                            </svg>
                        </div>
                        <div class="content">
                            <h6><a href="mailto:book@thekarnatakatourism.com">book@thekarnatakatourism.com</a></h6>
                        </div>
                    </div>


                    <div class="single-contact mb-40">
                        <div class="title">
                            <h6>Corporate Office</h6>
                        </div>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20">
                                <path d="M13.1781 11.175C12.4989 12.5025 11.5785 13.825 10.6374 15.0125C9.74465 16.132 8.79005 17.2044 7.77778 18.225C6.76548 17.2044 5.81089 16.132 4.91815 15.0125C3.97704 13.825 3.05667 12.5025 2.37741 11.175C1.69037 9.83375 1.2963 8.5775 1.2963 7.5C1.2963 5.8424 1.97916 4.25269 3.19468 3.08058C4.41019 1.90848 6.05878 1.25 7.77778 1.25C9.49677 1.25 11.1454 1.90848 12.3609 3.08058C13.5764 4.25269 14.2593 5.8424 14.2593 7.5C14.2593 8.5775 13.8639 9.83375 13.1781 11.175ZM7.77778 20C7.77778 20 15.5556 12.8925 15.5556 7.5C15.5556 5.51088 14.7361 3.60322 13.2775 2.1967C11.8189 0.790176 9.84057 0 7.77778 0C5.71498 0 3.73667 0.790176 2.27806 2.1967C0.819442 3.60322 3.0738e-08 5.51088 0 7.5C0 12.8925 7.77778 20 7.77778 20Z" />
                                <path d="M7.77951 10C7.09192 10 6.43248 9.73661 5.94627 9.26777C5.46007 8.79893 5.18692 8.16304 5.18692 7.5C5.18692 6.83696 5.46007 6.20107 5.94627 5.73223C6.43248 5.26339 7.09192 5 7.77951 5C8.46711 5 9.12655 5.26339 9.61275 5.73223C10.099 6.20107 10.3721 6.83696 10.3721 7.5C10.3721 8.16304 10.099 8.79893 9.61275 9.26777C9.12655 9.73661 8.46711 10 7.77951 10ZM7.77951 11.25C8.81091 11.25 9.80007 10.8549 10.5294 10.1517C11.2587 9.44839 11.6684 8.49456 11.6684 7.5C11.6684 6.50544 11.2587 5.55161 10.5294 4.84835C9.80007 4.14509 8.81091 3.75 7.77951 3.75C6.74812 3.75 5.75896 4.14509 5.02965 4.84835C4.30035 5.55161 3.89062 6.50544 3.89062 7.5C3.89062 8.49456 4.30035 9.44839 5.02965 10.1517C5.75896 10.8549 6.74812 11.25 7.77951 11.25V11.25Z" />
                            </svg>
                        </div>
                        <div class="content">
                            <h6>
                                Gurukrupa, Office No. 94,<br>
                                2nd Main Road, BHCS Layout,<br>
                                Chikkalasandra Post,<br>
                                Bangalore – 560061,<br>
                                Karnataka, India.
                            </h6>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <?php include('include/footer.php'); ?>

</body>

</html>