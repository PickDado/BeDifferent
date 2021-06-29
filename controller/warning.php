<?php

if ($TimeNow != null) {
    if ($TimeNow > $StarTime && $TimeNow < $EndTime) {
        echo "ATTENZIONE E' PREVISTA LA RACCOLTA PER QUESTA FASCIA ORARIA";
    }

    if ($TimeNow < $StarTime) {
        echo "Oggi Devono ancora passare";
    }

    if ($TimeNow > $EndTime) {
        echo "Oggi sono già passati";
    }
} else echo "Oggi";
