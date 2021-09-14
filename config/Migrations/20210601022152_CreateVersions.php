<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateVersions extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('versions');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => false,
        ]);
        $table->addColumn('short_name', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->create();
    }
}
