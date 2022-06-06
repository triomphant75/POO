<?php
namespace App\Models;
interface IAffiche{
    public function insert();
    public function update();
    public static function selectAll();
    public static function delete(int $id);
    public static function selectByid(int $id);
}
