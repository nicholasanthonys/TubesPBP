<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            // Untuk Pasta
            ['id' => 'pst01',
            'type' => 'pasta',
            'name' => 'Beef Lasagna',
            'url_image' => 'https://static.phd.co.id/menu/PHD_id-Beef_lasagna_.png',
            'price' => 50000,
            'description' => 'Kombinasi lapisan pasta creamy dengan daging cincang, krim pasta, keju mozarella dan peterseli',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'pst02',
            'type' => 'pasta',
            'name' => 'Pepperoni Cheese Fusilli',
            'url_image' => 'https://s3-ap-southeast-1.amazonaws.com/pizzahutidtest/menu/pastas_pepperoni_cheese_fusilli.png',
            'price' => 46000,
            'description' => 'Pasta fusilli dengan saus keju cheddar, pepperoni renyah dan peterseli',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'pst03',
            'type' => 'pasta',
            'name' => 'Beef Fettuccine',
            'url_image' => 'https://s3-ap-southeast-1.amazonaws.com/pizzahutidtest/menu/pastas_beef_fettuccine.png',
            'price' => 46000,
            'description' => 'Pasta creamy dengan daging asap, saus thick liaison, jamur, taburan bite bits dan peterseli',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'pst04',
            'type' => 'pasta',
            'name' => 'Beef Spaghetti',
            'url_image' => 'https://s3-ap-southeast-1.amazonaws.com/pizzahutidtest/menu/pastas_beef_spaghetti.png',
            'price' => 46000,
            'description' => 'Spaghetti dengan campuran daging sapi cincang, saus tomat, keju dan peterseli',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '05')],

            ['id' => 'pst05',
            'type' => 'pasta',
            'name' => 'Chicken Fettuccine Alla Italia',
            'url_image' => 'https://pizzahutid.s3-ap-southeast-1.amazonaws.com/menu/Chicken_Fettuccine_Alla_Italia_20190103.png',
            'price' => 46000,
            'description' => 'Pasta creamy dengan saus spesial ala italia, potongan ayam renyah, chicken luncheon strip dan taburan peterseli',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '01', '05')],

            // Steak
            ['id' => 'stk01',
            'type' => 'steak',
            'name' => 'Abuba Wagyu Steak',
            'url_image' => 'http://www.abuba.co.id/wp-content/uploads/2016/04/Page-6-7-Wagyu-1024x518.jpg',
            'price' => 200000,
            'description' => 'WAGYU daging sapi memliki tingkat juiciness terbaik dan terempuk dari ABUBA. ABUBA menyajikan steak Wagyu yang asli dari 100% bahan daging sapi Wagyu. Jadi keasliannya menjamin kualitasnya pula.  ABUBA memang memberikan apa adanya. Kalau wagyu kami menjualnya wagyu, kalau bukan wagyu kami tidak bilang wagyu. Ini prinsip ABUBA yang memberikan kualitas terpercaya dan GENUINE.',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '02', '03')],

            ['id' => 'stk02',
            'type' => 'steak',
            'name' => 'Abuba Tenderloin Steak',
            'url_image' => 'http://www.abuba.co.id/wp-content/uploads/2016/04/Page-8-9-Tenderloin.jpg',
            'price' => 200000,
            'description' => 'TENDERLION adalah daging terbaik dari setiap sapi. Tenderloin hanya terdapat di bagian tengah sapi. ABUBA menyajikan Tenderloin dari 3 asal; United States, New Zealand dan Indonesia.  ABUBA mengerti tenderloin merupakan daging tanpa lemak yang sangat empuk, disukai banyak orang karena mudah mengunyahnya. Sudah coba Tenderloin steak racikan ABUBA steak?',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '02', '03')],

            ['id' => 'stk03',
            'type' => 'steak',
            'name' => 'Abuba Sirloin Steak',
            'url_image' => 'http://www.abuba.co.id/wp-content/uploads/2016/04/Page-10-11-Sirloin.jpg',
            'price' => 200000,
            'description' => 'Salah satu best seller dari ABUBA steak adalah SIRLOIN steak. Daging bagian atas dari sapi yang ada jalur lemaknya di sisi atas.  Sirloin steak memiliki kelebihan tersendiri yang beda dari bagian daging sapi lainnya, lemak yang ada disisi atas memberikan aroma yang harum ketika dipanggang. ABUBA steak telah menjual sirloin steak sejak awal berdiri dan langsung mendapat sambutan yang luar biasa dari para pelanggan ABUBA steak.',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '02', '03')],

            ['id' => 'stk04',
            'type' => 'steak',
            'name' => 'Abuba T-Bone Steak',
            'url_image' => 'http://www.abuba.co.id/wp-content/uploads/2016/04/Page-14-15-T-Bone.jpg',
            'price' => 300000,
            'description' => 'Berbeda dengan daging sapi yang lain T-BONE memiliki keunikan yang hanya ada di bagian sapi tengah. Selain ada tulang yang berbentuk T, steak ini memiliki khas segalanya dari lemak, daging, tulang. ABUBA menyiapkan T-Bone steak dari 3 asal usul, USA, NZ dan INA.  T-Bone pilihan para pria, selain tekstur daging yang lebih mantap ada perpaduan sisi sirloin dan tenderloin. T-Bone juga erat dengan citra macho, kegemaran para cowboy. Coba perhatikan dalam film cowboy.',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '02', '03')],

            ['id' => 'stk05',
            'type' => 'steak',
            'name' => 'Abuba Rib Eye Steak',
            'url_image' => 'http://www.abuba.co.id/wp-content/uploads/2016/04/Page-12-13-Rib-Eye.jpg',
            'price' => 200000,
            'description' => 'Daging Iga Sapi atau Rib adalah bagian daging sapi yang berasal dari daging di sekitar tulang iga atau tulang rusuk. Rib Eye termasuk dari delapan bagian utama daging sapi yang biasa dikonsumsi. Seluruh bagian daging iga ini bisa terdiri dari beberapa iga, mulai dari iga ke 6 sampai dengan iga ke- 12; untuk potongan daging iga yang akan dikonsumsi bisa terdiri dari 2 sampai dengan 7 tulang iga. Rib-eye steak adalah potongan dalam bentuk steak, bisa dengan tulang (bone in) atau tanpa tulang (boneless). Rib-Eye adalah salah satu steak yang paling populer dan juicy di pasar. Bagian ini memiliki aroma dan rasa yang lezat karena lemak yang masih menempel. ',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '02', '03')],

            ['id' => 'stk06',
            'type' => 'steak',
            'name' => 'Abuba Lamb Chop Steak',
            'url_image' => 'http://www.abuba.co.id/wp-content/uploads/2016/04/Page-17-Lamb-Chop-1024x933.jpg',
            'price' => 270000,
            'description' => 'Domba bukan kambing, itu kata penjual daging ini. ABUBA menyajikan LAMB CHOP steak terbaik dari New Zealand dimana disana kemungkinan besar tidak ada kambing, jadi daging domba pasti masuk akal. Lamb Chop sendiri hampir mirip dengan T-bone yang memiliki tulang di sisi ujungnya. Para pencinta Lamb Chop menikmati daging dan lemak yang harum serta empuk ini olahan Chef ABUBA.',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '04', '20')],

            ['id' => 'stk07',
            'type' => 'steak',
            'name' => 'Abuba Chicken Steak',
            'url_image' => 'http://www.abuba.co.id/wp-content/uploads/2016/04/Page-20-Chicken-Steak-brown-1024x933.jpg',
            'price' => 170000,
            'description' => 'Terasa tidak lengkap kalau ABUBA tidak menyediakan CHICKEN STEAK untuk para pencinta steak daging ayam. Chicken Steak ABUBA disajikan dengan Homemade BBQ sauce ala ABUBA yang dibuat dari resep rahasia founder ABUBA. Selain Chicken Steak, ABUBA juga menyajikan Boneless Spicy Chicken dan Fried Chicken Regular yang merupakan pilihan renyah dan gurih.',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '04', '20')],

            ['id' => 'stk08',
            'type' => 'steak',
            'name' => 'Abuba Fish Steak',
            'url_image' => 'http://www.abuba.co.id/wp-content/uploads/2016/04/Page-23-Salmon-Steak-brown-1024x933.jpg',
            'price' => 200000,
            'description' => 'Ikan memang beda, selain protein, ikan memiliki tekstur yang sangat halus dan lembut  bagi pencernaan.  ABUBA menyajikan berbagai menu pilihan dari ikan: SALMON STEAK, GINDARA STEAK, dan Battered Dory Fish.  Fish Finger ABUBA disajikan renyah dengan mix vegetable dan potato wedges yang segar.  Salmon Steak ABUBA juga menjadi incaran para pelanggan yang lagi tidak makan steak daging sapi atau ayam.',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '04', '20')],

            ['id' => 'stk09',
            'type' => 'steak',
            'name' => 'Abuba Bistique',
            'url_image' => 'http://www.abuba.co.id/wp-content/uploads/2016/04/Page-27-Pasta-Bistique-1024x933.jpg',
            'price' => 135000,
            'description' => 'ABUBA juga memikirkan menu untuk anak-anak kita tercinta. ABUBA ingin ketika keluarga makan di ABUBA, anak-anak dapat menikmati makanan kesukaan mereka, seperti WAGYU SKEWER, GRILL SAUSAGE, BEEF PATTY STEAK, BISTIQUE dan FISH BITE.  Selain anak-anak, menu ini juga cocok juga dinikmati orang dewasa.',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '04', '20')],

            // Pizza
            ['id' => 'piz01',
            'type' => 'pizza',
            'name' => 'Cheesy Galore',
            'url_image' => 'https://static.phd.co.id/menu/phd_pizza_cheesy_galore.png',
            'price' => 76000,
            'description' => 'With extra mozzarella cheese, coated with an authentic Italian spice and a special PHD sauce',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'piz02',
            'type' => 'pizza',
            'name' => 'Meat Lovers Cheesy Mayo',
            'url_image' => 'https://static.phd.co.id/menu/PHD_id-Cheesy_Meat_Lover_-1496043908.png',
            'price' => 86000,
            'description' => 'With beef burger, minced beef, smoked beef, beef sausage, mozarella cheese and cheese mayonnaise sauce',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'piz03',
            'type' => 'pizza',
            'name' => 'Meat Lovers',
            'url_image' => 'https://pizzahutid.s3-ap-southeast-1.amazonaws.com/menu/PHD_MeatLovers_20200409.png',
            'price' => 86000,
            'description' => 'With beef burger, minced beef, smoked beef, beef sausage, mozarella cheese and PHD special sauce',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'piz04',
            'type' => 'pizza',
            'name' => 'American Favourite',
            'url_image' => 'https://pizzahutid.s3-ap-southeast-1.amazonaws.com/menu/PHD_AmericanFavourite_20200409.png',
            'price' => 86000,
            'description' => 'With pepperoni, minced beef, mushroom and PHD special sauce',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'piz05',
            'type' => 'pizza',
            'name' => 'Super Supreme',
            'url_image' => 'https://pizzahutid.s3-ap-southeast-1.amazonaws.com/menu/PHD_Super%20Supreme_20200409.png',
            'price' => 86000,
            'description' => 'With chicken luncheon, smoked beef, beef burger, mushroom, pineapple, red & green bell peppers, mozarella cheese and PHD special sauce',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'piz06',
            'type' => 'pizza',
            'name' => 'Splitza Signature',
            'url_image' => 'https://static.phd.co.id/menu/phd_pizza_splitza_signature.png',
            'price' => 90000,
            'description' => '2 favourite toppings – American Favourite and Meat Lovers served in 1 pizza!',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '01', '16')],

            ['id' => 'piz07',
            'type' => 'pizza',
            'name' => 'Hawaiian Chicken',
            'url_image' => 'https://static.phd.co.id/menu/phd_pizza_hawaiian_chicken.png',
            'price' => 76000,
            'description' => 'With pineapple, chicken schnitzel, bell pepper, mozarella cheese and spicy tomato sauce',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '16')],

            ['id' => 'piz08',
            'type' => 'pizza',
            'name' => 'Tuna Melt',
            'url_image' => 'https://pizzahutid.s3-ap-southeast-1.amazonaws.com/menu/PHD_TunaMelt_20200409.png',
            'price' => 76000,
            'description' => 'With tuna, corn, parsley and mayonnaise sauce',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '16')],

            ['id' => 'piz09',
            'type' => 'pizza',
            'name' => 'Supreme',
            'url_image' => 'https://static.phd.co.id/menu/phd_pizza_supreme.png',
            'price' => 76000,
            'description' => 'With pepperoni, beef, mushroom, pineapple, green bell pepper, mozarella cheese and PHD special sauce',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '02', '21')],

            ['id' => 'piz10',
            'type' => 'pizza',
            'name' => 'Meaty',
            'url_image' => 'https://static.phd.co.id/menu/phd_pizza_meaty.png',
            'price' => 76000,
            'description' => 'With beef and chicken sausage, beef burger, mozarella cheese and PHD special sauce',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '02', '21')],

            ['id' => 'piz11',
            'type' => 'pizza',
            'name' => 'Splitza Classic',
            'url_image' => 'https://static.phd.co.id/menu/phd_pizza_splitza_classic.png',
            'price' => 80000,
            'description' => '2 favourite toppings – Supreme and Meaty served in 1 pizza!',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '02', '21')],

            ['id' => 'piz12',
            'type' => 'pizza',
            'name' => 'Meat Lovers Chicken',
            'url_image' => 'https://static.phd.co.id/menu/phd-pizza-meat-lovers-chicken.png',
            'price' => 86000,
            'description' => 'With chicken sausage, chicken luncheon, chicken sticks, mozarella cheese and PHD special sauce',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '03', '05')],

            ['id' => 'piz13',
            'type' => 'pizza',
            'name' => 'Veggie Garden',
            'url_image' => 'https://pizzahutid.s3.amazonaws.com/menu/PHD-Veggie-Pizza-210x165px.png',
            'price' => 76000,
            'description' => 'With mushroom, red & green bell pepper, pineapple, corn, mozarella cheese and PHD special sauce',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '03', '05')],

            ['id' => 'piz14',
            'type' => 'pizza',
            'name' => 'Pepperoni Signature',
            'url_image' => 'https://pizzahutid.s3.amazonaws.com/menu/PHD_PizzaPepperoni_20200211.png',
            'price' => 86000,
            'description' => 'With pepperoni, mozarella cheese and a special PHD sauce',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '03', '05')],

            // Rice
            ['id' => 'ric01',
            'type' => 'rice',
            'name' => 'Spicy Creamy Chicken Rice',
            'url_image' => 'https://static.phd.co.id/menu/PHD_id-Spicy_Chicken_Cheese.png',
            'price' => 42000,
            'description' => 'Rice with chicken schnitzel and mozarella cheese, corn, thick sauce, spicy tomato sauce, Italian seasoning and parsley',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'ric02',
            'type' => 'rice',
            'name' => 'Creamy Chicken Baked Rice',
            'url_image' => 'https://static.phd.co.id/menu/PHD_id-Creamy_Chicken_Baked_Rice.png',
            'price' => 42000,
            'description' => 'Savory roasted rice with chicken luncheon, chicken stick, thick sauce, mozarella cheese, mayonnaise and parsle',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'ric03',
            'type' => 'rice',
            'name' => 'Roasted Chicken',
            'url_image' => 'https://pizzahutid.s3.amazonaws.com/menu/PHD-Roasted-Chicken-Rice-Jul2018-210x165px.png',
            'price' => 42000,
            'description' => 'Rice with savory roast chicken sprinkled with sesame seeds, parsley, oriental sauce, garlic and beef sausage',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            // Soup
            ['id' => 'sou01',
            'type' => 'soup',
            'name' => 'Fire Roasted Vegetable',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/soups/fire-roasted-vegetable_891x480.jpg?v=1&d=20200116T212630Z',
            'price' => 18000,
            'description' => 'There’s nothing better than vegetable soup on a cold night, especially when it has the flavor of tons of fire roasted vegetables, couscous and a deep tomato based broth. Who knew all',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'sou02',
            'type' => 'soup',
            'name' => 'Chicken Tortilla',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/soups/chicken-tortilla_891x480.jpg?v=1&d=20200116T212629Z',
            'price' => 21000,
            'description' => 'When you’re looking for a hearty, satisfying soup that’s packed with flavorful ingredients, you’ve come to the right place. It’s packed with chicken, tomato, cilantro and cheese',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'sou03',
            'type' => 'soup',
            'name' => 'Broccoli Cheddar',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/soups/broccoli-cheddar_891x480.jpg?v=1&d=20200116T212628Z',
            'price' => 22000,
            'description' => 'Hot, creamy, cheesy and delicious, our Broccoli Cheddar is great comfort food even when you don’t need comforting',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'sou04',
            'type' => 'soup',
            'name' => 'Chili',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/soups/chili_891x480.jpg?v=1&d=20200116T212629Z',
            'price' => 25000,
            'description' => 'Get your spoon ready, because our chili is chunky with beef, beef and more beef to give it a hearty flavor that will warm your heart',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '01', '11')],

            ['id' => 'sou05',
            'type' => 'soup',
            'name' => 'Country Potato Soup',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/soups/country-potato_891x480.jpg?v=1&d=20200116T212630Z',
            'price' => 19000,
            'description' => 'There’s nothing like the down home taste of a hot potato soup, especially if it combines the flavors of potato, onion, bacon, chives and cheese',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '11')],

            ['id' => 'sou06',
            'type' => 'soup',
            'name' => 'Veggie Chili',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/soups/veggie-chili_891x480.jpg?v=1&d=20200116T212632Z',
            'price' => 23000,
            'description' => 'A hearty, meatless, all-bean chili that has all the seasoning you love. This is our take on the classic we all love, especially on those cold days',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '02', '09')],

            ['id' => 'sou07',
            'type' => 'soup',
            'name' => 'Tomato Bisque',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/soups/tomato-bisque_891x480.jpg?v=1&d=20200116T212632Z',
            'price' => 18000,
            'description' => 'Try a slow kettle style tomato soup, seasoned perfectly for your spoon. It’s a good way to relax, enjoy sipping on a classic soup and enjoy the conversation',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '02', '09')],

            // Salad
            ['id' => 'sld01',
            'type' => 'salad',
            'name' => 'Savannah Chopped Salad',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/salads/savannah-chopped-salad_891x480.jpg?v=1&d=20170528T041409Z',
            'price' => 16000,
            'description' => 'Try a bouquet of flavors with grilled chicken, dried cranberries, Gorgonzola, honey roasted almonds, tomatoes and cucumbers, perfectly arranged so that you enjoy every bite',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'sld02',
            'type' => 'salad',
            'name' => 'Southwest Chicken & Avocado Salad',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/salads/salad-southwest-chicken-avocado-salad-detail-hero-891x480.jpg?v=1&d=20190514T141620Z',
            'price' => 19000,
            'description' => 'Grilled chicken, roasted corn, poblano and black bean relish, red onion, tomato, cheddar-jack, blue corn tortilla strips, avocado on mixed greens',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'sld03',
            'type' => 'salad',
            'name' => 'Harvest Chicken Salad',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/salads/harvest-chicken-salad_891x480.jpg?v=1&d=20170528T041334Z',
            'price' => 18000,
            'description' => 'Our chicken salad is made from fresh pulled chicken, cranberries, pecans and paired with our garden salad. It’s a great way to make your salad into more of a meal',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'sld04',
            'type' => 'salad',
            'name' => 'Caesar Salad',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/salads/caesar-salad_891x480.jpg?v=1&d=20170528T041235Z',
            'price' => 19000,
            'description' => 'The classics became a classic for a reason. We put together a mean Caesar with Romaine, Parmesan cheese, croutons and our Caesar dressing. Try it with grilled chicken',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '02', '12')],

            ['id' => 'sld05',
            'type' => 'salad',
            'name' => 'Grilled Chicken Salad',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/salads/grilled-chicken-salad_891x480.jpg?v=1&d=20170528T041318Z',
            'price' => 20000,
            'description' => 'Our seasoned grilled chicken goes perfectly with the crisp lettuce, cheddar-jack, tomatoes, cucumbers and croutons on our house salad',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '02', '12')],

            ['id' => 'sld06',
            'type' => 'salad',
            'name' => 'Chef Salad',
            'url_image' => 'https://cdn.mcalistersdeli.com/-/media/mcalisters/menu/salads/chef-salad_891x480.jpg?v=1&d=20170528T041248Z',
            'price' => 19500,
            'description' => 'Put a little more protein in your diet by adding sliced turkey, ham and bacon, just the way our chef likes it, which is probably why his name is on it',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '02', '12')],

            // Drinks
            ['id' => 'drk01',
            'type' => 'drink',
            'name' => 'Chocolicious',
            'url_image' => 'https://pizzahutid.s3-ap-southeast-1.amazonaws.com/menu/PHD_Chocolicious_20190831.png',
            'price' => 18000,
            'description' => 'Chocolate milk drink',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'drk02',
            'type' => 'drink',
            'name' => 'Red Summer Breeze',
            'url_image' => 'https://pizzahutid.s3-ap-southeast-1.amazonaws.com/menu/PHD_RedSummerBreeze_20190831.png',
            'price' => 12000,
            'description' => 'Drinks with Frambozen and Lemon flavors, with Orange Jelly',
            'stock' => 100,
            'chef_recommended' => 1,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'drk03',
            'type' => 'drink',
            'name' => 'Melon Lemonade',
            'url_image' => 'https://static.phd.co.id/menu/PHD_id-Melon_Lemonade.png',
            'price' => 12000,
            'description' => 'Melon flavoured drink with basil seeds and melon jelly',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'drk04',
            'type' => 'drink',
            'name' => 'Orange Drinks',
            'url_image' => 'https://static.phd.co.id/menu/PHD_id-Orange_Drinks.png',
            'price' => 12000,
            'description' => 'Orange flavoured drink',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'drk05',
            'type' => 'drink',
            'name' => 'Lemon Tea',
            'url_image' => 'https://static.phd.co.id/menu/PHD_id-Lemon_Tea_.png',
            'price' => 12000,
            'description' => 'Lemon tea drink',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'drk06',
            'type' => 'drink',
            'name' => 'Cappucino Jelly',
            'url_image' => 'https://static.phd.co.id/menu/Cappucino_Jelly_Menu_item_new.png',
            'price' => 18000,
            'description' => 'Cappucino flavored drink with Jelly',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')],

            ['id' => 'drk07',
            'type' => 'drink',
            'name' => 'Aqua 330 ML',
            'url_image' => 'https://s3-ap-southeast-1.amazonaws.com/pizzahutidtest/menu/drinks_aqua.png',
            'price' => 8000,
            'description' => 'Aqua 330 ml',
            'stock' => 100,
            'chef_recommended' => 0,
            'date_added' => Carbon::create('2020', '01', '01')]
        ]);
    }
}
