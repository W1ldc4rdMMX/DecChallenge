<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160524221149 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE stock_items CHANGE stock_item_base stock_item_base LONGTEXT NOT NULL, CHANGE stock_item_spec stock_item_spec LONGTEXT DEFAULT NULL, CHANGE stock_item_cont stock_item_cont LONGTEXT DEFAULT NULL, CHANGE stock_item_req stock_item_req LONGTEXT DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE stock_items CHANGE stock_item_base stock_item_base VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE stock_item_spec stock_item_spec LONGBLOB DEFAULT NULL, CHANGE stock_item_cont stock_item_cont LONGBLOB DEFAULT NULL, CHANGE stock_item_req stock_item_req LONGBLOB DEFAULT NULL');
    }
}
