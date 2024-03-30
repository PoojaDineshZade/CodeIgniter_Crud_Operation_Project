<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
    <div >
        <div class="container" align="center">
            <h1>Product Detail</h1>
        </div>
        <div class="container">
            <div class="heading">
                <h1 style="float:left" >All Products</h1>
                <a  style="float:right" class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleModal">Add Product</a>
            </div>
        <table class="table table-strip table-hover"> 
            <thead>
                <tr>
                  <th>Product Id</th>
                <th>product name</th>
                <th>product price</th>
                <th>quantity</th>
                <th>operation</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($product_details as $product): ?>
                    <tr>
                      <td><?php echo $product->id;?></td>
                        <td><?php echo $product->name;?></td>
                        <td><?php echo $product->price;?></td>
                        <td><?php echo $product->quantity;?></td>
                        <td>
                            <a href="<?php echo base_url();?>crud/editProduct/<?php echo $product->id;?>" class="btn btn-success">edit</a>
                            <a href="<?php echo base_url();?>crud/deleteProduct/<?php echo $product->id;?>" class="btn btn-danger">delete</a>
                        </td>
                    </tr>


                    <?php endforeach; ?>
                     
                </tbody>

           
        </table>
        
        </div>
        
    </div>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="<?php echo base_url(); ?>crud/addProduct" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text " id="name" name="name" placeholder="Enter Your Product name" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantity">Product Quantity</label>
            <input type="text " id="quantity" name="quantity" placeholder="Enter Your Product Quantity" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Product Price</label>
            <input type="text " id="price" name="price" placeholder="Enter Your Product Price" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" value="submit" class="btn btn-primary">
      </div>
      </form>
    </div>
  </div>
</div>

<?php  if($this->session->flashdata('error')):?>
  <div align="center" style="color: #FFF" class="bg-danger">
  <?php echo $this->session->flashdata('error') ?>
  </div>
  <?php endif; ?>

  <?php  if($this->session->flashdata('inserted')):?>
  <div align="center" style="color: #FFF" class="bg-success">
  <?php echo $this->session->flashdata('inserted') ?>
  </div>
  <?php endif; ?>

  <?php  if($this->session->flashdata('updated')):?>
  <div align="center" style="color: #FFF" class="bg-success">
  <?php echo $this->session->flashdata('updated') ?>
  </div>
  <?php endif; ?>

  <?php  if($this->session->flashdata('deleted')):?>
  <div align="center" style="color: #FFF" class="bg-success">
  <?php echo $this->session->flashdata('deleted') ?>
  </div>
  <?php endif; ?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>