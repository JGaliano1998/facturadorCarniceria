<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250930171942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE documento (id INT AUTO_INCREMENT NOT NULL, cliente_id INT DEFAULT NULL, tipo VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, fecha DATETIME DEFAULT NULL, anio INT DEFAULT NULL, mes INT DEFAULT NULL, importe_total NUMERIC(2, 2) DEFAULT NULL, notas VARCHAR(255) DEFAULT NULL, ruta_pdf VARCHAR(255) DEFAULT NULL, creado_en DATETIME DEFAULT NULL, actualizado_en VARCHAR(255) DEFAULT NULL, INDEX IDX_B6B12EC7DE734E51 (cliente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE documento ADD CONSTRAINT FK_B6B12EC7DE734E51 FOREIGN KEY (cliente_id) REFERENCES documento (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE documento DROP FOREIGN KEY FK_B6B12EC7DE734E51');
        $this->addSql('DROP TABLE documento');
    }
}
