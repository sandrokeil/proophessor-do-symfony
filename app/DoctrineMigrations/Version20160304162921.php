<?php

namespace Prooph\ProophessorDo\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Prooph\ProophessorDo\Projection\Table;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160304162921 extends AbstractMigration
{

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $todo = $schema->getTable(Table::TODO);
        $todo->addColumn('reminder', 'string', ['default' => null, 'notnull' => false, 'length' => 30]);
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $todo = $schema->getTable(Table::TODO);
        $todo->dropColumn('reminder');
    }
}
