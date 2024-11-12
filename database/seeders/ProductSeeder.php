<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coldDrinks =   [
            [
                'name' => 'Coca 33 cl',
                'price_normal' => 200,
                'category_id' => 1,
            ],
            [
                'name' => 'Coca Light 33 cl',
                'price_normal' => 200,
                'category_id' => 1,
            ],
            [
                'name' => 'Coca Zéro 33 cl',
                'price_normal' => 200,
                'category_id' => 1,
            ],
            [
                'name' => 'Fanta 33 cl',
                'price_normal' => 200,
                'category_id' => 1,
            ],
            [
                'name' => 'Sprite 33 cl',
                'price_normal' => 200,
                'category_id' => 1,
            ],
            [
                'name' => 'Eau plate 50 cl',
                'price_normal' => 300,
                'category_id' => 1,
            ],
            [
                'name' => 'Eau pétillante 50 cl',
                'price_normal' => 300,
                'category_id' => 1,
            ],
            [
                'name' => 'Fuse Tea 40 cl',
                'price_normal' => 300,
                'category_id' => 1,
            ],
            [
                'name' => 'Tonic 33 cl',
                'price_normal' => 250,
                'category_id' => 1,
            ],
            [
                'name' => 'Agrume 33 cl',
                'price_normal' => 250,
                'category_id' => 1,
            ],
            [
                'name' => 'Canada Dry 33 cl',
                'price_normal' => 250,
                'category_id' => 1,
            ],
            [
                'name' => 'Gini 33 cl',
                'price_normal' => 250,
                'category_id' => 1,
            ],
            [
                'name' => 'Tropico 33 cl',
                'price_normal' => 250,
                'category_id' => 1,
            ],
            [
                'name' => 'Ice Tea 33 cl',
                'price_normal' => 250,
                'category_id' => 1,
            ],
            [
                'name' => 'Ice Tea Pêche 33 cl',
                'price_normal' => 250,
                'category_id' => 1,
            ],
            [
                'name' => 'Ice Tea Green 33 cl',
                'price_normal' => 250,
                'category_id' => 1,
            ],
            [
                'name' => 'Jus de fruits',
                'price_normal' => 250,
                'category_id' => 1,
            ],
            [
                'name' => 'Red Bull',
                'price_normal' => 300,
                'category_id' => 1,
            ],
            [
                'name' => 'Jupiler',
                'price_normal' => 300,
                'category_id' => 1,
            ],
        ];
        $hotDrinks = [
            [
                'name' => 'Café',
                'price_normal' => 200,
                'category_id' => 2,
            ],
            [
                'name' => 'Thé au choix',
                'price_normal' => 200,
                'category_id' => 2,
            ],
            [
                'name' => 'Déca',
                'price_normal' => 200,
                'category_id' => 2,
            ],
            [
                'name' => 'Cappuccino',
                'price_normal' => 250,
                'category_id' => 2,
            ],
            [
                'name' => 'Chocolat chaud',
                'price_normal' => 250,
                'category_id' => 2,
            ]
        ];
        $sandwichesClassiques = [
            [
                'name' => 'Jambon &/ou fromage',
                'price_normal' => 320,
                'price_big' => 400,
                'category_id' => 3,
            ],
            [
                'name' => 'Bacon',
                'price_normal' => 390,
                'price_big' => 470,
                'category_id' => 3,
            ],
            [
                'name' => 'Boulette maison',
                'price_normal' => 390,
                'price_big' => 470,
                'category_id' => 3,
            ],
            [
                'name' => 'Jambon d\'Ardennes',
                'price_normal' => 390,
                'price_big' => 470,
                'category_id' => 3,
            ],
            [
                'name' => 'Jambon italien',
                'price_normal' => 390,
                'price_big' => 470,
                'category_id' => 3,
            ],
            [
                'name' => 'Saucisson italien',
                'price_normal' => 390,
                'price_big' => 470,
                'category_id' => 3,
            ],
            [
                'name' => 'Filet de poulet',
                'price_normal' => 390,
                'price_big' => 470,
                'category_id' => 3,
            ],
            [
                'name' => 'Rosbif',
                'price_normal' => 400,
                'price_big' => 480,
                'category_id' => 3,
            ],
            [
                'name' => 'Américain préparé',
                'price_normal' => 400,
                'price_big' => 480,
                'category_id' => 3,
            ],
            [
                'name' => 'Salade de viande',
                'price_normal' => 400,
                'price_big' => 480,
                'category_id' => 3,
            ],
            [
                'name' => 'Salade suisse',
                'price_normal' => 400,
                'price_big' => 480,
                'category_id' => 3,
            ],
            [
                'name' => 'Poulet curry, andalouse',
                'price_normal' => 400,
                'price_big' => 480,
                'category_id' => 3,
            ],
            [
                'name' => 'Thon mayonnaise, piquant, cocktail',
                'price_normal' => 320,
                'price_big' => 400,
                'category_id' => 3,
            ],
            [
                'name' => 'Thon portugais',
                'price_normal' => 390,
                'price_big' => 470,
                'category_id' => 3,
            ],
            [
                'name' => 'Salade de crabe',
                'price_normal' => 400,
                'price_big' => 480,
                'category_id' => 3,
            ],
            [
                'name' => 'Salade de langoustines cocktail',
                'price_normal' => 390,
                'price_big' => 470,
                'category_id' => 3,
            ],
            [
                'name' => 'Salade de crevettes grises',
                'price_normal' => 490,
                'price_big' => 570,
                'category_id' => 3,
            ],
            [
                'name' => 'Scampis à l’ail',
                'price_normal' => 490,
                'price_big' => 570,
                'category_id' => 3,
            ],
            [
                'name' => 'Saumon fumé en tranches',
                'price_normal' => 490,
                'price_big' => 570,
                'category_id' => 3,
            ],
        ];
        $sandwichesCreatifs = [
            [
                'name' => 'CLUB Maison',
                'price_normal' => 450,
                'category_id' => 4,
                'ingredients' => ['Jambon', 'Fromage', 'Assortiment de crudités', 'Œuf'],
            ],
            [
                'name' => 'MARTINO Maison',
                'price_normal' => 450,
                'category_id' => 4,
                'ingredients' => ['Américain préparé', 'Martino maison (cornichons, anchois)'],
            ],
            [
                'name' => 'Le Chèvre',
                'price_normal' => 450,
                'category_id' => 4,
                'ingredients' => ['Fromage de chèvre', 'Bacon braisé', 'Miel', 'Thym'],
            ],
            [
                'name' => 'SUISSE',
                'price_normal' => 450,
                'category_id' => 4,
                'ingredients' => ['Fromage fondu', 'Œuf de dinde', 'Tomates', 'Roquette'],
            ],
            [
                'name' => 'Le PANIDEL',
                'price_normal' => 450,
                'category_id' => 4,
                'ingredients' => ['Bacon grillé', 'Salade de thon', 'Câpres', 'Oignons frais'],
            ],
            [
                'name' => 'ITALIEN',
                'price_normal' => 490,
                'category_id' => 4,
                'ingredients' => ['Jambon de Parme', 'Mozzarella', 'Tomate', 'Origan', 'Huile d\'olive'],
            ],
            [
                'name' => 'Le CESAR',
                'price_normal' => 490,
                'category_id' => 4,
                'ingredients' => ['Poulet', 'Parmesan', 'Tomates séchées', 'Sauce moutarde'],
            ],
            [
                'name' => 'Le Carpaccio',
                'price_normal' => 500,
                'category_id' => 4,
                'ingredients' => ['Carpaccio de bœuf', 'Parmesan', 'Roquette', 'Tomates séchées'],
            ],
            [
                'name' => 'Le Fermier',
                'price_normal' => 500,
                'category_id' => 4,
                'ingredients' => ['Jambon blanc', 'Brie'],
            ],
            [
                'name' => 'Le NORDIQUE',
                'price_normal' => 500,
                'category_id' => 4,
                'ingredients' => ['Saumon fumé', 'Oignons frais', 'Sauce miel-moutarde', 'Aneth'],
            ],
            [
                'name' => 'Végétarien',
                'price_normal' => 500,
                'category_id' => 4,
                'ingredients' => ['Assortiment de crudités', 'Vinaigrette maison'],
            ],
            [
                'name' => 'GOURMAND',
                'price_normal' => 500,
                'category_id' => 4,
                'ingredients' => ['Américain maison', 'Crudités', 'Œuf', 'Sauce au choix'],
            ],
            [
                'name' => 'César Poulet',
                'price_normal' => 450,
                'category_id' => 4,
                'ingredients' => ['Crudités', 'Poulet', 'Parmesan', 'Tomates', 'Sauce moutarde'],
            ],
            [
                'name' => 'BICKY',
                'price_normal' => 450,
                'category_id' => 4,
                'ingredients' => ['Américain préparé', 'Sauce Bicky', 'Crudités', 'Oignons frits'],
            ],
            [
                'name' => 'NIÇOIS',
                'price_normal' => 450,
                'category_id' => 4,
                'ingredients' => ['Thon', 'Salade', 'Œuf', 'Tomates', 'Oignons frais', 'Concentré d’anchois'],
            ],
            [
                'name' => 'AMERICAIN',
                'price_normal' => 490,
                'category_id' => 4,
                'ingredients' => ['Américain préparé', 'Cornichons', 'Crudités', 'Œuf'],
            ],
            [
                'name' => 'Le Grec',
                'price_normal' => 490,
                'category_id' => 4,
                'ingredients' => ['Poulet mariné', 'Aubergines', 'Olives noires', 'Tomates séchées', 'Feta'],
            ],
            [
                'name' => 'Indien',
                'price_normal' => 500,
                'category_id' => 4,
                'ingredients' => ['Poulet au curry', 'Oignons frais', 'Salade verte'],
            ],
            [
                'name' => 'L’ITALIENNE',
                'price_normal' => 500,
                'category_id' => 4,
                'ingredients' => ['Jambon de Parme', 'Salade verte', 'Tomates séchées'],
            ],
            [
                'name' => 'Le Portugais',
                'price_normal' => 500,
                'category_id' => 4,
                'ingredients' => ['Thon', 'Œufs', 'Maïs', 'Mayonnaise', 'Sauce piquante'],
            ],
            [
                'name' => 'L’Ostendaise',
                'price_normal' => 500,
                'category_id' => 4,
                'ingredients' => ['Filet américain', 'Salade verte', 'Cornichons'],
            ],
            [
                'name' => 'L’Orientale',
                'price_normal' => 500,
                'category_id' => 4,
                'ingredients' => ['Houmous', 'Falafel', 'Salade verte', 'Carottes', 'Sauce yaourt'],
            ],
        ];
        $paninis = [
            [
                'name' => 'Jambon et fromage',
                'price_normal' => 490,
                'category_id' => 5,
                'ingredients' => ['Jambon', 'Fromage'],
            ],
            [
                'name' => 'Chèvre',
                'price_normal' => 500,
                'category_id' => 5,
                'ingredients' => ['Fromage de chèvre', 'Miel', 'Thym'],
            ],
            [
                'name' => 'Fermier',
                'price_normal' => 550,
                'category_id' => 5,
                'ingredients' => ['Jambon blanc', 'Brie'],
            ],
            [
                'name' => 'Nordique',
                'price_normal' => 550,
                'category_id' => 5,
                'ingredients' => ['Saumon fumé', 'Oignons frais', 'Sauce miel-moutarde', 'Aneth'],
            ],
            [
                'name' => 'Caprese',
                'price_normal' => 550,
                'category_id' => 5,
                'ingredients' => ['Mozzarella', 'Tomates', 'Basilic', 'Huile d\'olive'],
            ],
            [
                'name' => 'Hawaïen',
                'price_normal' => 550,
                'category_id' => 5,
                'ingredients' => ['Jambon', 'Ananas', 'Fromage'],
            ],
            [
                'name' => 'Napolitain',
                'price_normal' => 550,
                'category_id' => 5,
                'ingredients' => ['Salami', 'Mozzarella', 'Tomates', 'Origan'],
            ],
            [
                'name' => 'Parmesan',
                'price_normal' => 550,
                'category_id' => 5,
                'ingredients' => ['Jambon de Parme', 'Parmesan', 'Roquette'],
            ],
            [
                'name' => 'Estival',
                'price_normal' => 550,
                'category_id' => 5,
                'ingredients' => ['Poulet mariné', 'Aubergines grillées', 'Tomates séchées', 'Feta'],
            ],
        ];
        $pates = [
            [
                'name' => 'Bolognaise',
                'price_normal' => 500,
                'category_id' => 6,
            ],
            [
                'name' => 'Jambon et fromage',
                'price_normal' => 500,
                'category_id' => 6,
            ],
            [
                'name' => 'Carbonara',
                'price_normal' => 500,
                'category_id' => 6,
            ],
            [
                'name' => 'Aux 4 fromages',
                'price_normal' => 500,
                'category_id' => 6,
            ],
            [
                'name' => 'Pesto vert',
                'price_normal' => 500,
                'category_id' => 6,
            ],
            [
                'name' => 'Tomate crème basilic',
                'price_normal' => 500,
                'category_id' => 6,
            ],
            [
                'name' => 'Crème à la truffe et parmesan',
                'price_normal' => 650,
                'category_id' => 6,
            ],
            [
                'name' => 'Saumon fumé crème-tomate',
                'price_normal' => 650,
                'category_id' => 6,
            ],
            [
                'name' => 'Saumon fumé crème-parmesan',
                'price_normal' => 650,
                'category_id' => 6,
            ],
        ];

        foreach ($coldDrinks as $coldDrink) {
            \App\Models\Product::create($coldDrink);
        }

        foreach ($hotDrinks as $hotDrink) {
            \App\Models\Product::create($hotDrink);
        }

        foreach ($sandwichesClassiques as $sandwichClassique) {
            \App\Models\Product::create($sandwichClassique);
        }

        foreach ($sandwichesCreatifs as $sandwichCreatif) {
            \App\Models\Product::create($sandwichCreatif);
        }

        foreach ($paninis as $panini) {
            \App\Models\Product::create($panini);
        }

        foreach ($pates as $pate) {
            \App\Models\Product::create($pate);
        }
    }
}
