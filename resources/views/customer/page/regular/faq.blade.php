@extends('customer.layout.base')
@section('content')
@section('title', 'FAQ')

<div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: FAQ Content -->
    <div class="intro-y col-span-12 lg:col-span-6">
        <div class="box">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Frequently Asked Question:
                </h2>
            </div>
            <div id="faq-accordion-1" class="accordion p-5">
                <div class="accordion-item">
                    <div id="faq-accordion-content-1" class="accordion-header">
                        <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1"> What is Go Dental? </button>
                    </div>
                    <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Go Dental is an e-commerce platform that lets you shop online from the dental and supplies brands for clinics or dental shop can buy from. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-2" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2"> How to Update my Account? </button>
                    </div>
                    <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> After logging-in, by clicking Manage Account the user can change the information that they want to change for example (e.g, address, phone number and birthday). </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-3" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3"> How to How to Create an Account?</button>
                    </div>
                    <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">Click on "Sign UP" in the top side of the page. Then fill up the details. Finish by clicking on the "Register" button. An email will be sent to you notifying if you’re successful. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-4" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4"> I forgot my password or I cannot log in to my account, what should I do? </button>
                    </div>
                    <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Go to Manage Account on the top right conner. Then click Change Password. Input the current password and set the new password you want. Then click Change Password to save new password. </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box mt-6">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Return and Exchanges:
                </h2>
            </div>
            <div id="faq-accordion-2" class="accordion p-5">
                <div class="accordion-item">
                    <div id="faq-accordion-content-5" class="accordion-header">
                        <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5"> Can I return and exchange a defected item? </button>
                    </div>
                    <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-5" data-tw-parent="#faq-accordion-2">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> There will be a refund of shipping fee if item is not delivered based on promise date. Non-Cash On Delivery orders will receive the refund the following day while Cash On Delivery needs to wait until their orders are tagged as delivered. Cash On Delivery cust</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-6" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6"> My return request got rejected. What can I do? </button>
                    </div>
                    <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-6" data-tw-parent="#faq-accordion-2">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> The customer can contact the company to notify why they rejected the request. So, the customer can send another request to the company make sure that the return details is clear and show proof which items that needs to be returned/ exchange. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-7" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7"> How do I cancel my return/exchange request? </button>
                    </div>
                    <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-7" data-tw-parent="#faq-accordion-2">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> You can cancel your Return/Exchange request by going to the top right conner and click the My Profile >My Returns > My Cancellations. Then you can check all your Returned Orders or your Cancelled Orders. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-8" class="accordion-header" >
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8"> How do I ship/pack my item for return and exchange? </button>
                    </div>
                    <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-8" data-tw-parent="#faq-accordion-2">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Go Dental receives the return item and performance quality check process to ensure return acceptance conditions are met and the reason for return is valid. Also, it depends on the company if they will send a new item or if the customer would send back the defected item back to the company. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 lg:col-span-6">
        <div class="box">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Shipping & Delivery:
                </h2>
            </div>
            <div id="faq-accordion-3" class="accordion p-5">
                <div class="accordion-item">
                    <div id="faq-accordion-content-9" class="accordion-header">
                        <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-9" aria-expanded="true" aria-controls="faq-accordion-collapse-9"> What is Go Dental Supported Logistics?  </button>
                    </div>
                    <div id="faq-accordion-collapse-9" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-9" data-tw-parent="#faq-accordion-3">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">For the meantime there is no supported logistics because the company has its own delivery. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-10" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10"> What does the status of my package mean? </button>
                    </div>
                    <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-10" data-tw-parent="#faq-accordion-3">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> The status in the package has different types like (on the way, being processes, out of stock, and package arrived).  </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-11" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11"> When can I receive my order? </button>
                    </div>
                    <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-11" data-tw-parent="#faq-accordion-3">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Once you have placed an order, you will see its estimated delivery time when you go to the Go Dental. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-12" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12"> Can I choose the courier who deliver my order? </button>
                    </div>
                    <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-12" data-tw-parent="#faq-accordion-3">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> No, the Go Dental has its own delivery courier to deliver the ordered items. </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box mt-6">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                Payment FAQ:
                </h2>
            </div>
            <div id="faq-accordion-4" class="accordion p-5">
                <div class="accordion-item">
                    <div id="faq-accordion-content-13" class="accordion-header">
                        <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-13" aria-expanded="true" aria-controls="faq-accordion-collapse-13"> Which credit cards are accepted for payment?  </button>
                    </div>
                    <div id="faq-accordion-collapse-13" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-13" data-tw-parent="#faq-accordion-4">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Go Dental accept all major local credit and debit cards that supported by the company, which is VISA, and Mastercard.</div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-14" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-14" aria-expanded="false" aria-controls="faq-accordion-collapse-14"> Can I pay Using Gcash or PayPal? </button>
                    </div>
                    <div id="faq-accordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-14" data-tw-parent="#faq-accordion-4">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> Yes, the customer can use Gcash and PayPal if they don’t want to pay using their credit cards. </div>

                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-15" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-15" aria-expanded="false" aria-controls="faq-accordion-collapse-15"> How do I know if my payment is successful? </button>
                    </div>
                    <div id="faq-accordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-15" data-tw-parent="#faq-accordion-4">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> By checking the notification on your email or text message to see if the payment is successful.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div id="faq-accordion-content-16" class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-16" aria-expanded="false" aria-controls="faq-accordion-collapse-16"> What are the payment methods available? </button>
                    </div>
                    <div id="faq-accordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-16" data-tw-parent="#faq-accordion-4">
                        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> There are a few options that the customer can use to payment which can be online, cash on delivery, and credit and debit card. </div>
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
