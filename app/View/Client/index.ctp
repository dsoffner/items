
<h1>Client Actions</h1>
<p>
Choose your action
<ul>
<li><?php echo $this->Html->link('Request Items List', array('controller' => 'client', 'action' => 'request_index')); ?></li>
<li><?php echo $this->Html->link('Request To Add an Item', array('controller' => 'client', 'action' => 'request_add')); ?></li>
<li><?php echo $this->Html->link('View Item with ID 1', array('controller' => 'client', 'action' => 'request_view', 1)); ?></li>
<li><?php echo $this->Html->link('Update Item with ID 2', array('controller' => 'client', 'action' => 'request_edit', 2)); ?></li>
<li><?php echo $this->Html->link('Delete Item with ID 3', array('controller' => 'client', 'action' => 'request_delete'), 3); ?></li>
</ul>

</p>

