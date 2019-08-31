<?php

namespace App\Services\GetApiData;

class GetRickAndMortyApiData extends GetApiData{

    public function getCharacter(){
        return $this->getData('https://rickandmortyapi.com/api/', 'character');
    }
}