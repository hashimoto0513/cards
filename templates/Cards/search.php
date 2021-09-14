<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card[]|\Cake\Collection\CollectionInterface $cards
 */
?>
<div class="cards search content">
    <?= $this->Html->link(__('New Card'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cards') ?></h3>
<div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('CardSet') ?></th>
                    <th><?= $this->Paginator->sort('CardNumber') ?></th>
                    <th><?= $this->Paginator->sort('CardName') ?></th>
                    <th><?= $this->Paginator->sort('color') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cards as $card): ?>
                <tr>
                    <td><?= $this->Number->format($card->id) ?></td>
                    <td><?= h($card->CardSet) ?></td>
                    <td><?= $this->Number->format($card->CardNumber) ?></td>
                    <td><?= h($card->CardName) ?></td>
                    <td><?= h($card->color) ?></td>
                    <td><?= h($card->cost) ?></td>
                    <td><?= h($card->created) ?></td>
                    <td><?= h($card->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $card->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $card->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
