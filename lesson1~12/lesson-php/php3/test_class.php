<?php
/*１１１１１
class slime {
    public $type = 'スライム';
    public $hp = 10;
    public $power = 3;
    
    function attack($character_name) {
        print $this->type . "が" . $character_name . "を攻撃して" . $this->power . "ポイントのダメージを与えた！" . PHP_EOL;
    }
}

    $slime_A = new slime();
    
    $slime_A->attack("主人公");
    
    print_r($slime_A);
*/


/*２２２２２
class Slime {
    public $type = 'スライム';
    public $suffix = '';

    public $hp = 10;
    public $power = 3;
    
    function __construct($suffix) {
        $this->suffix = $suffix;
    }
    
    function name() {
        return $this->type . $this->suffix;
    }
    
    function attack($character_name) {
        print $this->name() . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
    }
}

$slime_A = new Slime('A');

$slime_A->attack('主人公');
*/

/*３３３３３３
class Slime {
    public static $type = 'スライム';
    public $suffix = '';

    public $hp = 10;
    public $power = 3;
    
    function __construct($suffix) {
        $this->suffix = $suffix;
    }
    
    function name() {
        return self::$type . $this->suffix;
    }
    
    function attack($character_name) {
        print $this->name() . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
    }
    
    //　クラスメソッド
    static function description() {
        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;
    }
}

Slime::description();

$slime_A = new Slime('A');

$slime_A->attack('主人公');
*/

class CHaracter {
    public static $type = "";
    public $suffix = "";
    public $hp = 1;
    public $power = 1;
    
    function __construct($hp, $power, $suffix ="") {
        $this->hp = $hp;
        $this->power = $power;
        $this->suffix = $suffix;
    }
    
    function name() {
        return $this::$type . $this->suffix;
    }
    
    function attack($character) {
        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
        
        $character->hp = $character->hp - $this->power;
        
        if ($character->hp <= 0) {
            $this->defeat($character);
        }
    }
    
    function defeat($character) {
        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;
    }
    
    static function description() {
        print 'このゲームのキャラクターです' . PHP_EOL;
    }
}

class slime extends Character {
    public static $type = 'スライム';

    static function description() {
        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;
    }
}

class Hero extends Character {
    public static $type = '主人公';

    static function description() {
        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;
    }
}

Slime::description();
Hero::description();

$slime_A = new Slime(10, 3, 'A');
$hero = new Hero(1000, 30);

$slime_A->attack($hero);
$hero->attack($slime_A);

//オブジェクトのクラス名を確認する方法
print get_class($slime_A) . PHP_EOL;
print get_class($hero) . PHP_EOL;