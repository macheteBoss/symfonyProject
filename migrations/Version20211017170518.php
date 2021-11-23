<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211017170518 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE promo_codes (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(8) NOT NULL, percent INT NOT NULL, UNIQUE INDEX UNIQ_C84FDDB77153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promo_codes_user (promo_codes_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_1016DA30AC5AC724 (promo_codes_id), INDEX IDX_1016DA30A76ED395 (user_id), PRIMARY KEY(promo_codes_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE promo_codes_user ADD CONSTRAINT FK_1016DA30AC5AC724 FOREIGN KEY (promo_codes_id) REFERENCES promo_codes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE promo_codes_user ADD CONSTRAINT FK_1016DA30A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promo_codes_user DROP FOREIGN KEY FK_1016DA30AC5AC724');
        $this->addSql('DROP TABLE promo_codes');
        $this->addSql('DROP TABLE promo_codes_user');
    }
}
