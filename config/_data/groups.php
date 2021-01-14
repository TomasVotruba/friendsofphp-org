<?php

declare(strict_types=1);

use Fop\Core\ValueObject\Option;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::GROUPS, [
        [
            'name' => 'Austin PHP Meetup',
            'meetup_com_slug' => 'austinphp',
            'country' => 'USA',
        ],
        [
            'name' => 'laravel.istanbul',
            'meetup_com_slug' => 'laravelistanbul',
            'country' => 'Turkey',
        ],
        [
            'name' => 'SilverStripe Christchurch Meetup',
            'meetup_com_slug' => 'SilverStripe-Christchurch-Meetup',
            'country' => 'New Zealand',
        ],
        [
            'name' => 'PHP UserGroup Wellington',
            'meetup_com_slug' => 'PHP-Usergroup-Wellington',
            'country' => 'New Zealand',
        ],
        [
            'name' => 'use \BNE\PHP;',
            'meetup_com_slug' => 'BrisPHP',
            'country' => 'Australia',
        ],
        [
            'name' => 'PHP Adelaide',
            'meetup_com_slug' => 'PHP-Adelaide',
            'country' => 'Australia',
        ],
        [
            'name' => 'PHP Laravel Framework Sydney',
            'meetup_com_slug' => 'PHP-Laravel-Framework-Sydney',
            'country' => 'Australia',
        ],
        [
            'name' => 'Sydney PHP',
            'meetup_com_slug' => 'SydPHP',
            'country' => 'Australia',
        ],
        [
            'name' => 'Salzburg Web Dev',
            'meetup_com_slug' => 'salzburgwebdev',
            'country' => 'Austria',
        ],
        [
            'name' => 'BrusselsPHP',
            'meetup_com_slug' => 'BrusselsPHP',
            'country' => 'Belgium',
        ],
        [
            'name' => 'PHP Antwerp',
            'meetup_com_slug' => 'phpantwerp',
            'country' => 'Belgium',
        ],
        [
            'name' => 'PHP Limburg BE',
            'meetup_com_slug' => 'PHP-Limburg-BE',
            'country' => 'Belgium',
        ],
        [
            'name' => 'Vancouver PHP Meetup',
            'meetup_com_slug' => 'Vancouver-PHP',
            'country' => 'Canada',
        ],
        [
            'name' => 'AFUP Montpellier',
            'meetup_com_slug' => 'Montpellier-PHP-Meetup',
            'country' => 'France',
        ],
        [
            'name' => 'PHP Usergroup Düsseldorf',
            'meetup_com_slug' => 'PHP-Usergroup-Duesseldorf',
            'country' => 'Germany',
        ],
        [
            'name' => 'Symfony User Group Hamburg',
            'meetup_com_slug' => 'sfughh',
            'country' => 'Germany',
        ],
        [
            'name' => 'Symfony User Group Cologne',
            'meetup_com_slug' => 'sfugcgn',
            'country' => 'Germany',
        ],
        [
            'name' => 'PHP User Group Stuttgart ',
            'meetup_com_slug' => 'PHP-User-Group-Stuttgart',
            'country' => 'Germany',
        ],
        [
            'name' => 'Symfony User Group Berlin',
            'meetup_com_slug' => 'sfugberlin',
            'country' => 'Germany',
        ],
        [
            'name' => 'PHP User Group Metropolregion Rhein-Neckar',
            'meetup_com_slug' => 'PHPUG-Rhein-Neckar',
            'country' => 'Germany',
        ],
        [
            'name' => 'PHP User Group Münster',
            'meetup_com_slug' => 'phpugms',
            'country' => 'Germany',
        ],
        [
            'name' => 'Dublin',
            'meetup_com_slug' => 'PHP-Dublin',
            'country' => 'Ireland',
        ],
        [
            'name' => 'PHP México',
            'meetup_com_slug' => 'PHP-The-Right-Way',
            'country' => 'Mexico',
        ],
        [
            'name' => 'NijmegenPHP',
            'meetup_com_slug' => 'NijmegenPHP',
            'country' => 'Netherlands',
        ],
        [
            'name' => 'LimburgPHP',
            'meetup_com_slug' => 'Limburg-PHP-Meetup',
            'country' => 'Netherlands',
        ],
        [
            'name' => 'Tilburg PHP',
            'meetup_com_slug' => 'Tilburg-PHP-Meetup',
            'country' => 'Netherlands',
        ],
        [
            'name' => 'Amersfoort',
            'meetup_com_slug' => 'PHPAmersfoort',
            'country' => 'Netherlands',
        ],
        [
            'name' => 'Szczecin PHP User Group',
            'meetup_com_slug' => 'Szczecin-PHP-Meetup',
            'country' => 'Poland',
        ],
        [
            'name' => 'Singapore',
            'meetup_com_slug' => 'sgphpug',
            'country' => 'Singapore',
        ],
        [
            'name' => 'Cape Town PHP Group',
            'meetup_com_slug' => 'Cape-Town-PHP-Group',
            'country' => 'South Africa',
        ],
        [
            'name' => 'AsturPHP',
            'meetup_com_slug' => 'AsturPHP',
            'country' => 'Spain',
        ],
        [
            'name' => 'PHP Sevilla',
            'meetup_com_slug' => 'PHP-Sevilla',
            'country' => 'Spain',
        ],
        [
            'name' => 'Sri Lanka',
            'meetup_com_slug' => 'PHP-developers-Sri-Lanka',
            'country' => 'Sri Lanka',
        ],
        [
            'name' => 'PHP-Stockholm',
            'meetup_com_slug' => 'php-stockholm',
            'country' => 'Sweden',
        ],
        [
            'name' => 'PHPMiNDS Nottingham',
            'meetup_com_slug' => 'PHPMiNDS-Nottingham',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'brumPHP',
            'meetup_com_slug' => 'brumphp',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'Cambridge',
            'meetup_com_slug' => 'phpcambridge',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'JaxPHP / JaxWeb',
            'meetup_com_slug' => 'JaxPHP-JaxWeb',
            'country' => 'Florida',
        ],
        [
            'name' => 'Dallas',
            'meetup_com_slug' => 'dallasphp',
            'country' => 'Texas',
        ],
        [
            'name' => 'TrianglePHP',
            'meetup_com_slug' => 'trianglephp',
            'country' => 'North Carolina',
        ],
        [
            'name' => 'Washington D.C.',
            'meetup_com_slug' => 'DC-PHP',
            'country' => 'Washington, D.,C.',
        ],
        [
            'name' => 'Orlando',
            'meetup_com_slug' => 'OrlandoPHP',
            'country' => 'Florida',
        ],
        [
            'name' => 'Seattle',
            'meetup_com_slug' => 'seaphp',
            'country' => 'Washington',
        ],
        [
            'name' => 'Buffalo',
            'meetup_com_slug' => 'buffalowebdevelopers',
            'country' => 'New York',
        ],
        [
            'name' => 'Utah PHP User Group',
            'meetup_com_slug' => 'Utah-PHP-User-Group',
            'country' => 'Utah',
        ],
        [
            'name' => 'Indianapolis',
            'meetup_com_slug' => 'indyphp',
            'country' => 'Indiana',
        ],
        [
            'name' => 'PDX-PHP',
            'meetup_com_slug' => 'PDX-PHP',
            'country' => 'Oregon',
        ],
        [
            'name' => 'Las Vegas PHP',
            'meetup_com_slug' => 'PHP-Vegas',
            'country' => 'Nevada',
        ],
        [
            'name' => 'Chattanooga PHP',
            'meetup_com_slug' => 'chattanoogaphp',
            'country' => 'Tennessee',
        ],
        [
            'name' => 'Frederick Web Tech',
            'meetup_com_slug' => 'FredWebTech',
            'country' => 'Maryland',
        ],
        [
            'name' => 'Chicago-PHP-User-Group',
            'meetup_com_slug' => 'Chicago-PHP-User-Group',
            'country' => 'Illinois',
        ],
        [
            'name' => 'PHP Quebec',
            'meetup_com_slug' => 'PHPQuebec',
            'country' => 'Canada',
        ],
        [
            'name' => 'PHPSP Campinas',
            'meetup_com_slug' => 'PHPSP-Campinas',
            'country' => 'Brazil',
        ],
        [
            'name' => 'PHP Rio',
            'meetup_com_slug' => 'PHP-Rio',
            'country' => 'Brazil',
        ],
        [
            'name' => 'PHP DF',
            'meetup_com_slug' => 'php-df',
            'country' => 'Brazil',
        ],
        [
            'name' => 'PHPRS',
            'meetup_com_slug' => 'PHP-RS',
            'country' => 'Brazil',
        ],
        [
            'name' => 'PHPSC Floripa',
            'meetup_com_slug' => 'PHPSC-Floripa',
            'country' => 'Brazil',
        ],
        [
            'name' => 'PHPMG',
            'meetup_com_slug' => 'PHP-MG',
            'country' => 'Brazil',
        ],
        [
            'name' => 'PHP Baires',
            'meetup_com_slug' => 'phpbaires-devs',
            'country' => 'Argentina',
        ],
        [
            'name' => 'ZgPHP meetup',
            'meetup_com_slug' => 'ZgPHP-meetup',
            'country' => 'Croatia',
        ],
        [
            'name' => 'PHP London',
            'meetup_com_slug' => 'phplondon',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'PHPSW',
            'meetup_com_slug' => 'php-sw',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'PHP User Group Munich',
            'meetup_com_slug' => 'phpugmunich',
            'country' => 'Germany',
        ],
        [
            'name' => 'PHP USERGROUP DRESDEN',
            'meetup_com_slug' => 'PHP-USERGROUP-DRESDEN',
            'country' => 'Germany',
        ],
        [
            'name' => 'Vilnius PHP Meetups',
            'meetup_com_slug' => 'vilniusphp',
            'country' => 'Lithuania',
        ],
        [
            'name' => 'PHP-Usergroup Hamburg (PHPUGHH)',
            'meetup_com_slug' => 'phpughh',
            'country' => 'Germany',
        ],
        [
            'name' => 'PHPSP - São Paulo PHP Developers Group',
            'meetup_com_slug' => 'php-sp',
            'country' => 'Brazil',
        ],
        [
            'name' => 'Web Developer Chemnitz',
            'meetup_com_slug' => 'Web-Developer-Chemnitz',
            'country' => 'Germany',
        ],
        [
            'name' => 'PHP Johannesburg Meetup Group',
            'meetup_com_slug' => 'PHP-Johannesburg-Meetup-Group',
            'country' => 'South Africa',
        ],
        [
            'name' => 'Laravel Philippines',
            'meetup_com_slug' => 'Laravel-Philippines',
            'country' => 'Philippines',
        ],
        [
            'name' => 'Berlin PHP Usergroup',
            'meetup_com_slug' => 'Berlin-PHP-Usergroup',
            'country' => 'Germany',
        ],
        [
            'name' => 'Bucharest PHP Meetup',
            'meetup_com_slug' => 'Bucharest-PHP-Meetup',
            'country' => 'Romania',
        ],
        [
            'name' => 'Dev Japan',
            'meetup_com_slug' => 'devjapan',
            'country' => 'Japan',
        ],
        [
            'name' => 'Laravel UY',
            'meetup_com_slug' => 'Laravel-UY',
            'country' => 'Uruguay',
        ],
        [
            'name' => 'Medellín PHP',
            'meetup_com_slug' => 'MedellinPHP',
            'country' => 'Colombia',
        ],
        [
            'name' => 'South Florida PHP User Group (SoFloPHP)',
            'meetup_com_slug' => 'South-Florida-PHP-Users-Group',
            'country' => 'Florida',
        ],
        [
            'name' => 'Symfony St. Petersburg Meetup - Symfoniacs SPB',
            'meetup_com_slug' => 'symfoniacs-spb',
            'country' => 'Russia',
        ],
        [
            'name' => '#PUG-Romagna: PHP User Group Romagnolo',
            'meetup_com_slug' => 'PUG-Romagna-PHP-User-Group-Romagnolo',
            'country' => 'Italy',
        ],
        [
            'name' => '#pugTO: PHP User Group Torino',
            'meetup_com_slug' => 'pugTO-PHP-User-Group-Torino',
            'country' => 'Italy',
        ],
        [
            'name' => 'PHP User Group Roma',
            'meetup_com_slug' => 'PUG-Roma',
            'country' => 'Italy',
        ],
        [
            'name' => '#pugMi: PHP User Group Milano',
            'meetup_com_slug' => 'MilanoPHP',
            'country' => 'Italy',
        ],
        [
            'name' => 'Antenne AFUP Nantes : PHP',
            'meetup_com_slug' => 'afup-nantes-php',
            'country' => 'France',
        ],
        [
            'name' => 'Bordeaux PHP Meetup',
            'meetup_com_slug' => 'Bordeaux-PHP-Meetup',
            'country' => 'France',
        ],
        [
            'name' => 'Antenne AFUP Tours PHP',
            'meetup_com_slug' => 'afup-tours-php',
            'country' => 'France',
        ],
        [
            'name' => 'ApéroPHP Toulouse',
            'meetup_com_slug' => 'AperoPHP-Toulouse',
            'country' => 'France',
        ],
        [
            'name' => 'Antenne AFUP Lorraine : PHP',
            'meetup_com_slug' => 'afup-lorraine-php',
            'country' => 'France',
        ],
        [
            'name' => 'Antenne AFUP Reims : PHP',
            'meetup_com_slug' => 'afup-reims-php',
            'country' => 'France',
        ],
        [
            'name' => 'Antenne AFUP Poitiers : PHP',
            'meetup_com_slug' => 'afup-poitiers-php',
            'country' => 'France',
        ],
        [
            'name' => 'Antenne AFUP Hauts de France : PHP',
            'meetup_com_slug' => 'afup-hauts-de-france-php',
            'country' => 'France',
        ],
        [
            'name' => 'Antenne AFUP Lyon : PHP',
            'meetup_com_slug' => 'afup-lyon-php',
            'country' => 'France',
        ],
        [
            'name' => 'Antenne AFUP Limoges : PHP',
            'meetup_com_slug' => 'afup-limoges-php',
            'country' => 'France',
        ],
        [
            'name' => 'Antenne AFUP Paris : PHP',
            'meetup_com_slug' => 'afup-paris-php',
            'country' => 'France',
        ],
        [
            'name' => 'AFUP Rennes',
            'meetup_com_slug' => 'AFUP-Rennes',
            'country' => 'France',
        ],
        [
            'name' => 'AFSY SfPots',
            'meetup_com_slug' => 'afsy-sfpot',
            'country' => 'France',
        ],
        [
            'name' => 'AFUP Aix / Marseille',
            'meetup_com_slug' => 'afup-aix-marseille-php',
            'country' => 'France',
        ],
        [
            'name' => 'PHPMad',
            'meetup_com_slug' => 'PHPMad',
            'country' => 'Spain',
        ],
        [
            'name' => 'LaravelCPH',
            'meetup_com_slug' => 'laravel-cph',
            'country' => 'Denmark',
        ],
        [
            'name' => 'RIGA DEV DAYS 2019',
            'meetup_com_slug' => 'RIGA-DEV-DAYS',
            'country' => 'Latvia',
        ],
        [
            'name' => 'Kaunas PHP meetups',
            'meetup_com_slug' => 'KaunasPHP',
            'country' => 'Lithuania',
        ],
        [
            'name' => 'ThinkPHP Kharkiv',
            'meetup_com_slug' => 'thinkphp',
            'country' => 'Ukraine',
        ],
        [
            'name' => 'Bulgaria PHP',
            'meetup_com_slug' => 'bgphp-ug',
            'country' => 'Bulgaria',
        ],
        [
            'name' => 'Developers Day powered by kariera.gr',
            'meetup_com_slug' => 'Developers-Day',
            'country' => 'Greece',
        ],
        [
            'name' => 'Athens Laravel Meetup',
            'meetup_com_slug' => 'athens-laravel-meetup',
            'country' => 'Greece',
        ],
        [
            'name' => 'Laravel Serbia',
            'meetup_com_slug' => 'Laravel-Serbia',
            'country' => 'Serbia',
        ],
        [
            'name' => 'OpenWeb Sarajevo Meetup',
            'meetup_com_slug' => 'sarajevo-openweb-meetup',
            'country' => 'Bosnia and Herzegovina',
        ],
        [
            'name' => 'Tinel Meetup',
            'meetup_com_slug' => 'TinelMeetup',
            'country' => 'Croatia',
        ],
        [
            'name' => 'PHP Developers Slovenia',
            'meetup_com_slug' => 'php-si',
            'country' => 'Slovenia',
        ],
        [
            'name' => 'Laravel Montreal',
            'meetup_com_slug' => 'Laravel-Montreal',
            'country' => 'Canada',
        ],
        [
            'name' => 'AmsterdamPHP',
            'meetup_com_slug' => 'AmsterdamPHP',
            'country' => 'Netherlands',
        ],
        [
            'name' => '010PHP',
            'meetup_com_slug' => '010PHP',
            'country' => 'Netherlands',
        ],
        [
            'name' => 'GroningenPHP',
            'meetup_com_slug' => 'GroningenPHP',
            'country' => 'Netherlands',
        ],
        [
            'name' => 'PHP & Laravel development Eindhoven',
            'meetup_com_slug' => 'PHP-Laravel-Eindhoven',
            'country' => 'Netherlands',
        ],
        [
            'name' => 'Laravel Meetup Groningen',
            'meetup_com_slug' => 'Laravel-Meetup-Groningen',
            'country' => 'Netherlands',
        ],
        [
            'name' => 'PHP.FRL',
            'meetup_com_slug' => 'PHP-FRL',
            'country' => 'Netherlands',
        ],
        [
            'name' => 'PHP Hilversum',
            'meetup_com_slug' => 'PHP-Hilversum',
            'country' => 'Netherlands',
        ],
        [
            'name' => 'Laravel Poznań Meetup',
            'meetup_com_slug' => 'Laravel-Poznan-Meetup',
            'country' => 'Poland',
        ],
        [
            'name' => 'Laravel Dublin',
            'meetup_com_slug' => 'Laravel-Vuejs-Dublin',
            'country' => 'Ireland',
        ],
        [
            'name' => 'Deeper PHP',
            'meetup_com_slug' => 'Deeper-PHP',
            'country' => 'Luxembourg',
        ],
        [
            'name' => 'PHP-WVL',
            'meetup_com_slug' => 'php-wvl',
            'country' => 'Belgium',
        ],
        [
            'name' => 'GTA PHP User Group',
            'meetup_com_slug' => 'GTA-PHP-User-Group-Toronto',
            'country' => 'Canada',
        ],
        [
            'name' => 'Ottawa PHP Meetup',
            'meetup_com_slug' => 'Ottawa-PHP-Meetup',
            'country' => 'Canada',
        ],
        [
            'name' => 'York Region PHP User Group',
            'meetup_com_slug' => 'York-Region-PHP-User-Group',
            'country' => 'Canada',
        ],
        [
            'name' => 'Laravel Usergroup Munich',
            'meetup_com_slug' => 'laravel-munich',
            'country' => 'Germany',
        ],
        [
            'name' => 'PHP Usergroup Karlsruhe',
            'meetup_com_slug' => 'PHP-Usergroup-Karlsruhe',
            'country' => 'Germany',
        ],
        [
            'name' => 'PHP User Group Rheinhessen',
            'meetup_com_slug' => 'PHP-User-Group-Rheinhessen',
            'country' => 'Germany',
        ],
        [
            'name' => 'PHP Vigo Meetup',
            'meetup_com_slug' => 'PHPVigo',
            'country' => 'Spain',
        ],
        [
            'name' => 'PHP Oxford',
            'meetup_com_slug' => 'PHP-Oxford',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'edPUG - Edinburgh PHP User Group',
            'meetup_com_slug' => 'edinburgh-php-user-group',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'PHP Essex',
            'meetup_com_slug' => 'PHP-Essex',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'PHP South Wales',
            'meetup_com_slug' => 'PHP-South-Wales',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'The UK Symfony Meetup',
            'meetup_com_slug' => 'symfony',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'GlasgowPHP',
            'meetup_com_slug' => 'GlasgowPHP',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'PHP Roundtable Budapest',
            'meetup_com_slug' => 'PHP-Roundtable-Budapest',
            'country' => 'Hungary',
        ],
        [
            'name' => 'Veszprém PHP Meetup',
            'meetup_com_slug' => 'Veszprem-PHP-Meetup',
            'country' => 'Hungary',
        ],
        [
            'name' => 'PHP North East',
            'meetup_com_slug' => 'PHP-North-East',
            'country' => 'United Kingdom',
        ],
        [
            'name' => 'Louisville Laravel Meetup',
            'meetup_com_slug' => 'Louisville-Laravel-Meetup',
            'country' => 'Colorado',
        ],
        [
            'name' => 'Tampa Bay PHP',
            'meetup_com_slug' => 'tampa-bay-php',
            'country' => 'Florida',
        ],
        [
            'name' => 'Tampa Bay Laravel',
            'meetup_com_slug' => 'Laravel',
            'country' => 'Florida',
        ],
        [
            'name' => 'Boston PHP',
            'meetup_com_slug' => 'bostonphp',
            'country' => 'Massachusetts',
        ],
        [
            'name' => 'Detroit Laravel Meetup',
            'meetup_com_slug' => 'Laravel-Detroit',
            'country' => 'Michigan',
        ],
        [
            'name' => 'Kansas City PHP User Group',
            'meetup_com_slug' => 'kcphpug',
            'country' => 'Missouri',
        ],
        [
            'name' => 'North Jersey PHP & Programmers" Convergence',
            'meetup_com_slug' => 'nnjppc',
            'country' => 'New Jersey',
        ],
        [
            'name' => 'Nashville PHP',
            'meetup_com_slug' => 'nashvillephp',
            'country' => 'Tennessee',
        ],
        [
            'name' => 'azPHP',
            'meetup_com_slug' => 'azPHPUG',
            'country' => 'Arizona',
        ],
        [
            'name' => 'Péhápkaři Brno',
            'meetup_com_slug' => 'Pehapkari-Brno',
            'country' => 'Czech Republic',
        ],
        [
            'name' => 'ColumbusPHP',
            'meetup_com_slug' => 'phpphp',
            'country' => 'Ohio',
        ],
        [
            'name' => 'AtlantaPHP',
            'meetup_com_slug' => 'atlantaphp',
            'country' => 'Georgia',
        ],
        [
            'name' => 'Symfony User Group Osnabrück',
            'meetup_com_slug' => 'sfugos',
            'country' => 'Germany',
        ],
        [
            'name' => 'BeerPHP Moscow',
            'meetup_com_slug' => 'BeerPHP-Moscow',
            'country' => 'Russia',
        ],
        [
            'name' => 'Meetup Laravel Lyon',
            'meetup_com_slug' => 'Meetup-Laravel-Lyon',
            'country' => 'France',
        ],
    ]);
};
