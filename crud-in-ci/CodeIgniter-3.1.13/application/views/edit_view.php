<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
        <h1> Edit Product</h1>
    
        <form action="<?php echo base_url();?>crud/update/<?php echo $singleProduct->id; ?>" method="post">
        <div class="form-group col-6">
                <label for="id" >Id</label>
                <input type="text" name="id" placeholder="enter your id" class="form-control" value="<?php echo $singleProduct->id; ?>">
            </div>
            <div class="form-group col-6">
                <label for="name" >Name</label>
                <input type="text" name="name" placeholder="enter your name" class="form-control" value="<?php echo $singleProduct->name; ?>">
            </div>
            <div class="from-group col-6">
                <label for="price">Price</label>
                <input type="text" name="price" placeholder="enter your price" class="form-control" value="<?php echo $singleProduct->price; ?>">
            </div>
            <div class="form-group col-6">
                <label for="quantity"> Quantity</label>
                <input type="text" name="quantity" placeholder="enter your quantity" class="form-control" value="<?php echo $singleProduct->quantity; ?>">
            </div>
            <input type="submit" name="edit"  value="Update" class="btn btn-primary">
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>