<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;

class CounterBehavior extends Behavior
{
	
	/*
	 * Configuration : counter name field.
	 * Default : views
	 */
	protected $_defaultConfig = [
        'implementedMethods' => ['incField' => 'incField'],
        'field' => 'views',
    ];
	
	/*
	 * incField méthod.
	 * Params : $id = id of the record
	 */
	public function incField($id)
	{
		$field = $this->config('field');
		
		$query = $this->_table->query();
		$result = $query
			->update()
		    ->set(
		        $query->newExpr(sprintf('%s = %s + 1', $field, $field))
		    )
		    ->where([
		        'id' => $id
		    ])
		    ->execute();
	}
}