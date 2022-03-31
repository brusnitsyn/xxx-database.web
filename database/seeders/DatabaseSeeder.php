<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Colors table
        DB::table('colors')->insert([
            'name' => "Красный",
            'hex' => "#FF0000"
        ]);
        DB::table('colors')->insert([
            'name' => "Синий",
            'hex' => "#0000FF",
        ]);
        DB::table('colors')->insert([
            'name' => "Желтый",
            'hex' => "#FFFF00"
        ]);
        DB::table('colors')->insert([
            'name' => "Черный",
            'hex' => "#000000",
        ]);
        DB::table('colors')->insert([
            'name' => "Оранжевый",
            'hex' => "#FFA500",
        ]);
        DB::table('colors')->insert([
            'name' => "Пурпурный",
            'hex' => "#800080",
        ]);
        DB::table('colors')->insert([
            'name' => "Серый",
            'hex' => "#808080",
        ]);
        DB::table('colors')->insert([
            'name' => "Белый",
            'hex' => "#FFFFFF",
        ]);

        // Category table
        DB::table('categories')->insert([
            'name' => "Для нее",
        ]); // 1
        DB::table('categories')->insert([
            'name' => "Для него",
        ]); // 2
        DB::table('categories')->insert([
            'name' => "Для пар",
        ]); // 3
        DB::table('categories')->insert([
            'name' => "Белье",
        ]); // 4
        DB::table('categories')->insert([
            'name' => "BDSM",
        ]); // 5

        // Для нее
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Вагинальные шарики",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Вакуумные помпы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Вибраторы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Вибротрусики, бабочки",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Духи с феомонами",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Лубриканты",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Препараты",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Стимуляторы для груди",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Клиторальные вибраторы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Страпоны",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "1",
            'name' => "Фаллоимитаторы",
        ]);

        // Для него
        // DB::table('categories')->insert([
        //     'parent_id' => "1",
        //     'name' => "Анальные стимуляторы",
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id' => "1",
        //     'name' => "Анальные стимуляторы",
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id' => "1",
        //     'name' => "Анальные стимуляторы",
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id' => "1",
        //     'name' => "Анальные стимуляторы",
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id' => "1",
        //     'name' => "Анальные стимуляторы",
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id' => "1",
        //     'name' => "Анальные стимуляторы",
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id' => "1",
        //     'name' => "Анальные стимуляторы",
        // ]);

        // Для него
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Вакуумные помпы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Вибраторы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Вагины и мастурбаторы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Кольца, насадки, утяжки",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Духи с феромонами",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Препараты",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Секс куклы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Страпоны",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Фаллоимитаторы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Экстендеры",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "2",
            'name' => "Фаллопротезы",
        ]);

        // Для пар
        DB::table('category_objects')->insert([
            'parent_id' => "3",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "3",
            'name' => "Вибраторы для пар",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "3",
            'name' => "Наборы игрушек",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "3",
            'name' => "Подарки, сувениры, приколы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "3",
            'name' => "Презервативы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "3",
            'name' => "Препараты",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "3",
            'name' => "Секс-машины, качели, шесты",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "3",
            'name' => "Фаллоимитаторы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "3",
            'name' => "Электросекс",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "3",
            'name' => "Книги, журналы",
        ]);
        DB::table('category_objects')->insert([
            'parent_id' => "3",
            'name' => "Зарядные устройства",
        ]);

        // 4
    }
}
