<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160521160037 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE stock_items (id INT AUTO_INCREMENT NOT NULL, stock_types_id INT DEFAULT NULL, stock_item_name VARCHAR(255) NOT NULL, stock_item_base VARCHAR(255) NOT NULL, stock_item_spec LONGBLOB DEFAULT NULL, stock_item_cont LONGBLOB DEFAULT NULL, stock_item_req LONGBLOB DEFAULT NULL, stock_item_serial VARCHAR(255) DEFAULT NULL, INDEX IDX_7D0EF5BCC1746715 (stock_types_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock_meta (id INT AUTO_INCREMENT NOT NULL, stock_users_id INT DEFAULT NULL, meta_user VARCHAR(255) NOT NULL, meta_date VARCHAR(255) NOT NULL, meta_action VARCHAR(255) NOT NULL, meta_desc LONGBLOB NOT NULL, INDEX IDX_CEE84CF12875E07F (stock_users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock_permissions (id INT AUTO_INCREMENT NOT NULL, stock_users_id INT NOT NULL, perm_add TINYINT(1) NOT NULL, perm_edit TINYINT(1) NOT NULL, perm_del TINYINT(1) NOT NULL, perm_order TINYINT(1) NOT NULL, perm_su TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_F2236A5B2875E07F (stock_users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock_sales (id INT AUTO_INCREMENT NOT NULL, sales_prdt VARCHAR(255) NOT NULL, sale_qunty INT NOT NULL, sales_trk_no VARCHAR(255) NOT NULL, sales_eta DATETIME NOT NULL, sales_date_ord DATETIME NOT NULL, sales_date_dis DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock_types (id INT AUTO_INCREMENT NOT NULL, stock_type_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock_users (id INT AUTO_INCREMENT NOT NULL, user_fname VARCHAR(255) NOT NULL, user_lname VARCHAR(255) NOT NULL, user_email VARCHAR(255) NOT NULL, user_pass VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE stock_items ADD CONSTRAINT FK_7D0EF5BCC1746715 FOREIGN KEY (stock_types_id) REFERENCES stock_types (id)');
        $this->addSql('ALTER TABLE stock_meta ADD CONSTRAINT FK_CEE84CF12875E07F FOREIGN KEY (stock_users_id) REFERENCES stock_users (id)');
        $this->addSql('ALTER TABLE stock_permissions ADD CONSTRAINT FK_F2236A5B2875E07F FOREIGN KEY (stock_users_id) REFERENCES stock_users (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE stock_items DROP FOREIGN KEY FK_7D0EF5BCC1746715');
        $this->addSql('ALTER TABLE stock_meta DROP FOREIGN KEY FK_CEE84CF12875E07F');
        $this->addSql('ALTER TABLE stock_permissions DROP FOREIGN KEY FK_F2236A5B2875E07F');
        $this->addSql('DROP TABLE stock_items');
        $this->addSql('DROP TABLE stock_meta');
        $this->addSql('DROP TABLE stock_permissions');
        $this->addSql('DROP TABLE stock_sales');
        $this->addSql('DROP TABLE stock_types');
        $this->addSql('DROP TABLE stock_users');
    }
}
