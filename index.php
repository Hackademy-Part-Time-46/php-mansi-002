<?php
//$array_semplice = [1, 2, 3, 4, 5]; 
// var_dump($array_semplice[4]); 
// $array_associativo = [
//     'quattro' => 4,
//     'cinque' => 5,
//     'sei' => 6,
//     89 => [1, 2, 3, 4, 5],
//     8 => 'ciao',
//     'sette' => 7,
//     'ciao',
// ]; 
// //echo $array_associativo['sei'];
// var_dump($array_associativo);


//FINE RECAP

//Selezione, Iterazione e sequenza

//Sequenza


// $variabile = 'ciao';


//Selezione

// if condition
// $keyword = 'francesco';
// if ($condizione) {
//     $variabile = 'ciao';
// }
// echo $variabile;


// if else condition
// if (8 > 8) {
//     echo 'Numero maggiore di 8';
// } else {
//     echo 'Numero minore di 8';
// }

// if else if else condition
// if (8 > 8) {
//     echo 'Numero maggiore di 8';
// } elseif (8 == 8) {
//     echo 'Numero uguale a  8';
// } else {
//     echo 'Numero minore di 8';
// }

//Switch
//$role = readline('Inserisci il tuo ruolo: ');
// switch ($role) {
//     case 'admin':
//         echo 'sono un admin';
//         break;
//     case 'moderatore':
//         echo 'sono un moderatore';
//         break;
//     default:
//         echo 'sono un utente semplice';
//         break;
// }


// $role = readline('Inserisci il tuo ruolo: ');

// $output = match ($role) {
//     'admin' => 'sono un admin',
//     'moderatore' => 'sono un moderatore',
//     default => 'sono un utente semplice'
// };

// var_dump($output);
//switch == uguaglianza semplice
//match === uguaglianaz stretta

//Iterazione 

//ciclo for

// $max = 100;
// for ($i = 1; $i <= $max; $i++) {
//     if ($i <> 20) {
//         echo "$i \n";
//     }
// }

// $array = ['antonio', 'francesco', 'manuel'];

// for ($i = 0; $i <= (count($array) - 1); $i++) {
//     echo 'Ciao mi chiamo ' . $array[$i] . "\n";
// }

// $countries = [
//     ['name' => 'Italia', 'continent' => 'EU'],
//     ['name' => 'Spain', 'continent' => 'EU'],
//     ['name' => 'Japan', 'continent' => 'AS'],
// ];


// foreach ($countries as $key => $country) {
//     //echo 'Ciao mi chiamo ' . $element . "\n";
//     // if ($key <> 1) {
//     echo 'La nazione: ' . $country['name'] . ' si trova in: ' . $country['continent'] . "\n";
//     echo 'la chiave di questo elemento è ' . $key . "\n";
//     echo '--------' . "\n";
//     // }
// }


// Controllare se l'utente è maggiorenne.
// Se l'utente e maggiorenne stampa un messaggio di successo
// se l'utente non è maggiorenne stampa un messaggio con nome ed età

// $students = [
//     [
//         'name' => 'Marco',
//         'age' => 15,
//     ],
//     [
//         'name' => 'Maria',
//         'age' => 56,
//     ],
//     [
//         'name' => 'Jack',
//         'age' => 24,
//     ],
// ];

// $max = readline('Inserisci maggiore eta del tuo paese: ');

// foreach ($students as $student) {
//     if ($student['age'] >= $max) {
//         echo "Studente OK\n";
//         // condizione vera
//     } else {
//         $diff = $max - $student['age'];
//         echo  "Lo studente con nome " . $student['name'] . " ha " . $student['age'] . " anni. Ritorna tra " . $diff . " anni.\n";
//     }
// }

// Ciclo Pre Condizionale
$i = 1;
echo "Ciclo Pre\n";
while ($i <= 10) {
    echo $i . "\n";
    $i++;
}

echo "-----\n";
//Ciclo Post condizionale

$i = 1;
echo "Ciclo Post\n";
do {
    echo $i . "\n";
    $i++;
} while ($i <= 10);
