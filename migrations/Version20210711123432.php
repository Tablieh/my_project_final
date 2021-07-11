<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210711123432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, text LONGTEXT NOT NULL, note INT NOT NULL, date_avis DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marque (id INT AUTO_INCREMENT NOT NULL, construire_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, origine VARCHAR(50) NOT NULL, INDEX IDX_5A6F91CE3D2C8D58 (construire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modele (id INT AUTO_INCREMENT NOT NULL, voiture_id INT DEFAULT NULL, modele VARCHAR(255) NOT NULL, INDEX IDX_10028558181A8BA (voiture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, donner_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, created_at DATE NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649EDEA38B (donner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_voiture (user_id INT NOT NULL, voiture_id INT NOT NULL, INDEX IDX_B1EF9F05A76ED395 (user_id), INDEX IDX_B1EF9F05181A8BA (voiture_id), PRIMARY KEY(user_id, voiture_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voiture (id INT AUTO_INCREMENT NOT NULL, concerner_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, nb_portes INT NOT NULL, couleur VARCHAR(255) NOT NULL, image LONGTEXT NOT NULL, motorisation VARCHAR(50) NOT NULL, INDEX IDX_E9E2810F95131E34 (concerner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE marque ADD CONSTRAINT FK_5A6F91CE3D2C8D58 FOREIGN KEY (construire_id) REFERENCES modele (id)');
        $this->addSql('ALTER TABLE modele ADD CONSTRAINT FK_10028558181A8BA FOREIGN KEY (voiture_id) REFERENCES voiture (id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D649EDEA38B FOREIGN KEY (donner_id) REFERENCES avis (id)');
        $this->addSql('ALTER TABLE user_voiture ADD CONSTRAINT FK_B1EF9F05A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_voiture ADD CONSTRAINT FK_B1EF9F05181A8BA FOREIGN KEY (voiture_id) REFERENCES voiture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE voiture ADD CONSTRAINT FK_E9E2810F95131E34 FOREIGN KEY (concerner_id) REFERENCES avis (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649EDEA38B');
        $this->addSql('ALTER TABLE voiture DROP FOREIGN KEY FK_E9E2810F95131E34');
        $this->addSql('ALTER TABLE marque DROP FOREIGN KEY FK_5A6F91CE3D2C8D58');
        $this->addSql('ALTER TABLE user_voiture DROP FOREIGN KEY FK_B1EF9F05A76ED395');
        $this->addSql('ALTER TABLE modele DROP FOREIGN KEY FK_10028558181A8BA');
        $this->addSql('ALTER TABLE user_voiture DROP FOREIGN KEY FK_B1EF9F05181A8BA');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE marque');
        $this->addSql('DROP TABLE modele');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE user_voiture');
        $this->addSql('DROP TABLE voiture');
    }
}
