<div class="modecuissons form">
<?php echo $this->Form->create('Modecuisson');?>
	<fieldset>
		<legend><?php __('Edit Modecuisson'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parent');
		echo $this->Form->input('lib');
		echo $this->Form->input('rem');
		echo $this->Form->input('Recette');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Modecuisson.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Modecuisson.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Modecuissons', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Recettes', true), array('controller' => 'recettes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recette', true), array('controller' => 'recettes', 'action' => 'add')); ?> </li>
	</ul>
</div>