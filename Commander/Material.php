<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Commander;
use         EDSM\Alias;

class Material extends Alias
{
    use \EDSM\Alias\Commander\Data;

    /**
     * List of limits per grade
     */
    static protected $max           = [
        1                               => 300,
        2                               => 250,
        3                               => 200,
        4                               => 150,
        5                               => 100,
    ];

    /**
     * List of limits override
     */
    static protected $maxOverride   = [

    ];

    /**
     * List of names used in game
     */
    static protected $name      = [
         1  => 'Antimony',
         2  => 'Arsenic',
         3  => 'Basic Conductors',
         4  => 'Biotech Conductors',
         5  => 'Cadmium',
         6  => 'Carbon',
         7  => 'Chemical Distillery',
         8  => 'Chemical Manipulators',
         9  => 'Chemical Processors',
        10  => 'Chemical Storage Units',
        11  => 'Chromium',
        12  => 'Compact Composites',
        13  => 'Compound Shielding',
        14  => 'Conductive Ceramics',
        15  => 'Conductive Components',
        16  => 'Conductive Polymers',
        17  => 'Configurable Components',
        18  => 'Core Dynamics Composites',
        19  => 'Crystal Shards',
        20  => 'Electrochemical Arrays',
        21  => 'Exquisite Focus Crystals',
        22  => 'Filament Composites',
        23  => 'Flawed Focus Crystals',
        24  => 'Focus Crystals',
        25  => 'Galvanising Alloys',
        26  => 'Germanium',
        27  => 'Grid Resistors',
        28  => 'Heat Conduction Wiring',
        29  => 'Heat Dispersion Plate',
        30  => 'Heat Exchangers',
        31  => 'Heat Resistant Ceramics',
        32  => 'Heat Vanes',
        33  => 'High Density Composites',
        34  => 'Hybrid Capacitors',
        35  => 'Imperial Shielding',
        36  => 'Improvised Components',
        37  => 'Iron',
        38  => 'Manganese',
        39  => 'Mechanical Components',
        40  => 'Mechanical Equipment',
        41  => 'Mechanical Scrap',
        42  => 'Mercury',
        43  => 'Military Grade Alloys',
        44  => 'Military Supercapacitors',
        45  => 'Molybdenum',
        46  => 'Nickel',
        47  => 'Niobium',
        48  => 'Pharmaceutical Isolators',
        49  => 'Phase Alloys',
        50  => 'Phosphorus',
        51  => 'Polonium',
        52  => 'Polymer Capacitors',
        53  => 'Precipitated Alloys',
        54  => 'Proprietary Composites',
        55  => 'Proto Heat Radiators',
        56  => 'Proto Light Alloys',
        57  => 'Proto Radiolic Alloys',
        58  => 'Refined Focus Crystals',
        59  => 'Ruthenium',
        60  => 'Salvaged Alloys',
        61  => 'Selenium',
        62  => 'Shield Emitters',
        63  => 'Shielding Sensors',
        64  => 'Sulphur',
        65  => 'Technetium',
        66  => 'Tellurium',
        67  => 'Tempered Alloys',
        68  => 'Thermic Alloys',
        69  => 'Tin',
        70  => 'Tungsten',
        71  => 'Sensor Fragment',
        72  => 'Vanadium',
        73  => 'Worn Shield Emitters',
        74  => 'Yttrium',
        75  => 'Zinc',
        76  => 'Zirconium',
        77  => 'Thargoid Carapace',
        78  => 'Thargoid Energy Cell',
        79  => 'Thargoid Technological Components',
        80  => 'Thargoid Organic Circuitry',
        81  => 'Propulsion Elements',
        82  => 'Wreckage Components',
        83  => 'Bio-Mechanical Conduits',
        84  => 'Weapon Parts',
        85  => 'Rhenium',
        86  => 'Lead',
        87  => 'Boron',
        88  => 'Guardian Technology Component',
        89  => 'Guardian Power Conduit',
        90  => 'Guardian Power Cell',
        91  => 'Guardian Sentinel Wreckage Components',
        92  => 'Guardian Sentinel Weapon Parts',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias     = [
        'antimony'                                  => 1,       128672342   => 1,
        'arsenic'                                   => 2,       128672332   => 2,
        'basicconductors'                           => 3,
        'biotechconductors'                         => 4,       128673920   => 4,
        'cadmium'                                   => 5,       128672330   => 5,
        'carbon'                                    => 6,       128672322   => 6,
        'chemicaldistillery'                        => 7,       128673906   => 7,
        'chemicalmanipulators'                      => 8,       128673916   => 8,
        'chemicalprocessors'                        => 9,       128673896   => 9,
        'chemicalstorageunits'                      => 10,
        'chromium'                                  => 11,      128672327   => 11,
        'compactcomposites'                         => 12,
        'compoundshielding'                         => 13,      128673913   => 13,
        'conductiveceramics'                        => 14,      128673900   => 14,
        'conductivecomponents'                      => 15,      128673890   => 15,
        'conductivepolymers'                        => 16,      128673910   => 16,
        'configurablecomponents'                    => 17,      128673911   => 17,
        'fedcorecomposites'                         => 18,      128673924   => 18,
        'crystalshards'                             => 19,
        'electrochemicalarrays'                     => 20,      128673897   => 20,
        'exquisitefocuscrystals'                    => 21,      128673918   => 21,
        'filamentcomposites'                        => 22,
        'uncutfocuscrystals'                        => 23,      128673888   => 23,
        'focuscrystals'                             => 24,      128673898   => 24,
        'galvanisingalloys'                         => 25,      128673895   => 25,
        'germanium'                                 => 26,      128672329   => 26,
        'gridresistors'                             => 27,      128673877   => 27,
        'heatconductionwiring'                      => 28,      128673882   => 28,
        'heatdispersionplate'                       => 29,      128673892   => 29,
        'heatexchangers'                            => 30,      128673902   => 30,
        'heatresistantceramics'                     => 31,
        'heatvanes'                                 => 32,      128673912   => 32,
        'highdensitycomposites'                     => 33,      128673904   => 33,
        'hybridcapacitors'                          => 34,      128673887   => 34,
        'imperialshielding'                         => 35,      128673923   => 35,
        'improvisedcomponents'                      => 36,      128673921   => 36,
        'iron'                                      => 37,      128672318   => 37,
        'manganese'                                 => 38,      128672325   => 38,
        'mechanicalcomponents'                      => 39,      128673901   => 39,
        'mechanicalequipment'                       => 40,      128673891   => 40,
        'mechanicalscrap'                           => 41,      128673881   => 41,
        'mercury'                                   => 42,      128672336   => 42,
        'militarygradealloys'                       => 43,      128673919   => 43,
        'militarysupercapacitors'                   => 44,      128673917   => 44,
        'molybdenum'                                => 45,      128672333   => 45,
        'nickel'                                    => 46,      128672319   => 46,
        'niobium'                                   => 47,      128672334   => 47,
        'pharmaceuticalisolators'                   => 48,      128673926   => 48,
        'phasealloys'                               => 49,      128673905   => 49,
        'phosphorus'                                => 50,      128672324   => 50,
        'polonium'                                  => 51,
        'polymercapacitors'                         => 52,      128673907   => 52,
        'precipitatedalloys'                        => 53,      128673899   => 53,
        'fedproprietarycomposites'                  => 54,      128673914   => 54,
        'protoheatradiators'                        => 55,      128673922   => 55,
        'protolightalloys'                          => 56,      128673915   => 56,
        'protoradiolicalloys'                       => 57,      128673925   => 57,
        'refinedfocuscrystals'                      => 58,      128673908   => 58,
        'ruthenium'                                 => 59,      128672341   => 59,
        'salvagedalloys'                            => 60,      128673885   => 60,
        'selenium'                                  => 61,      128672326   => 61,
        'shieldemitters'                            => 62,      128673893   => 62,
        'shieldingsensors'                          => 63,      128673903   => 63,
        'sulphur'                                   => 64,      128672323   => 64,
        'technetium'                                => 65,      128672340   => 65,
        'tellurium'                                 => 66,      128672338   => 66,
        'temperedalloys'                            => 67,
        'thermicalloys'                             => 68,      128673909   => 68,
        'tin'                                       => 69,      128672320   => 69,
        'tungsten'                                  => 70,      128672331   => 70,
        'unknownenergysource'                       => 71,
        'vanadium'                                  => 72,      128672328   => 72,
        'wornshieldemitters'                        => 73,      128673883   => 73,
        'yttrium'                                   => 74,      128672337   => 74,
        'zinc'                                      => 75,      128672321   => 75,
        'zirconium'                                 => 76,      128672335   => 76,
        'unknowncarapace'                           => 77,
        'unknownenergycell'                         => 78,
        'unknowntechnologycomponents'               => 79,
        'unknownorganiccircuitry'                   => 80,
        'tg_propulsionelement'                      => 81,
        'tg_wreckagecomponents'                     => 82,
        'tg_biomechanicalconduits'                  => 83,
        'tg_weaponparts'                            => 84,
        'rhenium'                                   => 85,
        'lead'                                      => 86,
        'boron'                                     => 87,
        'guardian_techcomponent'                    => 88,
        'guardian_powerconduit'                     => 89,
        'guardian_powercell'                        => 90,
        'guardian_sentinel_wreckagecomponents'      => 91,
        'guardian_sentinel_weaponparts'             => 92,
    ];

    /**
     * List of grades used in game
     */
    static protected $gradeName  = [
         1  => 'Very common',
         2  => 'Common',
         3  => 'Standard',
         4  => 'Rare',
         5  => 'Very rare',
    ];

    /**
     * List of grades per data
     */
    static protected $grade     = [
         1  => 4,
         2  => 2,
         3  => 1,
         4  => 5,
         5  => 3,
         6  => 1,
         7  => 3,
         8  => 4,
         9  => 2,
        10  => 1,
        11  => 2,
        12  => 1,
        13  => 4,
        14  => 3,
        15  => 2,
        16  => 4,
        17  => 4,
        18  => 5,
        19  => 1,
        20  => 3,
        21  => 5,
        22  => 2,
        23  => 2,
        24  => 3,
        25  => 2,
        26  => 2,
        27  => 1,
        28  => 1,
        29  => 2,
        30  => 3,
        31  => 2,
        32  => 4,
        33  => 3,
        34  => 2,
        35  => 5,
        36  => 5,
        37  => 1,
        38  => 2,
        39  => 3,
        40  => 2,
        41  => 1,
        42  => 3,
        43  => 5,
        44  => 5,
        45  => 3,
        46  => 1,
        47  => 3,
        48  => 5,
        49  => 3,
        50  => 1,
        51  => 4,
        52  => 4,
        53  => 3,
        54  => 4,
        55  => 5,
        56  => 4,
        57  => 5,
        58  => 4,
        59  => 4,
        60  => 1,
        61  => 4,
        62  => 2,
        63  => 3,
        64  => 1,
        65  => 4,
        66  => 4,
        67  => 1,
        68  => 4,
        69  => 3,
        70  => 3,
        71  => 5,
        72  => 2,
        73  => 1,
        74  => 4,
        75  => 2,
        76  => 2,
        77  => 2,
        78  => 3,
        79  => 4,
        80  => 5,
        81  => 5,
        82  => 3,
        83  => 3,
        84  => 4,
        85  => 1,
        86  => 1,
        87  => 3,
        88  => 2,
        89  => 2,
        90  => 1,
        91  => 1,
        92  => 3,
    ];

    /**
     * List of manufactured materials
     */
    static protected $isManufactured    = [
        3, 4, 7, 8, 9, 10,
        12, 13, 14, 15, 16, 17, 18, 19,
        20, 21, 22, 23, 24, 25, 27, 28, 29,
        30, 31, 32, 33, 34, 35, 36, 39,
        40, 41, 43, 44, 48, 49,
        52, 53, 54, 55, 56, 57, 58,
        60, 62, 63, 67, 68,
        71, 73, 77, 78, 79,
        80, 81, 82, 83, 84,
        88, 89, 90, 91, 92,
    ];
}