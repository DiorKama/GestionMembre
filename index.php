<?php
if(isset($_GET['ok'])){
    require_once 'menu.php';
switch ($_GET['ok']){
    case 'addm':
        require_once 'ajouterMembre.php';
        break;
        case 'addc':
            require_once 'ajouterCotisation.php';
            break;
            case 'listm':
            require_once 'connexionDb.php';
            require_once 'saisieMembre.php';
            $link = listeMembre();
            require_once 'listeMembre.php';
            break;
            case 'listc':
                require_once 'connexionDb.php';
                require_once 'saisieCotisation.php';
                $link = listeCotisation();
                require_once 'listeCotisation.php';
                break;
                case 'editc':
                require_once 'connexionDb.php';
                require_once 'saisieCotisation.php';
                $tab = getCotisationById($_GET['NumCotis']);
                $link = mysqli_fetch_row($tab);
                 require_once 'modifierCotisation.php';
                 break;
                 case 'recherche':
                    require_once 'saisieCotisation.php';
                    $liste=listeCotisation();
                    require_once 'rechercheCotisation.php';
                    break;
                    case 'detail':
                        require_once 'connexionDb.php';
                        require_once 'saisieCotisation.php';
                        $tab = getCotisationById($_GET['NumCotis']);
                        $link = mysqli_fetch_row($tab);
                         require_once 'detailCotisation.php';
                         break;
    default:
    break;
}
}
else{
    require_once 'menu.php';
}

?>