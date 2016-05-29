<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160529184641 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_8893B91892FC23A8 ON stock_users');
        $this->addSql('DROP INDEX UNIQ_8893B918A0D96FBF ON stock_users');
        $this->addSql('ALTER TABLE stock_users ADD is_active TINYINT(1) NOT NULL, DROP username_canonical, DROP email_canonical, DROP enabled, DROP salt, DROP last_login, DROP locked, DROP expired, DROP expires_at, DROP confirmation_token, DROP password_requested_at, DROP roles, DROP credentials_expired, DROP credentials_expire_at');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE stock_users ADD username_canonical VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD email_canonical VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD salt VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD last_login DATETIME DEFAULT NULL, ADD locked TINYINT(1) NOT NULL, ADD expired TINYINT(1) NOT NULL, ADD expires_at DATETIME DEFAULT NULL, ADD confirmation_token VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD password_requested_at DATETIME DEFAULT NULL, ADD roles LONGTEXT NOT NULL COLLATE utf8_unicode_ci COMMENT \'(DC2Type:array)\', ADD credentials_expired TINYINT(1) NOT NULL, ADD credentials_expire_at DATETIME DEFAULT NULL, CHANGE is_active enabled TINYINT(1) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8893B91892FC23A8 ON stock_users (username_canonical)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8893B918A0D96FBF ON stock_users (email_canonical)');
    }
}
