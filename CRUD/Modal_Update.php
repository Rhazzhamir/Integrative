<?php 
include('../connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md ">
                    <div class="modal-content bg-primary-emphasi">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form method="post" action="Update.php">
                            <div class="mb-3">
                                <label for="validationCustom04" class="form-label">Size</label>
                                <select class="form-select" id="validationCustom04" name="size">
                                    <option selected disabled>Select Size</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Quantity" class="form-label">Quantity</label>
                                <input type="number" class=" border border-1px form-control mt-2" name="Quantity" id="Quantity" min="1" value="0">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit"  class="btn btn-primary" name="Id" value="<?php echo $row['Id']?>">Save changes</button>
                            </div>
                            
                        </form>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>