<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station\Outfitting;
use         EDSM\Alias;

class Price extends Alias
{
    static protected $defaultName       = null;
    static protected $representation    = 'Price';
    static protected $unit              = '%1$s cr';
    
    /**
     * List of price by outfitting
     */
    static protected $name  = [
        // Bulkhead > Adder
             1  => 0,
             2  => 35120,
             3  => 79030,
             4  => 186770,
             5  => 206960,
        
        // Bulkhead > Anaconda
            11  => 0,
            12  => 58787780,
            13  => 132272510,
            14  => 312604020,
            15  => 346407000,
        
        // Bulkhead > Asp Explorer
            21  => 0,
            22  => 2664460,
            23  => 5995040,
            24  => 14168270,
            25  => 15700340,
        
        // Bulkhead > Asp Scout
            31  => 0,
            32  => 1584460,
            33  => 3565040,
            34  => 8425380,
            35  => 9336440,
        
        // Bulkhead > Beluga Liner
            41  => 0,
            42  => 33813120,
            43  => 76079500,
            44  => 179801200,
            45  => 199243730,
        
        // Bulkhead > Cobra MkIII
            51  => 0,
            52  => 151890,
            53  => 341750,
            54  => 797410,
            55  => 895000,
        
        // Bulkhead > Cobra MkIV
            61  => 0,
            62  => 305890,
            63  => 688250,
            64  => 1605910,
            65  => 1802440,
        
        // Bulkhead > Diamondback Explorer
            71  => 0,
            72  => 800000,
            73  => 1800000,
            74  => 4200000,
            75  => 4714000,
        
        // Bulkhead > Diamondback Scout
            81  => 0,
            82  => 225700,
            83  => 507900,
            84  => 1185100,
            85  => 1330100,
        
        // Bulkhead > Dolphin
            91  => 0,
            92  => 534940,
            93  => 1203600,
            94  => 2808390,
            95  => 3152080,
        
        // Bulkhead > Eagle
           101  => 0,
           102  => 26880,
           103  => 90050,
           104  => 140090,
           105  => 150390,
        
        // Bulkhead > Federal Assault Ship
           111  => 0,
           112  => 7925680,
           113  => 17832780,
           114  => 42144810,
           115  => 46702080,
        
        // Bulkhead > Federal Corvette
           121  => 0,
           122  => 75187790,
           123  => 169172510,
           124  => 399811020,
           125  => 443044000,
        
        // Bulkhead > Federal Dropship
           131  => 0,
           132  => 5725680,
           133  => 12882780,
           134  => 30446310,
           135  => 33738580,
        
        // Bulkhead > Federal Gunship
           141  => 0,
           142  => 14325690,
           143  => 32232790,
           144  => 76176810,
           145  => 84414090,
        
        // Bulkhead > Fer-de-Lance
           151  => 0,
           152  => 20626820,
           153  => 46410340,
           154  => 109683090,
           155  => 121543510,
        
        // Bulkhead > Hauler
           161  => 0,
           162  => 42180,
           163  => 185050,
           164  => 270300,
           165  => 282420,
        
        // Bulkhead > Imperial Clipper
           171  => 0,
           172  => 8918340,
           173  => 20066270,
           174  => 47423290,
           175  => 52551340,
        
        // Bulkhead > Imperial Courrier
           181  => 0,
           182  => 1017200,
           183  => 2288600,
           184  => 5408800,
           185  => 5993700,
        
        // Bulkhead > Imperial Cutter
           191  => 0,
           192  => 83587790,
           193  => 188072510,
           194  => 444478020,
           195  => 492541000,
        
        // Bulkhead > Imperial Eagle
           201  => 0,
           202  => 66500,
           203  => 222760,
           204  => 346550,
           205  => 372040,
        
        // Bulkhead > Keelback
           211  => 0,
           212  => 1250460,
           213  => 2813540,
           214  => 6649330,
           215  => 7368340,
        
        // Bulkhead > Orca
           221  => 0,
           222  => 19415950,
           223  => 43685900,
           224  => 103244340,
           225  => 114408510,
        
        // Bulkhead > Python
           231  => 0,
           232  => 22791270,
           233  => 51280360,
           234  => 121192590,
           235  => 134297570,
        
        // Bulkhead > Sidewinder
           241  => 0,
           242  => 25600,
           243  => 80320,
           244  => 132060,
           245  => 139420,
        
        // Bulkhead > Type-6 Transporter
           251  => 0,
           252  => 418380,
           253  => 941350,
           254  => 2224730,
           255  => 2465290,
        
        // Bulkhead > Type-7 Transporter
           261  => 0,
           262  => 6988900,
           263  => 15725030,
           264  => 37163480,
           265  => 41182100,
        
        // Bulkhead > Type-9 Heavy
           271  => 0,
           272  => 30622340,
           273  => 68900260,
           274  => 162834280,
           275  => 180442120,
        
        // Bulkhead > Viper MkIII
           281  => 0,
           282  => 57170,
           283  => 128640,
           284  => 304010,
           285  => 336890,
        
        // Bulkhead > Viper MkIV
           291  => 0,
           292  => 175180,
           293  => 394140,
           294  => 931490,
           295  => 1033210,
        
        // Bulkhead > Vulture
           301  => 0,
           302  => 1970250,
           303  => 4433050,
           304  => 10476780,
           305  => 11609670,
        
        // Weapon Hardpoint > Beam Laser
          1001  => 37430,
          1002  => 299520,
          1003  => 1177600,
          1004  => 2396160,
          
          1005  => 74650,
          1006  => 500600,
          1007  => 2396160,
          1007  => 8746160,
          
          1009  => 500000,
          1010  => 2099900,
          1011  => 19399600,
        
        // Weapon Hardpoint > Pulse Laser
          1051  => 2200,
          1052  => 17600,
          1053  => 70400,
          1054  => 177600,
          
          1055  => 6600,
          1056  => 35400,
          1057  => 140600,
          1058  => 877600,
          
          1059  => 26000,
          1060  => 132800,
          1061  => 400400,
        
        // Weapon Hardpoint > Burst Laser
          1101  => 4400,
          1102  => 23000,
          1103  => 140400,
          1104  => 281600,
          
          1105  => 8600,
          1106  => 48500,
          1107  => 281600,
          1108  => 1245600,
          
          1109  => 52800,
          1110  => 162800,
          1111  => 800400,
        
        // Weapon Hardpoint > Cannon
          1151  => 21100,
          1152  => 168430,
          1153  => 675200,
          1154  => 2700800,
          
          1155  => 42200,
          1156  => 337600,
          1157  => 1350400,
          1158  => 5401600,
          
          1159  => 506400,
          1160  => 4051200,
          1161  => 16204800,
        
        // Weapon Hardpoint > Fragment Cannon
          1201  => 36000,
          1202  => 291840,
          1203  => 1167360,
          
          1205  => 54720,
          1206  => 437800,
          1207  => 1751040,
          
          1209  => 182400,
          1210  => 1459200,
          1211  => 5836800,
        
        // Weapon Hardpoint > Multi-Cannon
          1251  => 9500,
          1252  => 38000,
          1253  => 140400,
          1254  => 1177600,
          
          1255  => 14250,
          1256  => 57000,
          1257  => 578436,
          1258  => 6377600,
          
          1259  => 81600,
          1260  => 1292800,
        
        // Weapon Hardpoint > Plasma Accelerator
          1302  => 834200,
          1303  => 3051200,
          1304  => 13793600,
        
        // Weapon Hardpoint > Rail Gun
          1351  => 51600,
          1352  => 412800,
        
        // Weapon Hardpoint > Missile Rack
          1401  => 72600,
          1402  => 512400,
          
          1405  => 32180,
          1406  => 240400,
        
        // Weapon Hardpoint > Mine Launcher
          1451  => 24260,
          1452  => 294080,
        
        // Weapon Hardpoint > Mining Laser
          1501  => 6800,
          1502  => 22580,
          
          1509  => 9400,
          1510  => 32590,
        
        // Weapon Hardpoint > Torpedo Pylon
          1551  => 11200,
          1552  => 44800,
        
        // Weapon Hardpoint > Shock Mine Launcher
          1601  => 36400,
        
        // Weapon Hardpoint > AX Missile Rack
          1652  => 540900,
          1660  => 2022700,
          
        // Utility Mount > Shield Booster
          2001  => 10000,
          2002  => 23000,
          2003  => 53000,
          2004  => 122000,
          2005  => 281000,
          
        // Utility Mount > Chaff Launcher
          2050  => 8500,
          
        // Utility Mount > Electronic Countermeasure
          2100  => 12500,
          
        // Utility Mount > Heat Sink Launcher
          2150  => 3500,
          
        // Utility Mount > Point Defence
          2200  => 18550,
          
        // Utility Mount > Cargo Scanner
          2251  => 135400,
          2252  => 40630,
          2253  => 121900,
          2254  => 365700,
          2255  => 1097100,
          
        // Utility Mount > Frame Shift Wake Scanner
          2301  => 13540,
          2302  => 40630,
          2303  => 121900,
          2304  => 365700,
          2305  => 1097100,
          
        // Utility Mount > Kill Warrant Scanner
          2351  => 13540,
          2352  => 40630,
          2353  => 121900,
          2354  => 365700,
          2355  => 1097100,
          
        // Utility Mount > Xeno Scanner
          2401  => 365698,
          
        // Utility Mount > Shutdown Field Neutraliser
          2451  => null,
        
        // Core Internal > Fuel Tank
          3001  => 1000,
          3002  => 3750,
          3003  => 7060,
          3004  => 24730,
          3005  => 97750,
          3006  => 341580,
          3007  => 1780910,
          3008  => 5428400,
        
        // Core Internal > Power Plant
          3101  => 1980,
          3102  => 5930,
          3103  => 17800,
          3104  => 53410,
          3105  => 160220,
        
          3111  => 6270,
          3112  => 18810,
          3113  => 56440,
          3114  => 169300,
          3115  => 507910,
        
          3121  => 19880,
          3122  => 59630,
          3123  => 178900,
          3124  => 536690,
          3125  => 1610080,
        
          3131  => 63010,
          3132  => 189040,
          3133  => 567110,
          3134  => 1701320,
          3135  => 5103950,
        
          3141  => 199750,
          3142  => 599240,
          3143  => 1797730,
          3144  => 5393180,
          3145  => 16179530,
        
          3151  => 633200,
          3152  => 1899600,
          3153  => 5698790,
          3154  => 17096370,
          3155  => 51289110,
        
          3161  => 2007240,
          3162  => 6021720,
          3163  => 18065170,
          3164  => 54195500,
          3165  => 162586490,
        
        // Core Internal > Thrusters
          3201  => 1980,
          3202  => 5930,
          3203  => 17800,
          3204  => 53410,
          3205  => 160220,
          3206  => 1610080,
        
          3211  => 6270,
          3212  => 18810,
          3213  => 56440,
          3214  => 169300,
          3215  => 507910,
          3216  => 5103950,
        
          3221  => 19880,
          3222  => 59630,
          3223  => 178900,
          3224  => 536690,
          3225  => 1610080,
        
          3231  => 63010,
          3232  => 189040,
          3233  => 567110,
          3234  => 1701320,
          3235  => 5103950,
        
          3241  => 199750,
          3242  => 599240,
          3243  => 1797730,
          3244  => 5393180,
          3245  => 16179530,
        
          3251  => 633200,
          3252  => 1899600,
          3253  => 5698790,
          3254  => 17096370,
          3255  => 51289110,
        
          3261  => 2007240,
          3262  => 6021720,
          3263  => 18065170,
          3264  => 54195500,
          3265  => 162586490,
        
        // Core Internal > Frame Shift Drive
          3301  => 1980,
          3302  => 5930,
          3303  => 17800,
          3304  => 53410,
          3305  => 160220,
        
          3311  => 6270,
          3312  => 18810,
          3313  => 56440,
          3314  => 169300,
          3315  => 507910,
        
          3321  => 19880,
          3322  => 59630,
          3323  => 178900,
          3324  => 536690,
          3325  => 1610080,
        
          3331  => 63010,
          3332  => 189040,
          3333  => 567110,
          3334  => 1701320,
          3335  => 5103950,
        
          3341  => 199750,
          3342  => 599240,
          3343  => 1797730,
          3344  => 5393180,
          3345  => 16179530,
        
          3351  => 633200,
          3352  => 1899600,
          3353  => 5698790,
          3354  => 17096370,
          3355  => 51289110,
        
          3361  => null,
          3362  => null,
          3363  => null,
          3364  => null,
          3365  => null,
        
        // Core Internal > Life Support
          3401  => 520,
          3402  => 1290,
          3403  => 3230,
          3404  => 8080,
          3405  => 20200,
        
          3411  => 1450,
          3412  => 3620,
          3413  => 9050,
          3414  => 22620,
          3415  => 56550,
        
          3421  => 4050,
          3422  => 10130,
          3423  => 25330,
          3424  => 63330,
          3425  => 158330,
        
          3431  => 11350,
          3432  => 28370,
          3433  => 70930,
          3434  => 177330,
          3435  => 443330,
        
          3441  => 31780,
          3442  => 79440,
          3443  => 198610,
          3444  => 496530,
          3445  => 1241320,
        
          3451  => 88980,
          3452  => 222440,
          3453  => 556110,
          3454  => 1390280,
          3455  => 3475690,
        
          3461  => 249140,
          3462  => 622840,
          3463  => 1557110,
          3464  => 3892770,
          3465  => 9731930,
        
          3471  => 697590,
          3472  => 1743970,
          3473  => 4359900,
          3474  => 10899770,
          3475  => 27249400,
        
        // Core Internal > Power Distributor
          3501  => 520,
          3502  => 1290,
          3503  => 3230,
          3504  => 8080,
          3505  => 20200,
        
          3511  => 1450,
          3512  => 3620,
          3513  => 9050,
          3514  => 22620,
          3515  => 56550,
        
          3521  => 4050,
          3522  => 10130,
          3523  => 25330,
          3524  => 63330,
          3525  => 158330,
        
          3531  => 11350,
          3532  => 28370,
          3533  => 70930,
          3534  => 177330,
          3535  => 443330,
        
          3541  => 31780,
          3542  => 79440,
          3543  => 198610,
          3544  => 496530,
          3545  => 1241320,
        
          3551  => 88980,
          3552  => 222440,
          3553  => 556110,
          3554  => 1390280,
          3555  => 3475690,
        
          3561  => 249140,
          3562  => 622840,
          3563  => 1557110,
          3564  => 3892770,
          3565  => 9731930,
        
          3571  => 697580,
          3572  => 1743960,
          3573  => 4359900,
          3574  => 10899760,
          3575  => 27249390,
        
        // Core Internal > Sensors
          3601  => 520,
          3602  => 1290,
          3603  => 3230,
          3604  => 8080,
          3605  => 20200,
        
          3611  => 1450,
          3612  => 3620,
          3613  => 9050,
          3614  => 22620,
          3615  => 56550,
        
          3621  => 4050,
          3622  => 10130,
          3623  => 25330,
          3624  => 63330,
          3625  => 158330,
        
          3631  => 11350,
          3632  => 28370,
          3633  => 70930,
          3634  => 177330,
          3635  => 443330,
        
          3641  => 31780,
          3642  => 79440,
          3643  => 198610,
          3644  => 496530,
          3645  => 1241320,
        
          3651  => 88980,
          3652  => 222440,
          3653  => 556110,
          3654  => 1390280,
          3655  => 3475690,
        
          3661  => 249140,
          3662  => 622840,
          3663  => 1557110,
          3664  => 3892770,
          3665  => 9731930,
        
          3671  => 697580,
          3672  => 1743960,
          3673  => 4359900,
          3674  => 10899760,
          3675  => 27249390,
        
        // Core Internal > Planetary Approach Suite
          3701  => 500,
        
        // Core Internal > Guardian FSD Booster
          3801  => 394896,
        
          3811  => 790257,
        
          3821  => 1579920,
        
          3831  => 3163887,
        
          3841  => 6321023,
        
        // Optional Internal > Discovery Scanner
          4001  => 1000,
          4002  => 505000,
          4003  => 1545000,
        
        // Optional Internal > Detailed Surface Scanner
          4011  => 250000,
        
        // Optional Internal > Cargo Rack
          4021  => 1000,
          4022  => 3250,
          4023  => 10560,
          4024  => 34330,
          4025  => 111570,
          4026  => 362590,
          4027  => 1178420,
          4028  => 3829870,
          
          4031  => 12563,
          4032  => 6250,
        
        // Optional Internal > Standard Docking Computer
          4051  => 4500,
        
        // Optional Internal > Shield Generator
          4104  => 7710,
          4106  => 88075,
        
          4111  => 1980,
          4112  => 5930,
          4113  => 17800,
          4114  => 26710,
          4115  => 53410,
          4116  => 160220,
        
          4121  => 6270,
          4122  => 18810,
          4123  => 56440,
          4124  => 84650,
          4125  => 169300,
          4126  => 507910,
        
          4131  => 19880,
          4132  => 59630,
          4133  => 178900,
          4134  => 268350,
          4135  => 536690,
          4136  => 1610080,
        
          4141  => 63010,
          4142  => 189040,
          4143  => 567110,
          4144  => 850660,
          4145  => 1701320,
          4146  => 5103950,
        
          4151  => 199750,
          4152  => 599240,
          4153  => 1797730,
          4154  => 2696600,
          4155  => 5393180,
          4156  => 16179530,
        
          4161  => 633200,
          4162  => 1899600,
          4163  => 5698790,
          4164  => 8548200,
          4165  => 17096370,
          4166  => 51289110,
        
          4171  => 2007240,
          4172  => 6021720,
          4173  => 18065170,
          4174  => 27097750,
          4175  => 54195500,
          4176  => 162586490,
        
        // Optional Internal > Shield Cell Bank
          4201  => 517,
          4202  => 1293,
          4203  => 3231,
          4204  => 8078,
          4205  => 20195,
        
          4211  => 1448,
          4212  => 3619,
          4213  => 9048,
          4214  => 22619,
          4215  => 56547,
        
          4221  => 4053,
          4222  => 10133,
          4223  => 25333,
          4224  => 61909,
          4225  => 158331,
        
          4231  => 11349,
          4232  => 28373,
          4233  => 70932,
          4234  => 177331,
          4235  => 443328,
        
          4241  => 31778,
          4242  => 79444,
          4243  => 194143,
          4244  => 496527,
          4245  => 1210285,
        
          4251  => 88987,
          4252  => 222444,
          4253  => 556110,
          4254  => 1390275,
          4255  => 3475688,
        
          4261  => 249137,
          4262  => 622843,
          4263  => 1557108,
          4264  => 3892770,
          4265  => 9731925,
        
          4271  => 697584,
          4272  => 1743961,
          4273  => 4359903,
          4274  => 10899756,
          4275  => 27249391,
        
        // Optional Internal > Fuel Scoop
          4301  => 310,
          4302  => 1290,
          4303  => 5140,
          4304  => 20570,
          4305  => 82270,
        
          4311  => 1070,
          4312  => 4450,
          4313  => 17800,
          4314  => 71210,
          4315  => 284840,
        
          4321  => 3390,
          4322  => 14110,
          4323  => 56440,
          4324  => 225740,
          4325  => 902950,
        
          4331  => 10730,
          4332  => 44720,
          4333  => 178900,
          4334  => 715590,
          4335  => 2862360,
        
          4341  => 34030,
          4342  => 141780,
          4343  => 567110,
          4344  => 2268420,
          4345  => 9073690,
        
          4351  => 107860,
          4352  => 449430,
          4353  => 1797730,
          4354  => 7190900,
          4355  => 28763610,
        
          4361  => 341930,
          4362  => 1424700,
          4363  => 5698790,
          4364  => 22795160,
          4365  => 91180640,
        
          4371  => 1083910,
          4372  => 4516290,
          4373  => 18065160,
          4374  => 72260660,
          4375  => 289042540,
        
        // Optional Internal > Refinery
          4401  => 6000,
          4402  => 18000,
          4403  => 54000,
          4404  => 162000,
          4405  => 486000,
        
          4411  => 12600,
          4412  => 37800,
          4413  => 113400,
          4414  => 340200,
          4415  => 1020600,
        
          4421  => 26460,
          4422  => 79380,
          4423  => 238140,
          4424  => 714420,
          4425  => 2143260,
        
          4431  => 55570,
          4432  => 166700,
          4433  => 500090,
          4434  => 1500280,
          4435  => 4500850,
        
        // Optional Internal > Frame Shift Drive Interdictor
          4501  => 12000,
          4502  => 36000,
          4503  => 108000,
          4504  => 324000,
          4505  => 972000,
        
          4511  => 33600,
          4512  => 100800,
          4513  => 302400,
          4514  => 907200,
          4515  => 2721600,
        
          4521  => 94080,
          4522  => 282240,
          4523  => 846720,
          4524  => 2540160,
          4525  => 7620480,
        
          4531  => 263420,
          4532  => 790270,
          4533  => 2370820,
          4534  => 7112450,
          4535  => 21337340,
        
        // Optional Internal > Hatch Breaker Limpet Controller
          4601  => 600,
          4602  => 1200,
          4603  => 2400,
          4604  => 4800,
          4605  => 9600,
        
          4621  => 5400,
          4622  => 10800,
          4623  => 21600,
          4624  => 43200,
          4625  => 86400,
        
          4641  => 48600,
          4642  => 97200,
          4643  => 194400,
          4644  => 388800,
          4645  => 777600,
        
          4661  => 437400,
          4662  => 874800,
          4663  => 1749600,
          4664  => 3499200,
          4665  => 6998400,
        
        // Optional Internal > Auto Field-Maintenance Unit
          4701  => 10000,
          4702  => 30000,
          4703  => 90000,
          4704  => 270000,
          4705  => 810000,
        
          4711  => 18000,
          4712  => 54000,
          4713  => 162000,
          4714  => 486000,
          4715  => 1458000,
        
          4721  => 32400,
          4722  => 97200,
          4723  => 291600,
          4724  => 874800,
          4725  => 2624400,
        
          4731  => 58320,
          4732  => 174960,
          4733  => 524880,
          4734  => 1574640,
          4735  => 4723920,
        
          4741  => 104980,
          4742  => 314930,
          4743  => 944780,
          4744  => 2834350,
          4745  => 8503060,
        
          4751  => 188960,
          4752  => 566870,
          4753  => 1700610,
          4754  => 5101830,
          4755  => 15305500,
        
          4761  => 340120,
          4762  => 1020370,
          4763  => 3061100,
          4764  => 9183300,
          4765  => 27549900,
        
          4771  => 612220,
          4772  => 1836660,
          4773  => 5509980,
          4774  => 16529940,
          4775  => 49589820,
        
        // Optional Internal > Hull Reinforcement Package
          4801  => 5000,
          4802  => 15000,
        
          4811  => 12000,
          4812  => 36000,
        
          4821  => 28000,
          4822  => 84000,
        
          4831  => 65000,
          4832  => 195000,
        
          4841  => 150000,
          4842  => 450000,
        
        // Optional Internal > Module Reinforcement Package
          4901  => 5000,
          4902  => 15000,
        
          4911  => 12000,
          4912  => 36000,
        
          4921  => 28000,
          4922  => 84000,
        
          4931  => 65000,
          4932  => 195000,
        
          4941  => 150000,
          4942  => 450000,
        
        // Optional Internal > Collector Limpet Controller
          5001  => 600,
          5002  => 1200,
          5003  => 2400,
          5004  => 4800,
          5005  => 9600,
        
          5021  => 5400,
          5022  => 10800,
          5023  => 21600,
          5024  => 43200,
          5025  => 86400,
        
          5041  => 48600,
          5042  => 97200,
          5043  => 194400,
          5044  => 388800,
          5045  => 777600,
        
          5061  => 437400,
          5062  => 874800,
          5063  => 1749600,
          5064  => 3499200,
          5065  => 6998400,
        
        // Optional Internal > Fuel Transfer Limpet Controller
          5101  => 600,
          5102  => 1200,
          5103  => 2400,
          5104  => 4800,
          5105  => 9600,
        
          5121  => 5400,
          5122  => 10800,
          5123  => 21600,
          5124  => 43200,
          5125  => 86400,
        
          5141  => 48600,
          5142  => 97200,
          5143  => 194400,
          5144  => 388800,
          5145  => 777600,
        
          5161  => 437400,
          5162  => 874800,
          5163  => 1749600,
          5164  => 3499200,
          5165  => 6998400,
        
        // Optional Internal > Prospector Limpet Controller
          5201  => 600,
          5202  => 1200,
          5203  => 2400,
          5204  => 4800,
          5205  => 9600,
        
          5221  => 5400,
          5222  => 10800,
          5223  => 21600,
          5224  => 43200,
          5225  => 86400,
        
          5241  => 48600,
          5242  => 97200,
          5243  => 194400,
          5244  => 388800,
          5245  => 777600,
        
          5261  => 437400,
          5262  => 874800,
          5263  => 1749600,
          5264  => 3499200,
          5265  => 6998400,
        
        // Optional Internal > Passenger Cabin
          5311  => 4320,
        
          5321  => 8670,
          5322  => 26720,
        
          5331  => 18960,
          5332  => 56870,
          5333  => 170600,
        
          5341  => 34960,
          5342  => 92370,
          5343  => 340540,
          5344  => 1658100,
        
          5351  => 61420,
          5352  => 184240,
          5353  => 552700,
          5354  => 4974300,
        
        // Optional Internal > Planetary Vehicle Hangar
          5411  => 18000,
          5412  => 21600,
        
          5431  => 72000,
          5432  => 86400,
        
          5451  => 576000,
          5452  => 691200,
        
        // Optional Internal > Fighter Hangar
          5541  => 575660,
        
          5551  => 1869350,
        
          5561  => 2369330,
          
        // Optional Internal > Research Limpet Controller
          5701  => 1437374,
    ];
}