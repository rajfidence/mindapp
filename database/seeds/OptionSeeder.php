<?php
use App\Options;
use Illuminate\Database\Seeder;


class QuestionSeeder extends Seeder{
	public function run(){
		$options = [
			[
				'id' => 1,
				'question_id' => 1,
				'option_name' => "Eggs",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 2,
				'question_id' => 1,
				'option_name' => "Milk & Bread",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 3,
				'question_id' => 1,
				'option_name' => "Cereals",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 4,
				'question_id' => 1,
				'option_name' => "Other",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 5,
				'question_id' => 2,
				'option_name' => "Not at all",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 6,
				'question_id' => 2,
				'option_name' => "Several days",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 7,
				'question_id' => 2,
				'option_name' => "More than half the days",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 8,
				'question_id' => 2,
				'option_name' => "Nearly every day",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 9,
				'question_id' => 3,
				'option_name' => "I do not feel sad",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 10,
				'question_id' => 3,
				'option_name' => "I feel sad",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 11,
				'question_id' => 3,
				'option_name' => "I am sad all the time and I can't snap out of it",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			[
				'id' => 12,
				'question_id' => 3,
				'option_name' => "I am so sad and unhappy that I can't stand it",
                'created_at' =>  date("Y-m-d H:i:s"),
                'updated_at' =>  date("Y-m-d H:i:s")
				
			],
			
		];
		\DB::table('options')->insert($options);
	}
}


