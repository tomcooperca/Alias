<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Category extends Alias
{
    use \EDSM\Alias\Station\Outfitting\Category;
    
    /**
     * List of names used in game
     */
    static protected $name  = [
         1      => 'Bulkhead',
         2      => 'Weapon Hardpoint',
         3      => 'Utility Mount',
         4      => 'Core Internal',
         5      => 'Optional Internal',
    ];
    
    /**
     * List of outfitting id in each categories
     */
    static protected $in    = [
        // Bulkhead
         1      =>  [
            128049267   => [1, 2, 3, 4, 5],                // Adder
            128049363   => [11, 12, 13, 14, 15],           // Anaconda
            128049303   => [21, 22, 23, 24, 25],           // Asp Explorer
            128672276   => [31, 32, 33, 34, 35],           // Asp Scout
            128049345   => [41, 42, 43, 44, 45],           // Beluga Liner
            128049279   => [51, 52, 53, 54, 55],           // Cobra MkIII
            128672262   => [61, 62, 63, 64, 65],           // Cobra MkIV
            128671831   => [71, 72, 73, 74, 75],           // Diamondback Explorer
            128671217   => [81, 82, 83, 84, 85],           // Diamondback Scout
            128049291   => [91, 92, 93, 94, 95],           // Dolphin
            128049255   => [101, 102, 103, 104, 105],      // Eagle
            128672145   => [111, 112, 113, 114, 115],      // Federal Assault Ship
            128049369   => [121, 122, 123, 124, 125],      // Federal Corvette
            128049321   => [131, 132, 133, 134, 135],      // Federal Dropship
            128672152   => [141, 142, 143, 144, 145],      // Federal Gunship
            128049351   => [151, 152, 153, 154, 155],      // Fer-de-Lance
            128049261   => [161, 162, 163, 164, 165],      // Hauler
            128049315   => [171, 172, 173, 174, 175],      // Imperial Clipper
            128671223   => [181, 182, 183, 184, 185],      // Imperial Courrier
            128049375   => [191, 192, 193, 194, 195],      // Imperial Cutter
            128672138   => [201, 202, 203, 204, 205],      // Imperial Eagle
            128672269   => [211, 212, 213, 214, 215],      // Keelback
            128049327   => [221, 222, 223, 224, 225],      // Orca
            128049339   => [231, 232, 233, 234, 235],      // Python
            128049249   => [241, 242, 243, 244, 245],      // Sidewinder
            128049285   => [251, 252, 253, 254, 255],      // Type-6 Transporter
            128049297   => [261, 262, 263, 264, 265],      // Type-7 Transporter
            128049333   => [271, 272, 273, 274, 275],      // Type-9 Heavy
            128049273   => [281, 282, 283, 284, 285],      // Viper MkIII
            128672255   => [291, 292, 293, 294, 295],      // Viper MkIV
            128049309   => [301, 302, 303, 304, 305],      // Vulture
        ],
        
        // Weapon Hardpoint
         2      =>  [
            'Beam Laser'                        => [
                1001, 1002, 1003, 1004,
                1005, 1006, 1007, 1008,
                1009, 1010, 1011,
            ],
            'Pulse Laser'                       => [
                1051, 1052, 1053, 1054,
                1055, 1056, 1057, 1058,
                1059, 1060, 1061,
            ],
            'Burst Laser'                       => [
                1101, 1102, 1103, 1104,
                1105, 1106, 1107, 1108,
                1109, 1110, 1111,
            ],
            'Cannon'                            => [
                1151, 1152, 1153, 1154,
                1155, 1156, 1157, 1158,
                1159, 1160, 1161,
            ],
            'Fragment Cannon'                   => [
                1201, 1202, 1203,
                1205, 1206, 1207,
                1209, 1210, 1211,
            ],
            'Multi-Cannon'                      => [
                1251, 1252, 1253, 1254,
                1255, 1256, 1257, 1258,
                1259, 1260,
            ],
            'Plasma Accelerator'                => [
                1302, 1303, 1304,
            ],
            'Rail Gun'                          => [
                1351, 1352,
            ],
            'Missile Rack'                      => [
                1401, 1402,
                1405, 1406,
            ],
            'Mine Launcher'                     => [
                1451, 1452,
            ],
            'Mining Laser'                      => [
                1501, 1502,
                1509, 1510,
            ],
            'Torpedo Pylon'                     => [
                1551, 1552,
            ],
            'Shock Mine Launcher'               => [
                1601,
            ],
            'AX Missile Rack'                   => [
                1652,
                1660,
            ],
            'AX Multi-Cannon'                   => [
                1702,
                1710,
            ],
            'Remote Release Flak Launcher'      => [
                1752,
                1760,
            ],
         ],
        
        // Utility Mount
         3      => [
            'Shield Booster'                    => [
                2001, 2002, 2003, 2004, 2005,
            ],
            'Chaff Launcher'                    => [
                2050,
            ],
            'Electronic Countermeasure'         => [
                2100,
            ],
            'Heat Sink Launcher'                => [
                2150,
            ],
            'Point Defence'                     => [
                2200,
            ],
            'Cargo Scanner'                     => [
                2251, 2252, 2253, 2254, 2255,
            ],
            'Frame Shift Wake Scanner'          => [
                2301, 2302, 2303, 2304, 2305,
            ],
            'Kill Warrant Scanner'              => [
                2351, 2352, 2353, 2354, 2355,
            ],
            'Xeno Scanner'                      => [
                2401,
            ],
        ],
        
        // Core Internal
         4      => [
            'Fuel Tank'                         => [
                3001, 3002, 3003, 3004, 3005, 3006, 3007, 3008,
            ],
            'Power Plant'                       => [
                3101, 3102, 3103, 3104, 3105,
                3111, 3112, 3113, 3114, 3115,
                3121, 3122, 3123, 3124, 3125,
                3131, 3132, 3133, 3134, 3135,
                3141, 3142, 3143, 3144, 3145,
                3151, 3152, 3153, 3154, 3155,
                3161, 3162, 3163, 3164, 3165,
            ],
            'Thrusters'                         => [
                3201, 3202, 3203, 3204, 3205, 3206,
                3211, 3212, 3213, 3214, 3215, 3216,
                3221, 3222, 3223, 3224, 3225,
                3231, 3232, 3233, 3234, 3235,
                3241, 3242, 3243, 3244, 3245,
                3251, 3252, 3253, 3254, 3255,
                3261, 3262, 3263, 3264, 3265,
            ],
            'Frame Shift Drive'                 => [
                3301, 3302, 3303, 3304, 3305,
                3311, 3312, 3313, 3314, 3315,
                3321, 3322, 3323, 3324, 3325,
                3331, 3332, 3333, 3334, 3335,
                3341, 3342, 3343, 3344, 3345,
                3351, 3352, 3353, 3354, 3355,
                3361, 3362, 3363, 3364, 3365,
            ],
            'Life Support'                      => [
                3401, 3402, 3403, 3404, 3405,
                3411, 3412, 3413, 3414, 3415,
                3421, 3422, 3423, 3424, 3425,
                3431, 3432, 3433, 3434, 3435,
                3441, 3442, 3443, 3444, 3445,
                3451, 3452, 3453, 3454, 3455,
                3461, 3462, 3463, 3464, 3465,
                3471, 3472, 3473, 3474, 3475,
            ],
            'Power Distributor'                 => [
                3501, 3502, 3503, 3504, 3505,
                3511, 3512, 3513, 3514, 3515,
                3521, 3522, 3523, 3524, 3525,
                3531, 3532, 3533, 3534, 3535,
                3541, 3542, 3543, 3544, 3545,
                3551, 3552, 3553, 3554, 3555,
                3561, 3562, 3563, 3564, 3565,
                3571, 3572, 3573, 3574, 3575,
            ],
            'Sensors'                           => [
                3601, 3602, 3603, 3604, 3605,
                3611, 3612, 3613, 3614, 3615,
                3621, 3622, 3623, 3624, 3625,
                3631, 3632, 3633, 3634, 3635,
                3641, 3642, 3643, 3644, 3645,
                3651, 3652, 3653, 3654, 3655,
                3661, 3662, 3663, 3664, 3665,
                3671, 3672, 3673, 3674, 3675,
            ],
            'Planetary Approach Suite'          => [
                3701,
            ],
        ],
        
        // Optional Internal
         5      => [
            'Discovery Scanner'                 => [
                4001, 4002, 4003,
            ],
            'Detailed Surface Scanner'          => [
                4011,
            ],
            'Cargo Rack'                        => [
                4021, 4022, 4023, 4024, 4025, 4026, 4027, 4028,
                4031, 4032,
            ],
            'Standard Docking Computer'         => [
                4051,
            ],
            'Shield Generator'                  => [
                                  4104,       4106,
                4111, 4112, 4113, 4114, 4115, 4116,
                4121, 4122, 4123, 4124, 4125, 4126,
                4131, 4132, 4133, 4134, 4135, 4136,
                4141, 4142, 4143, 4144, 4145, 4146,
                4151, 4152, 4153, 4154, 4155, 4156,
                4161, 4162, 4163, 4164, 4165, 4166,
                4171, 4172, 4173, 4174, 4175, 4176,
            ],
            'Shield Cell Bank'                  => [
                4201, 4202, 4203, 4204, 4205,
                4211, 4212, 4213, 4214, 4215,
                4221, 4222, 4223, 4224, 4225,
                4231, 4232, 4233, 4234, 4235,
                4241, 4242, 4243, 4244, 4245,
                4251, 4252, 4253, 4254, 4255,
                4261, 4262, 4263, 4264, 4265,
                4271, 4272, 4273, 4274, 4275,
            ],
            'Fuel Scoop'                        => [
                4301, 4302, 4303, 4304, 4305,
                4311, 4312, 4313, 4314, 4315,
                4321, 4322, 4323, 4324, 4325,
                4331, 4332, 4333, 4334, 4335,
                4341, 4342, 4343, 4344, 4345,
                4351, 4352, 4353, 4354, 4355,
                4361, 4362, 4363, 4364, 4365,
                4371, 4372, 4373, 4374, 4375,
            ],
            'Refinery'                          => [
                4401, 4402, 4403, 4404, 4405,
                4411, 4412, 4413, 4414, 4415,
                4421, 4422, 4423, 4424, 4425,
                4431, 4432, 4433, 4434, 4435,
            ],
            'Frame Shift Drive Interdictor'     => [
                4501, 4502, 4503, 4504, 4505,
                4511, 4512, 4513, 4514, 4515,
                4521, 4522, 4523, 4524, 4525,
                4531, 4532, 4533, 4534, 4535,
            ],
            'Hatch Breaker Limpet Controller'   => [
                4601, 4602, 4603, 4604, 4605,
                4621, 4622, 4623, 4624, 4625,
                4641, 4642, 4643, 4644, 4645,
                4661, 4662, 4663, 4664, 4665,
            ],
            'Auto Field-Maintenance Unit'       => [
                4701, 4702, 4703, 4704, 4705,
                4711, 4712, 4713, 4714, 4715,
                4721, 4722, 4723, 4724, 4725,
                4731, 4732, 4733, 4734, 4735,
                4741, 4742, 4743, 4744, 4745,
                4751, 4752, 4753, 4754, 4755,
                4761, 4762, 4763, 4764, 4765,
                4771, 4772, 4773, 4774, 4775,
            ],
            'Hull Reinforcement Package'        => [
                4801, 4802,
                4811, 4812,
                4821, 4822,
                4831, 4832,
                4841, 4842,
            ],
            'Module Reinforcement Package'      => [
                4901, 4902,
                4911, 4912,
                4921, 4922,
                4931, 4932,
                4941, 4942,
            ],
            'Collector Limpet Controller'       => [
                5001, 5002, 5003, 5004, 5005,
                5021, 5022, 5023, 5024, 5025,
                5041, 5042, 5043, 5044, 5045,
                5061, 5062, 5063, 5064, 5065,
            ],
            'Fuel Transfer Limpet Controller'   => [
                5101, 5102, 5103, 5104, 5105,
                5121, 5122, 5123, 5124, 5125,
                5141, 5142, 5143, 5144, 5145,
                5161, 5162, 5163, 5164, 5165,
            ],
            'Prospector Limpet Controller'      => [
                5201, 5202, 5203, 5204, 5205,
                5221, 5222, 5223, 5224, 5225,
                5241, 5242, 5243, 5244, 5245,
                5261, 5262, 5263, 5264, 5265,
            ],
            'Passenger Cabin'                   => [
                5311,
                5321, 5322,
                5331, 5332, 5333,
                5341, 5342, 5343, 5344,
                5351, 5352, 5353, 5354,
            ],
            'Planetary Vehicle Hangar'          => [
                5411, 5412,
                5431, 5432,
                5451, 5452,
            ],
            'Fighter Hangar'                    => [
                5541,
                5551,
                5561,
            ],
            'Repair Limpet Controller'          => [
                5601, 5602, 5603, 5604, 5605,
                5621, 5622, 5623, 5624, 5625,
                5641, 5642, 5643, 5644, 5645,
                5661, 5662, 5663, 5664, 5665,
            ],
            'Research Limpet Controller'        => [
                5701,
            ],
         ],
    ];
}