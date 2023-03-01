<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\OrderedProduct;
class CustomerOrderedProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('ordered_products') ->insert([
            [ //1 Dental Bib/Randoms - Begin
                'customer_orders_id' => 104153205,
                'product_name' => 'Glomed Gloves',
                'price' => 490.00,
                'quantity' => 2,
            ],
            [ //2
                'customer_orders_id' => 104153205,
                'product_name' => 'Microsuper Gloves',
                'price' => 250.00,
                'quantity' => 2,
            ],
            [ //3
                'customer_orders_id' => 104153206,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 5,
            ],
            [ //4
                'customer_orders_id' => 104153207,
                'product_name' => 'Stainless Steel Impression Tray',
                'price' => 580.00,
                'quantity' => 3,
            ],
            [ //5
                'customer_orders_id' => 104153207,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 5,
            ],
            [ //6
                'customer_orders_id' => 104153208,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 5,
            ],
            [ //7
                'customer_orders_id' => 104153208,
                'product_name' => 'Well-Paste',
                'price' => 1650.00,
                'quantity' => 3,
            ],
            [ //8
                'customer_orders_id' => 104153209,
                'product_name' => 'Ligatures',
                'price' => 120.00,
                'quantity' => 8,
            ],
            [ //9
                'customer_orders_id' => 104153209,
                'product_name' => 'Micro Saliva Ejector',
                'price' => 200.00,
                'quantity' => 3,
            ],
            [ //10
                'customer_orders_id' => 104153210,
                'product_name' => 'Crimpable Hooks',
                'price' => 750.00,
                'quantity' => 10,
            ],
            [ //11
                'customer_orders_id' => 104153211,
                'product_name' => 'Tudor Chromic Absorbable Suture',
                'price' => 350.00,
                'quantity' => 4,
            ],
            [ //12
                'customer_orders_id' => 104153212,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 3,
            ],
            [ //13
                'customer_orders_id' => 104153213,
                'product_name' => 'Well-Pex',
                'price' => 1650.00,
                'quantity' => 3,
            ],
            [ //14
                'customer_orders_id' => 104153214,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 4,
            ],
            [ //15
                'customer_orders_id' => 104153215,
                'product_name' => 'Jeltrate',
                'price' => 250.00,
                'quantity' => 5,
            ],
            [ //16
                'customer_orders_id' => 104153215,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 2,
            ],
            [ //17
                'customer_orders_id' => 104153216,
                'product_name' => 'Micro Motor',
                'price' => 5000.00,
                'quantity' => 1,
            ],
            [ //18
                'customer_orders_id' => 104153216,
                'product_name' => 'Mini MBT',
                'price' => 230.00,
                'quantity' => 6,
            ],
            [ //19
                'customer_orders_id' => 104153217,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 9,
            ],
            [ //20
                'customer_orders_id' => 104153218,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //21
                'customer_orders_id' => 104153219,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //22
                'customer_orders_id' => 104153220,
                'product_name' => 'Xylocaine Pump Spray',
                'price' => 1800.00,
                'quantity' => 2,
            ],
            [ //23
                'customer_orders_id' => 104153220,
                'product_name' => 'Xylestesin',
                'price' => 1900.00,
                'quantity' => 3,
            ],
            [ //24
                'customer_orders_id' => 104153220,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 3,
            ],
            [ //25
                'customer_orders_id' => 104153221,
                'product_name' => 'Cotton Swab',
                'price' => 120.00,
                'quantity' => 3,
            ],
            [ //26
                'customer_orders_id' => 104153222,
                'product_name' => 'Densply IRM',
                'price' => 2800.00,
                'quantity' => 1,
            ],
            [ //27
                'customer_orders_id' => 104153223,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //28
                'customer_orders_id' => 104153224,
                'product_name' => 'KN-95 Mask',
                'price' =>80.00,
                'quantity' => 15,
            ],
            [ //29
                'customer_orders_id' => 104153224,
                'product_name' => 'Disposable Mask',
                'price' => 150.00,
                'quantity' => 2,
            ],
            [ //30
                'customer_orders_id' => 104153225,
                'product_name' => 'Dual Vac',
                'price' => 1950.00,
                'quantity' => 1,
            ],
            [ //31
                'customer_orders_id' => 104153226,
                'product_name' => 'Filtek Composite',
                'price' => 2300.00,
                'quantity' => 1,
            ],
            [ //32
                'customer_orders_id' => 104153227,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //33
                'customer_orders_id' => 104153228,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //34
                'customer_orders_id' => 104153229,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 20,
            ],
            [ //35
                'customer_orders_id' => 104153230,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 5,
            ],
            [ //36
                'customer_orders_id' => 104153231,
                'product_name' => 'Micro Motor',
                'price' => 5000.00,
                'quantity' => 1,
            ],
            [ //37
                'customer_orders_id' => 104153231,
                'product_name' => 'Ortho Brush',
                'price' => 30.00,
                'quantity' => 10,
            ],
            [ //38
                'customer_orders_id' => 104153231,
                'product_name' => 'Ortho Wax',
                'price' => 35.00,
                'quantity' => 4,
            ],
            [ //39
                'customer_orders_id' => 104153231,
                'product_name' => 'Prophy Paste',
                'price' => 100.00,
                'quantity' => 2,
            ],
            [ //40
                'customer_orders_id' => 104153232,
                'product_name' => 'Rubber Dam',
                'price' => 750.00,
                'quantity' => 1,
            ],
            [ //41
                'customer_orders_id' => 104153233,
                'product_name' => 'Temrex',
                'price' => 550.00,
                'quantity' => 1,
            ],
            [ //42
                'customer_orders_id' => 104153234,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 3,
            ],
            [ //43
                'customer_orders_id' => 104153235,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 8,
            ],
            [ //44
                'customer_orders_id' => 104153236,
                'product_name' => 'Standard MBT',
                'price' => 230.00,
                'quantity' => 2,
            ],
            [ //45
                'customer_orders_id' => 104153237,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //46
                'customer_orders_id' => 104153238,
                'product_name' => 'Megafil Composite',
                'price' => 600.00,
                'quantity' => 2,
            ],
            [ //47
                'customer_orders_id' => 104153238,
                'product_name' => 'Megafil Flow',
                'price' => 600.00,
                'quantity' => 2,
            ],
            [ //48
                'customer_orders_id' => 104153239,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //49
                'customer_orders_id' => 104153240,
                'product_name' => 'Mini ROTH',
                'price' => 230.00,
                'quantity' => 12,
            ],
            [ //50
                'customer_orders_id' => 104153241,
                'product_name' => 'Ligatures',
                'price' => 120.00,
                'quantity' => 4,
            ],
            [ //51
                'customer_orders_id' => 104153242,
                'product_name' => 'Hygietol',
                'price' => 120.00,
                'quantity' => 4,
            ],
            [ //52
                'customer_orders_id' => 104153243, //pending
                'product_name' => 'Headcap',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //53
                'customer_orders_id' => 104153244, //pending
                'product_name' => 'Jeltrate',
                'price' => 250.00,
                'quantity' => 2,
            ],
            [ //54
                'customer_orders_id' => 104153245, //pending
                'product_name' => 'Mirror Defogger',
                'price' => 100.00,
                'quantity' => 2,
            ],
            [ //55
                'customer_orders_id' => 104153246, //pending
                'product_name' => 'Patient Dental Record',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [ //56
                'customer_orders_id' => 104153247, //pending
                'product_name' => 'Plaster of Paris',
                'price' => 120.00,
                'quantity' => 2,
            ],
            [ //57
                'customer_orders_id' => 104153248, //pending
                'product_name' => 'Pumice Powder Mint',
                'price' => 100.00,
                'quantity' => 6,
            ],
            [ //58
                'customer_orders_id' => 104153249,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //59
                'customer_orders_id' => 104153250,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //60
                'customer_orders_id' => 104153251,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //61 Dental Bib/Randoms - End
                'customer_orders_id' => 104153252,
                'product_name' => '2-Ply Dental Bib',
                'price' => 200.00,
                'quantity' => 1,
            ],
            [ //62 - Applicator Tips - Begin
                'customer_orders_id' => 104153207,
                'product_name' => 'Applicator Tips',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//63
                'customer_orders_id' => 104153212,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//64
                'customer_orders_id' => 104153214,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//65
                'customer_orders_id' => 104153215,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//66
                'customer_orders_id' => 104153217,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//67
                'customer_orders_id' => 104153218,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//68
                'customer_orders_id' => 104153219,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//69
                'customer_orders_id' => 104153223,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//70
                'customer_orders_id' => 104153227,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//71
                'customer_orders_id' => 104153228,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//72
                'customer_orders_id' => 104153229,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//73
                'customer_orders_id' => 104153230,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//74
                'customer_orders_id' => 104153234,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//75
                'customer_orders_id' => 104153235,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//76
                'customer_orders_id' => 104153237,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//77
                'customer_orders_id' => 104153239,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//78
                'customer_orders_id' => 104153249,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//79
                'customer_orders_id' => 104153250,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//80
                'customer_orders_id' => 104153251,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],
            [//81
                'customer_orders_id' => 104153252,
                'product_name' => 'Applicator Tips',
                'price' => 100.00,
                'quantity' => 1,
            ],//Applicator Tips - EEEEEEEEEEEEEEEEEEEEEEEENNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDD
            [//82 Armstrong Castone - Begin
                'customer_orders_id' => 104153212,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//83
                'customer_orders_id' => 104153214,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//84
                'customer_orders_id' => 104153215,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//85
                'customer_orders_id' => 104153217,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//86
                'customer_orders_id' => 104153218,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//87
                'customer_orders_id' => 104153219,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//88
                'customer_orders_id' => 104153223,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//89
                'customer_orders_id' => 104153227,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//90
                'customer_orders_id' => 104153228,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//91
                'customer_orders_id' => 104153229,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//92
                'customer_orders_id' => 104153230,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//93
                'customer_orders_id' => 104153234,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//94
                'customer_orders_id' => 104153235,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//95
                'customer_orders_id' => 104153237,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//96
                'customer_orders_id' => 104153239,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//97
                'customer_orders_id' => 104153249,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//98
                'customer_orders_id' => 104153250,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//99
                'customer_orders_id' => 104153251,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],
            [//100
                'customer_orders_id' => 104153252,
                'product_name' => 'Armstrong Castone',
                'price' => 120.00,
                'quantity' => 1,
            ],//Armstrong Castone - End
            [//101 Armstrong Diestone - Begin
                'customer_orders_id' => 104153212,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153214,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153215,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153217,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153218,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153219,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153223,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153227,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153228,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153229,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153230,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153234,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153235,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153237,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153239,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153249,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153250,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153251,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153252,
                'product_name' => 'Armstrong Diestone',
                'price' => 60.00,
                'quantity' => 1,
            ],//Armstrong Diestone - End
            [//120 Articaine - Begin
                'customer_orders_id' => 104153212,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153214,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153215,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153217,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153218,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153219,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153223,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153227,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153228,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153229,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153230,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153234,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153235,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153237,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153239,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153249,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153250,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153251,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153252,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 1,
            ],//Articaine - End
            [//139 Articulating Paper - Begin
                'customer_orders_id' => 104153212,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153214,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153215,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153217,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153218,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153219,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153223,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153227,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153228,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153229,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153230,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153234,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153235,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153237,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153239,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153249,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153250,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153251,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],
            [
                'customer_orders_id' => 104153252,
                'product_name' => 'Articulating Paper',
                'price' => 350.00,
                'quantity' => 1,
            ],//Articulating Paper - End


        ]);
    }
}
