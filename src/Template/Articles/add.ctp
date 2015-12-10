<!-- File: src/Template/Articles/add.ctp -->

<h1>Add Pizza Order</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->input('Name');
	echo $this->Form->input('Address');
	echo $this->Form->input('City');
	echo $this->Form->input('PostalCode');
	
	
	$options=array('On'=>'Ontario','Manitoba '=>'Manitoba ','Saskatchewan'=>'Saskatchewan','Quebec'=>'Quebec');
	echo  $this->Form->select('Province',$options);
	echo $this->Form->input('Email');
	echo $this->Form->input('PhoneNo');
$options=array('sc'=>'Salami and Cheese','Ripacotta '=>'Ripacotta ','Tw'=>'Terracotta on wheat','Hc'=>'Ham and cheese');
	echo  $this->Form->select('PizzaName',$options);
	echo $this->Form->input('Toppings');
	
	echo $this->Form->radio(
    'Size',
    [
        ['value' => 'samll', 'text' => 'samll', 'style' => 'color:red;'],['value' => 'm', 'text' => 'Medium ', 'style' => 'color:blue;'],
        ['value' => 'Large', 'text' => 'Large ', 'style' => 'color:green;'],
		['value' => 'Xl', 'text' => 'XL', 'style' => 'color:blue;'],
    ]
);
	

	echo $this->Form->radio(
    'CrustType',
    [
        ['value' => 'hand-tossed', 'text' => 'hand-tossed', 'style' => 'color:red;'],['value' => 'stuffed', 'text' => 'stuffed ', 'style' => 'color:blue;'],
        ['value' => 'pan', 'text' => 'pan ', 'style' => 'color:green;'],
		['value' => 'thin', 'text' => 'thin', 'style' => 'color:blue;'],
    ]
);
    echo $this->Form->button(__('Save Pizza Order'));
    echo $this->Form->end();
?>