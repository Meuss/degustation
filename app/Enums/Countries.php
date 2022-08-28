<?php

namespace App\Enums;

use ArchTech\Enums\Values;

enum Countries: string {
    use Values;
    case CH = "CH";
    case FR = "FR";
    case IT = "IT";
    case ES = "ES";
    case US = "US";
    case CN = "CN";
    case AR = "AR";
    case CL = "CL";
    case AU = "AU";
    case ZA = "ZA";
    case DE = "DE";
    case PT = "PT";
    case RO = "RO";
    case GR = "GR";
    case RU = "RU";
    case NZ = "NZ";
    case BR = "BR";
    case HU = "HU";
    case AT = "AT";
    case Other = "Other";
}