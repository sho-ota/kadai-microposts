<?php
namespace TechAcademy\communication\animals;

trait Thinkable {
    function think() {
        print "私は" . $this->like_to_do . "について考えています。" . PHP_EOL;
    }
}