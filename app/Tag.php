<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
//        return $this->belongsToMany(Post::class);
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            $user = new \App\User();
            $user->name = $faker->name;
            $user->email = $faker->unique()->safeEmail;
            $user->password = bcrypt('123456');
            $user->save();

            for ($j = 0; $j < 5; $j++) {
                \App\Post::create([
                    'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'slug' => 'post-' . $i . $j, // slug tạm thời để đơn giản thế này, sau sẽ nâng cấp sử dụng helper để tạo slug từ title
                    'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                    'content' => $faker->text,
                    'user_id' => $user->id,
                    'created_at' => Carbon::now(),
                    'created_at' => Carbon::now(),
                ]);
            }
        }
    }
}
