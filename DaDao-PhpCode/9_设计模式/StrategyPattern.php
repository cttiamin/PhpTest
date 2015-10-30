<?php //策略模式
interface IStrategy{
function OnTheWay();
}
class WalkStrategy implements IStrategy{
public function OnTheWay(){
echo "在路上步行<br>";
}
}
class RideBickStragtegy implements IStrategy {
public function OnTheWay(){
echo"在路上骑自行车<br>";
}
}
class CarStragtegy implements IStrategy{
public function OnTheWay(){
echo"在路上开车<br>";
}
}
class Context{
public function find($strategy){
$strategy->OnTheWay();
}
}
$sunyang=new Context();  
$sunyang->find(new WalkStrategy());
$sunyang->find(new RideBickStragtegy());
$sunyang->find(new CarStragtegy());
?>
