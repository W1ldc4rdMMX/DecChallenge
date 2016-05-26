<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160526183011 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE stock_serials (id INT AUTO_INCREMENT NOT NULL, stock_items_id INT NOT NULL, stock_serial VARCHAR(255) NOT NULL, INDEX IDX_8D1E359E2476FAC6 (stock_items_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE stock_serials ADD CONSTRAINT FK_8D1E359E2476FAC6 FOREIGN KEY (stock_items_id) REFERENCES stock_items (id)');
        $this->addSql('ALTER TABLE stock_items DROP stock_item_serial');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE stock_serials');
        $this->addSql('ALTER TABLE stock_items ADD stock_item_serial VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
