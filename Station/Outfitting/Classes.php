<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Classes extends Alias
{
    static protected $defaultName = 1;
    
    /**
     * List of class by outfitting
     */
    static protected $name  = [
        // Bulkhead > Adder
             1  => 1,
             2  => 1,
             3  => 1,
             4  => 1,
             5  => 1,
        
        // Bulkhead > Anaconda
            11  => 1,
            12  => 1,
            13  => 1,
            14  => 1,
            15  => 1,
        
        // Bulkhead > Asp Explorer
            21  => 1,
            22  => 1,
            23  => 1,
            24  => 1,
            25  => 1,
        
        // Bulkhead > Asp Scout
            31  => 1,
            32  => 1,
            33  => 1,
            34  => 1,
            35  => 1,
        
        // Bulkhead > Beluga Liner
            41  => 1,
            42  => 1,
            43  => 1,
            44  => 1,
            45  => 1,
        
        // Bulkhead > Cobra MkIII
            51  => 1,
            52  => 1,
            53  => 1,
            54  => 1,
            55  => 1,
        
        // Bulkhead > Cobra MkIV
            61  => 1,
            62  => 1,
            63  => 1,
            64  => 1,
            65  => 1,
        
        // Bulkhead > Diamondback Explorer
            71  => 1,
            72  => 1,
            73  => 1,
            74  => 1,
            75  => 1,
        
        // Bulkhead > Diamondback Scout
            81  => 1,
            82  => 1,
            83  => 1,
            84  => 1,
            85  => 1,
        
        // Bulkhead > Dolphin
            91  => 1,
            92  => 1,
            93  => 1,
            94  => 1,
            95  => 1,
        
        // Bulkhead > Eagle
           101  => 1,
           102  => 1,
           103  => 1,
           104  => 1,
           105  => 1,
        
        // Bulkhead > Federal Assault Ship
           111  => 1,
           112  => 1,
           113  => 1,
           114  => 1,
           115  => 1,
        
        // Bulkhead > Federal Corvette
           121  => 1,
           122  => 1,
           123  => 1,
           124  => 1,
           125  => 1,
        
        // Bulkhead > Federal Dropship
           131  => 1,
           132  => 1,
           133  => 1,
           134  => 1,
           135  => 1,
        
        // Bulkhead > Federal Gunship
           141  => 1,
           142  => 1,
           143  => 1,
           144  => 1,
           145  => 1,
        
        // Bulkhead > Fer-de-Lance
           151  => 1,
           152  => 1,
           153  => 1,
           154  => 1,
           155  => 1,
        
        // Bulkhead > Hauler
           161  => 1,
           162  => 1,
           163  => 1,
           164  => 1,
           165  => 1,
        
        // Bulkhead > Imperial Clipper
           171  => 1,
           172  => 1,
           173  => 1,
           174  => 1,
           175  => 1,
        
        // Bulkhead > Imperial Courrier
           181  => 1,
           182  => 1,
           183  => 1,
           184  => 1,
           185  => 1,
        
        // Bulkhead > Imperial Cutter
           191  => 1,
           192  => 1,
           193  => 1,
           194  => 1,
           195  => 1,
        
        // Bulkhead > Imperial Eagle
           201  => 1,
           202  => 1,
           203  => 1,
           204  => 1,
           205  => 1,
        
        // Bulkhead > Keelback
           211  => 1,
           212  => 1,
           213  => 1,
           214  => 1,
           215  => 1,
        
        // Bulkhead > Orca
           221  => 1,
           222  => 1,
           223  => 1,
           224  => 1,
           225  => 1,
        
        // Bulkhead > Python
           231  => 1,
           232  => 1,
           233  => 1,
           234  => 1,
           235  => 1,
        
        // Bulkhead > Sidewinder
           241  => 1,
           242  => 1,
           243  => 1,
           244  => 1,
           245  => 1,
        
        // Bulkhead > Type-6 Transporter
           251  => 1,
           252  => 1,
           253  => 1,
           254  => 1,
           255  => 1,
        
        // Bulkhead > Type-7 Transporter
           261  => 1,
           262  => 1,
           263  => 1,
           264  => 1,
           265  => 1,
        
        // Bulkhead > Type-9 Heavy
           271  => 1,
           272  => 1,
           273  => 1,
           274  => 1,
           275  => 1,
        
        // Bulkhead > Viper MkIII
           281  => 1,
           282  => 1,
           283  => 1,
           284  => 1,
           285  => 1,
        
        // Bulkhead > Viper MkIV
           291  => 1,
           292  => 1,
           293  => 1,
           294  => 1,
           295  => 1,
        
        // Bulkhead > Vulture
           301  => 1,
           302  => 1,
           303  => 1,
           304  => 1,
           305  => 1,
        
        // Bulkhead > Type-10 Defender
           311  => 1,
           312  => 1,
           313  => 1,
           314  => 1,
           315  => 1,
        
        // Weapon Hardpoint > Beam Laser
          1001  => 1,
          1002  => 2,
          1003  => 3,
          1004  => 4,
          
          1005  => 1,
          1006  => 2,
          1007  => 3,
          1008  => 4,
          
          1009  => 1,
          1010  => 2,
          1011  => 3,
          
          1021  => 1,
        
        // Weapon Hardpoint > Pulse Laser
          1051  => 1,
          1052  => 2,
          1053  => 3,
          1054  => 4,
          
          1055  => 1,
          1056  => 2,
          1057  => 3,
          1058  => 4,
          
          1059  => 1,
          1060  => 2,
          1061  => 3,
        
        // Weapon Hardpoint > Burst Laser
          1101  => 1,
          1102  => 2,
          1103  => 3,
          1104  => 4,
          
          1105  => 1,
          1106  => 2,
          1107  => 3,
          1108  => 4,
          
          1109  => 1,
          1110  => 2,
          1111  => 3,
        
        // Weapon Hardpoint > Cannon
          1151  => 1,
          1152  => 2,
          1153  => 3,
          1154  => 4,
          
          1155  => 1,
          1156  => 2,
          1157  => 3,
          1158  => 4,
          
          1159  => 1,
          1160  => 2,
          1161  => 3,
        
        // Weapon Hardpoint > Fragment Cannon
          1201  => 1,
          1202  => 2,
          1203  => 3,
          
          1205  => 1,
          1206  => 2,
          1207  => 3,
          
          1209  => 1,
          1210  => 2,
          1211  => 3,
          
          1215  => 3,
        
        // Weapon Hardpoint > Multi-Cannon
          1251  => 1,
          1252  => 2,
          1253  => 3,
          1254  => 4,
          
          1255  => 1,
          1256  => 2,
          1257  => 3,
          1258  => 4,
          
          1259  => 1,
          1260  => 2,
          
          1271  => 1,
        
        // Weapon Hardpoint > Plasma Accelerator
          1302  => 2,
          1303  => 3,
          1304  => 4,
          
          1313  => 3,
        
        // Weapon Hardpoint > Rail Gun
          1351  => 1,
          1352  => 2,
          
          1362  => 2,
        
        // Weapon Hardpoint > Missile Rack
          1401  => 1,
          1402  => 2,
          1405  => 1,
          1406  => 2,
          
          1411  => 2,
        
        // Weapon Hardpoint > Mine Launcher
          1451  => 1,
          1452  => 2,
        
        // Weapon Hardpoint > Mining Laser
          1501  => 1,
          1502  => 2,
          
          1509  => 1,
          1510  => 2,
        
        // Weapon Hardpoint > Torpedo Pylon
          1551  => 1,
          1552  => 2,
        
        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 1,
        
        // Weapon Hardpoint > AX Missile Rack
          1652  => 2,
          1653  => 3,
          1660  => 2,
          1661  => 3,
        
        // Weapon Hardpoint > AX Multi-Cannon
          1702  => 2,
          1703  => 3,
          1710  => 2,
          1711  => 3,
        
        // Weapon Hardpoint > Remote Release Flak Launcher
          1752  => 2,
          1760  => 2,
        
        // Weapon Hardpoint > Pack-Hound Missile Rack
          1802  => 2,
          
        // Utility Mount > Shield Booster
          2001  => 0,
          2002  => 0,
          2003  => 0,
          2004  => 0,
          2005  => 0,
          
        // Utility Mount > Chaff Launcher
          2050  => 0,
          
        // Utility Mount > Electronic Countermeasure
          2100  => 0,
          
        // Utility Mount > Heat Sink Launcher
          2150  => 0,
          
        // Utility Mount > Point Defence
          2200  => 0,
          
        // Utility Mount > Cargo Scanner
          2251  => 0,
          2252  => 0,
          2253  => 0,
          2254  => 0,
          2255  => 0,
          
        // Utility Mount > Frame Shift Wake Scanner
          2301  => 0,
          2302  => 0,
          2303  => 0,
          2304  => 0,
          2305  => 0,
          
        // Utility Mount > Kill Warrant Scanner
          2351  => 0,
          2352  => 0,
          2353  => 0,
          2354  => 0,
          2355  => 0,
          
        // Utility Mount > Xeno Scanner
          2401  => 0,
          
        // Utility Mount > Shutdown Field Neutraliser
          2451  => 0,
        
        // Core Internal > Fuel Tank
          3001  => 1,
          3002  => 2,
          3003  => 3,
          3004  => 4,
          3005  => 5,
          3006  => 6,
          3007  => 7,
          3008  => 8,
        
        // Core Internal > Power Plant
          3101  => 2,
          3102  => 2,
          3103  => 2,
          3104  => 2,
          3105  => 2,
        
          3111  => 3,
          3112  => 3,
          3113  => 3,
          3114  => 3,
          3115  => 3,
        
          3121  => 4,
          3122  => 4,
          3123  => 4,
          3124  => 4,
          3125  => 4,
        
          3131  => 5,
          3132  => 5,
          3133  => 5,
          3134  => 5,
          3135  => 5,
        
          3141  => 6,
          3142  => 6,
          3143  => 6,
          3144  => 6,
          3145  => 6,
        
          3151  => 7,
          3152  => 7,
          3153  => 7,
          3154  => 7,
          3155  => 7,
        
          3161  => 8,
          3162  => 8,
          3163  => 8,
          3164  => 8,
          3165  => 8,
        
        // Core Internal > Thrusters
          3201  => 2,
          3202  => 2,
          3203  => 2,
          3204  => 2,
          3205  => 2,
          3206  => 2,
        
          3211  => 3,
          3212  => 3,
          3213  => 3,
          3214  => 3,
          3215  => 3,
          3216  => 3,
        
          3221  => 4,
          3222  => 4,
          3223  => 4,
          3224  => 4,
          3225  => 4,
        
          3231  => 5,
          3232  => 5,
          3233  => 5,
          3234  => 5,
          3235  => 5,
        
          3241  => 6,
          3242  => 6,
          3243  => 6,
          3244  => 6,
          3245  => 6,
        
          3251  => 7,
          3252  => 7,
          3253  => 7,
          3254  => 7,
          3255  => 7,
        
          3261  => 8,
          3262  => 8,
          3263  => 8,
          3264  => 8,
          3265  => 8,
        
        // Core Internal > Frame Shift Drive
          3301  => 2,
          3302  => 2,
          3303  => 2,
          3304  => 2,
          3305  => 2,
        
          3311  => 3,
          3312  => 3,
          3313  => 3,
          3314  => 3,
          3315  => 3,
        
          3321  => 4,
          3322  => 4,
          3323  => 4,
          3324  => 4,
          3325  => 4,
        
          3331  => 5,
          3332  => 5,
          3333  => 5,
          3334  => 5,
          3335  => 5,
        
          3341  => 6,
          3342  => 6,
          3343  => 6,
          3344  => 6,
          3345  => 6,
        
          3351  => 7,
          3352  => 7,
          3353  => 7,
          3354  => 7,
          3355  => 7,
        
          3361  => 8,
          3362  => 8,
          3363  => 8,
          3364  => 8,
          3365  => 8,
        
        // Core Internal > Life Support
          3401  => 1,
          3402  => 1,
          3403  => 1,
          3404  => 1,
          3405  => 1,
        
          3411  => 2,
          3412  => 2,
          3413  => 2,
          3414  => 2,
          3415  => 2,
        
          3421  => 3,
          3422  => 3,
          3423  => 3,
          3424  => 3,
          3425  => 3,
        
          3431  => 4,
          3432  => 4,
          3433  => 4,
          3434  => 4,
          3435  => 4,
        
          3441  => 5,
          3442  => 5,
          3443  => 5,
          3444  => 5,
          3445  => 5,
        
          3451  => 6,
          3452  => 6,
          3453  => 6,
          3454  => 6,
          3455  => 6,
        
          3461  => 7,
          3462  => 7,
          3463  => 7,
          3464  => 7,
          3465  => 7,
        
          3471  => 8,
          3472  => 8,
          3473  => 8,
          3474  => 8,
          3475  => 8,
        
        // Core Internal > Power Distributor
          3501  => 1,
          3502  => 1,
          3503  => 1,
          3504  => 1,
          3505  => 1,
        
          3511  => 2,
          3512  => 2,
          3513  => 2,
          3514  => 2,
          3515  => 2,
        
          3521  => 3,
          3522  => 3,
          3523  => 3,
          3524  => 3,
          3525  => 3,
        
          3531  => 4,
          3532  => 4,
          3533  => 4,
          3534  => 4,
          3535  => 4,
        
          3541  => 5,
          3542  => 5,
          3543  => 5,
          3544  => 5,
          3545  => 5,
        
          3551  => 6,
          3552  => 6,
          3553  => 6,
          3554  => 6,
          3555  => 6,
        
          3561  => 7,
          3562  => 7,
          3563  => 7,
          3564  => 7,
          3565  => 7,
        
          3571  => 8,
          3572  => 8,
          3573  => 8,
          3574  => 8,
          3575  => 8,
        
        // Core Internal > Sensors
          3601  => 1,
          3602  => 1,
          3603  => 1,
          3604  => 1,
          3605  => 1,
        
          3611  => 2,
          3612  => 2,
          3613  => 2,
          3614  => 2,
          3615  => 2,
        
          3621  => 3,
          3622  => 3,
          3623  => 3,
          3624  => 3,
          3625  => 3,
        
          3631  => 4,
          3632  => 4,
          3633  => 4,
          3634  => 4,
          3635  => 4,
        
          3641  => 5,
          3642  => 5,
          3643  => 5,
          3644  => 5,
          3645  => 5,
        
          3651  => 6,
          3652  => 6,
          3653  => 6,
          3654  => 6,
          3655  => 6,
        
          3661  => 7,
          3662  => 7,
          3663  => 7,
          3664  => 7,
          3665  => 7,
        
          3671  => 8,
          3672  => 8,
          3673  => 8,
          3674  => 8,
          3675  => 8,
        
        // Core Internal > Planetary Approach Suite
          3701  => 1,
        
        // Optional Internal > Discovery Scanner
          4001  => 1,
          4002  => 1,
          4003  => 1,
        
        // Optional Internal > Detailed Surface Scanner
          4011  => 1,
        
        // Optional Internal > Cargo Rack
          4021  => 1,
          4022  => 2,
          4023  => 3,
          4024  => 4,
          4025  => 5,
          4026  => 6,
          4027  => 7,
          4028  => 8,
          
          4031  => 1,
          4032  => 1,
        
        // Optional Internal > Standard Docking Computer
          4051  => 1,
        
        // Optional Internal > Shield Generator
          4104  => 1,
          4106  => 1,
          4107  => 1,
        
          4111  => 2,
          4112  => 2,
          4113  => 2,
          4114  => 2,
          4115  => 2,
          4116  => 2,
          4117  => 2,
        
          4121  => 3,
          4122  => 3,
          4123  => 3,
          4124  => 3,
          4125  => 3,
          4126  => 3,
          4127  => 3,
        
          4131  => 4,
          4132  => 4,
          4133  => 4,
          4134  => 4,
          4135  => 4,
          4136  => 4,
          4137  => 4,
        
          4141  => 5,
          4142  => 5,
          4143  => 5,
          4144  => 5,
          4145  => 5,
          4146  => 5,
          4147  => 5,
        
          4151  => 6,
          4152  => 6,
          4153  => 6,
          4154  => 6,
          4155  => 6,
          4156  => 6,
          4157  => 6,
        
          4161  => 7,
          4162  => 7,
          4163  => 7,
          4164  => 7,
          4165  => 7,
          4166  => 7,
          4167  => 7,
        
          4171  => 8,
          4172  => 8,
          4173  => 8,
          4174  => 8,
          4175  => 8,
          4176  => 8,
          4177  => 8,
        
        // Optional Internal > Shield Cell Bank
          4201  => 1,
          4202  => 1,
          4203  => 1,
          4204  => 1,
          4205  => 1,
        
          4211  => 2,
          4212  => 2,
          4213  => 2,
          4214  => 2,
          4215  => 2,
        
          4221  => 3,
          4222  => 3,
          4223  => 3,
          4224  => 3,
          4225  => 3,
        
          4231  => 4,
          4232  => 4,
          4233  => 4,
          4234  => 4,
          4235  => 4,
        
          4241  => 5,
          4242  => 5,
          4243  => 5,
          4244  => 5,
          4245  => 5,
        
          4251  => 6,
          4252  => 6,
          4253  => 6,
          4254  => 6,
          4255  => 6,
        
          4261  => 7,
          4262  => 7,
          4263  => 7,
          4264  => 7,
          4265  => 7,
        
          4271  => 8,
          4272  => 8,
          4273  => 8,
          4274  => 8,
          4275  => 8,
        
        // Optional Internal > Fuel Scoop
          4301  => 1,
          4302  => 1,
          4303  => 1,
          4304  => 1,
          4305  => 1,
        
          4311  => 2,
          4312  => 2,
          4313  => 2,
          4314  => 2,
          4315  => 2,
        
          4321  => 3,
          4322  => 3,
          4323  => 3,
          4324  => 3,
          4325  => 3,
        
          4331  => 4,
          4332  => 4,
          4333  => 4,
          4334  => 4,
          4335  => 4,
        
          4341  => 5,
          4342  => 5,
          4343  => 5,
          4344  => 5,
          4345  => 5,
        
          4351  => 6,
          4352  => 6,
          4353  => 6,
          4354  => 6,
          4355  => 6,
        
          4361  => 7,
          4362  => 7,
          4363  => 7,
          4364  => 7,
          4365  => 7,
        
          4371  => 8,
          4372  => 8,
          4373  => 8,
          4374  => 8,
          4375  => 8,
        
        // Optional Internal > Refinery
          4401  => 1,
          4402  => 1,
          4403  => 1,
          4404  => 1,
          4405  => 1,
        
          4411  => 2,
          4412  => 2,
          4413  => 2,
          4414  => 2,
          4415  => 2,
        
          4421  => 3,
          4422  => 3,
          4423  => 3,
          4424  => 3,
          4425  => 3,
        
          4431  => 4,
          4432  => 4,
          4433  => 4,
          4434  => 4,
          4435  => 4,
        
        // Optional Internal > Frame Shift Drive Interdictor
          4501  => 1,
          4502  => 1,
          4503  => 1,
          4504  => 1,
          4505  => 1,
        
          4511  => 2,
          4512  => 2,
          4513  => 2,
          4514  => 2,
          4515  => 2,
        
          4521  => 3,
          4522  => 3,
          4523  => 3,
          4524  => 3,
          4525  => 3,
        
          4531  => 4,
          4532  => 4,
          4533  => 4,
          4534  => 4,
          4535  => 4,
        
        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 1,
          4602  => 1,
          4603  => 1,
          4604  => 1,
          4605  => 1,
        
          4621  => 3,
          4622  => 3,
          4623  => 3,
          4624  => 3,
          4625  => 3,
        
          4641  => 5,
          4642  => 5,
          4643  => 5,
          4644  => 5,
          4645  => 5,
        
          4661  => 7,
          4662  => 7,
          4663  => 7,
          4664  => 7,
          4665  => 7,
        
        // Optional Internal > Auto Field-Maintenance Unit
          4701  => 1,
          4702  => 1,
          4703  => 1,
          4704  => 1,
          4705  => 1,
        
          4711  => 2,
          4712  => 2,
          4713  => 2,
          4714  => 2,
          4715  => 2,
        
          4721  => 3,
          4722  => 3,
          4723  => 3,
          4724  => 3,
          4725  => 3,
        
          4731  => 4,
          4732  => 4,
          4733  => 4,
          4734  => 4,
          4735  => 4,
        
          4741  => 5,
          4742  => 5,
          4743  => 5,
          4744  => 5,
          4745  => 5,
        
          4751  => 6,
          4752  => 6,
          4753  => 6,
          4754  => 6,
          4755  => 6,
        
          4761  => 7,
          4762  => 7,
          4763  => 7,
          4764  => 7,
          4765  => 7,
        
          4771  => 8,
          4772  => 8,
          4773  => 8,
          4774  => 8,
          4775  => 8,
        
        // Optional Internal > Hull Reinforcement Package
          4801  => 1,
          4802  => 1,
        
          4811  => 2,
          4812  => 2,
        
          4821  => 3,
          4822  => 3,
        
          4831  => 4,
          4832  => 4,
        
          4841  => 5,
          4842  => 5,
        
        // Optional Internal > Module Reinforcement Package
          4901  => 1,
          4902  => 1,
        
          4911  => 2,
          4912  => 2,
        
          4921  => 3,
          4922  => 3,
        
          4931  => 4,
          4932  => 4,
        
          4941  => 5,
          4942  => 5,
        
        // Optional Internal > Collector Limpet Controller
          5001  => 1,
          5002  => 1,
          5003  => 1,
          5004  => 1,
          5005  => 1,
        
          5021  => 3,
          5022  => 3,
          5023  => 3,
          5024  => 3,
          5025  => 3,
        
          5041  => 5,
          5042  => 5,
          5043  => 5,
          5044  => 5,
          5045  => 5,
        
          5061  => 7,
          5062  => 7,
          5063  => 7,
          5064  => 7,
          5065  => 7,
        
        // Optional Internal > Fuel Transfer Limpet Controller
          5101  => 1,
          5102  => 1,
          5103  => 1,
          5104  => 1,
          5105  => 1,
        
          5121  => 3,
          5122  => 3,
          5123  => 3,
          5124  => 3,
          5125  => 3,
        
          5141  => 5,
          5142  => 5,
          5143  => 5,
          5144  => 5,
          5145  => 5,
        
          5161  => 7,
          5162  => 7,
          5163  => 7,
          5164  => 7,
          5165  => 7,
        
        // Optional Internal > Prospector Limpet Controller
          5201  => 1,
          5202  => 1,
          5203  => 1,
          5204  => 1,
          5205  => 1,
        
          5221  => 3,
          5222  => 3,
          5223  => 3,
          5224  => 3,
          5225  => 3,
        
          5241  => 5,
          5242  => 5,
          5243  => 5,
          5244  => 5,
          5245  => 5,
        
          5261  => 7,
          5262  => 7,
          5263  => 7,
          5264  => 7,
          5265  => 7,
        
        // Optional Internal > Passenger Cabin
          5311  => 2,
        
          5321  => 3,
          5322  => 3,
        
          5331  => 4,
          5332  => 4,
          5333  => 4,
        
          5341  => 5,
          5342  => 5,
          5343  => 5,
          5344  => 5,
        
          5351  => 6,
          5352  => 6,
          5353  => 6,
          5354  => 6,
        
        // Optional Internal > Planetary Vehicle Hangar
          5411  => 2,
          5412  => 2,
        
          5431  => 4,
          5432  => 4,
        
          5451  => 6,
          5452  => 6,
        
        // Optional Internal > Fighter Hangar
          5541  => 5,
        
          5551  => 6,
        
          5561  => 7,
        
        // Optional Internal > Repair Limpet Controller
          5601  => 1,
          5602  => 1,
          5603  => 1,
          5604  => 1,
          5605  => 1,
        
          5621  => 3,
          5622  => 3,
          5623  => 3,
          5624  => 3,
          5625  => 3,
        
          5641  => 5,
          5642  => 5,
          5643  => 5,
          5644  => 5,
          5645  => 5,
        
          5661  => 7,
          5662  => 7,
          5663  => 7,
          5664  => 7,
          5665  => 7,
          
        // Optional Internal > Research Limpet Controller
          5701  => 1,
    ];
}