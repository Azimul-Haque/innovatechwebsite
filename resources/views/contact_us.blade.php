@extends('layouts.layout')
@section('title', 'Contact Us')

@section('content')



    <div class="site-wrapper-reveal">
        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading">Get In Touch</span></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="conact-us-wrap-one mb-30">
                            <h5 class="heading mb-20">62/1, Tejturi Bazar Chowk Lane, East Rajabazar, Dhaka</h5>
                            <h5 class="heading mb-20">innovatech.frm@gmail.com</h5>
                            <h5 class="heading mb-20">+8801737988070</h5>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-form-wrap">
                            <form id="contact-form" action="" method="post">
                                <div class="contact-form">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="con_name" type="text" placeholder="Name *">
                                        </div>
                                        <div class="contact-inner">
                                            <input name="con_email" type="email" placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="contact-inner">
                                        <input name="con_phone" type="text" placeholder="Phone*">
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea name="con_message"
                                                  placeholder="Please describe what you need."></textarea>
                                    </div>
                                    <div class="submit-btn mt-20">
                                        <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Conact us Section End  ====================-->


    </div>



@endsection
