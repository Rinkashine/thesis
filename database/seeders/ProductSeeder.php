<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product') ->insert([
            [
                'name' => 'Glomed Gloves',
                'category_id' => 1,
                'brand_id' => 1,
                'stock' => 10,
                'stock_warning' => 5,
                'SKU' => 'GLG001',
                'cprice' => 450,
                'sprice' => 490,
                'weight' => 50,
                'status' => 1,
                'description' => "<p>The Glomed Disposable Non Sterile Gloves is powder-free and non-sterile latex and is both ambidextrous and suitable for single use.</p><br>
                                  <p>Manufactured in Malaysia.</p><br>
                                  <p>100 Pcs per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Microsuper Gloves',
                'category_id' => 1,
                'brand_id' => 2,
                'stock' => 10,
                'stock_warning' => 5,
                'SKU' => 'MIG001',
                'cprice' => 220,
                'sprice' => 250,
                'weight' => 50,
                'status' => 1,
                'description' => "<p>Microsuper Glove is a disposable device non sterile gloves.</p><br>
                                  <p>Intended for medical purposes that are worn on the examiner’s hand to prevent contamination between the patient and examiner.</p><br>
                                  <p>100 Pcs per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'HCD Gloves',
                'category_id' => 1,
                'brand_id' => 3,
                'stock' => 12,
                'stock_warning' => 5,
                'SKU' => 'HCG001',
                'cprice' => 350,
                'sprice' => 400,
                'weight' => 50,
                'status' => 1,
                'description' => "<p>HCD Gloves is a latex examination gloves, Powder Free, Single use, Non Sterile Ambidextrous.</p><br>
                                  <p>Ideal for medical, dental, wellness, hospitality, restaurant, food processing and many more.</p><br>
                                  <p>Manufactured in Malaysia</p><br>
                                  <p>100 Pcs per box</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Defenders Mask',
                'category_id' => 2,
                'brand_id' => 4,
                'stock' => 5,
                'stock_warning' => 3,
                'SKU' => 'DEM001',
                'cprice' => 600,
                'sprice' => 750,
                'weight' => 20,
                'status' => 1,
                'description' => "<p>Defenders Masks are the standard for surgical and procedure masks.</p><br>
                                  <p>They are a cost-effective solution for general use, particularly in low-fluid cases.</p><br>
                                  <p>These are disposable, single use, and non-sterile.</p><br>
                                  <p>Made with Spun bond Polypropylene, Middle Fabric, Melt-blown Polypropylene Spandex, Polypropylene wrapped iron wire.</p><br>
                                  <p>100 Pcs per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Disposable Mask',
                'category_id' => 2,
                'brand_id' => 41,
                'stock' => 13,
                'stock_warning' => 5,
                'SKU' => 'DIM001',
                'cprice' => 85,
                'sprice' => 150,
                'weight' => 20,
                'status' => 1,
                'description' => "<p>It covers the user's nose and mouth and provides a physical barrier to fluids and particulate materials.</p><br>
                                  <p>50 Pcs, 3 Ply disposable face mask or a surgical mask.</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'KN-95 Mask',
                'category_id' => 2,
                'brand_id' => 41,
                'stock' => 5,
                'stock_warning' => 20,
                'SKU' => 'KN9001',
                'cprice' => 40,
                'sprice' => 80,
                'weight' => 20,
                'status' => 1,
                'description' => "<p>It covers the user's nose and mouth and provides a physical barrier to fluids and particulate materials.</p><br>
                                  <p>10 Pcs, 4 Ply disposable face mask for public use.</p> ",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => '2-Ply Dental Bib',
                'category_id' => 3,
                'brand_id' => 41,
                'stock' => 85,
                'stock_warning' => 20,
                'SKU' => '2PL001',
                'cprice' => 100,
                'sprice' => 200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>The bib is made of soft, absorbent tissue and waterproof poly-Backing.</p><br>
                                  <p>Barrerier design is to protect patients' Clothing from saliva.</p><br>
                                  <p>50 Pcs per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'WorldWork Saliva Ejector',
                'category_id' => 4,
                'brand_id' => 5,
                'stock' => 20,
                'stock_warning' => 20,
                'SKU' => 'WSE001',
                'cprice' => 120,
                'sprice' => 200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>World Work saliva ejectors are characterised by their high flexibility and total lack of bottlenecks, guaranteeing a high filtration capacity.</p><br>
                                  <p>Safe and simple shaping and easy adaptation to any kind of mouth, with the full assurance that its shape will be maintained.</p><br>
                                  <p>100 Pcs per pack.</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Micro Saliva Ejector',
                'category_id' => 4,
                'brand_id' => 41,
                'stock' => 17,
                'stock_warning' => 20,
                'SKU' => 'MSE001',
                'cprice' => 100,
                'sprice' => 200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>The great flexibility and the absence of folds ensure an excellent aspiration.</p><br>
                                  <p>The round nozzle respects the sensitive gums and avoids the aspiration of the flesh.</p><br>
                                  <p>100 Pcs per pack.</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Flexible Saliva Ejector',
                'category_id' => 4,
                'brand_id' => 41,
                'stock' => 20,
                'stock_warning' => 20,
                'SKU' => 'FSE001',
                'cprice' => 140,
                'sprice' => 250,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Flexi Silva Ejectors are easy to bend in any position.</p><br>
                                  <p>These ejectors are made for the finer work.</p><br>
                                  <p>The Flexible Saliva Ejectors can not be sterilized.</p><br>
                                  <p>100 Pcs per pack.</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Surgical Sunction Tip',
                'category_id' => 4,
                'brand_id' => 41,
                'stock' => 19,
                'stock_warning' => 20,
                'SKU' => 'SST001',
                'cprice' => 12,
                'sprice' => 20,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Simple design with smooth edges gives comfort and safety for your patients.</p><br>
                                  <p>Sold per piece</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Armstrong Diestone',
                'category_id' => 5,
                'brand_id' => 6,
                'stock' => 81,
                'stock_warning' => 20,
                'SKU' => 'ARD001',
                'cprice' => 35,
                'sprice' => 60,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Armstrong Die stone is used to fabricate high-strength and abrasion-resistant dies used in fabricating fixed restorations</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Armstrong Castone',
                'category_id' => 5,
                'brand_id' => 6,
                'stock' => 81,
                'stock_warning' => 20,
                'SKU' => 'ARC001',
                'cprice' => 80,
                'sprice' => 120,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Armstrong cast stone is used for casting shoe, tire impressions, to make crowns, fixed bridges and dentures.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Plaster of Paris',
                'category_id' => 5,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'PLP001',
                'cprice' => 90,
                'sprice' => 120,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Plaster of paris, quick-setting gypsum plaster consisting of a fine white powder (calcium sulfate hemihydrate), which hardens when moistened and allowed to dry.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Cyanamid Surgical Silk',
                'category_id' => 6,
                'brand_id' => 7,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'CYS001',
                'cprice' => 55,
                'sprice' => 85,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>It indicated for use in general soft tissue approximation and/or ligation, including use in cardiovascular, ophthalmic, and neurological procedures.</p><br>
                                  <p>Sold per piece</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Denject Disposable Needles',
                'category_id' => 10,
                'brand_id' => 8,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DDN001',
                'cprice' => 200,
                'sprice' => 300,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Tri-bevel point for easy tissue penetration without coring</p><br>
                                  <p>Round cutting edge protecting the gum</p><br>
                                  <p>Silicone coating substantially reduces pain and tissue trauma</p><br>
                                  <p>Special heat treatment of pipes makes Denject super-elastic</p><br>
                                  <p>100 Pcs per box.</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Misawa Medical Disposable Needle',
                'category_id' => 10,
                'brand_id' => 9,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'MMD001',
                'cprice' => 220,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Misawa Dental injection needles needles manufactured with our superior ultra-ﬁne diameter processing technology are not only thin and sharp, but are of appropriate length and hardness to ensure precision in the work of the dentist.</p><br>
                                  <p>100 Pcs per box.</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Vject Disposable Needles',
                'category_id' => 10,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'VDN001',
                'cprice' => 200,
                'sprice' => 300,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Silicone coating substantially reduces pain and tissue trauma.</p><br>
                                  <p>High tech steel tube, safe, non-toxic, pyrogenic free</p><br>
                                  <p>Tri-Bevel point for easy tissue penetration without coring</p><br>
                                  <p>The round cutting edge protecting the gum</p><br>
                                  <p>100 Pcs per box.</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Tudor Chromic Absorbable Suture',
                'category_id' => 6,
                'brand_id' => 10,
                'stock' => 36,
                'stock_warning' => 20,
                'SKU' => 'TCA001',
                'cprice' => 180,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for holding the body tissues together after a surgery or treatment caused by injury or wound.</p><br>
                                  <p>12 Pcs per box.</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Tudor Silk Non-Absorbable Suture',
                'category_id' => 6,
                'brand_id' => 10,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'TSN001',
                'cprice' => 180,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for general soft tissue approximation and/or ligation, including use in cardiovascular, ophthalmic, and neurological procedures.</p><br>
                                  <p>12 Pcs per box.</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dochem Gutta Percha',
                'category_id' => 7,
                'brand_id' => 11,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DGP001',
                'cprice' => 125,
                'sprice' => 200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Uniformly hand-jig rolled.Carefully graduated sizes and tapersSterile and highly absorbent.</p><br>
                                  <p>Firm yet flexible for easy application.</p><br>
                                  <p>Color coded tips for easy identification of sizes.</p><br>
                                  <p>6 sizes fit all Round Box Packages</p>
                                  <p>Excellent radiopacity</p>
                                  <p>200 points per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Paper Point',
                'category_id' => 7,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'PAP001',
                'cprice' => 125,
                'sprice' => 200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Uniformly hand-jig rolled.Carefully graduated sizes and tapersSterile and highly absorbent.</p><br>
                                  <p>Firm yet flexible for easy application.</p><br>
                                  <p>Color coded tips for easy identification of sizes.</p><br>
                                  <p>6 sizes fit all Round Box Packages</p>
                                  <p>Excellent radiopacity</p>
                                  <p>200 points per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Thomas L-25mm K-Files',
                'category_id' => 7,
                'brand_id' => 12,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'TLK001',
                'cprice' => 285,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Blade Grinded With A Square Section Then Twisted In Order To Obtain Cutting Power And Flexibility.</p><br>
                                  <p>Helix Angle Higher Than On Reamer.</p>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Well-Pex',
                'category_id' => 7,
                'brand_id' => 13,
                'stock' => 37,
                'stock_warning' => 20,
                'SKU' => 'WEP001',
                'cprice' => 1500,
                'sprice' => 1650,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Oil-Based Calcium Hydroxide Paste with Iodoform</p><br>
                                  <p>Root canal filling material for the infected root canal. Contains Calcium Hydroxide and Iodoform mainly, having good radipacity and antibacterial characteristics.</p><br>
                                  <p>Very stable without any solidification or separation and highly flowable paste premixed in a convenient syringe. Also has excellent accessibility to the apex and biocompatibility to the periapical tissue.</p><br>
                                  <p>Sold per item</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Well-Paste',
                'category_id' => 7,
                'brand_id' => 13,
                'stock' => 37,
                'stock_warning' => 20,
                'SKU' => 'WEP002',
                'cprice' => 1500,
                'sprice' => 1650,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Water-Based Calcium Hydroxide Paste with Barium Sulfate</p><br>
                                  <p>Root canal filling material for the infected root canal. Contains Calcium Hydroxide and Barium Sulfate mainly, having radiopacity and antibacterial characteristics</p><br>
                                  <p>Stable without any solidification or separation and a highly-flowable premixed paste in a convenient syringe. Also has excellent accessibility to the apex of biocompatibility to the periapical tissue</p><br>
                                  <p>Sold per item</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Well-Root',
                'category_id' => 7,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'WER001',
                'cprice' => 4000,
                'sprice' => 4150,
                'weight' => 30.4,
                'status' => 1,
                'description' => "<p>Convenient premixed ready to use injectable bioceramic paste developed for the permanent obturation of root canals.</p><br>
                                  <p>Calcium silicate composition, which requires the presence of moisture to set and harden.</p><br>
                                  <p>Does not shrink during setting and demonstrates excellent physical properties.</p><br>
                                  <p>Sold per item</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Well-Prep',
                'category_id' => 7,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'WEP003',
                'cprice' => 1400,
                'sprice' => 1550,
                'weight' => 30.4,
                'status' => 1,
                'description' => "<p>Well prep containing ethylenediamine Tetraacetic acid (EDTA) As a chelating agent allows efficient cleaning and easier preparation of the root canal.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Prophy Brush',
                'category_id' => 8,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'PRB001',
                'cprice' => 400,
                'sprice' => 450.00,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for polishing and brightening of both the dental surface and composites, temporary cements</p><br>
                                  <p>Sold per set</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Prophy Cup',
                'category_id' => 8,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'PRC001',
                'cprice' => 520,
                'sprice' => 550,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for polishing along the gingival margin and interproximal areas, working on tooth contour and accessing harder to reach areas.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Prophy Paste',
                'category_id' => 8,
                'brand_id' => 41,
                'stock' => 38,
                'stock_warning' => 20,
                'SKU' => 'PRP001',
                'cprice' => 55,
                'sprice' => 100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for polishing patients' teeth during standard prophy appointments.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'V-Varnish',
                'category_id' => 8,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'PLV001',
                'cprice' => 90,
                'sprice' => 110,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for preventing tooth decay, slow it down, or stop it from getting worse.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Pumice Powder',
                'category_id' => 8,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'PUP001',
                'cprice' => 80,
                'sprice' => 100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for assisting dental technicians obtain a smooth surface.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Pumice Powder Mint',
                'category_id' => 8,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'PPM001',
                'cprice' => 80,
                'sprice' => 100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for assisting dental technicians obtain a smooth surface.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Taxi Solution',
                'category_id' => 8,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'TAS001',
                'cprice' => 80,
                'sprice' => 100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for deep cleaning of any stains on the teeth.</p><br>
                                  <p>Sold per bottle</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'C-Bond',
                'category_id' => 9,
                'brand_id' => 14,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'CBO001',
                'cprice' => 780,
                'sprice' => 850,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>C-Bond is a bonding for the total-etch-technique with anexcellent adhesion to dentin and enamel.</p><br>
                                  <p>The material shows a good flowable consistency and is easy to use.</p><br>
                                  <p>C-Bond also adheres on glass-ionomer linings.</p><br>
                                  <p>Intended for ensuring a safe adhesion between the tooth and composites.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Unibond',
                'category_id' => 9,
                'brand_id' => 15,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'UNI001',
                'cprice' => 310,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Unibond is very hydrophilic and effectively penetrates the network of collagen fibers to ensure perfect spreading thereby avoiding post-operative sensitivity.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'U-Bond',
                'category_id' => 9,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'UBO001',
                'cprice' => 2150,
                'sprice' => 2300,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>U-Bond is a one-component self-etching light-cured adhesive designed to bond</p><br>
                                  <p>Bonding of direct restoration of the composite to the tooth structure</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'BC-Plus Bond',
                'category_id' => 9,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'BPB001',
                'cprice' => 1100,
                'sprice' => 1250,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>BC Plus is a single compound bonding agent designed to bond all classes of direct composite restorations to dentin, enamel as well as procedures involving cast metals, composite, treated porcelain and set amalgam.</p><br>
                                  <p>It is light activated adhesive based on ethanol formulation and also allows for indirect restoration procedures, due to its minimal and uniform film thickness.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Applicator Tips',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 80,
                'stock_warning' => 20,
                'SKU' => 'APT001',
                'cprice' => 75,
                'sprice' => 100.00,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Disposable Dental Micro Applicator Tips are more precise than a brush.</p><br>
                                  <p>Intended for cavity lining, etching, bonding, sealants hemostatic solutions and conditioners.</p><br>
                                  <p>Bendable ribbed handle for easy application of etchants, bonding agents, and resins.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Headcap',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'HEA001',
                'cprice' => 175,
                'sprice' => 200.00,
                'weight' => 30.4,
                'status' => 1,
                'description' => "<p>Breathable, dustproof, stops dust and microorganisms.</p><br>
                                  <p>Disposable, maintenance-free, convenient, practical, safe and hygienic.</p><br>
                                  <p>Strong quality elastic band to ensure a good and comfortable fit.</p><br>
                                  <p>100 Pcs per pack</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Mouth Mirror Head',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'MMH001',
                'cprice' => 360,
                'sprice' => 450.00,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Single use, disposable Mouth Mirror Head</p><br>
                                  <p>Sold per set</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Cottonroll',
                'category_id' => 10,
                'brand_id' => 16,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'COT001',
                'cprice' => 40,
                'sprice' => 200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Made from 100% pure white cotton to fit easily to the contours of the mouth and maintain their shape even when wet.</p><br>
                                  <p>Will not adhere to mucous membranes and contains no chemical additives, starch, cellulose or rayon fibers, making them ideal for sensitive patients. Latex free, lint free and highly absorbent.</p><br>
                                  <p>40 Pcs per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Guaze',
                'category_id' => 10,
                'brand_id' => 16,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'GUA001',
                'cprice' => 40,
                'sprice' => 100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Non-woven gauze sponges are twice as absorbent as cotton gauze sponges with the same number of plies.</p><br>
                                  <p>Soft, soothing and lint free for patient comfort.</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Cotton Swab',
                'category_id' => 10,
                'brand_id' => 16,
                'stock' => 37,
                'stock_warning' => 20,
                'SKU' => 'COT002',
                'cprice' => 40,
                'sprice' => 120,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>High-quality construction for superior safety and dependability. Highly absorbent, extra-soft cotton tips ensure patient comfort.</p><br>
                                  <p>Latex free, recyclable and biodegradable.</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Rubber Dam',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 39,
                'stock_warning' => 20,
                'SKU' => 'RUD001',
                'cprice' => 680,
                'sprice' => 750,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Used to isolate a tooth or teeth from the oral environment and to prevent migration of fluids or foreign objects into or out of the operative field.</p><br>
                                  <p>Provides a dry, visible and clean operative field</p><br>
                                  <p>Made from Natural Rubber Latex</p><br>
                                  <p>Sold per pack</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Matrix Band',
                'category_id' => 10,
                'brand_id' => 17,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'MAB001',
                'cprice' => 75,
                'sprice' => 90,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Stainless steel matrice material with good hardness and elasticity.</p><br>
                                  <p>Restoration of missing teeth shape.</p><br>
                                  <p>Work with interdental wedge.</p><br>
                                  <p>Reduce gingival overhang, recover proximal contact point.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Foot Cover',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'FOC001',
                'cprice' => 110,
                'sprice' => 150,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Foot cover resist the water, dirt, and mud, one size fits most.</p><br>
                                  <p>100 Pcs per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Celluloid Strips',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'CES001',
                'cprice' => 30,
                'sprice' => 55.00,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for class III and IV restorations in which the proximal wall of an anterior tooth is missing.</p><br>
                                  <p>Gives a bright finish to the filling when used as a restoration polisher for composites and light cured dental bonds.</p><br>
                                  <p>Sold per set</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Articulating Paper',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 81,
                'stock_warning' => 20,
                'SKU' => 'ARP001',
                'cprice' => 40,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for identifying contact points between the maxillary and mandibular teeth during all forms of natural tooth occlusal adjustments and dental prosthesis insertions.</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Finishing Strip',
                'category_id' => 10,
                'brand_id' => 17,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'FIS001',
                'cprice' => 40,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Easy-to-use system allows you to create smooth proximal surfaces.</p><br>
                                  <p>Strips are gapped at their centers for easy interproximal insertion.</p><br>
                                  <p>Precision-coated with an aluminum-oxide grit to produce a smooth restoration surface that helps prevent interproximal plaque buildup</p><br>
                                  <p>Sold per set</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Metal Strip Double Side',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'MSD001',
                'cprice' => 50,
                'sprice' => 95.00,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Stainless steel polishing strips used to polish and finish a wide range of dental materials, used to finish filling and crown borders</p><br>
                                  <p>Sold per piece</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Metal Strip Single Side',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'MSS001',
                'cprice' => 40,
                'sprice' => 85,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Stainless steel polishing strips used to polish and finish a wide range of dental materials, used to finish filling and crown borders</p><br>
                                  <p>Sold per piece</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Patient Dental Record',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'PDR001',
                'cprice' => 65,
                'sprice' => 100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>The dental record, also referred to as the patient's chart, is the official office document that records all of the treatment done and all patient-related communications that occur in the dental office.</p><br>
                                  <p>100 Pcs per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Hemospon',
                'category_id' => 10,
                'brand_id' => 18,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'HEM001',
                'cprice' => 225,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>A reabsorbable lyophilized, highly-porous, porcine, collagen, hemostatic, and healing sponge (gelatin).</p><br>
                                  <p>Absorbs 40-50 folds its own weight.</p><br>
                                  <p>Makes possible great visualization.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Cocoa Butter Paste',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'CBP001',
                'cprice' => 55,
                'sprice' => 90,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for separating medium and protective coating for the prevention of water and saliva contamination to exposed surfaces of glass ionomer cements during the first 24 hours after placement.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dual Clean',
                'category_id' => 11,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DUC001',
                'cprice' => 1800,
                'sprice' => 1950,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Highly effective multi-enzyme detergent and disinfectant solution</p><br>
                                  <p>Intended for removing organic and biological soils deposits from all types of medical and dental instruments</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dual Vac',
                'category_id' => 11,
                'brand_id' => 13,
                'stock' => 39,
                'stock_warning' => 20,
                'SKU' => 'DUV001',
                'cprice' => 1800,
                'sprice' => 1950,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Highly effective decontaminant for the cleaning, disinfecting and deodorizing of dental aspirating units and spittoon bowls.</p><br>
                                  <p>Intended for removing biofilm of all types of suction systems units by lightly one-step running.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Fuji Glass Ionomer Cement',
                'category_id' => 12,
                'brand_id' => 19,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'FGI001',
                'cprice' => 4000,
                'sprice' => 4500,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Designed for the final cementation of crown and bridge restorations. It has been refined to provide enhanced physical properties.</p><br>
                                  <p>Chemically bonds to tooth structure and metal which provides excellent strength and marginal integrity for long term restorations.</p><br>
                                  <p>Well suited for securing metal inlays, onlays, posts and orthodontic brackets.</p><br>
                                  <p>Sold per box</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Fuji II Restorative Glass Ionomer',
                'category_id' => 12,
                'brand_id' => 19,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'FRG001',
                'cprice' => 4000,
                'sprice' => 4500,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Self-cured, glass ionomer restorative featuring high resistance to water which can be finished in just 15 minutes.</p><br>
                                  <p>Its high surface hardness provides a durable restoration.</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Fuji IX Packable Restorative Posterior ',
                'category_id' => 12,
                'brand_id' => 19,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'FPR001',
                'cprice' => 4000,
                'sprice' => 4500,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>It is easy-to-use, handle and place fluoride releasing alternative to expensive compomers and composites and in many cases, amalgam.</p><br>
                                  <p>Cures extremely hard and is very wear resistant.</p><br>
                                  <p>Has a tooth-like coefficient of thermal expansion and releases significant levels of rechargeable fluoride.</p><br>
                                  <p>Sold per box</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Densply IRM',
                'category_id' => 12,
                'brand_id' => 20,
                'stock' => 39,
                'stock_warning' => 20,
                'SKU' => 'DEI001',
                'cprice' => 2650,
                'sprice' => 2800,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Designed for intermediate restorations intended to remain in place for up to one year.</p><br>
                                  <p>The eugenol content in the polymer-reinforced zinc oxide-eugenol composition gives the material sedative like qualities on hypersensitive tooth pulp and is a good thermal insulator as well.</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Temrex',
                'category_id' => 12,
                'brand_id' => 41,
                'stock' => 39,
                'stock_warning' => 20,
                'SKU' => 'TEM001',
                'cprice' => 475,
                'sprice' => 550,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Multi-Purpose Temporary Cement</p><br>
                                  <p>Sets harder-over 4000 PSI</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Tempak Zoe',
                'category_id' => 12,
                'brand_id' => 21,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'TEZ001',
                'cprice' => 220,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Multi-Purpose Temporary Cement</p><br>
                                  <p>Zinc Oxide Eugenol</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Ionocem Glass Ionomer Cement',
                'category_id' => 12,
                'brand_id' => 22,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'IGI001',
                'cprice' => 310,
                'sprice' => 380,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended as temporary filling material and luting cement, including orthodontic bracket attachment.</p><br>
                                  <p>Sold per item</p>>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'U-Cem',
                'category_id' => 12,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'UCE001',
                'cprice' => 3500,
                'sprice' => 3650,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dual-cured self-adhesive resin cement that requires no pretreatment.</p><br>
                                  <p>Easy to remove the excess cement and has higher bond strength & radiopaque.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dual-Core',
                'category_id' => 12,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DUC002',
                'cprice' => 3100,
                'sprice' => 3250,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dual setting (light and chemical) composite luting cement for luting fiber glass or metal endo posts, crowns or bridges.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'U-Bond Ortho',
                'category_id' => 12,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'UBO002',
                'cprice' => 2900,
                'sprice' => 3100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Light-cured orthodontic adhesive for attaching the orthodontic bracket.</p><br>
                                  <p>Designed to attach ceramic & metal bracket to a tooth, and its characteristic of color change after light-cure provides easy removal of remaining resin around the tooth.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Denfil Composite',
                'category_id' => 13,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DEC001',
                'cprice' => 520,
                'sprice' => 680,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Universal light-cured micro hybrid composite resin for use in both Posterior and Anterior restorations.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Denfil Flow',
                'category_id' => 13,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DEF001',
                'cprice' => 520,
                'sprice' => 680,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Light-cured radiopaque flowable composite resin with low shrinkage & good mechanical properties.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Denfil Etchant',
                'category_id' => 13,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DEE001',
                'cprice' => 60,
                'sprice' => 150,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>A Semi-gel type designed for easy etching work.</p><br>
                                  <p>Fast effect and easy removal.</p><br>
                                  <p>Leave no residues on the surface of etched tooth like silica thickened etchants.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Denfil Hybrid Kit',
                'category_id' => 13,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DHK001',
                'cprice' => 4600,
                'sprice' => 4800,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Universal light-cured hybrid composite resin for use in both posterior and anterior restorations.</p><br>
                                  <p>Designed for minimising polymerization shrinkage by inorganic fillers loading therefore it has excellent marginal sealing and surface texture.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Denfil Nano Hybrid Kit',
                'category_id' => 13,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DNH001',
                'cprice' => 5400,
                'sprice' => 5600,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Universal light-cured micro hybrid composite resin for use in both posterior and anterior restorations.</p><br>
                                  <p>Designed for minimising polymerization shrinkage by inorganic fillers loading therefore it has excellent marginal sealing and surface texture.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Denfil Composite Capsule',
                'category_id' => 13,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DCC001',
                'cprice' => 1100,
                'sprice' => 1350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Denfil is a universal light-cured micro hybrid composite resin for use in both Posterior and Anterior restorations.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Filtek Composite',
                'category_id' => 13,
                'brand_id' => 23,
                'stock' => 39,
                'stock_warning' => 20,
                'SKU' => 'FIC001',
                'cprice' => 2200,
                'sprice' => 2300,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Easier to produce exceptionally natural-looking restorations using only one shade. For multi-shade techniques, you’ll be amazed at how well it blends naturally with your patients’ shades.</p><br>
                                  <p>Nanofiller technology allows for greater polish retention for highly esthetic anterior work. Filtek Supreme Ultra is even strong enough to withstand the rigors of chewing in posterior restorations.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Filtek Flow',
                'category_id' => 13,
                'brand_id' => 23,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'FIF001',
                'cprice' => 2200,
                'sprice' => 2300,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Flowable Restorative is available in a new ergonomic syringe.</p><br>
                                  <p>Designed for improved comfort and injection molding, we’re calling our new product.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Hybrisun Composite',
                'category_id' => 13,
                'brand_id' => 24,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'HYC001',
                'cprice' => 400,
                'sprice' => 550,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Universal light curing Micro-hybrid composite for restorations in the anterior- and posterior tooth area.</p><br>
                                  <p>Made in Germany</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Hybrisun Flow',
                'category_id' => 13,
                'brand_id' => 24,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'HYF001',
                'cprice' => 400,
                'sprice' => 550,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Flowable light curing Microhybrid Composite which is X-ray opaque.</p><br>
                                  <p>Has a natural fluorescence and is used in the filling therapy for micro preparations and tooth neck defects</p><br>
                                  <p>Made in Germany</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Megafill Composite',
                'category_id' => 13,
                'brand_id' => 25,
                'stock' => 38,
                'stock_warning' => 20,
                'SKU' => 'MEC001',
                'cprice' => 510,
                'sprice' => 600,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Universal light curing Microhybrid Composite for restorations in the anterior and posterior tooth area.</p><br>
                                  <p>The fillers contain fine dental glass particles and highly dispersible silicone oxides, which are specifically treated and cover the surface with a hydrophobic layer.</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Megafill Flow',
                'category_id' => 13,
                'brand_id' => 29,
                'stock' => 38,
                'stock_warning' => 20,
                'SKU' => 'MEF001',
                'cprice' => 510,
                'sprice' => 600,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Flowable, light-curing, radiopaque microhybrid composite.</p><br>
                                  <p>Has natural fluorescence and is used in filling therapy for micropreparations and tooth neck defects, expanded fissure sealing, fixing and repairing composite and ceramic restorations and for laying the first tooth filling layer in composite restorations.</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Cavity Liner',
                'category_id' => 13,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'CAL001',
                'cprice' => 650,
                'sprice' => 770,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Light Cured Cavity Liner and based.</p><br>
                                  <p>Usable with both amalgam and composite restorations.</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Copalite Intermediatary Varnish',
                'category_id' => 13,
                'brand_id' => 26,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'CIV001',
                'cprice' => 380,
                'sprice' => 420,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Use to seal dentinal cavity tubules to reduce sensitivity due to microleakage.</p><br>
                                  <p>To prevent discolouration of the tooth from the metal ions. </p><br>
                                  <p>Sold per bottle</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Eco-S',
                'category_id' => 13,
                'brand_id' => 13,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'ECS001',
                'cprice' => 675,
                'sprice' => 780,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Longer durability, Better aspect of sealant</p><br>
                                  <p>High permeation, low viscosity</p><br>
                                  <p>Versatility, convenience, hygienic application in use</p><br>
                                  <p>Sold per pack</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'NOP Dental Needles',
                'category_id' => 10,
                'brand_id' => 27,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'NDN001',
                'cprice' => 145,
                'sprice' => 200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Virtually painless, atraumatic, and perfectly sharp to give patient maximum comfort.</p><br>
                                  <p>The cannula is coated with silicon through a special treatment.</p><br>
                                  <p>Individually packaged, Sterilized</p><br>
                                  <p>Self tap ribs placed on the outside of the hub, inside screws make for ease of use.</p><br>
                                  <p>100 Pcs per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Zeyco Topicaina',
                'category_id' => 23,
                'brand_id' => 28,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'ZET001',
                'cprice' => 275,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Topical anesthetic gel used primarily to minimize needle stick sensation</p><br>
                                  <p>Available in three flavors: Strawberry, Cherry, and Mint</p><br>
                                  <p>Sold per item</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Zeyco FD',
                'category_id' => 14,
                'brand_id' => 28,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'ZEF001',
                'cprice' => 1050,
                'sprice' => 1200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Ideal for procedures that require the hemostatic property of epinephrine</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Lidocaine Mint Ointment',
                'category_id' => 23,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'LMO001',
                'cprice' => 280,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Topical analgesia of oral mucosa before anesthetic injection.</p><br>
                                  <p>Amide-based topical anesthetic designed to improve patient’s comfort during dental procedure.</p><br>
                                  <p>Sold per bottle</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Xylocaine Pump Spray',
                'category_id' => 14,
                'brand_id' => 29,
                'stock' => 38,
                'stock_warning' => 20,
                'SKU' => 'XPS001',
                'cprice' => 1700,
                'sprice' => 1800,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for producing a temporary loss of sensation in the area where it is applied.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Xylestesin',
                'category_id' => 14,
                'brand_id' => 23,
                'stock' => 37,
                'stock_warning' => 20,
                'SKU' => 'XYL001',
                'cprice' => 1720,
                'sprice' => 1900,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Suitable for adults and children</p><br>
                                  <p>Only sulphite as a stabilizer</p><br>
                                  <p>Appropriate for adults and children</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'New Stetic Lidocaine',
                'category_id' => 14,
                'brand_id' => 30,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'NSL001',
                'cprice' => 800,
                'sprice' => 900,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Indicated to produce local anesthesia when applied through infiltration or nerve block.</p><br>
                                  <p>Has a rapid, deep, and extended anesthetic action.</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Articaine',
                'category_id' => 14,
                'brand_id' => 30,
                'stock' => 78,
                'stock_warning' => 20,
                'SKU' => 'ATR001',
                'cprice' => 1500,
                'sprice' => 1800,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Injectable anesthetic solutions used in dental treatments</p><br>
                                  <p>Intended to produce local anesthesia when administered through infiltration or nerve block.</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Lidocaine HCI Ephiniprine',
                'category_id' => 14,
                'brand_id' => 31,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'LHE001',
                'cprice' => 950,
                'sprice' => 1100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Sterile product by aseptic filling</p><br>
                                  <p>Pre-cut bilster to avoid cross contamination</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Turbocaina',
                'category_id' => 14,
                'brand_id' => 28,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'LID001',
                'cprice' => 1500,
                'sprice' => 1650,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Indicated for interventions that require immediate anesthetic effect</p><br>
                                  <p>Ideal for procedures that require the hemostatic property of epinephrine</p><br>
                                  <p>Sold per box</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dentocain',
                'category_id' => 14,
                'brand_id' => 28,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DEN001',
                'cprice' => 1500,
                'sprice' => 1650,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Mepivaciane</p><br>
                                  <p>50 Pcs per box</p><br>
                                  <p></p><br>
                                  <p></p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Tooth Mousse',
                'category_id' => 15,
                'brand_id' => 32,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'TOM001',
                'cprice' => 1100,
                'sprice' => 1200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>GC Tooth Mousse is a delicious tasting crème that contains calcium and phosphate; the major minerals teeth are made from.</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Denture Case',
                'category_id' => 15,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DEC002',
                'cprice' => 250,
                'sprice' => 450,
                'weight' => 30.4,
                'status' => 1,
                'description' => "<p>High Quality PE Material</p><br>
                                  <p>No Smell</p><br>
                                  <p>Water immersion disifection</p><br>
                                  <p>Sold per piece</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Retainer Case',
                'category_id' => 15,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'REC001',
                'cprice' => 150,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>High Quality PE Material</p><br>
                                  <p>No Smell</p><br>
                                  <p>Water immersion disifection</p><br>
                                  <p>Sold per piece</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Hygietol',
                'category_id' => 15,
                'brand_id' => 41,
                'stock' => 36,
                'stock_warning' => 20,
                'SKU' => 'HYG001',
                'cprice' => 70,
                'sprice' => 120,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Hygietol Instruments Enzymatic</p><br>
                                  <p>Non-corrosive disinfectant for dental and medical instruments</p><br>
                                  <p>Eliminates harmful microorganisms</p><br>
                                  <p>Sold per bottle</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Mirror Defogger',
                'category_id' => 15,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'MID001',
                'cprice' => 65,
                'sprice' => 100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Mirror Defogger is made to prevent image distortion and mirror fogging when using high-speed handpieces.</p><br>
                                  <p>Sold per bottle</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Self-Curing Liquid',
                'category_id' => 15,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'SCL001',
                'cprice' => 50,
                'sprice' => 100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Primarily use to activate the pink and clear dental acrylic powder</p><br>
                                  <p>Use together with self cure powder</p><br>
                                  <p>Sold per bottle</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Self-Curing Powder',
                'category_id' => 15,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'SCP001',
                'cprice' => 60,
                'sprice' => 120,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Strong, durable , life like shade, long term color stability , cadmium free.</p><br>
                                  <p>Use together with self cure liquid</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Jeltrate',
                'category_id' => 16,
                'brand_id' => 20,
                'stock' => 35,
                'stock_warning' => 20,
                'SKU' => 'JEL001',
                'cprice' => 200,
                'sprice' => 250,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>By eliminating excessive flow, Jeltrate impression materials allow your patients a level of comfort that cannot be found in other alginate impression materials.</p><br>
                                  <p>Consistent mix for very smooth models </p><br>
                                  <p>High tear strength for easy removal from undercuts without tearing</p><br>
                                  <p>Non-slump formula for patient comfort </p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dental Alginate',
                'category_id' => 16,
                'brand_id' => 33,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DEA001',
                'cprice' => 200,
                'sprice' => 250,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>It also improves impression stone-surface-impression to stone reaction elimination.</p><br>
                                  <p>It is made from the finest food grade raw materials.</p><br>
                                  <p>Silicon rubber-like characteristics and it reduces body flow for maximum patient comfort.</p><br>
                                  <p>Sold per bottle</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dental Alginate',
                'category_id' => 16,
                'brand_id' => 34,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'DEA002',
                'cprice' => 200,
                'sprice' => 250,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Makintal high precision alginate creates impressions with high dimensional accuracy free from air bubbles and voids making it possible to create visibly better primary stone or virtual models</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Hydrogum 5',
                'category_id' => 16,
                'brand_id' => 35,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'HYD001',
                'cprice' => 300,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Hydrogum 5 is the Zhermack solution for satisfying the needs of the most demanding practitioners.</p><br>
                                  <p>Its high precision in detail reproduction, which is similar to that of a silicone, helps to obtain accurate impressions.</p><br>
                                  <p>Its high dimensional stability guarantees impression accuracy for up to 120 hours.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Hydrogum',
                'category_id' => 16,
                'brand_id' => 35,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'HYD002',
                'cprice' => 300,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Hydrogum is a elastic and versatile alginate satisfies the many demands of daily clinical practice, whilst guaranteeing satisfactory results.</p><br>
                                  <p>Its high precision in detail reproduction, which is similar to that of a silicone, helps to obtain accurate impressions.</p><br>
                                  <p>Its high dimensional stability guarantees impression accuracy for up to 120 hours.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Tropicalgin',
                'category_id' => 16,
                'brand_id' => 35,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'TRO001',
                'cprice' => 300,
                'sprice' => 350,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>The chromatic variation provides the practitioner with a visual guide when processing the material for impression taking.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Surgical Handpiece',
                'category_id' => 17,
                'brand_id' => 40,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'SUH001',
                'cprice' => 800,
                'sprice' => 1200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Independent power supply with integrated generator</p><br>
                                  <p>Fatigue-free working thanks to optimal ergonomics</p><br>
                                  <p>Durable and robust due to high-quality stainless steel and scratch-resistant coating</p><br>
                                  <p>Can be dismantled for thorough cleaning</p><br>
                                  <p>Sold per set</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Micro Motor',
                'category_id' => 17,
                'brand_id' => 38,
                'stock' => 3,
                'stock_warning' => 20,
                'SKU' => 'MIM001',
                'cprice' => 4200,
                'sprice' => 5000,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Rotate Speed: 0-35,000RPM</p><br>
                                  <p>Input Voltage: AC110V-240V 50/60Hz</p><br>
                                  <p>Output: DC0-32V,0.5A</p><br>
                                  <p>Sold per set</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Dental Chair',
                'category_id' => 17,
                'brand_id' => 38,
                'stock' => 1,
                'stock_warning' => 1,
                'SKU' => 'SUN001',
                'cprice' => 110000,
                'sprice' => 125000,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>24V DC motor for chair (double armrest)</p><br>
                                  <p>Auto spittoon flushing & cup filler control system</p><br>
                                  <p>3 programs inter-lock control system (integrated circuit board)</p><br>
                                  <p>Down-mounted instrument tray with air brake</p><br>
                                  <p>Built-in floor box with main switch (moisture electric)</p><br>
                                  <p>Rotatable handpiece holder</p><br>
                                  <p>Glass spittoon</p><br>
                                  <p>Assistance holder aggregate device</p><br>
                                  <p>Foldable headrest</p><br>
                                  <p>Seamless cushion (PU)</p><br>
                                  <p>Foot controller</p><br>
                                  <p>High suction & saliva ejector system</p><br>
                                  <p>Outer water tank</p><br>
                                  <p>Imported medical water/gas pipe</p><br>
                                  <p>USB connector</p><br>
                                  <p>LED operating light</p><br>
                                  <p>LED film viewer</p><br>
                                  <p>3-way syringe (hot/cold)</p><br>
                                  <p>Sold as set</p><br>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Edgewise',
                'category_id' => 18,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'EDG001',
                'cprice' => 150,
                'sprice' => 200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontics Brackets Braces</p><br>
                                  <p>Size/Guage: .18, .22</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Mini MBT',
                'category_id' => 18,
                'brand_id' => 36,
                'stock' => 34,
                'stock_warning' => 20,
                'SKU' => 'MIM002',
                'cprice' => 180,
                'sprice' => 230,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontics Mini Brackets Braces</p><br>
                                  <p>Size/Guage: .18, .22</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Mini ROTH',
                'category_id' => 18,
                'brand_id' => 36,
                'stock' => 28,
                'stock_warning' => 20,
                'SKU' => 'MIR001',
                'cprice' => 180,
                'sprice' => 230,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Mini Roth Bracket</p><br>
                                  <p>Size/Guage: .18, .22</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Standard MBT',
                'category_id' => 18,
                'brand_id' => 36,
                'stock' => 38,
                'stock_warning' => 20,
                'SKU' => 'STM001',
                'cprice' => 180,
                'sprice' => 230,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Standard MBT Bracket</p><br>
                                  <p>Size/Guage: .18, .22</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Standard ROTH',
                'category_id' => 18,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'STR001',
                'cprice' => 180,
                'sprice' => 230,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Standard Roth Bracket</p><br>
                                  <p>Size/Guage: .18, .22</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Convertible Buccal Tubes',
                'category_id' => 19,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'CBT001',
                'cprice' => 80,
                'sprice' => 120,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Convertible Buccal Tubes</p><br>
                                  <p>Size/Guage: .18, .22</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Second Molar Buccal Tubes',
                'category_id' => 19,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'SMB001',
                'cprice' => 70,
                'sprice' => 90,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Second Molar Buccal Tubes</p><br>
                                  <p>Size/Guage: .18, .22</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Standard Buccal Tubes',
                'category_id' => 19,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'SBT001',
                'cprice' => 60,
                'sprice' => 90,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Standard Buccal Tubes</p><br>
                                  <p>Size/Guage: .18, .22</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Co Axial Wire',
                'category_id' => 20,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'CAW001',
                'cprice' => 600,
                'sprice' => 1100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Co Axial Wire</p><br>
                                  <p>Size/Guage: Standard</p><br>
                                  <p>Sold per spool</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Nickel Titanium Upper & Lower Coated Ovoid',
                'category_id' => 20,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'NTU001',
                'cprice' => 60,
                'sprice' => 100,
                'weight' => 30.4,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Upper & Lower Coated Ovoid</p><br>
                                  <p>Size/Guage: 12, 14, 16, 18, 20</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Nickel Titanium Upper & Lower Coated Square',
                'category_id' => 20,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'NTU002',
                'cprice' => 90,
                'sprice' => 150,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Upper & Lower Coated Square</p><br>
                                  <p>Size/Guage: 1616, 1622, 1722, 1725, 1822, 1825</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Nickel Titanium Upper & Lower Ovoid',
                'category_id' => 20,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'NTU003',
                'cprice' => 60,
                'sprice' => 100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Upper & Lower Ovoid</p><br>
                                  <p>Size/Guage: 12, 14, 16, 18, 20</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Nickel Titanium Upper & Lower Square',
                'category_id' => 20,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'NTU004',
                'cprice' => 90,
                'sprice' => 150,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Upper & Lower Square</p><br>
                                  <p>Size/Guage: 1616, 1622, 1722, 1725, 1822, 1825</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Open Coil Spring',
                'category_id' => 20,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'OCS001',
                'cprice' => 500,
                'sprice' => 900,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Open Coil Spring</p><br>
                                  <p>Size/Guage: 0.10, 0.12</p><br>
                                  <p>Sold per spool</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Reverse Curve Wire Ovoid',
                'category_id' => 20,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'RCW001',
                'cprice' => 150,
                'sprice' => 200.00,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Reverse Curve Wire Ovoid</p><br>
                                  <p>Size/Guage: 12, 14, 16, 18, 20, 1616, 1622</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Stainless Steel Upper & Lower Ovoid',
                'category_id' => 20,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 18,
                'SKU' => 'SSU001',
                'cprice' => 60,
                'sprice' => 100.00,
                'weight' => 30.4,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Upper & Lower Ovoid</p><br>
                                  <p>Stainless Steel</p><br>
                                  <p>Size/Guage: 12, 14, 16, 18, 20</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Stainless Steel Upper & Lower Square',
                'category_id' => 20,
                'brand_id' => 36,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'SSS002',
                'cprice' => 90,
                'sprice' => 150.00,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Upper & Lower Square</p><br>
                                  <p>Stainless Steel</p><br>
                                  <p>Size/Guage: 1616, 1622, 1722, 1725, 1822, 1825</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Nickel Titanium Upper & Lower Ovoid',
                'category_id' => 20,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'NTU005',
                'cprice' => 60,
                'sprice' => 100,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Upper & Lower Ovoid</p><br>
                                  <p>Size/Guage: 12, 14, 16, 18, 20</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Reverse Curve Wire Ovoid',
                'category_id' => 20,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'RCW002',
                'cprice' => 150,
                'sprice' => 200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Dental Orthodontic Reverse Curve Wire Ovoid</p><br>
                                  <p>Size/Guage: 12, 14, 16, 18, 20, 1616, 1622</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Crimpable Hooks',
                'category_id' => 21,
                'brand_id' => 41,
                'stock' => 30,
                'stock_warning' => 20,
                'SKU' => 'CRH001',
                'cprice' => 500,
                'sprice' => 750,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Made of stainless steel material, safe and envrionmental protection</p><br>
                                  <p>Inserted structure, easy to use</p><br>
                                  <p>Fixed on the archwires</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Lingual Button',
                'category_id' => 21,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'LIB001',
                'cprice' => 500,
                'sprice' => 800,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for application of elastics, crossbite correction, bonding impacted canine, extrusion of teeth, habit breaking, anchorage augmentation, and lingual bonded retainer.</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Lingual Retainer',
                'category_id' => 21,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'LIR001',
                'cprice' => 800,
                'sprice' => 1200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>High quality stainless steel material</p><br>
                                  <p>Direct bonding, Suitable thickness and hardness, easy to use</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Ligatures',
                'category_id' => 22,
                'brand_id' => 41,
                'stock' => 20,
                'stock_warning' => 20,
                'SKU' => 'LIG001',
                'cprice' => 80,
                'sprice' => 120.00,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Superior Color Stability, Fade resistant</p><br>
                                  <p>High elasticity and excellent rebound</p><br>
                                  <p>Gentle and continuous force and good memory</p><br>
                                  <p>Latex free safe for sensitive patients</p><br>
                                  <p>Sold per set</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Echain',
                'category_id' => 22,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'ECH001',
                'cprice' => 125,
                'sprice' => 200,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Colorful Super Elastic Dental Orthodontic Ligature Tie</p><br>
                                  <p>High strength and elasticity</p><br>
                                  <p>Gentle and continuous force</p><br>
                                  <p>Sold per item</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Elastics',
                'category_id' => 22,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'ELA001',
                'cprice' => 200,
                'sprice' => 250.00,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Product details of 500PCS 6.5OZ/5.0OZ/3.5OZ Rubber Band Braces Elastics Rings</p><br>
                                  <p>Sold per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Rotation Wedge',
                'category_id' => 22,
                'brand_id' => 37,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'ROW001',
                'cprice' => 510,
                'sprice' => 550,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Rotation Wedges fit beneath archwire to administrater rotation forces where desired. Available in Silver and Clear.</p><br>
                                  <p>Preformed tabs quickly snap over bracket tie wings for rotating individual teeth.</p><br>
                                  <p>The unique wedge shape design provides complete contact with the tooth surface, allowing more force to be transmitted to the tooth.</p><br>
                                  <p>100 Pcs per pack</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Molar Separator',
                'category_id' => 22,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'MOE001',
                'cprice' => 25,
                'sprice' => 40.00,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>High strength and elasticity. Long-lasting. Gentle and continuous force. Good memory. Non-latex.</p><br>
                                  <p>Separators are injection molded from optimum material; they tend to maintain their elasticity & color over time and do not require to be frequently changed.</p><br>
                                  <p>Sold per string</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Ortho Wax',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 36,
                'stock_warning' => 20,
                'SKU' => 'WAX001',
                'cprice' => 20,
                'sprice' => 35,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>A must have for Braces. Patient Relief Wax Sticks help soothe and prevent irritation to the gums caused by Braces and other Dental appliances. Made with medical-grade paraffin-based wax. Prevent and Protect orthodontic wire from piercing the oral lining.</p><br>
                                  <p>Sold per piece</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Ortho Brush',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 30,
                'stock_warning' => 20,
                'SKU' => 'OBR001',
                'cprice' => 24,
                'sprice' => 30,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Strong tension and good flexibility.</p><br>
                                  <p>Smooth dental flosser to clean teeth effectively.</p><br>
                                  <p>Double head Orthodontic Toothbrush and Interdental Brush.</p><br>
                                  <p>These interdental brushes can be applied to clean under and around wires, suitable for people wearing braces</p><br>
                                  <p>Sold per piece</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Stainless Steel Impression Tray',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 37,
                'stock_warning' => 20,
                'SKU' => 'SSI001',
                'cprice' => 475,
                'sprice' => 580,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for holding the impression material as it sets, and supports the set impression until after casting.</p><br>
                                  <p>Made of Stainless Steel</p><br>
                                  <p>Sold per set</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Rubber Impression Tray',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'RUI001',
                'cprice' => 110,
                'sprice' => 150,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Intended for holding the impression material as it sets, and supports the set impression until after casting.</p><br>
                                  <p>Made of Rubber</p><br>
                                  <p>Sold per set</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'name' => 'Cheek Retractor',
                'category_id' => 10,
                'brand_id' => 41,
                'stock' => 40,
                'stock_warning' => 20,
                'SKU' => 'CHR001',
                'cprice' => 70,
                'sprice' => 90.00,
                'weight' => 30,
                'status' => 1,
                'description' => "<p>Easy to place Cheek Retractor useful for oral surgery, orthodontic bonding and restorative work.</p><br>
                                  <p>The one-piece design provides comfortable access and is easily placed in just seconds.</p><br>
                                  <p>Sold per piece</p>",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]

        ]);
    }
}
