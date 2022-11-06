@extends('layouts.layout')
@section('title', 'Pay Now')

@section('content')



    <div class="site-wrapper-reveal">
        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading">পেমেন্ট সম্পন্ন করুন</span></h3><br/><br/>
                            <h2 class="fw-bold">৳ {{ $amount }}</h2>
                            <p>
                              ট্রানজেকশন আইডিঃ {{ $trxid }}
                            </p>
                            <div style="border: 2px solid #ddd; padding: 0px; width: 100%; padding: 20px;" >
                                {{-- <img src="{{ asset('images/aamarpay.png') }}" class="img-responsive margin-two"> --}}
                                {!!
                                aamarpay_post_button([
                                    'tran_id'   => $trxid,
                                    'cus_name'  => 'InnovaTech Customer ' . $mobile,
                                    'cus_email' => $mobile.'@innovabd.tech',
                                    'cus_phone' => $mobile,

                                    'success_url' => route('index.payment.success'),
                                    'fail_url' => route('index.payment.failed'),
                                    'cancel_url' => route('index.payment.cancel'),

                                    'desc' => $packagedesc,
                                    'opt_a' => $mobile,
                                    'opt_b' => $amount,
                                ], $amount, '<i class="fa fa-money"></i> Pay Through AamarPay', 'btn primary-btn') !!}
                                <br/><br/>
                                <small>
                                  <a href="{{ route('privacy_policy') }}" target="_blank">Privacy Policy</a> & <a href="{{ route('refund_return_policy') }}" target="_blank">Refund Policy</a>
                                </small>
                            </div>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

            </div>
        </div><br/><br/><br/><br/><br/>
        <!--====================  Conact us Section End  ====================-->


    </div>



@endsection
