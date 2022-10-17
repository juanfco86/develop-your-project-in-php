<div class="container my-5">

    <form id="formulary" action="?controller=vehicle&action=updatedVehicle&id=<?php echo $data['id'] ?>" method="post">
        <input type="hidden" id="id" name="id" value="<?php echo $data['id']; ?>" />
    
        <label for="brand">Brand</label>
        <input type="text" name="brand" class="form-control my-3" value="<?php echo $data['vehicles']['brand']; ?>" />
    
        <label for="model">Model</label>
        <input type="text" name="model" class="form-control my-3" value="<?php echo $data['vehicles']['model']; ?>" />
    
        <label for="age">Age</label>
        <input type="text" name="age" class="form-control my-3" value="<?php echo $data['vehicles']['age']; ?>" />

    
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="?controller=User&action=showAll">Back</a>
    </form>

</div>