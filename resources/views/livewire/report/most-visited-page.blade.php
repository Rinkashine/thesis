<div>
    <div class="intro-y flex justify-between items-center mt-8">
        <div>
            <h2 class="text-lg font-medium mr-auto">
                <a href="{{ Route('report.index') }}" class="mr-2 btn">←</a>Sales Over Time
            </h2>
        </div>
        <div>
            <a href="{{ Route('exportsalesovertime') }}" class="btn btn-primary">Export To Excel</a>
        </div>
    </div>
    <div class="intro-y box mt-5 ">
        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <div>
                <div>
                    <h2 class="font-medium text-base mr-auto">
                        Chart
                    </h2>
                </div>
                <div>
                    <div>
                        <label for="">Start Date:</label>
                        <input type="date" wire:model="startdate" class="form-control" name="" id="">

                    </div>
                    <div>
                        <label for="">End Date:</label>
                        <input type="date" wire:model="enddate" class="form-control" name="" id="">

                    </div>

                </div>

            </div>


        </div>
        <div class="p-5">
            <canvas id="test" height="80px"></canvas>

        </div>
    </div>
    <div class="intro-y box mt-5 ">
        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Data
            </h2>
        </div>
        <div class="p-5">
            <div class="overflow-x-auto">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <td class="whitespace-nowrap text-center">Rank</td>
                            <td class="whitespace-nowrap text-center">Page</td>
                            <td class="whitespace-nowrap text-center">Views</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mostvisitedpage as $page)
                            <tr>
                                <td class="whitespace-nowrap text-center">{{ $loop->iteration }}</td>
                                <td class="whitespace-nowrap text-center"><a href="{{ $page['url']}}">{{ $page['pageTitle'] }}</a></td>
                                <td class="whitespace-nowrap text-center">{{ $page['pageViews'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>


    </script>

    @endpush



</div>
