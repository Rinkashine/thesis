<div>
    <div class="flex items-center justify-center">
        <div class="px-1 pt-1 intro-y box mt-7 " style="width: 60rem">
            <div class="flex items-center px-5 py-5 border-b sm:py-3 border-slate-200/60 dark:border-darkmode-400">
                <h2 class="mr-auto text-base font-medium">
                    Product Reviews
                </h2>
            </div>
            @forelse ($reviews as $rev)
                <div class="flex flex-col border-b lg:flex-row border-slate-200/60 dark:border-darkmode-400">
                    <div class="mt-5 ">
                        <div class="flex items-center px-5">
                                <div class="star">
                                    <div class="star-bg">
                                        @for($x=0; $x<$rev->rate; $x++)
                                            <i class="fa fa-star"> </i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        <div class="flex justify-start gap-2">
                            <div class="w-12 h-12 pt-3 pl-5 image-fit">
                                <img class="rounded-full" src="{{ asset('dist/images/undraw_pic.svg') }}" alt=""  >
                            </div>
                            <div>
                                <div class="flex items-center px-5 pt-3">
                                    <div class="text-base"> {{ $rev->customer_name }} <span class="text-xs rounded-md text-primary">Verified Purchase</span></div>
                                </div>
                                <div class="flex items-center px-5">
                                    <div class="text-base text-slate-500">{{$rev->created_at->diffForHumans()  }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center px-5 py-4">
                            <div class="text-base text-black">{{ $rev->comment }}</div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="pt-5 pl-5 pr-5  font-medium flex justify-center text-slate-500">
                    This product has no reviews
                </div>
                <div class="pb-5 pl-5 pr-5 font-medium flex justify-center text-slate-500">
                    Let others know what do you think and be the first to write a review
                </div>
            @endforelse
            <div>
                {{ $reviews->links() }}
            </div>
        </div>
    </div>
</div>
