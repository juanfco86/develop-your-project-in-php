<?php

    class VehicleController {

        public function list() {
            // MODEL
            require_once "models/vehicle.php";

            // ACTION CONTROLLER
            $vehicle = new Vehicle();
            
            $data['vehicles'] = $vehicle->getAll('vehicles');
            
            // VIEW
            require_once "views/vehicle/list.php";
        }
        public function create() {
            require_once "views/vehicle/create.php";
        }

        public function createdVehicle() {
            require_once "models/vehicle.php";
            require_once "views/vehicle/createdVehicle.php";

            $vehicle = new Vehicle();

            $vehicle->create($_POST['brand'], $_POST['model'], $_POST['age']);
            
        }

        public function modify($id) {
            require_once "models/vehicle.php";

            $vehicle = new Vehicle();

            $data['id'] = $id;
            $data['vehicles'] = $vehicle->get($id);
            
            require_once "views/vehicle/modify.php";
        }

        public function updatedVehicle() {
            require_once "models/vehicle.php";
            
            $vehicle = new Vehicle();

            $vehicle->modify($_GET['id'], $_POST['brand'], $_POST['model'], $_POST['age']);
            require_once "views/vehicle/updatedVehicle.php";
        }

        public function delete($id) {
            require_once "models/vehicle.php";

            $vehicle = new Vehicle();

            $delete = $vehicle->delete($id);

            header("Location: ?controller=vehicle&action=list");
        }
    }

?>