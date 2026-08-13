<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PremiumBrand;
use App\Models\CalidonBrand;
use App\Models\Event;
use App\Models\AboutGallery;
use Illuminate\Support\Facades\Hash;

class EasternDbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed Admin User
        User::updateOrCreate(
            ['username' => 'Dominic'],
            [
                'name' => 'Dominic',
                'email' => 'admin@easterndistilleries.com',
                'password' => Hash::make('1966'),
                'avatar' => 'adminpic.jpg',
            ]
        );

        // 2. Seed Premium Brands
        $premiumBrands = [
            [
                'id' => 8,
                'name' => 'palmy cola',
                'image' => 'PALMY.png',
                'description' => 'Whatever happens, it is ideal that we devote our time to identify our inner roots, our heritage, where we come from and the societal bond that holds us together as a people. Palmy Cola is that reminder that we must not loose sight our roots. It is specially crafted to kick off that longing for the communion of best friends, where we gather and revel in the beauty things of life. Palmy Cola is filled with a unique palmy aroma that evokes that palm wine aromatic freshness that serves as an emblem of friendship and brotherhood.'
            ],
            [
                'id' => 9,
                'name' => 'Aston Malt',
                'image' => 'malt.png',
                'description' => 'Aston Malt is a rich, creamy and satisfying drink that is fortified with essential vitamins and minerals required for your daily nourishment for a revitalized body.'
            ],
            [
                'id' => 10,
                'name' => 'BALLAMOUR BITTERS',
                'image' => 'PREMIUM BALLAMOUR.png',
                'description' => 'A blend of Ballamour natural root extracts and pure botanical seasonings, hygienically prepared to offer you a lingering mouth-feel and keep you ecstatically charged all day long'
            ],
            [
                'id' => 11,
                'name' => 'GRANDEUR EMPEROR',
                'image' => 'emperor.png',
                'description' => "Grandeur Emperor, a lively bouquet of Pinot Noir, Merlot and Chardonnay that's perfectly crafted to deliver a full-bodied velvety wine that unravels slowly on the palate with a fruity finish and ripe tannin taste that leaves you wanting for more. This vintage gets even better with every sip."
            ],
            [
                'id' => 12,
                'name' => 'Wake up',
                'image' => 'WAKEUP.png',
                'description' => "Wake Up Vodka Mixed Power Drink is a crisp, refreshing, tasty vodka mixed with an invigorating taste. It's designed to boost your momentum to carry out your daily tasks and provide you with the required energy to make it through the day. Wake Up Vodka Mixed Power Drink contains taurine and other essentials supplements that will accelerate your metabolism, maintain your muscle strength, and improve your mental and athletic performance."
            ],
            [
                'id' => 13,
                'name' => 'MERRY MAUSA',
                'image' => 'mausa.png',
                'description' => 'Blend of carefully selected recipes to kick off that spirit of celebration in you. Enriched with healthy full body grape, Merry Mausa delivers an overwhelming and refreshing sensuous aromas to keep you in that mood at all times.'
            ],
            [
                'id' => 14,
                'name' => 'WHISKY ELEGAMON',
                'image' => 'whisky.png',
                'description' => "It's been our promise that Whisky of International Standard will be manufactured in Nigeria and here it is. Whisky Elegamon is a reflection of a painstaking aging resulting in a sense of balance infused with a strong aroma of oak, vanilla and frosting."
            ],
            [
                'id' => 15,
                'name' => 'BRANDY ALMONDIA V.S.O.P',
                'image' => 'brandy.png',
                'description' => 'The inspiration for Brandy Almondia came from the fact that Nigerians are very stylish and very quality conscious. The rate at which we patronize foreign products is amazing. I began to ask myself how do we contribute and how do we take advantage of our local consumption capacity instead of depending on imported product'
            ],
            [
                'id' => 16,
                'name' => 'OMEGA AROMATIC SCHNAPPS',
                'image' => 'omega.png',
                'description' => 'Omega Aromatic Schnapps is the conclusion of concerted efforts of the Research and Development of Eastern Distilleries and Food industires Limited (EDFI) into the ancient Dutch tradition of spirit flavour popularly known and called schnapps.'
            ],
            [
                'id' => 17,
                'name' => 'VARGA SUPER PREMIUM DRY GIN',
                'image' => 'Varga.png',
                'description' => "...is a testimony of more than two decades of EDFI's passion for Quality and Excellenc e.Redistilled from premium neutral spirit of Agricultural origins with the purest of water and botanicals..."
            ],
            [
                'id' => 18,
                'name' => 'merry maurri',
                'image' => 'merrymousa.png',
                'description' => 'Crisp and stylish with a velvety finely-carbonated fruit body designed to offer you a premium sparkling wine with a light oak aroma and a rich taste that stays with you all the time.'
            ],
        ];

        foreach ($premiumBrands as $pb) {
            PremiumBrand::updateOrCreate(['id' => $pb['id']], $pb);
        }

        // 3. Seed Calidon Brands
        $calidonBrands = [
            [
                'id' => 1,
                'name' => "Calidon's Brandy",
                'category' => "Brandy",
                'description' => "Calidon's Brandy is distilled with fine spirits and aged by the traditional Calidonian system in the oak butts.\r\n\r\nIt retains its old tradition of high quality and is blended with flavour. It is a drink for all occasions whether on rocks, straight or mixed.",
                'fsize' => "750 ml", 'fbottle' => "Bottle",
                'ssize' => "200 ml", 'sbottle' => "PET Bottle",
                'tsize' => "120 ml", 'tbottle' => "PET Bottle",
                'ftsize' => "30 ml", 'ftbottle' => "Sachet",
                'fimage' => "Brandy_A.png", 'simage' => "Brandy_A.png", 'timage' => "Brandy_C.jpg", 'ftimage' => "Brandy_D.jpg"
            ],
            [
                'id' => 2,
                'name' => "Calidon's Herbal Cafe",
                'category' => "Cafe Liqueur",
                'description' => "Calidon'sCafé liqueur is formulated with rich aroma, smooth and carefully\r\n\r\nroasted recipes that deliver a sustained physical stimulation and enduring energy level.",
                'fsize' => "120 ml", 'fbottle' => "PET Bottle",
                'ssize' => "50ml", 'sbottle' => "Sachet",
                'tsize' => "", 'tbottle' => "",
                'ftsize' => "", 'ftbottle' => "",
                'fimage' => "Cafe_A.png", 'simage' => "Cafe_C.jpg", 'timage' => "Cafe_D.jpg", 'ftimage' => ""
            ],
            [
                'id' => 3,
                'name' => "Calidon's Eskala",
                'category' => "Dry Gin",
                'description' => "Calidon's Eskala Dry Gin is specially prepared to escalate your passion and set you on the right frame of mind to pursue that which is important to you.\r\n\r\nIt is filled with ideal ingredients to spur you to reach that zenith and fulfill that innermost passion you have already dreamed of.",
                'fsize' => "750 ml", 'fbottle' => "Bottle",
                'ssize' => "120ml", 'sbottle' => "PET Bottle",
                'tsize' => "", 'tbottle' => "",
                'ftsize' => "", 'ftbottle' => "",
                'fimage' => "Eskala_A.png", 'simage' => "Eskala_C.jpg", 'timage' => "Eskala_D.jpg", 'ftimage' => ""
            ],
            [
                'id' => 4,
                'name' => "Calidon's SCHNAPPS",
                'category' => "Schnapps",
                'description' => "Calidon's ® Aromatic Schnapps consists of high quality ingredients of natural origins specially blended to produce the best Schnapps flavours, which can be enjoyed by lovers of spirits at all occasions especially for libation, picnics and traditional parties.\r\n\r\nCalidon's ® AROMATIC SCHNAPPS is a safe, free from impurities with an old age tradition of the highest quality which has been doggedly maintained even in this modern ear. Calidon's ® AROMATIC SCHNAPPS Remains the one and only aromatic schnapps that rises up to your taste anytime, anywhere. The feeling is real and the smoothness is ideal",
                'fsize' => "750 ml", 'fbottle' => "Bottle",
                'ssize' => "", 'sbottle' => "",
                'tsize' => "", 'tbottle' => "",
                'ftsize' => "", 'ftbottle' => "",
                'fimage' => "Schn_A.png", 'simage' => "Schn_B.jpg", 'timage' => "", 'ftimage' => ""
            ],
            [
                'id' => 5,
                'name' => "Calidon's Ponche",
                'category' => "Ponche",
                'description' => "Calidon's Ponche is a sweet alcoholic beverage.\r\n\r\nIt is carefully prepared to suit the present generation. It can be diluted with fruit juice.",
                'fsize' => "750 ml", 'fbottle' => "Bottle",
                'ssize' => "120ml", 'sbottle' => "PET Bottle",
                'tsize' => "", 'tbottle' => "",
                'ftsize' => "", 'ftbottle' => "",
                'fimage' => "Ponche_A.png", 'simage' => "Ponche_D.jpg", 'timage' => "", 'ftimage' => ""
            ],
            [
                'id' => 6,
                'name' => "Calidon's TopSquad",
                'category' => "Dark Rum",
                'description' => "Calidon's Top Squad is a spirit drink made of the finest quality ingredients under strict hygiene conditions.\r\n\r\nA result of many years research into the Danish and Spanish distillations. Calidon’s Top Squad Blended Dark Rum is an acclaimed special treat for mature minds in every occasion.",
                'fsize' => "750 ml", 'fbottle' => "Bottle",
                'ssize' => "120ml", 'sbottle' => "PET Bottle",
                'tsize' => "", 'tbottle' => "",
                'ftsize' => "", 'ftbottle' => "",
                'fimage' => "Squad_A.png", 'simage' => "Squad_C.jpg", 'timage' => "", 'ftimage' => ""
            ],
            [
                'id' => 7,
                'name' => "Calidon's Varga",
                'category' => "Dry Gin",
                'description' => "Calidon's Varga Dry Gin is safe, free from impurities with an age old tradition of the highest quality which has been doggedly maintained even in the modern era.\r\n\r\nVarga Dry Gin remains one and only gin that rises up to your taste anytime anywhere.",
                'fsize' => "750 ml", 'fbottle' => "Bottle",
                'ssize' => "200ml", 'sbottle' => "PET Bottle",
                'tsize' => "120 ml", 'tbottle' => "PET Bottle",
                'ftsize' => "30ml", 'ftbottle' => "Sachet",
                'fimage' => "Varga_A.png", 'simage' => "Varga_B.jpg", 'timage' => "Varga_C.jpg", 'ftimage' => "Varga_D.jpg"
            ],
            [
                'id' => 8,
                'name' => "Calidon's White Rum",
                'category' => "White Rum",
                'description' => "Calidon's Imperial White Rum is a light bodied drink that is carefully distilled under the strictest hygienic conditions\r\n\r\nto produce a natural smooth taste. It can be blended with fruit juice or served with ice rocks.",
                'fsize' => "750 ml", 'fbottle' => "Bottle",
                'ssize' => "120ml", 'sbottle' => "PET Bottle",
                'tsize' => "30ml", 'tbottle' => "Sachet",
                'ftsize' => "", 'ftbottle' => "",
                'fimage' => "WRum_A.png", 'simage' => "WRum_C.jpg", 'timage' => "WRum_D.jpg", 'ftimage' => ""
            ],
        ];

        foreach ($calidonBrands as $cb) {
            CalidonBrand::updateOrCreate(['id' => $cb['id']], $cb);
        }

        // 4. Seed Events
        Event::updateOrCreate(
            ['id' => 1],
            [
                'title' => 'Wakeup Raves',
                'writeup' => 'Ofili Stephen wins the inaugural Brandy Almondia Music Challenge, impressing judges and audience with his exceptional performance at the grand finale',
                'link' => '',
                'image' => 'wakeuprave1.JPG',
                'date' => '2024-06-15',
            ]
        );

        // 5. Seed About Gallery
        AboutGallery::updateOrCreate(
            ['id' => 1],
            [
                'afimage' => 'about-baner-2.jpg',
                'asimage' => 'IMG_4330.jpeg',
                'atimage' => 'EDFI BACKGROUND.jpg',
                'aftimage' => '',
                'afthimage' => '',
                'asximage' => '',
                'asvimage' => '',
                'aetimage' => '',
            ]
        );
    }
}
