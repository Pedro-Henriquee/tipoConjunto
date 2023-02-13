<?php

class Conjunto {

    private $aElementos = [];

    public function getAElementos() {
        return $this->aElementos;
    }

    public function setAElementos($aElementos): void {
        $this->aElementos = $aElementos;
    }

    public function adicionarElemento($sElemento) {
        $bVerifica = false;
        foreach ($this->aElementos as $key => $value) {
            if ($value == $sElemento) {
                $bVerifica = true;
                return "Elemento já existe!";
            }
        }
        if ($bVerifica == false) {
            array_push($this->aElementos, $sElemento);
            return "Elemento adicionado!";
        }
    }

    public function verificaElemento($sElemento) {
        foreach ($this->aElementos as $key => $value) {
            if ($value == $sElemento) {
                return "Pertence ao conjunto!";
            } else {
                return "Não pertence ao conjunto!";
            }
        }
    }

    public function uniaoConjuntos($oConjunto) {
        $aResultado = array_merge($this->aElementos, $oConjunto->getAElementos());
        $str = implode(", ", $aResultado);
        return $str;
    }

    public function interConjuntos($oConjunto) {
        $aResultado = array_intersect($this->aElementos, $oConjunto->getAElementos());
        $str = implode(", ", $aResultado);
        return $str;
    }

    public function diferencaConjunto($oConjunto) {
        $aResultado = array_diff($this->aElementos, $oConjunto->getAElementos());
        $str = implode(", ", $aResultado);
        return $str;
    }
}
?>
