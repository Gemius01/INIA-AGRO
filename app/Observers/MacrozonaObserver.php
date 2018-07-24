<?php 

namespace App\Observers;
use Caffeinated\Shinobi\Models\Permission;

class MacrozonaObserver {

	public function created($model)
	{
		Permission::create([
			'name' => 'macrozona',
			'slug' => 'macrozona-'.$model->id,
			'description' => '',
		]);
	}
}
