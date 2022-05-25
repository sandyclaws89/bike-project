<?php

use Illuminate\Database\Seeder;
use App\Bike;
use Faker\Generator as Faker;


class BikeSeeder extends Seeder
{

    public function run(Faker $faker)
    {
        $arrBike = [
            [
                'image'            =>  'https://cdn.deporvillage.com/cdn-cgi/image/w=900,dpr=1,f=auto,q=75,fit=contain,background=white/product/ce-d644070102-c_010.jpg',
                'post_title'       =>  'Bici da corsa CERVELO',
                'bike_name'        =>  'CERVELO CALEDONIA',
                'description'      =>  'La bicicletta da corsa Cervélo Caledonia Shimano Ultegra è stata progettata dallo staff di Cervélo. Il telaio e la forcella sono realizzato in carbonio, molto leggero. Grazie alla trasmissione Shimano Ultegra 8000 a 11 velocità e alle ruote DT Swiss E1850 23 Spline, la bicicletta offre prestazioni eccellenti durante lo sport. La geometria è progettata per adattarsi sia alla fisionomia maschile che femminile. Combina una struttura sofisticata dei tubi, che aggiunge efficienza, oltre a un plus di aerodinamica grazie ai profili che si adattano',
                'price'            =>  '3799€',
                'brand'            =>  'CERVELO',
                'model'            =>  'CALEDONIA',
                'year'             =>  '2011-01-01',
                'type'             =>  'race',
                'available'        =>   1,
            ],
            [
                'image'            =>  'https://www.canyon.com/dw/image/v2/BCML_PRD/on/demandware.static/-/Sites-canyon-master/default/dwd0a733dc/images/full/full_2022_/2022/full_2022_spectral-125-cf-9_3179_gn_P5.jpg?sw=874&sfrm=png&q=90&bgcolor=F4F4F4',
                'post_title'       =>  'Bici da Enduro CANYON',
                'bike_name'        =>  'CANYON Spectral 125 CF 9',
                'description'      =>  'Prova il divertimento del vero trail riding. La Spectral 125 CF 9 combina i vantaggi della Spectral 29 - geometria progressiva e versatilità incredibile - con un peso complessivo ridotto e una maggiore efficienza in salita. Non lasciarti ingannare dai numeri: con i suoi 140 e 125 mm di escursione (anteriore/posteriore), la Spectral 125 assicura prestazioni davvero notevoli. Grazie alla sua geometria moderna e progressiva, questa MTB lunga, bassa e con angoli aperti è pronta a fare a pezzi ogni trail. Proprio come la Spectral 29, anche questo modello presenta un angolo sterzo da 64° e un reach allungato per darti la massima fiducia nei tratti più ripidi e un\'enorme stabilità alle alte velocità e sui terreni accidentati.',
                'price'            =>  '5.799€',
                'brand'            =>  'CANYON',
                'model'            =>  'Spectral 125 CF 9',
                'year'             =>  '2022-01-01',
                'type'             =>  'mtb',
                'available'        =>   0,
            ],
            [
                'image'            =>  'https://www.lombardobikes.com/wp-content/uploads/2019/10/MILANO-M-GREEN-min.png',
                'post_title'       =>  'Bici da città LOMBARDO MILANO',
                'bike_name'        =>  'LOMBARDO MILANO',
                'description'      =>  'La Milano 28" è la Trekking in alluminio di Lombardo.
                Milano è una city bike con un telaio in Alluminio, la forcella ammortizzata con escursione 40mm., il cambio Shimano Acera e i freni disco idraulico, la bici giusta in città e in strada. Trekking Front Uomo Milano 28" in Alluminio, Forcella ammortizzata, Cambio Shimano Acera, Freni Disco Idraulico',
                'price'            =>  '556.00€',
                'brand'            =>  'LOMBARDO',
                'model'            =>  'MILANO',
                'year'             =>  '2022-01-01',
                'type'             =>  'city',
                'available'        =>   1,
            ],
         ];
          foreach ($arrBike as $bikeData) {
            $bike = new Bike();
            $bike ->image = $bikeData['image'];
            $bike ->post_title = $bikeData['post_title'];
            $bike ->bike_name = $bikeData['bike_name'];
            $bike ->description = $bikeData['description'];
            $bike ->price = $bikeData['price'];
            $bike ->brand = $bikeData['brand'];
            $bike ->model = $bikeData['model'];
            $bike ->year = $bikeData['year'];
            $bike ->type = $bikeData['type'];
            $bike ->available = $bikeData['available'];
            $bike ->save();
        }

            for ($i=1; $i <= 70; $i++) {
            $bikeData = [
                 'image'        =>  $faker->imageUrl(640, 480, 'photo', true),
                 'post_title'   =>  implode(" ", $faker->words(rand(1, 4))),
                 'bike_name'    =>  implode(" ", $faker->words(rand(1, 3))),
                 'description'  =>  $faker->text(),
                 'price'        =>  $faker->randomFloat(1, 50, 99),
                 'brand'        =>  $faker->company(),
                 'model'        =>  $faker->numerify('model-####'),
                 'year'         =>  $faker->date(),
                 'type'         =>  $faker->word(),
                 'available'    =>  $faker->boolean(),
            ];
            // $bike = new Bike();
            // $bike->fill($bikeData);
            // $bike->save();
            Bike::create($bikeData);
        }
    }
}
