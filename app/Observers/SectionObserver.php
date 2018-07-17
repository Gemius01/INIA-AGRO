<?php 

namespace App\Observers;
use Caffeinated\Shinobi\Models\Permission;

class SectionObserver {

	public function created($model)
	{
		Permission::create([
			'name' => 'seccion',
			'slug' => 'seccion-'.$model->id,
			'description' => '',
		]);
	}
}
