<?php
use App\Questions;
use Illuminate\Database\Seeder;


class QuestionSeeder extends Seeder{
	public function run(){
		$questions = [
			[
				'id' => 1,
                'question_name' => 'What you had for breakfast?',
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 2,
                'question_name' => 'Trouble falling or staying asleep, or sleeping too much?',
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
            ],
            [
				'id' => 3,
                'question_name' => 'How are you feeling today?',
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			]
		];
		\DB::table('questions')->insert($questions);
	}
}