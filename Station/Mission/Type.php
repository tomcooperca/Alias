<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Mission;
use         EDSM\Alias;

class Type extends Alias
{
    /**
     * List of names used in game
     */
    static protected $name  = [
           1                                => 'Courier job available',
           2                                => 'Engineer Invitation Contract',
           3                                => 'Federal Navy courier job available',
           4                                => 'Internal report delivery',
           5                                => 'Boom data delivery',
           6                                => 'Courier required for sensitive poll data',
           7                                => 'Secure information needs delivering',
           8                                => 'Strategic data transfer',
           9                                => 'Internal security data delivery',
          10                                => 'Courier job for Imperial naval intelligence',
          11                                => 'Famine data needs transportation',
          12                                => 'Sensitive civil unrest data delivery',
          13                                => 'Internal report delivery',
          14                                => 'Expansion data couriering needed',
          15                                => 'Outbreak data transportation needed',
         
         101                                => '%passengerCount% %passengerType% seeking transport',
         102                                => '%passengerCount% %passengerType% seeking transport',
         103                                => '%passengerCount% %passengerType% seeking transport',
         104                                => '%passengerCount% %passengerType% seeking transport',
         105                                => '%passengerCount% %passengerType% seeking transport',
         106                                => '%passengerCount% %passengerType% seeking transport',
         107                                => '%passengerCount% %passengerType% seeking transport',
         108                                => '%passengerCount% %passengerType% seeking transport',
         109                                => '%passengerCount% %passengerType% seeking transport',
         110                                => '%passengerCount% %passengerType% seeking transport',
         111                                => '%passengerCount% %passengerType% seeking transport',
         112                                => '%passengerCount% %passengerType% require transportation',
         113                                => '%passengerCount% %passengerType% require transportation',
         114                                => '%passengerCount% %passengerType% seeking transport',
         115                                => '%passengerCount% %passengerType% seeking transport',
         116                                => '%passengerCount% %passengerType% seeking transport',
         117                                => '%passengerCount% %passengerType% seeking transport',
         118                                => '%passengerCount% %passengerType% seeking transport',
         119                                => '%passengerCount% %passengerType% seeking transport',
         120                                => '%passengerCount% %passengerType% seeking transport',
         121                                => '%passengerCount% %passengerType% seeking transport',
         122                                => '%passengerCount% %passengerType% seeking transport',
         123                                => '%passengerCount% %passengerType% seeking transport',
         
         201                                => 'Transport %passengerName%',
         202                                => 'Transport %passengerName%',
         203                                => 'Transport %passengerName%',
         204                                => 'Transport %passengerName%',
         205                                => 'Transport %passengerName%',
         206                                => 'Transport %passengerName%',
         207                                => 'Transport %passengerName%',
         208                                => 'Transport %passengerName%',
         209                                => 'Transport %passengerName%',
         210                                => 'Transport %passengerName%',
         211                                => 'Transport %passengerName%',
         212                                => 'Transport %passengerName%',
         213                                => 'Transport %passengerName%',
         214                                => 'Transport %passengerName%',
         215                                => 'Transport %passengerName%',
         216                                => 'Transport %passengerName%',
         217                                => 'Transport %passengerName%',
         218                                => 'Transport %passengerName%',
         219                                => 'Transport %passengerName%',
         220                                => 'Transport %passengerName%',
         221                                => 'Transport %passengerName%',
         222                                => 'Transport %passengerName%',
         223                                => 'Transport %passengerName%',
         224                                => 'Transport %passengerName%',
         225                                => 'Transport %passengerName%',
         226                                => 'Transport %passengerName%',
         227                                => 'Transport %passengerName%',
         228                                => 'Transport %passengerName%',
         229                                => 'Transport %passengerName%',
         230                                => 'Transport %passengerName%',
         231                                => 'Transport %passengerName%',
         232                                => 'Transport %passengerName%',
         233                                => 'Transport %passengerName%',
         234                                => 'Transport %passengerName%',
         235                                => 'Transport %passengerName%',
         236                                => 'Transport %passengerName%',
         
         301                                => 'Liberate %commodityCount% %commodity%',
         302                                => 'Liberate %commodityCount% %commodity%',
         303                                => 'Election support by liberating %commodityCount% %commodity%',
         
         401                                => 'Donate %commodityCount% units of %commodity%',
         402                                => 'Find %commodityCount% units of %commodity%',
         403                                => 'Give %commodityCount% units of %commodity% to stop the famine',
         404                                => 'Delight us with %commodityCount% units of %commodity%',
         405                                => 'Donate %commodityCount% units of %commodity%',
         406                                => 'Bring in %commodityCount% units of %commodity%',
         
         451                                => 'Donate %donation% Cr to the cause',
         452                                => 'Donate %donation% Cr to the cause',
         453                                => 'Donate %donation% Cr to prevent a medical emergency',
         454                                => 'Provide %donation% Cr to tackle civil unrest',
         455                                => 'Please provide %donation% Cr to help stop the famine',
         
         501                                => 'Deliver %commodityCount% units of %commodity%',
         502                                => 'Help the cooperative by delivering %commodityCount% units of %commodity%',
         503                                => 'Agricultural supply run: %commodityCount% units of %commodity%',
         504                                => 'Boom time delivery of %commodityCount% units of %commodity%',
         505                                => 'Deliver %commodityCount% units of %commodity% in the name of democracy',
         506                                => 'Help quell civil unrest by transporting %commodityCount% units of %commodity%',
         507                                => 'Support the confederacy by delivering %commodityCount% units of %commodity%',
         508                                => 'Deliver war supplies of %commodityCount% units of %commodity%',
         509                                => 'Take %commodityCount% units of %commodity% in support of the current civil war',
         510                                => 'Outbreak relief: %commodityCount% units of %commodity%',
         511                                => 'Support famine relief by delivering %commodityCount% units of %commodity%',
         512                                => 'Federal navy supply mission',
         513                                => 'Imperial navy supply run',
         514                                => 'Sensitive supply operation',
         
         601                                => 'Source and return %commodityCount% units of %commodity%',
         602                                => 'Industry needs %commodityCount% units of %commodity%',
         603                                => 'Supply %commodityCount% units of %commodity%',
         604                                => 'Bring us %commodityCount% units of %commodity%',
         605                                => 'Famine aid needed %commodityCount% units of %commodity%',
         606                                => 'Outbreak aid needed %commodityCount% units of %commodity%',
         607                                => 'We need %commodityCount% units of %commodity%',
         608                                => 'Source and return %commodityCount% units of %commodity%',
         609                                => 'The Federal Navy requires %commodityCount% units of %commodity%',
         
         701                                => '%commodity% salvage operation',
         702                                => 'Wartime %commodity% salvage operation',
         703                                => 'Civil war %commodity% salvage operation',
         704                                => '%commodity% salvage contract for refinery',
         705                                => 'Counter-insurgency %commodity% salvage mission',
         706                                => '%commodity% famine salvage operation',
         707                                => '%commodity% salvage for expansion effort',
         708                                => '%commodity% outbreak salvage contract',
         709                                => '%commodity% Imperial Navy salvage mission',
         710                                => '%commodity% Federal Navy retrieval mission',
         
         751                                => 'Illegal %commodity% salvage operation',
         752                                => 'Prohibited %commodity% salvage operation',
         753                                => 'Illegal %commodity% salvage contract',
         754                                => 'Illegal %commodity% expansion salvage operation',
         755                                => '%commodity% salvage for the court',
         
         781                                => 'Salvage %commodityCount% %commodity%',
         
         801                                => 'Disable the %target% power grid',
         802                                => 'Power down the %target% power grid',
         803                                => 'Disable the %target% power grid',
         804                                => 'Take out the %target% power grid',
         805                                => 'Take out the %target% power grid',
         
         901                                => 'Mine %commodityCount% units of %commodity%',
         902                                => 'Mining rush for %commodityCount% units of %commodity%',
         903                                => 'Mining expansion support needs %commodityCount% units of %commodity%',
         904                                => 'Extract %commodityCount% units of %commodity%',
          
        1001                                => 'Massacre the %targetFaction% %targetType%',
        1002                                => 'Massacre the %targetFaction% ships',
        1003                                => 'Massacre the %targetFaction% ships',
        1004                                => 'Imperial navy strike contract',
        1005                                => 'Federal navy strike contract',
        1006                                => 'Mete out justice on the %targetFaction% %targetType%',
        1007                                => 'Massacre the %targetFaction% ships',
        1008                                => 'Put down the %targetFaction% ships',
        1009                                => 'Engage and destroy the %targetFaction% ships',
        
        1051                                => 'Corporate strike against the %targetFaction% %targetType%',
        1052                                => 'Clean out the %targetFaction% %targetType%',
        1053                                => 'Support expansion by destroying the %targetFaction% %targetType%',
        1054                                => 'Skimmer destruction of %targetFaction% %targetType%',
        1055                                => 'Massacre the %targetFaction% %targetType% for the state',
        
        1076                                => 'Spec ops contract',
        1077                                => 'Covert elections combat operation',
        1078                                => 'Covert economic combat operation',
        
        1101                                => 'Assassinate %targetType%: %target%',
        1102                                => 'Federal navy strike contract authorised',
        1103                                => 'Imperial naval strike contract authorised',
        1104                                => 'Engage and destroy %targetType%: %target%',
        1105                                => 'Assassinate %targetType%: %target%',
        1106                                => 'Take down %targetType%: %target%',
        1107                                => 'Kill %targetType%: %target%',
        1108                                => 'Assassinate %targetType%: %target%',
        1109                                => 'Urgent kill order for %targetType%: %target%',
        1110                                => 'Expansion support by killing %targetType%: %target%',
        1111                                => 'Obliterate %targetType%: %target%',
        
        1151                                => 'Wetwork contract',
        1152                                => 'Wetwork Job',
        1153                                => 'Political Statement',
        
        1202                                => 'Smuggle %commodityCount% units of %commodity% to combat famine',
        1203                                => 'Federal Navy covert transportation mission',
        1204                                => 'Sneak in %commodityCount% units of %commodity%',
        1205                                => 'Help our economy by smuggling %commodityCount% units of %commodity%',
        
        1301                                => 'Interact with the %target% datalink',
        1302                                => 'Establish a covert link with the %target% datalink',
        1303                                => 'Infiltrate the %target% datalink',
        
        1401                                => 'Long distance expedition',
        1402                                => '%passengerName% wants to go to %expeditionDest% and collect data',
        1403                                => '%passengerName% wants to go to %expeditionDest% and collect data',
        
        1501                                => 'Steal %commodityCount% units of %commodity%',
        1502                                => 'Federal navy acquisition contract',
        
        1601                                => 'Alien items needed %commodityCount% units of %commodity%',
        
        2001                                => '%passengerName% seeks sightseeing adventure',
        2002                                => '%passengerName% seeks sightseeing adventure',
        2003                                => '%passengerName% seeks sightseeing adventure',
        2004                                => '%passengerName% seeks sightseeing adventure',
        2005                                => '%passengerName% seeks sightseeing adventure',
        2006                                => '%passengerName% seeks sightseeing adventure',
        2007                                => '%passengerName% seeks sightseeing adventure',
        2008                                => '%passengerName% seeks sightseeing adventure',
        2009                                => '%passengerName% seeks sightseeing adventure',
        2010                                => '%passengerName% seeks sightseeing adventure',
        2011                                => '%passengerName% seeks sightseeing adventure',
        2012                                => '%passengerName% seeks sightseeing adventure',
        2013                                => '%passengerName% seeks sightseeing adventure',
        2014                                => '%passengerName% seeks sightseeing adventure',
        2015                                => '%passengerName% seeks sightseeing adventure',
        2016                                => '%passengerName% seeks sightseeing adventure',
        2017                                => '%passengerName% seeks sightseeing adventure',
        2018                                => '%passengerName% seeks sightseeing adventure',
        2019                                => '%passengerName% seeks sightseeing adventure',
        2020                                => '%passengerName% seeks sightseeing adventure',
        2021                                => '%passengerName% seeks sightseeing adventure',
        2022                                => '%passengerName% seeks sightseeing adventure',
        2023                                => '%passengerName% seeks sightseeing adventure',
        2024                                => '%passengerName% seeks sightseeing adventure',
        2025                                => '%passengerName% seeks sightseeing adventure',
        2026                                => '%passengerName% seeks sightseeing adventure',
        2027                                => '%passengerName% seeks sightseeing adventure',
        2028                                => '%passengerName% seeks sightseeing adventure',
        2029                                => '%passengerName% seeks sightseeing adventure',
        2030                                => '%passengerName% seeks sightseeing adventure',
        2031                                => '%passengerName% seeks sightseeing adventure',
        2032                                => '%passengerName% seeks sightseeing adventure',
        2033                                => '%passengerName% seeks sightseeing adventure',
        2034                                => '%passengerName% seeks sightseeing adventure',
        
        2501                                => 'Planetary scan job',
        2502                                => 'Wartime surface target scan operation',
        2503                                => 'Security planetary scan job',
        2504                                => 'Civil war surface installation scan mission',
        2505                                => 'Counter-insurgency surface scan mission',
        
        2601                                => 'Permit Acquisition Opportunity',
        
        3001                                => 'Planetary scan job',
        3002                                => 'Deliver %commodityCount% units of %commodity%',
        3003                                => 'Assassinate %targetType%: %target%',
        3004                                => 'Assassinate %targetType%: %target%',
        3005                                => 'Massacre the %targetFaction% %targetType%',
        3006                                => 'Assassinate %targetType%: %target%',
        3007                                => 'Assassinate %targetType%: %target%',
        3008                                => 'Deliver %commodityCount% units of %commodity%',
        3009                                => 'Assassinate %targetType%: %target%',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias = [
        'mission_courier'                                   => 1,
        'mission_courier_engineer'                          => 2,
        'mission_courier_rankfed'                           => 3,
        'mission_courier_democracy'                         => 4,
        'mission_courier_boom'                              => 5,
        'mission_courier_elections'                         => 6,
        'mission_courier_civilwar'                          => 7,
        'mission_courier_war'                               => 8,
        'mission_courier_lockdown'                          => 9,
        'mission_courier_rankemp'                           => 10,
        'mission_courier_famine'                            => 11,
        'mission_courier_civilunrest'                       => 12,
        'mission_courier_service'                           => 13,
        'mission_courier_expansion'                         => 14,
        'mission_courier_outbreak'                          => 15,
        
        'mission_passengerbulk'                             => 101,
        'mission_passengerbulk_rebel_arriving'              => 102,
        'mission_passengerbulk_rebel_leaving'               => 103,
        'mission_passengerbulk_business_arriving'           => 104,
        'mission_passengerbulk_business_leaving'            => 105,
        'mission_passengerbulk_aidworker_arriving'          => 106,
        'mission_passengerbulk_aidworker_leaving'           => 107,
        'mission_passengerbulk_polprisoner_arriving'        => 108,
        'mission_passengerbulk_polprisoner_leaving'         => 109,
        'mission_passengerbulk_refugee_arriving'            => 110,
        'mission_passengerbulk_refugee_leaving'             => 111,
        'mission_passengerbulk_prisonerofwar_arriving'      => 112,
        'mission_passengerbulk_prisonerofwar_leaving'       => 113,
        'mission_passengerbulk_protestor_arriving'          => 114,
        'mission_passengerbulk_protestor_leaving'           => 115,
        'mission_passengerbulk_medical_arriving'            => 116,
        'mission_passengerbulk_medical_leaving'             => 117,
        'mission_passengerbulk_security_arriving'           => 118,
        'mission_passengerbulk_security_leaving'            => 119,
        'mission_passengerbulk_politician_arriving'         => 120,
        'mission_passengerbulk_politician_leaving'          => 121,
        'mission_passengerbulk_scientist_arriving'          => 122,
        'mission_passengerbulk_scientist_leaving'           => 123,
        
        'mission_passengervip'                              => 201,
        'mission_passengervip_doctor_war'                   => 202,
        'mission_passengervip_ceo_boom'                     => 203,
        'mission_passengervip_celebrity_boom'               => 204,
        'mission_passengervip_ceo_bust'                     => 205,
        'mission_passengervip_criminal_famine'              => 206,
        'mission_passengervip_criminal_outbreak'            => 207,
        'mission_passengervip_doctor_famine'                => 208,
        'mission_passengervip_doctor_outbreak'              => 209,
        'mission_passengervip_headofstate_bust'             => 210,
        'mission_passengervip_headofstate_civilwar'         => 211,
        'mission_passengervip_headofstate_famine'           => 212,
        'mission_passengervip_headofstate_outbreak'         => 213,
        'mission_passengervip_politician_election'          => 214,
        'mission_passengervip_scientist_famine'             => 215,
        'mission_passengervip_scientist_outbreak'           => 216,
        'mission_passengervip_terrorist_outbreak'           => 217,
        'mission_passengervip_tourist_election'             => 218,
        'mission_passengervip_whistleblower_election'       => 219,
        'mission_passengervip_tourist_expansion'            => 220,
        'mission_passengervip_criminal_civilunrest'         => 221,
        'mission_passengervip_criminal_bust'                => 222,
        'mission_passengervip_terrorist_war'                => 223,
        'mission_passengervip_general_war'                  => 224,
        'mission_passengervip_terrorist_civilunrest'        => 225,
        'mission_passengervip_tourist_boom'                 => 226,
        'mission_passengervip_criminal_boom'                => 227,
        'mission_passengervip_terrorist_civilwar'           => 228,
        'mission_passengervip_headofstate_civilunrest'      => 229,
        'mission_passengervip_headofstate_war'              => 230,
        'mission_passengervip_ceo_expansion'                => 231,
        'mission_passengervip_doctor_civilwar'              => 232,
        'mission_passengervip_explorer_expansion'           => 233,
        'mission_passengervip_headofstate_election'         => 234,
        'mission_passengervip_scientist_war'                => 235,
        'mission_passengervip_scientist_civilwar'           => 236,
        
        'mission_rescue'                                    => 301,
        'mission_rescue_planet'                             => 302,
        'mission_rescue_elections'                          => 303,
        
        'mission_altruism'                                  => 401,
        'mission_altruism_outbreak'                         => 402,
        'mission_altruism_famine'                           => 403,
        'mission_altruism_theocracy'                        => 404,
        'mission_altruism_bust'                             => 405,
        'mission_altruism_civilunrest'                      => 406,
        
        'mission_altruismcredits'                           => 451,
        'mission_altruismcredits_bust'                      => 452,
        'mission_altruismcredits_outbreak'                  => 453,
        'mission_altruismcredits_civilunrest'               => 454,
        'mission_altruismcredits_famine'                    => 455,
        
        'mission_delivery'                                  => 501,
        'mission_delivery_cooperative'                      => 502,
        'mission_delivery_agriculture'                      => 503,
        'mission_delivery_boom'                             => 504,
        'mission_delivery_democracy'                        => 505,
        'mission_delivery_civilunrest'                      => 506,
        'mission_delivery_confederacy'                      => 507,
        'mission_delivery_war'                              => 508,
        'mission_delivery_civilwar'                         => 509,
        'mission_delivery_outbreak'                         => 510,
        'mission_delivery_famine'                           => 511,
        'mission_delivery_rankfed'                          => 512,
        'mission_delivery_rankemp'                          => 513,
        'mission_delivery_founder'                          => 514,
        
        'mission_collect'                                   => 601,
        'mission_collect_industrial'                        => 602,
        'mission_collect_civilwar'                          => 603,
        'mission_collect_bust'                              => 604,
        'mission_collect_famine'                            => 605,
        'mission_collect_outbreak'                          => 606,
        'mission_collect_civilunrest'                       => 607,
        'mission_collect_rankemp'                           => 608,
        'mission_collect_rankfed'                           => 609,
        
        'mission_salvage'                                   => 701,
        'mission_salvage_war'                               => 702,
        'mission_salvage_civilwar'                          => 703,
        'mission_salvage_refinery'                          => 704,
        'mission_salvage_civilunrest'                       => 705,
        'mission_salvage_famine'                            => 706,
        'mission_salvage_expansion'                         => 707,
        'mission_salvage_outbreak'                          => 708,
        'mission_salvage_rankemp'                           => 709,
        'mission_salvage_rankfed'                           => 710,
        
        'mission_salvage_illegal'                           => 751,
        'mission_salvage_illegal_terraforming'              => 752,
        'mission_salvage_illegal_bust'                      => 753,
        'mission_salvage_illegal_expansion'                 => 754,
        'mission_salvage_illegal_feudal'                    => 755,
        
        'mission_salvage_planet'                            => 781,
        
        'mission_disable'                                   => 801,
        'mission_disable_hightech'                          => 802,
        'mission_disable_war'                               => 803,
        'mission_disable_civilwar'                          => 804,
        'mission_disable_civilunrest'                       => 805,
        
        'mission_mining'                                    => 901,
        'mission_mining_boom'                               => 902,
        'mission_mining_expansion'                          => 903,
        'mission_mining_extraction'                         => 904,
        
        'mission_massacre'                                  => 1001,
        'mission_massacre_conflict_war'                     => 1002,
        'mission_massacre_conflict_civilwar'                => 1003,
        'mission_massacre_rankemp'                          => 1004,
        'mission_massacre_rankfed'                          => 1005,
        'mission_massacre_legal_prisoncolony'               => 1006,
        //'mission_massacre_legal_bust'                       => 1007,
        //'mission_massacre_legal_civilunrest'                => 1008,
        //'mission_massacre_legal_military'                   => 1009,
        
        'mission_massacre_skimmer_corporation'              => 1051,
        'mission_massacre_skimmer_refinery'                 => 1052,
        'mission_massacre_skimmer_expansion'                => 1053,
        'mission_massacre_skimmer_civilunrest'              => 1054,
        'mission_massacre_skimmer_communism'                => 1055,
        
        'mission_massacre_illegal_blops'                    => 1076,
        'mission_massacre_illegal_blops_elections'          => 1077,
        'mission_massacre_illegal_blops_bust'               => 1078,
        
        'mission_assassinate'                               => 1101,
        'mission_assassinate_rankfed'                       => 1102,
        'mission_assassinate_rankemp'                       => 1103,
        'mission_assassinate_legal_bust'                    => 1104,
        'mission_assassinate_legal_civilwar'                => 1105,
        'mission_assassinate_legal_corporate'               => 1106,
        'mission_assassinate_legal_feudal'                  => 1107,
        'mission_assassinate_legal_war'                     => 1108,
        'mission_assassinate_planetary'                     => 1109,
        'mission_assassinate_planetary_expansion'           => 1110,
        'mission_assassinate_legal_civilunrest'             => 1111,
        
        'mission_assassinate_illegal_blops'                 => 1151,
        'mission_assassinate_illegal_blops_industrial'      => 1152,
        'mission_assassinate_illegal_blops_election'        => 1153,
        
        'mission_smuggle_famine'                            => 1202,
        'mission_smuggle_rankfed'                           => 1203,
        'mission_smuggle_boom'                              => 1204,
        'mission_smuggle_bust'                              => 1205,
        
        'mission_hack'                                      => 1301,
        'mission_hack_civilwar'                             => 1302,
        'mission_hack_war'                                  => 1303,
        
        //'mission_longdistanceexpedition'                    => 1401,
        'mission_longdistanceexpedition_explorer_boom'      => 1402,
        'mission_longdistanceexpedition_explorer_expansion' => 1403,
        
        'mission_piracy'                                    => 1501,
        'mission_piracy_rankfed'                            => 1502,
        
        'mission_collect_palin'                             => 1601,
        
        'mission_sightseeing'                               => 2001,
        'mission_sightseeing_criminal_civilunrest'          => 2002,
        'mission_sightseeing_doctor_civilwar'               => 2003,
        'mission_sightseeing_criminal_boom'                 => 2004,
        'mission_sightseeing_criminal_civilwar'             => 2005,
        'mission_sightseeing_tourist_boom'                  => 2006,
        'mission_sightseeing_terrorist_civilwar'            => 2007,
        'mission_sightseeing_general_war'                   => 2008,
        'mission_sightseeing_doctor_war'                    => 2009,
        'mission_sightseeing_explorer_expansion'            => 2010,
        'mission_sightseeing_criminal_famine'               => 2011,
        'mission_sightseeing_terrorist_war'                 => 2012,
        'mission_sightseeing_doctor_civilunrest'            => 2013,
        'mission_sightseeing_general_civilwar'              => 2014,
        'mission_sightseeing_ceo_boom'                      => 2015,
        'mission_sightseeing_headofstate_election'          => 2016,
        'mission_sightseeing_ceo_expansion'                 => 2017,
        'mission_sightseeing_criminal_bust'                 => 2018,
        'mission_sightseeing_doctor_famine'                 => 2019,
        'mission_sightseeing_doctor_outbreak'               => 2020,
        'mission_sightseeing_scientist_civilwar'            => 2021,
        'mission_sightseeing_scientist_famine'              => 2022,
        'mission_sightseeing_scientist_outbreak'            => 2023,
        'mission_sightseeing_scientist_war'                 => 2024,
        'mission_sightseeing_whistleblower_civilunrest'     => 2025,
        'mission_sightseeing_whistleblower_election'        => 2026,
        'mission_sightseeing_tourist_election'              => 2027,
        'mission_sightseeing_terrorist_outbreak'            => 2028,
        'mission_sightseeing_criminal_outbreak'             => 2029,
        'mission_sightseeing_doctor_bust'                   => 2030,
        'mission_sightseeing_tourist_expansion'             => 2031,
        'mission_sightseeing_ceo_bust'                      => 2032,
        'mission_sightseeing_celebrity_election'            => 2033,
        'mission_sightseeing_terrorist_civilunrest'         => 2034,
        
        'mission_scan'                                      => 2501,
        'mission_scan_war'                                  => 2502,
        'mission_scan_lockdown'                             => 2503,
        'mission_scan_civilwar'                             => 2504,
        'mission_scan_civilunrest'                          => 2505,
        
        'mission_genericpermit1'                            => 2601,
        
        'chain_planetaryincursions'                         => 3001,
        'chain_helpfinishtheorder'                          => 3002,
        'chain_regainfooting'                               => 3003,
        'chain_wrongtarget'                                 => 3004,
        'chain_helpwithpreventionmeasures'                  => 3005,
        'chain_salvagejustice'                              => 3006,
        'chain_seekingasylum'                               => 3007,
        'chain_miningtoorder'                               => 3008,
        'chain_findthepiratelord'                           => 3009,
    ];
}