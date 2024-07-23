<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineCompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicine_companies')->insert([
            ['id' => 1, 'name' => 'egystar pharm'],
            ['id' => 2, 'name' => 'accord healthcare limited > united group pharmaceutical(u.g.p.)'],
            ['id' => 3, 'name' => 'adwia'],
            ['id' => 4, 'name' => 'adwia > stada'],
            ['id' => 5, 'name' => 'al esraa pharmaceutical optima'],
            ['id' => 6, 'name' => 'alfacure pharmaceuticals'],
            ['id' => 7, 'name' => 'amoun'],
            ['id' => 8, 'name' => 'arab drug company.'],
            ['id' => 9, 'name' => 'astra zeneca'],
            ['id' => 10, 'name' => 'aug > people pharma'],
            ['id' => 11, 'name' => 'aug pharma'],
            ['id' => 12, 'name' => 'bristol-myers squibb > otsuka'],
            ['id' => 13, 'name' => 'celgene corporation > egyptian pharmaceutical trading companyegypt'],
            ['id' => 14, 'name' => 'chemipharm'],
            ['id' => 15, 'name' => 'choongwae pharma-korea > general technology-egypt'],
            ['id' => 16, 'name' => 'cid > pharmadar'],
            ['id' => 17, 'name' => 'copad egypt'],
            ['id' => 18, 'name' => 'copad pharma'],
            ['id' => 19, 'name' => 'cosmopack > miracle'],
            ['id' => 20, 'name' => 'delta grand pharma > al ansar for marketing'],
            ['id' => 21, 'name' => 'delta pharma > pioneer pharmaceutical industries'],
            ['id' => 22, 'name' => 'dreams el habboba > novogen'],
            ['id' => 23, 'name' => 'egpi > egd'],
            ['id' => 24, 'name' => 'el-obour > spimaco misr'],
            ['id' => 25, 'name' => 'epci'],
            ['id' => 26, 'name' => 'glaxo smithkline'],
            ['id' => 27, 'name' => 'hi-care > interpharma egycare'],
            ['id' => 28, 'name' => 'hikma'],
            ['id' => 29, 'name' => 'hi-pharm'],
            ['id' => 30, 'name' => 'italian cosmetics company > acadia'],
            ['id' => 31, 'name' => 'jedco int. co. for pharmaceuticals > arax pharm. ind.'],
            ['id' => 32, 'name' => 'kahira'],
            ['id' => 33, 'name' => 'kahira > sabaa'],
            ['id' => 34, 'name' => 'kato prestige cosmetics > pharmaserve medical'],
            ['id' => 35, 'name' => 'kyowa kirin limited > egyptian pharmaceutical trading company'],
            ['id' => 36, 'name' => 'laboratoires gilbert - france > united bionat'],
            ['id' => 37, 'name' => 'mash premiere'],
            ['id' => 38, 'name' => 'mina pharm > hexal ag germany'],
            ['id' => 39, 'name' => 'mup'],
            ['id' => 40, 'name' => 'novartis'],
            ['id' => 41, 'name' => 'orchidia pharmaceutical industries'],
            ['id' => 42, 'name' => 'otsuka'],
            ['id' => 43, 'name' => 'pharmed healthcare > chemidica'],
            ['id' => 44, 'name' => 'prostemics > normandy pharma'],
            ['id' => 45, 'name' => 'puritans pride'],
            ['id' => 46, 'name' => 'rameda'],
            ['id' => 47, 'name' => 'rameda > people pharma'],
            ['id' => 48, 'name' => 'reig jofre-spain > ramco'],
            ['id' => 49, 'name' => 'rixos'],
            ['id' => 50, 'name' => 'sedico'],
            ['id' => 51, 'name' => 'shanghai xudong haipu pharmaceutical > acdima international trading'],
            ['id' => 52, 'name' => 'sigma > people pharma'],
            ['id' => 53, 'name' => 'turkuaz medical co. > brother pharma'],
            ['id' => 54, 'name' => 'vacsera'],
            ['id' => 55, 'name' => 'western pharmaceuticals industries'],
        ]);
    }
}
