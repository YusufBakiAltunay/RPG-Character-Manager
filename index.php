<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once 'vendor/autoload.php';


use Smarty\Smarty;
use Game\Character;
use Game\CharacterStats;
use Game\CharacterList;
use Game\Equipment;
use Game\Inventory;


session_start();


$characterList = $_SESSION['characterList'] ?? new CharacterList();


$smarty = new Smarty();
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');


$page = $_GET['page'] ?? 'home';



switch ($page) {

    case 'home':
        $smarty->display('home.tpl');
        break;

    case 'createCharacter':
        $smarty->display('createCharacterForm.tpl');
        break;

    case 'saveCharacter':

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $requiredFields = ['name', 'role', 'health', 'attack', 'defense', 'maxSlots'];
            $missingFields = [];

            foreach ($requiredFields as $field) {
                if (empty($_POST[$field])) {
                    $missingFields[] = ucfirst($field);
                }
            }

            if (!empty($missingFields)) {
                $error = "Please fill in the following fields: " . implode(', ', $missingFields) . ".";
                $smarty->assign('error', $error);
                $smarty->display('createCharacterForm.tpl');
                break;
            }

            $name = trim($_POST['name']);
            $role = trim($_POST['role']);
            $health = (int)$_POST['health'];
            $attack = (int)$_POST['attack'];
            $defense = (int)$_POST['defense'];
            $maxSlots = (int)$_POST['maxSlots'];

            $stats = new CharacterStats();
            $stats->setAllStats($health, $attack, $defense);

            $character = new Character($maxSlots);
            $character->setCharacter($name, $role);
            $character->setStats($stats);

            $characterList->addCharacter($character);

            $smarty->assign('showSuccessMessage', true);
            $smarty->assign('character', $character);

            $smarty->display('characterDetail.tpl');
            break;

        } else {
            $smarty->assign('error', "No form data received.");
            $smarty->display('createCharacterForm.tpl');
            break;
        }


    case 'characterList':
        $characters = $characterList->getCharacters();
        $smarty->assign('characters', $characters);
        $smarty->display('characterList.tpl');
        break;


    case 'viewCharacter':

        if (isset($_GET['name']) && !empty($_GET['name'])) {

            $name = $_GET['name'];
            $character = $characterList->getCharacter($name);

            if ($character instanceof Character) {
                $smarty->assign('character', $character);
                $smarty->display('characterDetail.tpl');
            } else {
                $smarty->assign('error', $character);
                $smarty->display('error.tpl');
            }

        } else {
            $smarty->assign('error', "No character name provided.");
            $smarty->display('error.tpl');
        }
        break;


    case 'deleteCharacter':

        if (isset($_GET['name']) && !empty($_GET['name'])) {

            $name = $_GET['name'];
            $character = $characterList->getCharacter($name);

            if ($character instanceof Character) {

                $characterList->removeCharacter($character);



                header('Location: index.php?page=characterList');
                exit;

            } else {
                $smarty->assign('error', $character);
                $smarty->display('error.tpl');
            }

        } else {
            $smarty->assign('error', "No character name provided.");
            $smarty->display('error.tpl');
        }

        break;
}



$_SESSION['characterList'] = $characterList;
