Cakephp-CounterBehavior
=======================

A Cakephp 3 Behavior to use for increment a field (counter : visits, views, ...).

Version
----

0.1

Compatibility
----
Cakephp 3.2.12

Installation
--------------

- Copy the file .php into src/Model/Behavior/ directory.

- Add behavior in Table initialize method; example :

Code to put in a model :

	class MyTable extends Table
	{
	
		public function initialize(array $config)
		{
			$this->addBehavior('Counter', ['field' => 'visits']);
		}
	}

You can specify like in this example a another field name ('visits' in this example).
If you don't specify a field name, 'views' will be the name field (by default).

If you want to use this behavior in a component you must declare the behavior on the fly like this :

	$myTableEntity = TableRegistry::get('my_table');
	$myTableEntity->addBehavior('Counter', ['field' => 'visits']);

- Use behavior (increment a field) :

Code to put in a component or a controller :

    $myTableEntity->incField($row->id, ['field' => 'visits']); // increment visits (+1)

Author
-------------
Nicolas HENRY

[My Blog (french)](http://www.nicolas-henry.fr)
