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
        ]);
        DB::table('colors')->insert([
            'name' => "Синий",
        ]);
        DB::table('colors')->insert([
            'name' => "Желтый",
        ]);
        DB::table('colors')->insert([
            'name' => "Черный",
        ]);
        DB::table('colors')->insert([
            'name' => "Оранжевый",
        ]);
        DB::table('colors')->insert([
            'name' => "Пурпурный",
        ]);
        DB::table('colors')->insert([
            'name' => "Серый",
        ]);
        DB::table('colors')->insert([
            'name' => "Белый",
        ]);

        // Category table
        DB::table('categories')->insert([
            'parent_id' => "0",
            'name' => "Для нее",
        ]); // 1
        DB::table('categories')->insert([
            'parent_id' => "0",
            'name' => "Для него",
        ]); // 2
        DB::table('categories')->insert([
            'parent_id' => "0",
            'name' => "Для пар",
        ]); // 3
        DB::table('categories')->insert([
            'parent_id' => "0",
            'name' => "Белье",
        ]); // 4
        DB::table('categories')->insert([
            'parent_id' => "0",
            'name' => "BDSM",
        ]); // 5

        // Для нее
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Вагинальные шарики",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Вакуумные помпы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Вибраторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Вибротрусики, бабочки",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Духи с феомонами",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Лубриканты",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Препараты",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Стимуляторы для груди",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Клиторальные вибраторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Страпоны",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Фаллоимитаторы",
        ]);

        // Для него
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "1",
            'name' => "Анальные стимуляторы",
        ]);

        // Для него
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Вакуумные помпы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Вибраторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Вагины и мастурбаторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Кольца, насадки, утяжки",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Духи с феромонами",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Препараты",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Секс куклы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Страпоны",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Фаллоимитаторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Экстендеры",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "2",
            'name' => "Фаллопротезы",
        ]);

        // Для пар
        DB::table('categories')->insert([
            'parent_id' => "3",
            'name' => "Анальные стимуляторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "3",
            'name' => "Вибраторы для пар",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "3",
            'name' => "Наборы игрушек",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "3",
            'name' => "Подарки, сувениры, приколы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "3",
            'name' => "Презервативы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "3",
            'name' => "Препараты",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "3",
            'name' => "Секс-машины, качели, шесты",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "3",
            'name' => "Фаллоимитаторы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "3",
            'name' => "Электросекс",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "3",
            'name' => "Книги, журналы",
        ]);
        DB::table('categories')->insert([
            'parent_id' => "3",
            'name' => "Зарядные устройства, батарейки",
        ]);

        // 4
    }
}
