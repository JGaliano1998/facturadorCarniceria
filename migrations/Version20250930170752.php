<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250930170752 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE direccion (id INT AUTO_INCREMENT NOT NULL, cliente_id INT DEFAULT NULL, calle VARCHAR(255) DEFAULT NULL, numero INT DEFAULT NULL, piso VARCHAR(255) DEFAULT NULL, puerta VARCHAR(255) DEFAULT NULL, codigo_postal INT DEFAULT NULL, localidad VARCHAR(255) DEFAULT NULL, provincia VARCHAR(255) DEFAULT NULL, pais VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_F384BE95DE734E51 (cliente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE direccion ADD CONSTRAINT FK_F384BE95DE734E51 FOREIGN KEY (cliente_id) REFERENCES cliente (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE direccion DROP FOREIGN KEY FK_F384BE95DE734E51');
        $this->addSql('DROP TABLE direccion');
    }
}
