<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241003190823 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE recipe (id INT AUTO_INCREMENT NOT NULL, id_meal VARCHAR(255) NOT NULL, str_meal VARCHAR(255) NOT NULL, str_drink_alternate VARCHAR(255) NOT NULL, str_category VARCHAR(255) NOT NULL, str_area VARCHAR(255) NOT NULL, str_instructions LONGTEXT NOT NULL, str_meal_thumb VARCHAR(255) NOT NULL, str_tags VARCHAR(255) NOT NULL, str_youtube VARCHAR(255) NOT NULL, str_ingredient1 VARCHAR(255) NOT NULL, str_ingredient2 VARCHAR(255) NOT NULL, str_ingredient3 VARCHAR(255) NOT NULL, str_ingredient4 VARCHAR(255) NOT NULL, str_ingredient5 VARCHAR(255) NOT NULL, str_ingredient6 VARCHAR(255) NOT NULL, str_ingredient7 VARCHAR(255) NOT NULL, str_ingredient8 VARCHAR(255) NOT NULL, str_ingredient9 VARCHAR(255) NOT NULL, str_ingredient10 VARCHAR(255) NOT NULL, str_ingredient11 VARCHAR(255) NOT NULL, str_ingredient12 VARCHAR(255) NOT NULL, str_ingredient13 VARCHAR(255) NOT NULL, str_ingredient14 VARCHAR(255) NOT NULL, str_ingredient15 VARCHAR(255) NOT NULL, str_ingredient16 VARCHAR(255) NOT NULL, str_ingredient17 VARCHAR(255) NOT NULL, str_ingredient18 VARCHAR(255) NOT NULL, str_ingredient19 VARCHAR(255) NOT NULL, str_ingredient20 VARCHAR(255) NOT NULL, str_measure1 VARCHAR(255) NOT NULL, str_measure2 VARCHAR(255) NOT NULL, str_measure3 VARCHAR(255) NOT NULL, str_measure4 VARCHAR(255) NOT NULL, str_measure5 VARCHAR(255) NOT NULL, str_measure6 VARCHAR(255) NOT NULL, str_measure7 VARCHAR(255) NOT NULL, str_measure8 VARCHAR(255) NOT NULL, str_measure9 VARCHAR(255) NOT NULL, str_measure10 VARCHAR(255) NOT NULL, str_measure11 VARCHAR(255) NOT NULL, str_measure12 VARCHAR(255) NOT NULL, str_measure13 VARCHAR(255) NOT NULL, str_measure14 VARCHAR(255) NOT NULL, str_measure15 VARCHAR(255) NOT NULL, str_measure16 VARCHAR(255) NOT NULL, str_measure17 VARCHAR(255) NOT NULL, str_measure18 VARCHAR(255) NOT NULL, str_measure19 VARCHAR(255) NOT NULL, str_measure20 VARCHAR(255) NOT NULL, str_source VARCHAR(255) NOT NULL, str_image_source VARCHAR(255) NOT NULL, str_creative_commons_confirmed VARCHAR(255) NOT NULL, date_modified VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE recipe');
    }
}
