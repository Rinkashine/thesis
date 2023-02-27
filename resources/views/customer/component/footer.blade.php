 <!-- Footer -->


 <footer class="pt-10 bg-success">
    <div>
      <div class="flex flex-col w-10/12 mx-auto gap-9 md:flex-row">
        <!-- GO DENTAL / Div1 -->
        <div class="flex-auto text-gray-200 intro-x md:w-72 ">
            <p class="mb-4 text-lg font-semibold md:text-center">GO DENTAL</p>
            <span class="text-xl font-light mb-7">
            Launched in 2023, Go Dental is an eCommerce platform in the Philippines tailored for easy, secure, fast dental product shopping experience.
            </span>
        </div>
        <!-- Contact Us / Div2 -->
        <div class="text-gray-200 intro-x md:w-48">
            <a href="{{ Route('contact') }}" class="mb-4 text-lg font-semibold">Contact Us</a>
              <ul>
                <div class="mb-4">
                    <li>
                        <div class="flex items-center gap-1">
                            <i class="text-base fas fa-phone"></i>
                            <a href="javascript:void(0)" class="text-base leading-loose text-body-color hover:text-primary">
                                +639 (612) 126 52
                            </a>
                        <div>
                    </li>
                    <li>
                        <div class="flex items-center gap-1 mb-2 intro-x">
                            <i class="text-base fas fa-envelope"></i>
                            <a href="javascript:void(0)" class="text-base leading-loose text-body-color hover:text-primary">
                                godentalsph@gmail.com
                            </a>
                        </div>
                    </li>
                </div>
              </ul>
              <!-- Legal / Div2.1 -->
              <h4 class="mb-3 text-lg font-semibold">Legal</h4>
              <ul>
                <li>
                    <a href="{{ Route('terms') }}" class="inline-block mb-2 text-base leading-loose text-body-color relative group">
                        <span>Terms and Condition</span>
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-slate-100 transition-all group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ Route('privacy') }}" class="inline-block mb-2 text-base leading-loose text-body-color relative group">
                        <span>Privacy Policy</span>
                        <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-slate-100 transition-all group-hover:w-full"></span>
                    </a>
                </li>
              </ul>
        </div>
        <!-- Customer Care / Div3 -->
        <div class="text-gray-200 intro-x md:w-48">
            <h4 class="mb-4 text-lg font-semibold text-gray-200">Customer Care</h4>
            <ul>
              <li>
                <a href="{{ Route('faq') }}" class="inline-block mb-2 text-base leading-loose text-body-color relative group">
                    <span>Products & Account</span>
                    <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-slate-100 transition-all group-hover:w-full"></span>
                </a>
              </li>
              <li>
                <a href="{{ Route('faq') }}" class="inline-block mb-2 text-base leading-loose text-body-color relative group">
                  <span>Return & Exchanges</span>
                  <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-slate-100 transition-all group-hover:w-full"></span>
                </a>
              </li>
              <li>
                <a href="{{ Route('shipping') }}"class="inline-block mb-2 text-base leading-loose text-body-color relative group">
                  <span>Shipping & Delivery</span>
                  <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-slate-100 transition-all group-hover:w-full"></span>
                </a>
              </li>
              <li>
                <a href="{{ Route('faq') }}" class="inline-block mb-2 text-base leading-loose text-body-color relative group">
                  <span>Payment</span>
                  <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-slate-100 transition-all group-hover:w-full"></span>
                </a>
              </li>
              <li>
                <a href="{{ Route('about') }}" class="inline-block mb-2 text-base leading-loose text-body-color relative group">
                  <span>About Us</span>
                  <span class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-slate-100 transition-all group-hover:w-full"></span>
                </a>
              </li>
            </ul>
        </div>
        <!-- Our Address / Div4 -->
          <div class="intro-x md:w-96">
            <h4 class="mb-2 text-lg font-semibold text-gray-200 intro-x">Our Address</h4>
                <p class="inline-block mb-2 text-base leading-loose text-gray-200">
                Grand Royale Subdivision, Brgy. Pinagbakahan, City of Malolos
                Bulacan 3000
                </p>
                <h4 class="mb-4 text-lg font-semibold text-center text-gray-200">Follow Us</h4>
                <div class="flex flex-row mx-auto justify-evenly">
                    <div class="flex flex-none hover:scale-125 justify-center w-fit h-fit px-1 bg-white rounded-xl">
                        <a href="{{ url('https://www.instagram.com/godentalsph/') }}" class="">
                            <i class="text-5xl text-purple-500 hover:text-purple-600 fa-brands fa-instagram"></i>
                        </a>
                    </div>
                    <div class="flex flex-none hover:scale-125 justify-center w-12 h-12 bg-white rounded-full">
                        <a href="{{ url('https://www.facebook.com/GoDentals') }}" class="">
                            <i class="text-5xl text-blue-600 hover:text-blue-700 fa fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="flex flex-none hover:scale-125 justify-center w-fit h-fit bg-white rounded-full">
                        <a href="{{ url('https://twitter.com/GoDentals?t=QY7sxhxreDBsxUHKBwxEbA&s=09') }}" target="_blank" class="hover:text-primary">
                            <i class="text-5xl text-sky-400 hover:text-sky-500 fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
          </div>
      </div>
    </div>
</footer>
