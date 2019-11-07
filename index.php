<?php
function CariKarakterDuplikat($string)
{
    if (!empty($string)) {
        $max = 0; //Digunakan untuk melakukan komparasi dengan jumlah karakter yang duplikat
        foreach (count_chars($string, 1) as $key => $val){ //menghitung frekuensi karakter duplikat yang ada pada $string dengan mode 1
            if ($max < $val) { 
                $max = $val;
                $i = 0;
                unset($letter);
                $letter[$i++] = chr($key); 
            } else if ($max == $val) {
                $letter[$i++] = chr($key);
            }
        }
        
        if (count($letter) >= 1){ 
            echo 'Karakter yang memiliki duplikat adalah:"' . $letter[0] . '"'; 
        }
    } else {
        echo 'String tidak boleh kosong';
    }
}

$string  = 'ACCBBA';
CariKarakterDuplikat($string);