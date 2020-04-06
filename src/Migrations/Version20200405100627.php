<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200405100627 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE championnat_masculin_senior ADD club_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE championnat_masculin_senior ADD CONSTRAINT FK_FF1917B761190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('CREATE INDEX IDX_FF1917B761190A32 ON championnat_masculin_senior (club_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE championnat_masculin_senior DROP FOREIGN KEY FK_FF1917B761190A32');
        $this->addSql('DROP INDEX IDX_FF1917B761190A32 ON championnat_masculin_senior');
        $this->addSql('ALTER TABLE championnat_masculin_senior DROP club_id');
    }
}
