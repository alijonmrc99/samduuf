<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert([
            [
                'title_en' => 'Menu(Root)',
                'title_uz' => 'Menu(Root)',
                'title_kuz' => 'Menu(Root)',
                'title_ru' => 'Menu(Root)',
                'slug' => 'none',
                'parent_id' => 0,
                'priority' => 0,
                'degree' => 0
            ], [
                'title_en' => 'Link(Root)',
                'title_uz' => 'Link(Root)',
                'title_kuz' => 'Link(Root)',
                'title_ru' => 'Link(Root)',
                'slug' => 'none',
                'parent_id' => 0,
                'priority' => 0,
                'degree' => 0
            ],
        ]);

        Menu::insert([
            [
                'title_en' => 'News',
                'title_uz' => 'Yangiliklar',
                'title_kuz' => 'Янгиликлар',
                'title_ru' => 'Новости',
                'slug' => 'menu-news',
                'link' => null,
                'parent_id' => 1,
                'priority' => 1,
                'degree' => 1
            ],
            [
                'title_en' => 'Structure',
                'title_uz' => 'Tuzilma',
                'title_kuz' => 'Тузилма',
                'title_ru' => 'Структура',
                'slug' => 'menu-structure',
                'link' => null,
                'parent_id' => 1,
                'priority' => 2,
                'degree' => 1
            ],
            [
                'title_en' => 'Activity',
                'title_uz' => 'Faoliyat',
                'title_kuz' => 'Фаолият',
                'title_ru' => 'Деятельность',
                'slug' => 'menu-activity',
                'link' => null,
                'parent_id' => 1,
                'priority' => 3,
                'degree' => 1
            ],
            [
                'title_en' => 'Entrant',
                'title_uz' => 'Abituriyent',
                'title_kuz' => 'Абитуриент',
                'title_ru' => 'Абитуриенты',
                'slug' => 'menu-entrant',
                'link' => null,
                'parent_id' => 1,
                'priority' => 4,
                'degree' => 1
            ],
            [
                'title_en' => 'Students',
                'title_uz' => 'Talabalar',
                'title_kuz' => 'Талабалар',
                'title_ru' => 'Cтуденты',
                'slug' => 'menu-students',
                'link' => null,
                'parent_id' => 1,
                'priority' => 5,
                'degree' => 1
            ],
            [
                'title_en' => 'Foreign students',
                'title_uz' => 'Xorijiy talabalar',
                'title_kuz' => 'Хорижий талабалар',
                'title_ru' => 'Иностранные студенты',
                'slug' => 'menu-foreign-students',
                'link' => null,
                'parent_id' => 1,
                'priority' => 6,
                'degree' => 1
            ],
            [
                'title_en' => 'Interactive services',
                'title_uz' => 'Interaktiv xizmatlar',
                'title_kuz' => 'Интерактив хизматлар',
                'title_ru' => 'Интерактивная услуга',
                'slug' => 'menu-interactive-services',
                'link' => null,
                'parent_id' => 1,
                'priority' => 7,
                'degree' => 1
            ],
            [
                'title_en' => 'Contact',
                'title_uz' => 'Bog\'lanish',
                'title_kuz' => 'Боғланиш',
                'title_ru' => 'Контакты',
                'slug' => 'menu-contact',
                'link' => '/contact',
                'parent_id' => 1,
                'priority' => 8,
                'degree' => 1
            ],
        ]);

    }
}
