<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function paymentProceed(Request $request)
    {
        $this->validate($request,array(
            'mobile'    =>   'required',
            'amount'    =>   'required',
        ));

        $trx_id = 'INN' . $this->random_string(10) . rand();

        Session::flash('info','পেমেন্টটি সম্পন্ন করুন!');
        return view('paynow')
                        ->withMobile($request->mobile)
                        ->withAmount($request->amount)
                        ->withPackagedesc($request->mobile . ' - ৳ ' . $request->amount)
                        ->withTrxid($trx_id);
    }

    public function paymentSuccess(Request $request)
    {
        
        $user_id = $request->get('opt_a');
        
        if($request->get('pay_status') == 'Failed') {
            Session::flash('info', 'পেমেন্ট সম্পন্ন হয়নি, আবার চেষ্টা করুন!');
            return redirect()->route('home');
        }
        
        $amount_request = $request->get('opt_b');
        $amount_paid = $request->get('amount');

        if($request->pay_status == "Successful" && $amount_paid == $amount_request) {
            // OLD VERIFICATION METHOD
            
            // $temppayment = Temppayment::where('trx_id', $request->mer_txnid)->first();
            // // dd($request->all());
            // $payment = new Payment;
            // $payment->user_id = $user_id;
            // $payment->package_id = $temppayment->package_id;
            // $payment->uid = $temppayment->uid;
            // $payment->payment_status = 1;
            // $payment->card_type = $request->card_type;
            // $payment->trx_id = $request->mer_txnid;
            // $payment->amount = $request->amount;
            // $payment->store_amount = $request->store_amount;
            // $payment->save();

            // $user = User::findOrFail($user_id);
            // $current_package_date = Carbon::parse($user->package_expiry_date);
            // $package = Package::findOrFail($temppayment->package_id);
            // if($current_package_date->greaterThanOrEqualTo(Carbon::now())) {
            //     $package_expiry_date = $current_package_date->addDays($package->numeric_duration)->format('Y-m-d') . ' 23:59:59';
            // } else {
            //     $package_expiry_date = Carbon::now()->addDays($package->numeric_duration)->format('Y-m-d') . ' 23:59:59';
            // }
            // // dd($package_expiry_date);
            // $user->package_expiry_date = $package_expiry_date;
            // $user->save();
            // // ARO KAAJ THAKTE PARE, JODI FIREBASE EO UPDATE KORA LAAGE
            // // ARO KAAJ THAKTE PARE, JODI FIREBASE EO UPDATE KORA LAAGE
            // // dd($payment);

            // $temppayment->delete();

            Session::flash('swalsuccess', 'পেমেন্ট সফল হয়েছে। অ্যাপটি ব্যবহার করুন। ধন্যবাদ!');
            return redirect()->route('home');
        } else {
            // dd($request->all());
            // $paymentdata = json_encode($request->all());
            // Session::flash('swalsuccess', $paymentdata);
            Session::flash('info', 'পেমেন্ট সম্পন্ন হয়নি, অনুগ্রহ করে Contact ফর্ম এর মাধ্যমে আমাদের জানান।');
            return redirect()->route('home');
        }

        // $valid  = Aamarpay::valid($request, $amount_request);
        // if($valid)
        // {
        //     // dd($request->all());
        // } 
    }

    public function paymentCancel(Request $request)
    {
        Session::flash('info','পেমেন্টটি ক্যানসেল করা হয়েছে!');
        return redirect()->route('home');
    }

    public function paymentFailed(Request $request)
    {
        Session::flash('info','পেমেন্টটি ব্যর্থ হয়েছে! অনুগ্রহ করে যোগাযোগ করুন।');
        return redirect()->route('home');
    }

    // helper
    // helper
    function random_string($length){
          $pool = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $random_string = substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
          return $random_string;
    }
    // helper
    // helper
}