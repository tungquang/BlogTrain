<?php

use Illuminate\Database\Seeder;
use App\Model\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createPost = new Permission();
		$createPost->name         = 'create-post';
		$createPost->display_name = 'Create Posts'; // optional
		// Allow a user to...
		$createPost->description  = 'create new blog posts'; // optional
		$createPost->save();

		$editPost = new Permission();
		$editPost->name 		='edit-post';
		$editPost->display_name ='Edit posts';
		$editPost->description 	='Edit the posts in the website';
		$editPost->save();

		$deletePost = new Permission();
		$deletePost->name 		='delete-post';
		$deletePost->display_name ='Delete posts';
		$deletePost->description 	='Delete the posts in the website';
		$deletePost->save();

		$updatePost = new Permission();
		$updatePost->name 		='update-post';
		$updatePost->display_name ='Update post';
		$updatePost->description 	='Update the posts in the website';
		$updatePost->save();

    }
}
