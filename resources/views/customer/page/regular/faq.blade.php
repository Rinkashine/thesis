@extends('customer.layout.base')
@section('content')
@section('title', 'FAQ')

<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: FAQ Content -->
    <div class="intro-y col-span-12 lg:col-span-6">
        <div class="box">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Frequently Asked Question
                </h2>
            </div>
            <div id="faq-accordion-1" class="accordion p-5">
                <div class="accordion-item">
                    <div id="faq-accordion-content-1" class="accordion-header">
                        <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1"> What is an FAQ page? </button>
                    </div>
                    <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> You may already know the ins and outs of what an FAQ page is and does. If so, feel free to skip ahead straight to the examples. FAQ stands for frequently asked questions, and the FAQ page is a carefully curated list of questions that potential customers have when evaluating a product service and direct answers to these questions. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-2" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2"> Is Express Delivery available for all items? </button>
                    </div>
                    <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Express Delivery is only available on items that are FULFILLED BY LAZADA within the size of 25cm x 25cm x 25cm or equal to < 5kgs </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-3" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3"> How much does Express Delivery cost?</button>
                    </div>
                    <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Shipping fee for Metro Manila and Luzon is PHP76 <p>Shipping fee for Cebu and Davao is PHP85 <p></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-4" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4">  Is there a minimum purchase required to avail of Express Delivery? </button>
                    </div>
                    <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> None. </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box mt-6">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Easy Refund
                </h2>
            </div>
            <div id="faq-accordion-2" class="accordion p-5">
                <div class="accordion-item">
                    <div id="faq-accordion-content-5" class="accordion-header">
                        <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5"> Will you refund my Express Delivery charges if the item does not get delivered on time? </button>
                    </div>
                    <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-5" data-tw-parent="#faq-accordion-2">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> There will be a refund of shipping fee if item is not delivered based on promise date. Non-Cash On Delivery orders will receive the refund the following day while Cash On Delivery needs to wait until their orders are tagged as delivered. Cash On Delivery customers are still required to pay the shipping fee to the courier and refund will be sent via voucher. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-6" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6"> How long will my refund be process? </button>
                    </div>
                    <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-6" data-tw-parent="#faq-accordion-2">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Refund via reversal may take 5 to 15 days to reflect on your account if you have used a credit card and 5 to 45 days for a debit card. It may also depend on your bank policy and it may reflect on your next billing cycle. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-7" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7"> How to refund from failed deliveries? </button>
                    </div>
                    <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-7" data-tw-parent="#faq-accordion-2">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Refund process starts the item reaches the seller back. Please take note that this may take more time depending on the area of your delivery address. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-8" class="accordion-header" >
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8"> Will I get a refund from canceled orders? </button>
                    </div>
                    <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-8" data-tw-parent="#faq-accordion-2">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Refund is automatically triggered once cancelation has been sucessfully processed. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 lg:col-span-6">
        <div class="box">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Delivery Tracking
                </h2>
            </div>
            <div id="faq-accordion-3" class="accordion p-5">
                <div class="accordion-item">
                    <div id="faq-accordion-content-9" class="accordion-header">
                        <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-9" aria-expanded="true" aria-controls="faq-accordion-collapse-9"> Do you deliver during the weekends and holidays? </button>
                    </div>
                    <div id="faq-accordion-collapse-9" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-9" data-tw-parent="#faq-accordion-3">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Yes! Orders can be delivered during the weekends and holidays. Once the order is in transit, you will be able to receive an in-app notification. Please double check your shipping address and ensure that you are available upon delivery
                            Kindly keep your communication lines open as couriers may reach out to you unpon their arrival in your shipping address. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-10" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10"> When will I receive my item? </button>
                    </div>
                    <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-10" data-tw-parent="#faq-accordion-3">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Once you have placed an order, you will see its estimated delivery time when you go to the Go Dental website.  </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-11" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11"> What if I'm not available when the package arrives? </button>
                    </div>
                    <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-11" data-tw-parent="#faq-accordion-3">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <i> For Cash On Delivery Orders: </i> <ul> <li> The customer must inform a friend or family that you are expecting an order.</li> <li> Make sure to give your friend or family the Order number, Package type, and Amount payable.
                        </li> </ul>
                          <i> For Prepaid Orders: </i> <ul> <li> The customer can give a family and friend the Order Details to show proof to the delivery that they can recieve the order. </li> </ul> </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-12" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12">  Will you redeliver my item if you were unable to locate my address at first attempt?  </button>
                    </div>
                    <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-12" data-tw-parent="#faq-accordion-3">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Yes, courier is required to do 2nd attempt the following day. </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box mt-6">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Other FAQ's
                </h2>
            </div>
            <div id="faq-accordion-4" class="accordion p-5">
                <div class="accordion-item">
                    <div id="faq-accordion-content-13" class="accordion-header">
                        <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-13" aria-expanded="true" aria-controls="faq-accordion-collapse-13"> Why did I not receive the SMS verification code/One-time Password (OTP)? </button>
                    </div>
                    <div id="faq-accordion-collapse-13" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-13" data-tw-parent="#faq-accordion-4">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>If you did not receive your verification code or One-Time Password (OTP) via SMS, it might be due to network or connectivity issues. Please try email verification instead if available. </p>
                                                                                            <p>You may also try the following:</p>
                                                                                            <li>Ensure your phone is connected mobile service provider’s network and the signal is full. Switch off mobile phone, remove and re-insert your SIM card, then switch on mobile phone again. Try making another request for a verification code. Retry after 3-4 hours if you still do not receive the OTP after several tries and maximum request limit has been reached. Get assistance from card issuer/ bank directly for payment OTP, or from couriers for collection point OTP.</li>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-14" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-14" aria-expanded="false" aria-controls="faq-accordion-collapse-14"> How do I change the information in my account? </button>
                    </div>
                    <div id="faq-accordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-14" data-tw-parent="#faq-accordion-4">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Login to you Go Dental acount and then click Manage Account. You'll be able to update your information (e.g, address, phone number and email) from there. </div>

                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-15" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-15" aria-expanded="false" aria-controls="faq-accordion-collapse-15"> How to change My Password? </button>
                    </div>
                    <div id="faq-accordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-15" data-tw-parent="#faq-accordion-4">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Go to Manage Account on the top right conner. Then click Change Password. Input the current password and set the new password you want. THen click Change Password to save new password.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-16" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-16" aria-expanded="false" aria-controls="faq-accordion-collapse-16"> How do I register for a Go Dental account? </button>
                    </div>
                    <div id="faq-accordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-16" data-tw-parent="#faq-accordion-4">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Click on "Sign UP" in the top side of the page. Then fill up the details. Finish by clicking on the "Register" button. An email will be sent to you notifiying if your successful. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
</script>
@endpush
