<?php

namespace App\Enums;

use ArchTech\Enums\Values;

enum Languages: string {
    use Values;
    case EN = "en";
    case FR = "fr";
    case DE = "de";
}