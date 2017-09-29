<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::insert("INSERT INTO `articles` (`title`,`text`,`img`) VALUES (?,?,?)", [
        	'Blog post 1',
        	'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
        	'post_1.jpg'
        ]);

        
        //2 - Конструктор запросов
        DB::table('articles')->insert([							
        								[
        									'title'=>'Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium.',
        									'text'=>'<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
								            </p>',
								            'img'=>'post_2.jpg'
        								],
        								[
        									'title'=>'This is heading',
        									'text'=>'<p>Lore ipsum</p>',
								            'img'=>'post_3.jpg'
        								]

									]);

        //3
        Article::create([
        					'title'=>'Heading post',
							'text'=>'<p>Hay its num 4 pots</p>',
				            'img'=>'post_4.jpg'

        				]);

    }
}
