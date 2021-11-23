<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211017162751 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE orders (id INT AUTO_INCREMENT NOT NULL, status_id INT NOT NULL, device_id INT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(150) NOT NULL, email VARCHAR(150) DEFAULT NULL, phone VARCHAR(20) NOT NULL, count_joystick INT NOT NULL, address LONGTEXT NOT NULL, comment LONGTEXT DEFAULT NULL, date_time DATETIME NOT NULL, price DOUBLE PRECISION NOT NULL, days INT NOT NULL, INDEX IDX_E52FFDEE6BF700BD (status_id), INDEX IDX_E52FFDEE94A4C7D4 (device_id), INDEX IDX_E52FFDEEA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE6BF700BD FOREIGN KEY (status_id) REFERENCES statuses (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE94A4C7D4 FOREIGN KEY (device_id) REFERENCES devices (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE orders');
    }
}
