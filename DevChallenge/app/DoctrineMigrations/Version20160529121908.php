<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160529121908 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE stock_sales ADD stock_items_id INT NOT NULL');
        $this->addSql('ALTER TABLE stock_sales ADD CONSTRAINT FK_F7916CB52476FAC6 FOREIGN KEY (stock_items_id) REFERENCES stock_items (id)');
        $this->addSql('CREATE INDEX IDX_F7916CB52476FAC6 ON stock_sales (stock_items_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE stock_sales DROP FOREIGN KEY FK_F7916CB52476FAC6');
        $this->addSql('DROP INDEX IDX_F7916CB52476FAC6 ON stock_sales');
        $this->addSql('ALTER TABLE stock_sales DROP stock_items_id');
    }
}
