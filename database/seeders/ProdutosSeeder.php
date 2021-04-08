<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produtos')->insert([
           'nome' => 'Samsung Galaxy S9',
           'descricao' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
           'foto' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
           'preco' => 698.88
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Apple iPhone X',
            'descricao' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.',
            'foto' => 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1',
            'preco' => 983.00
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Google Pixel 2 XL',
            'descricao' => 'New condition No returns, but backed by eBay Money back guarantee',
            'foto' => 'https://i.ebayimg.com/00/s/MTYwMFg4MzA=/z/G2YAAOSwUJlZ4yQd/$_35.JPG?set_id=89040003C1',
            'preco' => 675.00
        ]);
        DB::table('produtos')->insert([
            'nome' => 'LG V10 H900',
            'descricao' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
            'foto' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
            'preco' => 159.99
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Huawei Elate',
            'descricao' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
            'foto' => 'https://ssli.ebayimg.com/images/g/aJ0AAOSw7zlaldY2/s-l640.jpg',
            'preco' => 68.00
        ]);
        DB::table('produtos')->insert([
            'nome' => 'HTC One M10',
            'descricao' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
            'foto' => 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg',
            'preco' => 129.99
        ]);
    }
}
