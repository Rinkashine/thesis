<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Sales By Product</title>
</head>
<style type="text/css">
  @page {
        margin: 0cm 0cm;
    }
    @font-face {
            font-family: Arial;
            src: url(/path/to/Arial.ttf);
        }
    /** Define now the real margins of every page in the PDF **/
    body {
        margin-top: 2cm;
        font-family: "Arial", sans-serif;
    font-size: 12pt;
        margin-bottom: 2cm;
    }

    /** Define the header rules **/
    header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;

        /** Extra personal styles **/
        text-align: center;
    }

    .header-title {
        text-align: center;
        margin: 0;
        display: block;
    }

    .mt-10{
        margin-top: 2.5rem;
    }
    .text-light{
        font-weight: 300;
    }
    .text-right{
        text-align: right;
    }
    .text-left{
        text-align: left;
    }
    .text-center{
        text-align: center;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .pt-x-50{
        padding-top:50px;
        padding-bottom:50px;
        padding-left:50px;
        padding-right:50px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;
    }
    .w-85{
        width:85%;
    }
    .w-80{
        width:80%;
    }
    .w-30{
        width:30%;
    }
    .w-15{
        width:15%;
    }
    img{
        width:100px;
        height:100px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .text-white{
        color: white;
    }
    .border{
        border:1px solid black;
    }
    .th-color-dark{
        background-color: #327e62;
    }
    table tr,th,td{
        border: 0px solid black;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
    .stripe:nth-child(odd) {
        background-color: #cddbd7 ;
    }
    .stripe:nth-child(even) {
        background-color: #f8fafc ;
    }

</style>
<body class="pt-x-50">
    <header class="header">
        <div >
            <h2 class="header-title">Roman Dental Suppliees Trading</h2>
            <h5 class="header-title">Address</h5>
            <h5 class="header-title">Contact</h5>
        </div>
        <hr>
    </header>
    <main>
        <h3>Sales By Product</h3>
        <div class="mt-10 table-section bill-tbl w-100">
            <table class="table mt-10 w-100">
                <thead>
                    <tr class="text-white">
                        <th class="w-50 th-color-dark">Name</th>
                        <th class="w-50 th-color-dark">Quantity</th>
                        <th class="w-50 th-color-dark">Total Sales</th>
                    </tr>
                </thead>
               <tbody>
                @foreach($products as $product)
                        <tr class="stripe">
                            <td>{{ $product->name }}</td>
                            <td class="text-center" style="font-family: Arial, sans-serif; font-size: 0.8rem;">&#x20B1;{{ number_format($product->quantity,2) }}</td>
                            <td class="text-center">{{ number_format($product->total_sales) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </main>

    <script type="text/php">
        if (isset($pdf)) {
            $pdf->page_script('
                 if ($PAGE_COUNT > 1) {
                     $font = $fontMetrics->getFont("Lato", "regular");
                     $pdf->page_text(522, 770, "Page {PAGE_NUM} / {PAGE_COUNT}", $font, 12, array(.5,.5,.5));
                }
            ');
       }
    </script>
</html>
