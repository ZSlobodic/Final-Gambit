<?php
    use App\Http\Controllers\spells_controller;

    $spells_json = fopen(getcwd() . '/imports/spells.json', 'r');

    $spells = json_decode(file_get_contents(getcwd() . '/imports/spells.json'));


    try {
        $importSpells = new spells_controller;
        $importSpells -> importSpells($spells);
        echo "Imported " . count($spells) . " spells.";
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

?>