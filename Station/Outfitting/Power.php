<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Power extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Power';
    static protected $unit              = '%1$s MW';
    
    /**
     * List of categories
     */
    static protected $have          = [
        // Weapon Hardpoint
        'Beam Laser',
        'Pulse Laser',
        'Burst Laser',
        'Cannon',
        'Fragment Cannon',
        'Multi-Cannon',
        'Plasma Accelerator',
        'Rail Gun',
        'Missile Rack',
        'Mine Launcher',
        'Mining Laser',
        'Torpedo Pylon',
        'Shock Mine Launcher',
        
        // Utility Mount
        'Shield Booster',
        'Chaff Launcher',
        'Electronic Countermeasure',
        'Heat Sink Launcher',
        'Point Defence',
        'Cargo Scanner',
        'Frame Shift Wake Scanner',
        'Kill Warrant Scanner',
        'Xeno Scanner',
        
        // Core Internal
        'Thrusters',
        'Frame Shift Drive',
        'Life Support',
        'Power Distributor',
        'Sensors',
        'Planetary Approach Suite',
        
        // Optional Internal
        'Detailed Surface Scanner',
        'Standard Docking Computer',
        'Shield Generator',
        'Shield Cell Bank',
        'Fuel Scoop',
        'Refinery',
        'Frame Shift Drive Interdictor',
        'Hatch Breaker Limpet Controller',
        'Auto Field-Maintenance Unit',
        'Collector Limpet Controller',
        'Fuel Transfer Limpet Controller',
        'Prospector Limpet Controller',
        'Planetary Vehicle Hangar',
        'Fighter Hangar',
        'Repair Limpet Controller',
        'Research Limpet Controller',
    ];
    
    /**
     * Number by outfitting
     */
    static protected $name          = [
        // Bulkhead
             1  => 0,     2  => 0,    3  => 0,    4  => 0,    5  => 0,
            11  => 0,    12  => 0,   13  => 0,   14  => 0,   15  => 0,
            21  => 0,    22  => 0,   23  => 0,   24  => 0,   25  => 0,
            31  => 0,    32  => 0,   33  => 0,   34  => 0,   35  => 0,
            41  => 0,    42  => 0,   43  => 0,   44  => 0,   45  => 0,
            51  => 0,    52  => 0,   53  => 0,   54  => 0,   55  => 0,
            61  => 0,    62  => 0,   63  => 0,   64  => 0,   65  => 0,
            71  => 0,    72  => 0,   73  => 0,   74  => 0,   75  => 0,
            81  => 0,    82  => 0,   83  => 0,   84  => 0,   85  => 0,
            91  => 0,    92  => 0,   93  => 0,   94  => 0,   95  => 0,
           101  => 0,   102  => 0,  103  => 0,  104  => 0,  105  => 0,
           111  => 0,   112  => 0,  113  => 0,  114  => 0,  115  => 0,
           121  => 0,   122  => 0,  123  => 0,  124  => 0,  125  => 0,
           131  => 0,   132  => 0,  133  => 0,  134  => 0,  135  => 0,
           141  => 0,   142  => 0,  143  => 0,  144  => 0,  145  => 0,
           151  => 0,   152  => 0,  153  => 0,  154  => 0,  155  => 0,
           161  => 0,   162  => 0,  163  => 0,  164  => 0,  165  => 0,
           171  => 0,   172  => 0,  173  => 0,  174  => 0,  175  => 0,
           181  => 0,   182  => 0,  183  => 0,  184  => 0,  185  => 0,
           191  => 0,   192  => 0,  193  => 0,  194  => 0,  195  => 0,
           201  => 0,   202  => 0,  203  => 0,  204  => 0,  205  => 0,
           211  => 0,   212  => 0,  213  => 0,  214  => 0,  215  => 0,
           221  => 0,   222  => 0,  223  => 0,  224  => 0,  225  => 0,
           231  => 0,   232  => 0,  233  => 0,  234  => 0,  235  => 0,
           241  => 0,   242  => 0,  243  => 0,  244  => 0,  245  => 0,
           251  => 0,   252  => 0,  253  => 0,  254  => 0,  255  => 0,
           261  => 0,   262  => 0,  263  => 0,  264  => 0,  265  => 0,
           271  => 0,   272  => 0,  273  => 0,  274  => 0,  275  => 0,
           281  => 0,   282  => 0,  283  => 0,  284  => 0,  285  => 0,
           291  => 0,   292  => 0,  293  => 0,  294  => 0,  295  => 0,
           301  => 0,   302  => 0,  303  => 0,  304  => 0,  305  => 0,
           311  => 0,   312  => 0,  313  => 0,  314  => 0,  315  => 0,
           321  => 0,   322  => 0,  323  => 0,  324  => 0,  325  => 0,
           331  => 0,   332  => 0,  333  => 0,  334  => 0,  335  => 0,
           341  => 0,   342  => 0,  343  => 0,  344  => 0,  345  => 0,
    
        // Weapon Hardpoint > Beam Laser
          1001  => 0.62,
          1002  => 1.62,
          1003  => 1.62,
          1004  => 2.61,
          
          1005  => 0.6,
          1006  => 0.99,
          1007  => 1.6,
          1008  => 2.57,
          
          1009  => 0.57,
          1010  => 0.93,
          1011  => 1.51,
        
        // Weapon Hardpoint > Pulse Laser
          1051  => 0.39,
          1052  => 0.6,
          1053  => 0.9,
          1054  => 1.33,
          
          1055  => 0.39,
          1056  => 0.6,
          1057  => 0.92,
          1058  => 1.37,
          
          1059  => 0.38,
          1060  => 0.58,
          1061  => 0.89,
        
        // Weapon Hardpoint > Burst Laser
          1101  => 0.65,
          1102  => 1.05,
          1103  => 1.66,
          1104  => 2.58,
          
          1105  => 0.64,
          1106  => 1.04,
          1107  => 1.65,
          1108  => 2.59,
          
          1109  => 0.6,
          1110  => 0.98,
          1111  => 1.57,
        
        // Weapon Hardpoint > Cannon
          1151  => 0.34,
          1152  => 0.49,
          1153  => 0.67,
          1154  => 0.92,
          
          1155  => 0.38,
          1156  => 0.54,
          1157  => 0.75,
          1158  => 1.03,
          
          1159  => 0.32,
          1160  => 0.45,
          1161  => 0.64,
        
        // Weapon Hardpoint > Fragment Cannon
          1201  => 0.45,
          1202  => 0.74,
          1203  => 1.02,
          
          1205  => 0.59,
          1206  => 1.03,
          1207  => 1.55,
          
          1209  => 0.42,
          1210  => 0.79,
          1211  => 1.29,
        
        // Weapon Hardpoint > Multi-Cannon
          1251  => 0.28,
          1252  => 0.46,
          1253  => 0.64,
          1254  => 0.73,
          
          1255  => 0.37,
          1256  => 0.64,
          1257  => 0.97,
          1258  => 1.22,
          
          1259  => 0.26,
          1260  => 0.5,
        
        // Weapon Hardpoint > Plasma Accelerator
          1302  => 1.43,
          1303  => 1.97,
          1304  => 2.63,
        
        // Weapon Hardpoint > Rail Gun
          1351  => 1.15,
          1352  => 1.63,
        
        // Weapon Hardpoint > Missile Rack
          1401  => 0.6,
          1402  => 1.2,
          1405  => 0.4,
          1406  => 1.2,
        
        // Weapon Hardpoint > Mine Launcher
          1451  => 0.4,
          1452  => 0.4,
        
        // Weapon Hardpoint > Mining Laser
          1501  => 0.5,
          1502  => 0.75,
          
          1509  => 0.5,
          1510  => 0.75,
        
        // Weapon Hardpoint > Torpedo Pylon
          1551  => 0.4,
          1552  => 0.4,
        
        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 0.4,
          
        // Utility Mount > Shield Booster
          2001  => 0.2,
          2002  => 0.5,
          2003  => 0.7,
          2004  => 1,
          2005  => 1.2,
          
        // Utility Mount > Chaff Launcher
          2050  => 0.2,
          
        // Utility Mount > Electronic Countermeasure
          2100  => 0.2,
          
        // Utility Mount > Heat Sink Launcher
          2150  => 0.2,
          
        // Utility Mount > Point Defence
          2200  => 0.2,
          
        // Utility Mount > Cargo Scanner
          2251  => 0.2,
          2252  => 0.4,
          2253  => 0.8,
          2254  => 1.6,
          2255  => 3.2,
          
        // Utility Mount > Frame Shift Wake Scanner
          2301  => 0.2,
          2302  => 0.4,
          2303  => 0.8,
          2304  => 1.6,
          2305  => 3.2,
          
        // Utility Mount > Kill Warrant Scanner
          2351  => 0.2,
          2352  => 0.4,
          2353  => 0.8,
          2354  => 1.6,
          2355  => 3.2,
          
        // Utility Mount > Xeno Scanner
          2401  => 0.2,
        
        // Core Internal > Fuel Tank
          3001  => 0,   3002  => 0,     3003  => 0,     3004  => 0,     3005  => 0,     3006  => 0,     3007  => 0,     3008  => 0,
        
        // Core Internal > Thrusters
          3201  => 2,
          3202  => 2.25,
          3203  => 2.5,
          3204  => 2.75,
          3205  => 3,
          3206  => 4,
        
          3211  => 2.48,
          3212  => 2.79,
          3213  => 3.1,
          3214  => 3.41,
          3215  => 3.72,
          3216  => 5,
        
          3221  => 3.28,
          3222  => 3.69,
          3223  => 4.1,
          3224  => 4.51,
          3225  => 4.92,
        
          3231  => 4.08,
          3232  => 4.59,
          3233  => 5.1,
          3234  => 5.61,
          3235  => 6.12,
        
          3241  => 5.04,
          3242  => 5.67,
          3243  => 6.3,
          3244  => 6.93,
          3245  => 7.56,
        
          3251  => 6.08,
          3252  => 6.84,
          3253  => 7.6,
          3254  => 8.36,
          3255  => 9.12,
        
          3261  => 7.2,
          3262  => 8.1,
          3263  => 9,
          3264  => 9.9,
          3265  => 10.8,
        
        // Core Internal > Frame Shift Drive
          3301  => 0.16,
          3302  => 0.18,
          3303  => 0.2,
          3304  => 0.25,
          3305  => 0.3,
        
          3311  => 0.24,
          3312  => 0.27,
          3313  => 0.3,
          3314  => 0.38,
          3315  => 0.45,
        
          3321  => 0.24,
          3322  => 0.27,
          3323  => 0.3,
          3324  => 0.38,
          3325  => 0.45,
        
          3331  => 0.32,
          3332  => 0.36,
          3333  => 0.4,
          3334  => 0.5,
          3335  => 0.6,
        
          3341  => 0.4,
          3342  => 0.45,
          3343  => 0.5,
          3344  => 0.63,
          3345  => 0.75,
        
          3351  => 0.48,
          3352  => 0.54,
          3353  => 0.6,
          3354  => 0.75,
          3355  => 0.9,
        
          3361  => null,
          3362  => null,
          3363  => null,
          3364  => null,
          3365  => null,
        
        // Core Internal > Life Support
          3401  => 0.32,
          3402  => 0.36,
          3403  => 0.4,
          3404  => 0.44,
          3405  => 0.48,
        
          3411  => 0.37,
          3412  => 0.41,
          3413  => 0.46,
          3414  => 0.51,
          3415  => 0.55,
        
          3421  => 0.42,
          3422  => 0.48,
          3423  => 0.53,
          3424  => 0.58,
          3425  => 0.64,
        
          3431  => 0.5,
          3432  => 0.56,
          3433  => 0.62,
          3434  => 0.68,
          3435  => 0.74,
        
          3441  => 0.57,
          3442  => 0.64,
          3443  => 0.71,
          3444  => 0.78,
          3445  => 0.85,
        
          3451  => 0.64,
          3452  => 0.72,
          3453  => 0.8,
          3454  => 0.88,
          3455  => 0.96,
        
          3461  => 0.72,
          3462  => 0.81,
          3463  => 0.9,
          3464  => 0.99,
          3465  => 1.08,
        
          3471  => 0.8,
          3472  => 0.9,
          3473  => 1,
          3474  => 1.1,
          3475  => 1.2,
        
        // Core Internal > Power Distributor
          3501  => 0.32,
          3502  => 0.36,
          3503  => 0.4,
          3504  => 0.44,
          3505  => 0.48,
        
          3511  => 0.36,
          3512  => 0.41,
          3513  => 0.45,
          3514  => 0.5,
          3515  => 0.54,
        
          3521  => 0.4,
          3522  => 0.45,
          3523  => 0.5,
          3524  => 0.55,
          3525  => 0.6,
        
          3531  => 0.45,
          3532  => 0.5,
          3533  => 0.56,
          3534  => 0.62,
          3535  => 0.67,
        
          3541  => 0.5,
          3542  => 0.56,
          3543  => 0.62,
          3544  => 0.68,
          3545  => 0.74,
        
          3551  => 0.54,
          3552  => 0.61,
          3553  => 0.68,
          3554  => 0.75,
          3555  => 0.82,
        
          3561  => 0.59,
          3562  => 0.67,
          3563  => 0.74,
          3564  => 0.81,
          3565  => 0.89,
        
          3571  => 0.64,
          3572  => 0.72,
          3573  => 0.8,
          3574  => 0.88,
          3575  => 0.96,
        
        // Core Internal > Sensors
          3601  => 0.16,
          3602  => 0.18,
          3603  => 0.2,
          3604  => 0.33,
          3605  => 0.6,
        
          3611  => 0.18,
          3612  => 0.21,
          3613  => 0.23,
          3614  => 0.38,
          3615  => 0.69,
        
          3621  => 0.22,
          3622  => 0.25,
          3623  => 0.28,
          3624  => 0.46,
          3625  => 0.84,
        
          3631  => 0.27,
          3632  => 0.31,
          3633  => 0.34,
          3634  => 0.56,
          3635  => 1.02,
        
          3641  => 0.33,
          3642  => 0.37,
          3643  => 0.41,
          3644  => 0.68, 
          3645  => 1.23,
        
          3651  => 0.4,
          3652  => 0.45,
          3653  => 0.5,
          3654  => 0.83,
          3655  => 1.5,
        
          3661  => 0.47,
          3662  => 0.53,
          3663  => 0.59,
          3664  => 0.97,
          3665  => 1.77,
        
          3671  => 0.55,
          3672  => 0.62,
          3673  => 0.69,
          3674  => 1.14,
          3675  => 2.07,
        
        // Core Internal > Planetary Approach Suite
          3701  => 0,
        
        // Core Internal > Frame Shift Drive Booster
          3801  => 0.75,
        
          3811  => 0.98,
        
          3821  => 1.27,
        
          3831  => 1.65,
        
          3841  => 2.14,
        
        // Optional Internal > Discovery Scanner
          4001  => 0,   4002  => 0,     4003  => 0,
        
        // Optional Internal > Detailed Surface Scanner
          4011  => 0,
        
        // Optional Internal > Cargo Rack
          4021  => 0,
          4022  => 0,   4023  => 0,     4024  => 0,     4025  => 0,     4026  => 0,     4027  => 0,     4028  => 0,
          4031  => 0,   4032  => 0,     4033  => 0,     4034  => 0,
        
        // Optional Internal > Standard Docking Computer
          4051  => 0.39,
        
        // Optional Internal > Shield Generator
          4104  => 1.2,
          4106  => 1.68,
        
          4111  => 0.9,
          4112  => 1.2,
          4113  => 1.5,
          4114  => 1.5,
          4115  => 1.8,
          4116  => 2.5,
        
          4121  => 1.08,
          4122  => 1.44,
          4123  => 1.8,
          4124  => 1.8,
          4125  => 2.16,
          4126  => 2.52,
        
          4131  => 1.32,
          4132  => 1.76,
          4133  => 2.2,
          4134  => 2.2,
          4135  => 2.64,
          4136  => 3.08,
        
          4141  => 1.56,
          4142  => 2.08,
          4143  => 2.6,
          4144  => 2.6,
          4145  => 3.12,
          4146  => 3.64,
        
          4151  => 1.86,
          4152  => 2.48,
          4153  => 3.1,
          4154  => 3.1,
          4155  => 3.72,
          4156  => 4.34,
        
          4161  => 2.1,
          4162  => 2.8,
          4163  => 3.5,
          4164  => 3.5,
          4165  => 4.2,
          4166  => 4.9,
        
          4171  => 2.4,
          4172  => 3.2,
          4173  => 4,
          4174  => 4,
          4175  => 4.8,
          4176  => 5.6,
        
        // Optional Internal > Shield Cell Bank
          4201  => 0.41,
          4202  => 0.55,
          4203  => 0.69,
          4204  => 0.83,
          4205  => 0.97,
        
          4211  => 0.5,
          4212  => 0.67,
          4213  => 0.84,
          4214  => 1.01,
          4215  => 1.18,
        
          4221  => 0.61,
          4222  => 0.82,
          4223  => 1.02,
          4224  => 1.22,
          4225  => 1.43,
        
          4231  => 0.74,
          4232  => 0.98,
          4233  => 1.23,
          4234  => 1.48,
          4235  => 1.72,
        
          4241  => 0.9,
          4242  => 1.2,
          4243  => 1.5,
          4244  => 1.8,
          4245  => 2.1,
        
          4251  => 1.06,
          4252  => 1.42,
          4253  => 1.77,
          4254  => 2.12,
          4255  => 2.48,
        
          4261  => 1.24,
          4262  => 1.66,
          4263  => 2.07,
          4264  => 2.48,
          4265  => 2.9,
        
          4271  => 1.44,
          4272  => 1.92,
          4273  => 2.4,
          4274  => 2.88,
          4275  => 3.36,
        
        // Optional Internal > Fuel Scoop
          4301  => 0.14,
          4302  => 0.18,
          4303  => 0.23,
          4304  => 0.28,
          4305  => 0.32,
        
          4311  => 0.17,
          4312  => 0.22,
          4313  => 0.28,
          4314  => 0.34,
          4315  => 0.39,
        
          4321  => 0.2,
          4322  => 0.27,
          4323  => 0.34,
          4324  => 0.41,
          4325  => 0.48,
        
          4331  => 0.25,
          4332  => 0.33,
          4333  => 0.41,
          4334  => 0.49,
          4335  => 0.57,
        
          4341  => 0.3,
          4342  => 0.4,
          4343  => 0.5,
          4344  => 0.6,
          4345  => 0.7,
        
          4351  => 0.35,
          4352  => 0.47,
          4353  => 0.59,
          4354  => 0.71,
          4355  => 0.83,
        
          4361  => 0.41,
          4362  => 0.55,
          4363  => 0.69,
          4364  => 0.83,
          4365  => 0.97,
        
          4371  => 0.48,
          4372  => 0.64,
          4373  => 0.8,
          4374  => 0.96,
          4375  => 1.12,
        
        // Optional Internal > Refinery
          4401  => 0.14,
          4402  => 0.18,
          4403  => 0.23,
          4404  => 0.28,
          4405  => 0.32,
        
          4411  => 0.17,
          4412  => 0.22,
          4413  => 0.28,
          4414  => 0.34,
          4415  => 0.39,
        
          4421  => 0.2,
          4422  => 0.27,
          4423  => 0.34,
          4424  => 0.41,
          4425  => 0.48,
        
          4431  => 0.25,
          4432  => 0.33,
          4433  => 0.41,
          4434  => 0.49,
          4435  => 0.57,
        
        // Optional Internal > Frame Shift Drive Interdictor
          4501  => 0.14,
          4502  => 0.18,
          4503  => 0.23,
          4504  => 0.28,
          4505  => 0.32,
        
          4511  => 0.17,
          4512  => 0.22,
          4513  => 0.28,
          4514  => 0.34,
          4515  => 0.39,
        
          4521  => 0.2,
          4522  => 0.27,
          4523  => 0.34,
          4524  => 0.41,
          4525  => 0.48,
        
          4531  => 0.25,
          4532  => 0.33,
          4533  => 0.41,
          4534  => 0.49,
          4535  => 0.57,
        
        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 0.12,
          4602  => 0.16,
          4603  => 0.2,
          4604  => 0.24,
          4605  => 0.28,
        
          4621  => 0.18,
          4622  => 0.24,
          4623  => 0.3,
          4624  => 0.36,
          4625  => 0.42,
        
          4641  => 0.3,
          4642  => 0.4,
          4643  => 0.5,
          4644  => 0.6,
          4645  => 0.7,
        
          4661  => 0.42,
          4662  => 0.56,
          4663  => 0.7,
          4664  => 0.84,
          4665  => 0.98,
        
        // Optional Internal > Auto Field-Maintenance Unit
          4701  => 0.54,
          4702  => 0.72,
          4703  => 0.9,
          4704  => 1.04,
          4705  => 1.26,
        
          4711  => 0.68,
          4712  => 0.9,
          4713  => 1.13,
          4714  => 1.29,
          4715  => 1.58,
        
          4721  => 0.81,
          4722  => 1.08,
          4723  => 1.35,
          4724  => 1.55,
          4725  => 1.89,
        
          4731  => 0.99,
          4732  => 1.32,
          4733  => 1.65,
          4734  => 1.9,
          4735  => 2.31,
        
          4741  => 1.17,
          4742  => 1.56,
          4743  => 1.95,
          4744  => 2.24,
          4745  => 2.73,
        
          4751  => 1.4,
          4752  => 1.86,
          4753  => 2.33,
          4754  => 2.67,
          4755  => 3.26,
        
          4761  => 1.58,
          4762  => 2.1,
          4763  => 2.63,
          4764  => 3.02,
          4765  => 3.68,
        
          4771  => 1.8,
          4772  => 2.4,
          4773  => 3,
          4774  => 3.45,
          4775  => 4.2,
        
        // Optional Internal > Hull Reinforcement Package
          4801  => 0,   4802  => 0,
          4811  => 0,   4812  => 0,
          4821  => 0,   4822  => 0,
          4831  => 0,   4832  => 0,
          4841  => 0,   4842  => 0,
        
        // Optional Internal > Module Reinforcement Package
          4901  => 0,   4902  => 0,
          4911  => 0,   4912  => 0,
          4921  => 0,   4922  => 0,        
          4931  => 0,   4932  => 0,
          4941  => 0,   4942  => 0,
        
        // Optional Internal > Collector Limpet Controller
          5001  => 0.14,
          5002  => 0.18,
          5003  => 0.23,
          5004  => 0.28,
          5005  => 0.32,
        
          5021  => 0.2,
          5022  => 0.27,
          5023  => 0.34,
          5024  => 0.41,
          5025  => 0.48,
        
          5041  => 0.3,
          5042  => 0.4,
          5043  => 0.5,
          5044  => 0.6,
          5045  => 0.7,
        
          5061  => 0.41,
          5062  => 0.55,
          5063  => 0.69,
          5064  => 0.83,
          5065  => 0.97,
        
        // Optional Internal > Fuel Transfer Limpet Controller
          5101  => 0.18,
          5102  => 0.14,
          5103  => 0.23,
          5104  => 0.32,
          5105  => 0.28,
        
          5121  => 0.27,
          5122  => 0.2,
          5123  => 0.34,
          5124  => 0.48,
          5125  => 0.41,
        
          5141  => 0.4,
          5142  => 0.3,
          5143  => 0.5,
          5144  => 0.97,
          5145  => 0.6,
        
          5161  => 0.55,
          5162  => 0.41,
          5163  => 0.69,
          5164  => 0.97,
          5165  => 0.83,
        
        // Optional Internal > Prospector Limpet Controller
          5201  => 0.18,
          5202  => 0.14,
          5203  => 0.23,
          5204  => 0.32,
          5205  => 0.28,
        
          5221  => 0.27,
          5222  => 0.2,
          5223  => 0.34,
          5224  => 0.48,
          5225  => 0.41,
        
          5241  => 0.4,
          5242  => 0.3,
          5243  => 0.5,
          5244  => 0.97,
          5245  => 0.6,
        
          5261  => 0.55,
          5262  => 0.41,
          5263  => 0.69,
          5264  => 0.97,
          5265  => 0.83,
        
        // Optional Internal > Planetary Vehicle Hangar
          5411  => 0.25,
          5412  => 0.75,
        
          5431  => 0.4,
          5432  => 1.2,
        
          5451  => 0.6,
          5452  => 1.8,
        
        // Optional Internal > Fighter Hangar
          5541  => 0.25,
        
          5551  => 0.35,
        
          5561  => 0.35,
          
        // Optional Internal > Research Limpet Controller
          5701  => 0.4,
        
        // Cargo bay door (No category, not sellable, only for ship module list)
          9990  => 0.6,
          9991  => 0.6,
    ];
}