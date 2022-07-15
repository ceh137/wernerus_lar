<?php

namespace App\Services;

class TrackNum
{
    public string $alp = '0123456789AEXKMHPCT';

    public function getTrackNum($id) {

        return $this->A00($id);
    }

    public function txs($t) {
        $b = substr($t,  0, 1);
        for ($q = 1; $q<strlen($t); $q++) {
            $a0 = substr($t, $q, 1);
            $a = strpos($this->alp, $a0);
            for ($w = 0; $w < strlen($b); $w++) {
                $i = strpos($this->alp, substr($b, $w, 1));
                if ($i > $a) {
                    break;
                }
            }
            $b = substr($b, 0, $w).$a0.substr($b, $w);
        }
        return $b;
    }

    public function spla($t) {
        $lt = strlen($t);
        for ($q = $lt - 2; $q > -1; $q-- ) {
           $a1 = strpos($this->alp, substr($t, $q, 1));
           for ($qq = $lt - 1; $qq > $q; $qq--) {
               $a20 = substr($t, $qq, 1);
               $a2 = strpos($this->alp, $a20);
               if ($a2 > $a1) {
                   return substr($t, 0, $q) . $a20 . $this->txs(substr($t, $q, $qq - $q) . substr($t, $qq+1));
               }
           }
        }
    }

    public function posc($x, $p) {
        $a = ceil(($x+1) ** (1/$p) ) - 1;
        $x0 = $x;
        $f2 =  $p;
        $p0 = $p;
        $ff = 1;
        $b = '';
        for ($i=$p-1; $i > 1; $i--) {
            $f2 = $f2*$i;
        }
        for ($q = $a; $q > 0;  $q--)  {
            $f0 = $f2;
            $f1 = 1;
            for ($qq = 0; $qq <= $p0; $qq++) {
                $x00 = $ff *  $q  ** ($p0 - $qq) * $f0 / $f1 / $f2;
                if ($x0 < $x00) {
                    break;
                }
                $x0 = $x0 - $x00;
                $f1 = $f1 * ($qq + 1);
                $f2 = $f2 / ($p0 - $qq);
            }
            $ff = $ff * $f0 / $f1 /  $f2;
            $b = str_repeat(substr( $this->alp , $q ,  1), $qq) . $b;
            $p0 = $p0 - $qq;
        }
        $b = str_repeat(substr($this->alp, 0, 1), $p - strlen($b)) . $b;
        for ($q = 0; $q< $x0; $q++) {
            $b = $this->spla($b);
        }

        return $b;

    }

    public function A00($x) {
        $c = $this->posc($x % 47045881, 6);
        $j = 0;
        for ($q = 0; $q < 6; $q++) {
            $c0 = strpos($this->alp, substr($c, $q, 1));
            $j = ($j +  ($q * 2 + 1) * $c0) % 19;
            if ($q == 0 ||  $q == 3) {
                $c = substr($c, 0, $q) . substr($this->alp, 18 - $c0, 1) . substr($c, $q+1);
            }
        }
        return substr($c, 0, 3) . '-' . substr($c, 3, 1) . substr($this->alp, $j, 1) . substr($c, 4);
    }

}
