
<?php
    class vehicle {
        public $vehicleTypes = array("sport-car","truck","bike","boat");
        public $vehiclesSpeed = array("150","60","100","50");
        public $distance = 350;

        function vehicleSpeed(){
            for($i=0;$i< count($vehicleTypes) ; $i++){
                if ($vehicleTypes[$i] == 'boat') {
                    return ($vehicleTypes[$i] . ": ". ($distance/$vehiclesSpeed[$i]) + 0.25);
                }
                else {
                    return ($vehicleTypes[$i] . ": ". $distance/$vehiclesSpeed[$i]);
                }
            }
        }        
    }
    echo "Duration of each vehicle to reach destination";
    $vehicle = new vehicle();
    $vehicle->vehicleSpeed();
?>