<div class="container my-5">

    <form id="formulary" action="?controller=vehicle&action=createdVehicle" method="post">
    
        <label for="brand">Brand</label>
        <input type="text" name="brand" class="form-control my-3" />
    
        <label for="model">Model</label>
        <input type="text" name="model" class="form-control my-3" />
    
        <label for="age">Age</label>
        <input type="number" name="age" class="form-control my-3" />
    
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="?controller=vehicle&action=list">Back</a>
    </form>

</div>