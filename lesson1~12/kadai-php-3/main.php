<?php
namespace TechAcademy\communication;

require_once 'human.php';

use TechAcademy\communication\animals\Human;

class Main {
    static function start() {
        // インスタンスの生成
        $tanaka = new Human("田中　太郎", 25, "電車");
        $suzuki = new Human("鈴木　次郎", 30, "野球");
        $sato = new Human("佐藤　花子", 20, "映画");

        // インスタンスのメソッドを実行
        $tanaka->say();
        $tanaka->think();
        $suzuki->say();
        $suzuki->think();
        $sato->say();
        $sato->think();
        /*
        print_r($tanaka);
        print_r($suzuki);
        print_r($sato);
        */

    }
}

Main::start();