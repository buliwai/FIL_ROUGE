<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200411110236 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE championnat_masculin_senior ADD category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE championnat_masculin_senior ADD CONSTRAINT FK_FF1917B712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_FF1917B712469DE2 ON championnat_masculin_senior (category_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE championnat_masculin_senior DROP FOREIGN KEY FK_FF1917B712469DE2');
        $this->addSql('DROP INDEX IDX_FF1917B712469DE2 ON championnat_masculin_senior');
        $this->addSql('ALTER TABLE championnat_masculin_senior DROP category_id');
    }
}
