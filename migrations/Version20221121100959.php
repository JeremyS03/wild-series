<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221121100959 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE program ADD programs_id INT NOT NULL');
        $this->addSql('ALTER TABLE program ADD CONSTRAINT FK_92ED778479AEC3C FOREIGN KEY (programs_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_92ED778479AEC3C ON program (programs_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE program DROP FOREIGN KEY FK_92ED778479AEC3C');
        $this->addSql('DROP INDEX IDX_92ED778479AEC3C ON program');
        $this->addSql('ALTER TABLE program DROP programs_id');
    }
}
