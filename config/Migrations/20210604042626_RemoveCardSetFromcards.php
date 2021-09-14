<?php

use Migrations\AbstractMigration;

class RemoveCardSetFromcards extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table('cards');
        $table->removeColumn('CardSet')
        ->save();
    }
}
