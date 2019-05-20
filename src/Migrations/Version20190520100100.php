<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190520100100 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE couleur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE couleur_couleur (couleur_source INT NOT NULL, couleur_target INT NOT NULL, INDEX IDX_168BDFB8B6F9B688 (couleur_source), INDEX IDX_168BDFB8AF1CE607 (couleur_target), PRIMARY KEY(couleur_source, couleur_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marque (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE saison (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vetement (id INT AUTO_INCREMENT NOT NULL, marque_id INT NOT NULL, type_id INT NOT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, INDEX IDX_3CB446CF4827B9B2 (marque_id), INDEX IDX_3CB446CFC54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vetement_saison (vetement_id INT NOT NULL, saison_id INT NOT NULL, INDEX IDX_850DDDDB969D8B67 (vetement_id), INDEX IDX_850DDDDBF965414C (saison_id), PRIMARY KEY(vetement_id, saison_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vetement_couleur (vetement_id INT NOT NULL, couleur_id INT NOT NULL, INDEX IDX_299277A4969D8B67 (vetement_id), INDEX IDX_299277A4C31BA576 (couleur_id), PRIMARY KEY(vetement_id, couleur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE couleur_couleur ADD CONSTRAINT FK_168BDFB8B6F9B688 FOREIGN KEY (couleur_source) REFERENCES couleur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE couleur_couleur ADD CONSTRAINT FK_168BDFB8AF1CE607 FOREIGN KEY (couleur_target) REFERENCES couleur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vetement ADD CONSTRAINT FK_3CB446CF4827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('ALTER TABLE vetement ADD CONSTRAINT FK_3CB446CFC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE vetement_saison ADD CONSTRAINT FK_850DDDDB969D8B67 FOREIGN KEY (vetement_id) REFERENCES vetement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vetement_saison ADD CONSTRAINT FK_850DDDDBF965414C FOREIGN KEY (saison_id) REFERENCES saison (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vetement_couleur ADD CONSTRAINT FK_299277A4969D8B67 FOREIGN KEY (vetement_id) REFERENCES vetement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vetement_couleur ADD CONSTRAINT FK_299277A4C31BA576 FOREIGN KEY (couleur_id) REFERENCES couleur (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE couleur_couleur DROP FOREIGN KEY FK_168BDFB8B6F9B688');
        $this->addSql('ALTER TABLE couleur_couleur DROP FOREIGN KEY FK_168BDFB8AF1CE607');
        $this->addSql('ALTER TABLE vetement_couleur DROP FOREIGN KEY FK_299277A4C31BA576');
        $this->addSql('ALTER TABLE vetement DROP FOREIGN KEY FK_3CB446CF4827B9B2');
        $this->addSql('ALTER TABLE vetement_saison DROP FOREIGN KEY FK_850DDDDBF965414C');
        $this->addSql('ALTER TABLE vetement DROP FOREIGN KEY FK_3CB446CFC54C8C93');
        $this->addSql('ALTER TABLE vetement_saison DROP FOREIGN KEY FK_850DDDDB969D8B67');
        $this->addSql('ALTER TABLE vetement_couleur DROP FOREIGN KEY FK_299277A4969D8B67');
        $this->addSql('DROP TABLE couleur');
        $this->addSql('DROP TABLE couleur_couleur');
        $this->addSql('DROP TABLE marque');
        $this->addSql('DROP TABLE saison');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vetement');
        $this->addSql('DROP TABLE vetement_saison');
        $this->addSql('DROP TABLE vetement_couleur');
    }
}
