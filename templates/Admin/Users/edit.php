<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('username');
                    echo $this->Form->control('email');
                    echo $this->Form->control('senha', ['type' => 'password']);
                    echo $this->Form->control('address.cidade');
                    echo $this->Form->control('address.estado');
                    echo $this->Form->control('address.pais');
                    echo $this->Form->control('role_id', ['options' => $roles]);
                    echo $this->Form->control('networks._ids', [
                        'options' => $networks,
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        'label' => 'Redes Sociais',
                        ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
