<?php
interface Controlador{
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVol();
    public function menosVol();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();

}