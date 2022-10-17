<div class="container my-5">

    <form id="formulary" action="?controller=User&action=createdUser" method="post">
    
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control my-3" />
    
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control my-3" />
    
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control my-3" />
    
        <label for="password">Pasword</label>
        <input type="password" name="password" class="form-control my-3" />
    
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="?controller=User&action=showAll">Back</a>
    </form>

</div>