<?php

namespace JalQart\Controllers\Admin;
use JalQart\Models\IlesInfos;
use JalQart\Models\JalQart;

class AdminController {
    
    public function login($arrayMatch) {
        $this->show($arrayMatch['target']['method']);
    }
    public function dashboard($arrayMatch) {
        $arrayInfos = JalQart::findAll();
        
        $this->show($arrayMatch['target']['method'], $arrayInfos);
    }
    public function update($arrayMatch) {
        $arrayInfos = JalQart::findAll();
        
        $this->show($arrayMatch['target']['method'], $arrayInfos);
    }
    public function updateId($arrayMatch) {
        // Nécessaire pour lire le token CSRF
        session_start();

        global $router;
        $JalQartInfos = JalQart::findAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = trim($_POST['id'] ?? '');
            $titre = trim($_POST['titre'] ?? '');
            $sous_titre = trim($_POST['sous_titre'] ?? '');
            $description = trim($_POST['description'] ?? '');
            $csrf_token = $_POST['csrf_token'] ?? '';


            $errors = [];

            // Vérification du token CSRF
            if (
                empty($_SESSION['csrf_token']) ||
                empty($csrf_token) ||
                !hash_equals($_SESSION['csrf_token'], $csrf_token)
            ) {
                $errors[] = "Erreur de sécurité : requête invalide (CSRF).";
            }

            if (empty($id) || !ctype_digit($id) || (int)$id !== (int)$arrayMatch['params']['id']) {
                $errors[] = "L'id ne correspond pas";
            }
            // Si $name n'existe pas OU qu'il n'est pas une chaîne OU que la chaîne est < 3 caractères
            if (empty($titre) || strlen($titre) < 3 || strlen($titre) > 25) {
                $errors[] = 'Le titre doit contenir entre 3 et 25 caractères.';
            }

            if (empty($sous_titre) || strlen($sous_titre) < 5 || strlen($sous_titre) > 35) {
                $errors[] = 'Le sous-titre doit contenir entre 5 et 35 caractères.';
            }

            if (empty($description) || strlen($description) < 10 || strlen($description) > 125) {
                $errors[] = 'La description doit contenir entre 10 et 125 caractères.';
            }

            if (!$errors) {
                // On peut supprimer le token après usage (sécurité)
                unset($_SESSION['csrf_token']);

                $JalQartUpdate = new JalQart();
                // htmlspecialchars($titre, ENT_QUOTES, 'UTF-8') pour éviter des problèmes avec ' et ".
                $JalQartUpdate->id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
                $JalQartUpdate->titre = htmlspecialchars($titre, ENT_QUOTES, 'UTF-8');
                $JalQartUpdate->sous_titre = htmlspecialchars($sous_titre, ENT_QUOTES, 'UTF-8');
                $JalQartUpdate->description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
                $JalQartUpdate->update();
                header('Location: ' . $router->generate('dashboard'));
                exit;
            } else {
                $this->show($arrayMatch['target']['method'], ['JalQartInfos' => $JalQartInfos, 'errors' => $errors], $arrayMatch['params']['id']);
            }
        } else {
            $this->show($arrayMatch['target']['method'], ['JalQartInfos' => $JalQartInfos, 'errors' => []], $arrayMatch['params']['id']);
        }
    }

    public function add($arrayMatch) {
        // Nécessaire pour lire le token CSRF
        session_start();

        global $router;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titre = trim($_POST['titre'] ?? '');
            $sous_titre = trim($_POST['sous_titre'] ?? '');
            $description = trim($_POST['description'] ?? '');
            $csrf_token = $_POST['csrf_token'] ?? '';


            $errors = [];

            // Vérification du token CSRF
            if (
                empty($_SESSION['csrf_token']) ||
                empty($csrf_token) ||
                !hash_equals($_SESSION['csrf_token'], $csrf_token)
            ) {
                $errors[] = "Erreur de sécurité : requête invalide (CSRF).";
            }

            // Si $name n'existe pas OU qu'il n'est pas une chaîne OU que la chaîne est < 3 caractères
            if (empty($titre) || strlen($titre) < 3 || strlen($titre) > 25) {
                $errors[] = 'Le titre doit contenir entre 3 et 25 caractères.';
            }

            if (empty($sous_titre) || strlen($sous_titre) < 5 || strlen($sous_titre) > 35) {
                $errors[] = 'Le sous-titre doit contenir entre 5 et 35 caractères.';
            }

            if (empty($description) || strlen($description) < 10 || strlen($description) > 125) {
                $errors[] = 'La description doit contenir entre 10 et 125 caractères.';
            }

            if (!$errors) {
                // On peut supprimer le token après usage (sécurité)
                unset($_SESSION['csrf_token']);

                $JalQartAdd = new JalQart();
                // htmlspecialchars($titre, ENT_QUOTES, 'UTF-8') pour éviter des problèmes avec ' et ".
                $JalQartAdd->titre = htmlspecialchars($titre, ENT_QUOTES, 'UTF-8');
                $JalQartAdd->sous_titre = htmlspecialchars($sous_titre, ENT_QUOTES, 'UTF-8');
                $JalQartAdd->description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
                $JalQartAdd->insert();
                header('Location: ' . $router->generate('add'));
                exit;
            } else {
                $this->show($arrayMatch['target']['method'], $errors);
            }
        } else {
            $this->show($arrayMatch['target']['method']);
        }
    }
    
    public function delete($arrayMatch) {
        // Nécessaire pour lire le token CSRF
        session_start();
        
        global $router;
        $JalQartInfos = JalQart::findAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // On enlève csrf_token du tableau
            $postId = array_filter($_POST, function($key) {
                    return $key !== 'csrf_token';
            }, ARRAY_FILTER_USE_KEY);

            $errors = [];
            $Ids = [];

            // $id = trim($_POST['id'] ?? "");
            $csrf_token = $_POST['csrf_token'] ?? '';
            // Vérification du token CSRF
            if (
                empty($_SESSION['csrf_token']) ||
                empty($csrf_token) ||
                !hash_equals($_SESSION['csrf_token'], $csrf_token)
            ) {
                $errors[] = "Erreur de sécurité : requête invalide (CSRF).";
            }

            foreach($postId as $key => $id) {
                if (empty($id) || !ctype_digit($id)) {
                    $errors[] = "L'id $id est invalide.";
                } else {
                    $Ids[] = trim($id);
                }
            }

            if (!$errors && !empty($Ids)) {
                // On peut supprimer le token après usage (sécurité)
                unset($_SESSION['csrf_token']);

                $JalQartUpdate = new JalQart();

                foreach($Ids as $id) {
                    $JalQartUpdate->delete((int)$id);
                }

                header('Location: ' . $router->generate('dashboard'));
                exit;
            } else {
                $this->show($arrayMatch['target']['method'], ['JalQartInfos' => $JalQartInfos, 'errors' => $errors]);
            }
        } else {
            $this->show($arrayMatch['target']['method'], ['JalQartInfos' => $JalQartInfos, 'errors' => []]);
        }
    }

    private function show($page, $arrayInfos = [], $id = null) {
        global $router;
        $baseUri = $_SERVER['BASE_URI'];

        require_once __DIR__ . "/../../views/front/includes/header.php";
        require_once __DIR__ . "/../../views/admin/" . $page . ".php";
        require_once __DIR__ . "/../../views/front/includes/footer.php";
    }
}