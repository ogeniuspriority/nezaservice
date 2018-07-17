<?php
session_start();

if (empty($_SESSION['ogenius_nds_user_id_x2309999_990'])) {
    echo "Expired";
} else {
    echo "Active";
}
