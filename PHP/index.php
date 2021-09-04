<?php
class InheritArrayObject extends ArrayObject {

    // inherits function from parent class
    public function __set($name, $val) {
        $this[$name] = $val;
    }

    public function displayAsTable() {
        $table =  '<table border="1px"x>';
        $table .= '<tbody>';    
        $all_data = (array) $this;
        foreach ($all_data as $key => $value) {
            $table .= '<tr>';
            $table .= '<th>' . $key . '</th>';
            $table .= '<td>' . $value . '</td>';
            $table .= '</tr>';
        }    
        $table .= '</tbody>';
        $table .=  '</table>';    
        return $table;
    } 
}

$obj = new InheritArrayObject();    
$obj->name = 'Mehedi Hassan Durjoi'; 
$obj->gender = 'Male'; 
$obj->email = 'm.h.durjoi@gmail.com'; 
$obj->website = 'www.durjoi.com';

echo $obj->displayAsTable();    