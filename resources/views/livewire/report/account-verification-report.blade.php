<div>
    <div class="intro-y flex justify-between items-center mt-8">
        <div>
            <h2 class="text-lg font-medium mr-auto">
                <a href="{{ Route('report.index') }}" class="mr-2 btn">←</a>Account Verification
            </h2>
        </div>
        @can('report_export')
            <div>
                 <a href="{{ Route('exportAccountVerification') }}" class="btn btn-primary">Export</a>
            </div>
        @endcan
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Main Body Chart -->
                <div class="col-span-12 xl:col-span-8 mt-6">
                    <div class=" box mt-5 w-full">
                        <div class="p-5" >
                            <div class="flex justify-center items-center ">
                                <div class="w-1/2 h-1/2" wire:ignore>
                                    <canvas id="Account"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END: Main Body Chart -->
                <!-- BEGIN: Table Data -->
                <div class="col-span-12 xl:col-span-4 2xl:mt-5">
                    <div class="intro-y box  mt-12 sm:mt-5">
                        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Verified User Report
                            </h2>
                        </div>
                        <div class="p-5">
                            <div class="overflow-x-auto">
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <td class="whitespace-nowrap">Type</td>
                                            <td class="whitespace-nowrap text-center">Total</td>
                                            <td class="whitespace-nowrap text-center">Action</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="whitespace-nowrap">Verified</td>
                                            <td class="whitespace-nowrap text-center">{{$verified}}</td>
                                            <td class="whitespace-nowrap text-center"><a href="{{ Route('report.VerifiedAccount') }}">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap">Non-Verified</td>
                                            <td class="whitespace-nowrap text-center">{{$nonverified}} </td>
                                            <td class="whitespace-nowrap text-center"><a href="{{ Route('report.NonVerifiedAccount') }}">View Details</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Table Data -->
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            var accountlabel = {{ Js::from($accountlabel) }};
            var accountdataset =  {{ Js::from($accountdataset) }};
            const data = {
                labels: accountlabel,
                datasets: [{
                    label: 'User Types',
                    data: accountdataset,
                    backgroundColor: [
                    'rgb(30,95,78)',
                    'rgb(250,209,44)',
                    ],
                    hoverOffset: 4
                }]
            };

            const config = {
                type: 'doughnut',
                data: data,
            };

            const GenderChart = new Chart(
                document.getElementById('Account'),
                config
            );

        </script>
    @endpush
</div>
