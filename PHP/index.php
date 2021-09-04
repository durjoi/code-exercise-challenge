<?php
class InheritArrayObject extends ArrayObject {

    // inherits function from parent class
    public function __set($name, $val) {
        $this[$name] = $val;
    }

    public function displayAsTable() {
        $table =  '<table>';
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
$obj->Name = 'John Doe'; 
$obj->Gender = 'Male'; 
$obj->Religion = 'Islam'; 
$obj->Prepared_For = 'ABC Org';

echo $obj->displayAsTable();    