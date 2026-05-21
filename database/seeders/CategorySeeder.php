<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Category::query()->delete();            
        $categories = [
            [
                'name' => 'Literature & Writing',
                'slug' => 'literature-writing',
                'description' => 'Creative writing, storytelling, and literary content.',
                'parent_id' => null,
                'children' => [
                    ['name' => 'Short Stories', 'slug' => 'short-stories', 'description' => 'Short story writing and collections.'],
                    ['name' => 'Poetry', 'slug' => 'poetry', 'description' => 'Poetry, verse, and poetic techniques.'],
                    ['name' => 'Thoughts & Reflections', 'slug' => 'thoughts-reflections', 'description' => 'Personal thoughts, essays, and reflections.'],
                ]
            ],
        
            [
                'name' => 'Technology & Programming',
                'slug' => 'technology-programming',
                'description' => 'Programming languages, frameworks, and tech topics.',
                'parent_id' => null,
                'children' => [
                    ['name' => 'Laravel', 'slug' => 'laravel', 'description' => 'Laravel framework tutorials and guides.'],
                    ['name' => 'JavaScript', 'slug' => 'javascript', 'description' => 'JavaScript, ES6, Node.js, and web technologies.'],
                    ['name' => 'PHP', 'slug' => 'php', 'description' => 'PHP programming and backend development.'],
                ]
            ],
           
            [
                'name' => 'Personal Development',
                'slug' => 'personal-development',
                'description' => 'Productivity, habits, and personal growth.',
                'parent_id' => null,
                'children' => [
                    ['name' => 'Productivity', 'slug' => 'productivity', 'description' => 'Productivity tips, tools, and techniques.'],
                    ['name' => 'Habits', 'slug' => 'habits', 'description' => 'Building and maintaining good habits.'],
                ]
            ],
            
            [
                'name' => 'Culture & Knowledge',
                'slug' => 'culture-knowledge',
                'description' => 'Psychology, philosophy, and cultural insights.',
                'parent_id' => null,
                'children' => [
                    ['name' => 'Psychology', 'slug' => 'psychology', 'description' => 'Psychology, behavior, and human mind.'],
                    ['name' => 'Philosophy', 'slug' => 'philosophy', 'description' => 'Philosophy, ideas, and critical thinking.'],
                ]
            ],
        ];

        foreach ($categories as $category) {

            $children = $category['children'] ?? [];
            unset($category['children']);
            
            $parent = Category::create($category);
            
            foreach ($children as $child) {
                $child['parent_id'] = $parent->id;
                Category::create($child);
            }
        }
    }
}