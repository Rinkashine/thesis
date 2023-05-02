<div>
    <div class="intro-y flex justify-between items-center mt-8">
        <div>
            <h2 class="text-lg font-medium mr-auto">
                <a href="{{ Route('report.index') }}" class="mr-2 btn">←</a>Sales Over Time
            </h2>
        </div>
        @can('report_export')
            <div>
                <a href="{{ Route('exportsalesovertime') }}" class="btn btn-primary">Export To Excel</a>
            </div>
        @endcan
    </div>
    <div class="intro-y box mt-5 ">
        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <div>
                <div>
                    <h2 class="font-medium text-base mr-auto">
                        Chart
                    </h2>
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
                            <td class="whitespace-nowrap text-center">Year</td>
                            <td class="whitespace-nowrap text-center">Month</td>
                            <td class="whitespace-nowrap text-center">Sales</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($monthlysales as $sales)
                        <tr>
                            <td class="wwhitespace-nowrap text-center">{{ $sales->year }}</td>
                            <td class="whitespace-nowrap text-center">{{ $sales->month_name }}</td>
                            <td class="whitespace-nowrap text-center">₱{{ number_format($sales->total) }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>

        var saleschartlabel = {{ Js::from($saleschartlabel) }}
        var saleschartdataset = {{ Js::from($saleschartdataset) }}

        let randomBackgroundColor = [];
        let usedColors = new Set();

        let dynamicColors = function() {
            let r = Math.floor(Math.random() * 255);
            let g = Math.floor(Math.random() * 255);
            let b = Math.floor(Math.random() * 255);
            let color = "rgb(" + r + "," + g + "," + b + ")";

            if (!usedColors.has(color)) {
                usedColors.add(color);
                return color;
            } else {
                return dynamicColors();
            }
        };

        for (let i in saleschartlabel) {
            randomBackgroundColor.push(dynamicColors());
        }

        const data = {
        labels: saleschartlabel,
        datasets: [{
            label: 'Sales',
            data: saleschartdataset,
            backgroundColor: randomBackgroundColor,
            borderColor: randomBackgroundColor,
            borderWidth: 1
        }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                plugins: {
                    legend: false // Hide legend
                },
            },
        };

        const Sales = new Chart(
            document.getElementById('test'),
            config
        );
        //End: Sales Chart
        document.querySelector("input[type=number]")
      .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
    </script>

    @endpush



</div>
