<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Duetto Table Lamp',
                'description' => 'Imposing space age table lamp by Guzzini, designed by Luigi Massoni. The plastic screen shows the classic form of Guzzini lights.It is designed translucent orange and has a gradient from darker to the bottom.The shield is at the upper part on the foot, is produced whereby a ring of light as a partition between the foot and screen.The screen is fixed to the tip in a trough- like depression with a chrome ball.This table lamp not only provides functional lighting, but staged at the same time as a luminous object in space.The lamp has a cord switch.',
                'short' => 'Imposing space age table lamp by Guzzini, designed by Luigi Massoni.',
                'category_id' => 1,
                'subcategory_id' => 1,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/c_crop,h_1118,w_1118/v1639484566/vintastic/mid-century-italian-space-age-duetto-table-lamp-by-luigi-massoni-for-guzzini-1_ovwliy.jpg',
                'designer' => 'Luigi Massoni',
                'brand' => 'Guzzini',
                'style' => 'Space age',
                'period' => '1960s',
                'state' => 'Very good',
                'stock' => 3,
                'price' => 2249,
            ],
            [
                'id' => 2,
                'name' => 'Lounge Chair',
                'description' => 'This lounge chair is attributed to Gerard van den Berg.
 It was made in the 1970s. 
The chair is totally covered in grey leather, in good condition with some patina on the seat.
',
                'short' => 'Lounge chair by Gerard van den Berg',
                'category_id' => 3,
                'subcategory_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/c_crop,h_800,w_800/v1639484920/vintastic/space-age-lounge-chair-1970s-1_bohlgq.jpg',
                'designer' => 'Gerard van den Berg',
                'brand' => '-',
                'style' => 'Space age',
                'period' => '1970s',
                'state' => 'Good',
                'stock' => 1,
                'price' => 995,
            ],
            [
                'id' => 3,
                'name' => 'Space Age Table Lamp',
                'description' => 'This original Space Age table lamp with sequins works perfectly.',
                'short' => 'Original Space Age table lamp with sequins',
                'category_id' => 1,
                'subcategory_id' => 1,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1639485018/vintastic/space-age-table-lamp-1970s-1_nbdtvg.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Space Age',
                'period' => '1970s',
                'state' => 'Very Good',
                'stock' => 4,
                'price' => 490,
            ],
            [
                'id' => 4,
                'name' => 'Space Age Ceramic Wall Lamp',
                'description' => 'Vintage Design With on/off cord, can be disabled for direct connection to power.',
                'short' => 'Vintage Design With on/off cord',
                'category_id' => 1,
                'subcategory_id' => 2,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/c_crop,h_795,w_795/v1639485158/vintastic/space-age-ceramic-wall-lamp-1_vaghul.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Mid-Century',
                'period' => '1970s',
                'state' => 'Very Good',
                'stock' => 1,
                'price' => 350,
            ],
            [
                'id' => 5,
                'name' => 'Space Age Pottery Jar',
                'description' => 'This Dutch pottery jar was made by J. Verdoorn in 1968. This vase like object resembles some kind of U.F.O. It remains in a very good vintage condition.',
                'short' => 'Dutch pottery jar by J. Verdoorn',
                'category_id' => 2,
                'subcategory_id' => 5,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1639485239/vintastic/space-age-pottery-jar-by-j-verdoorn-1968-1_jrxeuw.jpg',
                'designer' => 'J. Verdoorn',
                'brand' => '-',
                'style' => 'Space age',
                'period' => '1960s',
                'state' => 'Very good',
                'stock' => 2,
                'price' => 200,
            ],
            [
                'id' => 6,
                'name' => 'Space Age Pendant Lamp',
                'description' => 'Beautiful 1950s / 60s hanging lamp made of aluminum and with beautiful details. The design of this lamp strongly reminds us of a Swedish granhaga lamp, or a lamp of Dutch or Scandinavian origin from, for example, the Granhaga or Vitrika brand. Unfortunately, the mark is missing. The lamp has two funnel-shaped metal bowls that are connected to each other and between which the lamp burns. The open part of the bowl that faces upwards is painted orange. The part that faces down is painted white which gives a clear reflection. Both bowls have a brass-colored brushed coating on the outside.',
                'short' => 'Beautiful space age hanging lamp',
                'category_id' => 1,
                'subcategory_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1639485273/vintastic/space-age-pendant-lamp-1960s-1_gpqtt9.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Space Age',
                'period' => '1960s',
                'state' => 'Good',
                'stock' => 1,
                'price' => 240,
            ],
            [
                'id' => 7,
                'name' => 'Space Age Fiberglass Lounge Chair with Pouf',
                'description' => 'Italian handmade easy chair with pouf from the 1970s - Features a structure in painted fiberglass - Seat and pouf are padded in plastic material - Designed like the seat of a sports car',
                'short' => 'Italian handmade easy chair with pouf',
                'category_id' => 3,
                'subcategory_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1639485340/vintastic/space-age-fiberglass-lounge-chair-with-pouf-1970s-1_jamifz.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Space Age',
                'period' => '1970s',
                'state' => 'Very good',
                'stock' => 1,
                'price' => 1000,
            ],
            [
                'id' => 8,
                'name' => 'Red Splash Carpet',
                'description' => '-',
                'short' => 'Beautiful handmade carpet',
                'category_id' => 4,
                'subcategory_id' => 9,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1639485353/vintastic/space-age-red-splash-carpet-1_ubriw9.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Space Age',
                'period' => '1970s',
                'state' => 'Very good',
                'stock' => 1,
                'price' => 250,
            ],
            [
                'id' => 9,
                'name' => 'Glass Table Lamp',
                'description' => 'This Space Age table lamp is made of white and coral opaline glass. It emits a beautiful diffused light and retains its original switch.',
                'short' => 'Table lamp of white and coral opaline glass',
                'category_id' => 1,
                'subcategory_id' => 1,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/c_crop,h_960,w_960/v1639485363/vintastic/space-age-glass-table-lamp-1960s-1_dr3a92.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Space Age',
                'period' => '1960s',
                'state' => 'Very good',
                'stock' => 2,
                'price' => 215,
            ],
            [
                'id' => 10,
                'name' => 'Space Age Clock',
                'description' => 'Vintage Design',
                'short' => 'Beautiful Junghans starburst clock',
                'category_id' => 2,
                'subcategory_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1639485486/vintastic/space-age-clock-from-junghans-1960s-1_c4ok7v.jpg',
                'designer' => '-',
                'brand' => 'Junghans',
                'style' => 'Mid Century Modern',
                'period' => '1960s',
                'state' => 'Good',
                'stock' => 4,
                'price' => 350,
            ],
            [
                'id' => 11,
                'name' => 'Space Age Rosewood Coat Rack',
                'description' => 'Beautiful wall coat rack from the 60s in a beautiful condition. The coat rack has 9 square rosewood panels that are separated by two wider panels. The five original aluminum coat hooks are provided with the coat rack. An aluminum frame can be found at the rear of the coat rack to which the panels are attached. In the frame there are two screw holes at the rear from which the coat rack can be hung.',
                'short' => 'Beautiful wall coat rack from the 60s',
                'category_id' => 2,
                'subcategory_id' => 6,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1639485496/vintastic/vintage-space-age-rosewood-coat-rack-1960s-1_qqjpte.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Mid-Century, Vintage, Scandinavian Modern',
                'period' => '1960s',
                'state' => 'Very Good',
                'stock' => 8,
                'price' => 645,
            ],
            [
                'id' => 12,
                'name' => 'Handmade Wool Carpet',
                'description' => 'Has been professionally cleaned. The carpet has four light marks, see pictures. There was once a table on it. A stunning carpet from the 1970s in good condition.',
                'short' => 'Stunning carpet from the 1970s in good condition.',
                'category_id' => 4,
                'subcategory_id' => 9,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1639485505/vintastic/space-age-scandinavian-handmade-wool-carpet-1970s-1_hahinv.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Vintage, Space Age',
                'period' => '1970s',
                'state' => 'Good',
                'stock' => 2,
                'price' => 750,
            ],
            [
                'id' => 13,
                'name' => 'Wenge Wood Coffee Table',
                'description' => 'Vintage Design',
                'short' => 'Beautiful dark wood with glass coffee table',
                'category_id' => 3,
                'subcategory_id' => 7,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/c_crop,h_1200,w_1200/v1639485569/vintastic/vintage-space-age-wenge-wood-coffee-table-1_me1odu.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Pop Art, Vintage, Space Age',
                'period' => '1960s',
                'state' => 'Good',
                'stock' => 1,
                'price' => 625,
            ],
            [
                'id' => 14,
                'name' => 'Space Age Sconces',
                'description' => 'Pair of Space Age 1970 square -plexis smoked and metal * The cable of this item may be original and might need replacement, if not specified otherwise.',
                'short' => 'Pair of Space Age 1970 square sconces',
                'category_id' => 1,
                'subcategory_id' => 2,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1639485629/vintastic/space-age-sconces-1970s-set-of-2-1_gbwf33.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Mid-Century',
                'period' => '1970s',
                'state' => 'Very Good',
                'stock' => 6,
                'price' => 60,
            ],
            [
                'id' => 15,
                'name' => 'Susy Bench',
                'description' => 'Beautiful bench for a waiting room with a base in black enameled iron, two fixed seats made of plastic material in a gray color and seats covered in red cloth. Mark Neolt on the back of the seats; Susy model.',
                'short' => 'Beautiful bench by Mark Neolt',
                'category_id' => 3,
                'subcategory_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1639485696/vintastic/space-age-susy-bench-from-neolt-1980s-1_bqtxdg.jpg',
                'designer' => '-',
                'brand' => 'Neolt',
                'style' => 'Space Age',
                'period' => '1970s',
                'state' => 'Good',
                'stock' => 5,
                'price' => 335,
            ],
            [
                'id' => 16,
                'name' => 'Lounge Chairs, Set of 2',
                'description' => '-',
                'short' => '',
                'category_id' => 3,
                'subcategory_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/c_crop,h_1067,w_1067,x_250/v1639485703/vintastic/space-age-lounge-chairs-1970s-set-of-2-1_vlvqnc.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Space Age',
                'period' => '1970s',
                'state' => 'Good',
                'stock' => 2,
                'price' => 1200,
            ],
            [
                'id' => 17,
                'name' => 'Pendant Lamp',
                'description' => 'Futuristic 1970s pendant lamp in beautiful original condition. Metal body with a brushed surface, aluminum tubes from the inside in matte [slightly red] orange coated.',
                'short' => 'Futuristic 1970s pendant lamp in beautiful condition',
                'category_id' => 1,
                'subcategory_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1639485713/vintastic/space-age-bar-pendant-lamp-in-aluminum-1970s-1_u56mwv.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Space Age',
                'period' => '1970s',
                'state' => 'Very Good',
                'stock' => 3,
                'price' => 150,
            ],
            [
                'id' => 18,
                'name' => 'Brown Vase in Ceramic',
                'description' => '1970s Stunning Space Age Brown Vase in Ceramic and in excellent condition. Made in Italy',
                'short' => 'Stunning Space Age Vase in Ceramic',
                'category_id' => 2,
                'subcategory_id' => 5,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/v1639485720/vintastic/space-age-brown-vase-in-ceramic-italy-1970s-1_aa3ucu.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Space Age, Mid-Century',
                'period' => '1970s',
                'state' => 'Excellent',
                'stock' => 3,
                'price' => 125,
            ],
            [
                'id' => 19,
                'name' => 'Geometric Wool Rug',
                'description' => '1970s Stunning space age rug with a beautiful geometric design. Pure wool made in Italy. In excellent condition. This rug is rare.',
                'short' => 'Stunning space age rug with a beautiful geometric design',
                'category_id' => 4,
                'subcategory_id' => 9,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/v1639485728/vintastic/space-age-geometric-wool-rug-italy-1970s-1_yj215y.jpg',
                'designer' => '-',
                'brand' => '-',
                'style' => 'Space Age, Mid-Century',
                'period' => '1970s',
                'state' => 'Excellent',
                'stock' => 1,
                'price' => 1905,
            ],
            [
                'id' => 20,
                'name' => 'Garden Egg',
                'description' => 'The both of chairs are marked with the manufacturer stamps / see photos / and originally dated 1.Oct.1974 and 27.Aug.1974. The original condition, including the original cloth upholstery Lacquered surface with normal traces of use - abrasions. The Garden Egg chair was designed by the Hungarian ??migr?? Peter Ghyczy 1968, who started his working career as chief designer for the Polyurethane factory \'Elastogran GmbH\' in Lemf??rde [West Germany]. The license to produce the chair was sold to the VEB Synthesewerk Schwarzheide close to the city of Senftenberg. The latter gives the chair its other name, the \'Senftenberg Egg\'. Officially, one third of their production was for the West German market, the rest for East Germany and for export. The production was halted in 1975 as the lacquering remained problematic, yet the chair became and iconic \'east\' German product, due to its popularity in trade shows and exhibitions / Jana Scholze - Garden egg chair by Peter Ghyczy, 1968 - Victoria and Albert Museum.',
                'short' => 'Beautiful garden chair by Peter Ghyczy',
                'category_id' => 3,
                'subcategory_id' => 8,
                'thumbnail' => 'https://res.cloudinary.com/dezwo7e6f/image/upload/v1639485735/vintastic/space-age-garden-egg-by-peter-ghyczy-1960s-1_uunsv0.jpg',
                'designer' => 'Peter Ghyczy',
                'brand' => 'VEB Synthesewerk Schwarzheide',
                'style' => 'Space Age, Vintage',
                'period' => '1970s',
                'state' => 'Good',
                'stock' => 1,
                'price' => 1899,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
