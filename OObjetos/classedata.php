<?php

class DataFormatada {
    public function formatar($dataAmerican)
    {
        $data = new DateTime($dataAmerican);

        return $data->format('d/m/Y');
    }
}
$dataF = new DataFormatada();
echo $dataF->formatar('2026-02-01') . "\n";