@extends('customer.layout.base')
@section('content')
@section('title', 'FAQ')

<div class="py-10 px-5 mt-5 intro-y box sm:py-20 bg-gradient-to-b from-white via-slate-100 to-slate-50">
    <div class="px-2 mt-5">
        <div class="text-4xl font-medium text-center">Frequently Asked Questions</div>
        <div class="mt-2 text-center text-slate-500">This page is a carefully curated list of questions that customers have when evaluating a product service and direct answers to these questions.</div>
    </div>
    <div class="px-10 pt-10 mt-10 border-t sm:px-20 border-slate-200/60 dark:border-darkmode-400"></div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="box">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Products & Account:
                    </h2>
                </div>
                <div id="faq-accordion-1" class="accordion p-5">

                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="false" aria-controls="faq-accordion-collapse-1">How do I buy a Product? </button>
                        </div>
                        <div id="faq-accordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                <p>You can add a product easily via Go Dental's website or the Go Dental's mobile version.
                                Before you do so, ensure you have signed up for a Go Dental account and added a local delivery address. </p>
                                <p>After searching for a product and deciding on what to buy, you can proceed to purchase in the following way:</p>
                                <li> <b>Add to the cart and then proceed to checkout</b> </li>
                                <p>On the product page, select the item > Select preferred quantity > select Add to cart > Go to the Cart > Select the item you want to checkout > Select Proceed to Checkout.</p>

                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2"> How do I remove a product from my cart? </button>
                        </div>
                        <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>There are 2 ways to remove a product from your cart:</p>

                                                <p><b>1. Select Adjust</b></p>
                                                    Identify the product you wish to adjust, then select <b>Adjust> Edit the Quantity> Submit</b>.

                                                <p><b>2. Select Delete</b></p>
                                                    Identify the product you wish to delete, then select <b>Delete> Click “Delete” button</b>.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3"> How to Register a Go Dental Account? </button>
                        </div>
                        <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>By going to the Go Dental’s website or by going to the Go Dental’s mobile version.</p>
                                            <p>You can follow these steps:</p>
                                            <p><b>For the Website and Mobile Version</b></p>
                                                <p>1. Click <b>“Sign Up”</b> from the top of the homepage of Go Dental.</p>
                                                <p>2. Fill up the required details <i>(Full Name, Email, Phone Number, Gender, Password, Password Confirmation, and Birthday).</i></p>
                                                <p>3. Then click <b>“Register”</b> > Then you will receive an email verification > By clicking <b>“Verify Email”</b> from your email you will be directed to the Go Dental page.</p>
                    </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4"> How to Manage my Account? </button>
                        </div>
                        <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>You can manage your account easily via Go Dental’s website or the Go Dental mobile version.</p>
                                                        <p> you can follow these steps:</p>
                                                        <p>1. Go to the top right corner click the Profile button > Then select <b>“Manage Account“</b> To be directed to the Profile Information.</p>
                                                        <p>2. In the <b>“Personal Information”</b> you can edit your information<i>(Full Name, Email, Phone Number, Gender, and Birthday).</i> Also, you can change the photo by clicking <b>“Change Photo”</b>. Click <b>”Choose File”</b> to choose a photo you like to input. Then click <b>“Submit”</b> to successfully apply the photo.</b></p>
                                                        <p>3. In the <b>“Address Book”</b> you can input the addresses you prefer to use. By clicking the <b>”Add New Address”</b> you will need to fill up the required information <i>(Full Name, Mobile Number, Other Notes, House/Unit/Flr #, Province, City/Municipality, and Barangay).</i> Then click <b>”Save”</b> button. </p>
                                                        <p>4. In the <b>“Change Password“</b> you can change the old password that you don’t like to use anymore. By entering your <b><i>“Old Password”</i></b> > then entering your <b><i>“New Password”</i></b> that you prefer to use> then last enter the <b><i>“Confirm New Password”</i></b> and make sure to match it with the new password to not make a mistake. > Lastly, click <b>“Change Password”</b> to change it to the new set password. </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box mt-6">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Return & Exchanges:
                    </h2>
                </div>
                <div id="faq-accordion-2" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-5" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="false" aria-controls="faq-accordion-collapse-5"> How do I raise a return/exchange request? </button>
                        </div>
                        <div id="faq-accordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-5" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>You can raise a return/exchange request for your order within the Go Dental website/mobile version. Certain orders will still be authorized for return/exchange after Order Received has been selected. </p>
                                                        <p>Before raising a return/refund request make sure that the conditions are met, you can also see the allowable and not allowable reasons to request for Return/Refund below:</p>
                                                            <b><i>Allowable Reasons:</i></b>
                                                        <li><b>Parcel delivered with missing items</b>- The parcel received is empty, or parts of the item from the product are missing or order was delivered incomplete. </li>
                                                        <li><b>Received the wrong product</b>- Company sent the wrong product. The product or variation you have received is incorrect. </li>
                                                        <li><b>Received a product with physical damage</b>- The product you have received has a visible dent/scratch/shattered or has expired. </li>
                                                        <li><b>Received a faulty product</b>- The product is not working as intended or not functioning. </li>
                                                        <li><b>Change of Mind</b>- Only products with the Free Return label are accepted.</li>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-6" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6"> How does Go Dental help to resolve returns/exchanges? </button>
                        </div>
                        <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-6" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>Go Dental will step in to mediate the situation when buyers and the company are unable to reach an agreement for a return/exchange. Go Dental will examine the case and evidence provided closely to reach a fair solution.</p>

                                                                <p>During the investigation, Go Dental may sometimes require buyers and the company to provide further supporting proof within a specified time limit, so that they can better assess the case. After the supporting proof have been received,
                                                                Go Dental will aim to resolve the issue as soon as possible but the timeframe may vary depending on the reason for return and the product type.</p>

                                                                <p>We encourage buyers and the company to communicate with each other directly to resolve any issues before raising a dispute. </p>
                                                                <p>Ensure that your email address provided is accurate, as Go Dental may contact you via email regarding your return/exchange request. </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-7" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7"> How do I cancel my return request? </button>
                        </div>
                        <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-7" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> You can cancel your Return/Exchange request by following this few steps:
                                                                <p>1. By clicking the top right conner and click your <b>“Profile Icon”.</b></p>
                                                                <p>2. You can click the <b>My Returns</b> to be able to see all the products that you requested to return.</p>
                                                                <p>3. You can also click the <b>My Cancellations</b> to be able to see all the list of product that you cancel.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-8" class="accordion-header" >
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8">How do I ship/pack my item for return and exchange? </button>
                        </div>
                        <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-8" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>You should pack the product(s) for return/exchange securely in their original packaging, such as a cardboard box or poly mailer with bubble wrap, to protect them from any damage when they are shipped back to the Company Warehouse. </p>
                                                    <p>If the original packaging is damaged, you may follow these guidelines:</p>
                                                    <p>1. Check if all items for return are correct and complete including the accessories, and/or documentation included in the received product.</p>
                                                    <p>2. Securely tape the products and wrap them with at least 1-2 rolls of bubble wrap or newspaper. Make sure to snug the packaging according to the product’s shape.
                                                    <p>3. Once the product is properly wrapped, place it inside a corrugated box of the correct size. Do not use an oversized or smaller box.
                                                    <p>4. Wrap the item/s with at least 1-2 rolls of bubble wrap or newspaper, then securely seal the box with tape. If using pouch packaging, ensure that you use the correct size of the pouch for the product. Tuck and snug the pouch according to the size of the package with enough/minimal space for the product. Leave enough space to paste the air waybill. Do not loosely place the package inside the courier pouch with too much excess area.
                                                    <p>5. Write the Request ID on the pouch or box packaging for easier tracking and identification of your return parcel.
                                                    <p>if the package is receive by the company here is the explanation:</p>
                                                    <li>Go Dental receives the return item and performance quality check process to ensure return acceptance conditions are met and the reason for return is valid. Also, it depends on the company if they will send a new item or if the customer would send back the defected item back to the company.</li>
                        </div>
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
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-9" aria-expanded="false" aria-controls="faq-accordion-collapse-9"> What does the status of my package mean? </button>
                        </div>
                        <div id="faq-accordion-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-9" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"><p><b><i>items purchased from Go Dental: </p></b></i>
                                                <p>1. <b>Packed by the company/warehouse-</b> Your item has been packed but is still waiting to be handed over to the company courier, either via pickup or drop off. </p>
                                                <p>2. <b>Shipped-</b> Your package is now being shipped by the company courier. It may take some time because of the product checkup to make sure that the items are well packed. </p>
                                                <p>3. <b>Out for delivery-</b> Your package is now out for delivery. Delivery should be within the same day or the next day depending of the location of the buyer. </p>
                                                <p>4. <b>Delivered-</b> Your order has been successfully handed to you.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-10" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10"> How can I change my delivery address? </button>
                        </div>
                        <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-10" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p> You may change your addresses by doing these guidelines: </p>
                                            <p>1. By clicking the profile icon, you can select the <b>“Manage account” </b> to be directed to the Profile Information page. </p>
                                            <p>2. Click on the <b>“Address Book” </b> to be direct to the page to input an address. </p>
                                            <p>3. By clicking either <b>“Add New Address”</b> you can apply address you want to input, by clicking <b>“Edit ”</b> your current address will be edited to your specific choose of address, or by clicking <b>“Delete”</b> you can remove the address you don’t like to use. </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-11" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11"> What do I do if my order item is missing when it arrived to me? </button>
                        </div>
                        <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-11" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p> by following these steps:</p>
                                                        <p>1. If your order item is delivered to you but missing an item you can contact the company via email or contact number.</p>
                                                        <p>2. You can also file a return/exchange request from the company to notify that your item is missing.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-12" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12"> How do I check the proof of delivery of my order? </button>
                        </div>
                        <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-12" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>To check your item’s proof of delivery, go to:</p>
                                                <p>1. By clicking the <b>“Profile Icon”</b> you can select the <b>“My Orders”</b> to be directed to the page.</p>
                                                <p>2. By checking the <b>“Status”</b> of my orders if it’s received or not you can notify the company if the order it’s not received.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box mt-6">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Payment:
                    </h2>
                </div>
                <div id="faq-accordion-4" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-13" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-13" aria-expanded="false" aria-controls="faq-accordion-collapse-13"> What are the payment methods available?  </button>
                        </div>
                        <div id="faq-accordion-collapse-13" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-13" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>To give you some options we offer multiple payment methods, and they are:</p>
                                        <li><b>Cash on Delivery</b></li>
                                        <p>Cash on Delivery or (COD) is a payment method offered by Go Dental that allows you to pay for the item/s you have ordered <b><i>only when it gets delivered. </i></b>For your convenience, we highly recommend that you prepare the exact amount for payment as our delivery may not have change on hand.</p>
                                        <li><b>Credit/ Debit Card</b></li>
                                        <p>Go Dental accepts all major local credit and debit cards that are supported by VISA, and Mastercard. Samples of Cards that can be use is: <b><i>BPI, BDO, Security Bank, etc.</i></b></p>
                                        <li><b>PayPal</b></li>
                                        <p>You can also pay securely using PayPal by simply choosing it as a preferred option for payment.</p>

                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-14" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-14" aria-expanded="false" aria-controls="faq-accordion-collapse-14"> Do you keep my credit/debit card details? </button>
                        </div>
                        <div id="faq-accordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-14" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>Your security is important to us, and we take it seriously. Every credit/debit card transaction occurs within a secure environment. We do not retain your credit/debit card information after your order is complete; it is submitted to our banks.</p>
                                        <p>If your using a credit/debit card which is not under your name, please ensure that you get the consent of the Credit/Debit Card Holder as Go Dental validates these type of transactions by calling the primary Account Holder.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-15" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-15" aria-expanded="false" aria-controls="faq-accordion-collapse-15"> Which Currencies do you accept? </button>
                        </div>
                        <div id="faq-accordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-15" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>As of now our prices are in the Philippines Peso (PhP), hence, you may only use the Philippine Peso currency in placing your order.
                                        Also, by using your international credit/debit cards or PayPal the currency can be converted to the Philippine Pesos to ensure you that you can purchase your order.</p> </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-16" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-16" aria-expanded="false" aria-controls="faq-accordion-collapse-16"> How do I proceed to checkout my Go-Dental Cart? </button>
                        </div>
                        <div id="faq-accordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-16" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> <p>By following these steps, you can purchase an item of choice:</p>
                                            <p>1. Select a few products you want to order. Also, add how much quantity of the item you want to add.</p>
                                            <p>2. “Add to Cart” to be able to see the list of products you want to buy. </p>
                                            <p>3. Click the “Cart Icon” near the top right corner to be directed to the Cart page.</p>
                                            <p>4. Check the selected items you want to buy by clicking the “Proceed to Checkout” you will be directed to the Shipping Address page.</p>
                                            <p>5. In the Shipping Address page you can “Select a Payment Method” you want to choose for example: <i>(Cash on Delivery, PayPal, and Debit/Credit Card)</i>.</p>
                                            <p>6. After choosing a payment method, and entering all the details for your payment you can proceed on paying until it state “Successfully Checkout” </p>
                                            <p>7. Then Proceed to the “My Orders” page to be able to see the status of your order. Just wait for the company to approve your order.</p>
                        </div>
                        </div>
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
