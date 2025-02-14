@extends('layouts.app')



@section('content')
    <div class="main">
        <!-- breadcrumbs area start -->
        <div class="breadcrumbs_aree breadcrumbs_bg mb-100" data-bgimg="/images/others/breadcrumbs-bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs_text">
                            <h1>Contact Us</h1>
                            <ul>
                                <li><a href="/">Home </a></li>
                                <li> // Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs area end -->

        <!-- contact section start -->
        <div class="contact_page_section mb-100">
            <div class="container">
                <div class="contact_details">
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                            <div class="contact_info_content">
                                <h2>We Are Here Fro Help You!
                                    Please Contact Us.</h2>
                                <div class="contact_search">
                                    <form action="#">
                                        <input placeholder="Enter your country or city" type="text">
                                        <button type="submit"><i class="ion-ios-search"></i></button>
                                    </form>
                                </div>
                                <div class="contact_info_details mb-45">
                                    <h3>Store In New Work</h3>
                                    <p>Your address goes here.</p>
                                    <p><a href="tel:0123456789">0123456789</a></p>
                                    <p><a href="#">demo@example.com</a></p>
                                    <p><a href="#">www.example.com</a></p>
                                    <span>See On The Map</span>
                                </div>
                                <div class="contact_info_details">
                                    <h3>Store In New Work</h3>
                                    <p>Your address goes here.</p>
                                    <p><a href="tel:0123456789">0123456789</a></p>
                                    <p><a href="#">demo@example.com</a></p>
                                    <p><a href="#">www.example.com</a></p>
                                    <span>See On The Map</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="contact_form" data-bgimg="/images/others/contact-form-bg-shape.png">
                                <h2>Send A Quest</h2>
                                <form id="contact-form" action="https://whizthemes.com/mail-php/other/mail.php">
                                    <div class="form_input">
                                        <input name="con_name" placeholder="Name*" type="text">
                                    </div>
                                    <div class="form_input">
                                        <input name="con_email" placeholder="E-Mail*" type="text">
                                    </div>
                                    <div class="form_input">
                                        <input name="con_subject" placeholder="Subject" type="text">
                                    </div>
                                    <div class="form_textarea">
                                        <textarea name="con_message" placeholder="Message Hare"></textarea>
                                    </div>
                                    <div class="form_input_btn">
                                        <button type="submit" class="btn btn-link">send message</button>
                                    </div>
                                    <p class="form-message"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact section end -->
    </div>
@endsection
