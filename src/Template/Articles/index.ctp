<!-- File: src/Template/Articles/index.ctp (delete links added) -->

<h1>Pizza Order</h1>
<p><?= $this->Html->link('Add New Pizza', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
		<th>PostalCode</th>
        <th>Province</th>
		 <th>Email</th>
		<th>PhoneNo</th>
		<th>PizzaName</th>
		<th>Toppings</th>
		<th>Size</th>
		<th>CrustType</th>
        <th>Actions</th>
    </tr>

<!-- Here's where we loop through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->Name, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $this->Html->link ($article->Address, ['action' => 'view', $article->id])  ?>
        </td>
		  <td>
            <?= $this->Html->link ($article->City, ['action' => 'view', $article->id])  ?>
        </td>
		  <td>
            <?= $this->Html->link ($article->PostalCode, ['action' => 'view', $article->id])  ?>
        </td>
		<td>
            <?= $this->Html->link ($article->Province, ['action' => 'view', $article->id])  ?>
        </td>
		<td>
            <?= $this->Html->link ($article->Email, ['action' => 'view', $article->id])  ?>
        </td>
		<td>
            <?= $this->Html->link ($article->PhoneNo, ['action' => 'view', $article->id])  ?>
        </td>
		<td>
            <?= $this->Html->link ($article->PizzaName, ['action' => 'view', $article->id])  ?>
        </td>
		<td>
            <?= $this->Html->link ($article->Toppings, ['action' => 'view', $article->id])  ?>
        </td>
		<td>
            <?= $this->Html->link ($article->Size, ['action' => 'view', $article->id])  ?>
        </td>
		<td>
            <?= $this->Html->link ($article->CrustType, ['action' => 'view', $article->id])  ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>