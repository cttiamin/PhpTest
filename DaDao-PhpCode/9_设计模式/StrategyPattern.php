<?php //����ģʽ
interface IStrategy{
function OnTheWay();
}
class WalkStrategy implements IStrategy{
public function OnTheWay(){
echo "��·�ϲ���<br>";
}
}
class RideBickStragtegy implements IStrategy {
public function OnTheWay(){
echo"��·�������г�<br>";
}
}
class CarStragtegy implements IStrategy{
public function OnTheWay(){
echo"��·�Ͽ���<br>";
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
