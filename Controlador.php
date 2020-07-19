<?php
    // No PHP não precisa mensionar no código que é abstract,
    // Ele entro da interface, o PHP já interpreta ele como abstract. (No JAVA precisa!).
    interface Controlador
    {
        public function ligar();
        public function desligar();
        public function abrirMenu();
        public function fecharMenu();
        public function maisVolume();
        public function menosVolume();
        public function ligarMudo();
        public function desligarMudo();
        public function play();
        public function pause();
    }
?>