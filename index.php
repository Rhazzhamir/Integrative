<?php include('Header/Footer/header.php')?>


    <div class="p-5 display-flex">
        <h5>Collections | Curry Brand | Shoes</h5>
        <h2>Stephen Curry Collection Shoes</h2>
        
    </div>
    <div class="container-fluid "> 
        <div class="container text-center">
            <!--Row 1-->
            <nav aria-label="Page navigation example d-flex justify-content-center">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="index_2.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            <form action="CRUD/Shopping_cart.php" method="post">
                <div class="row justify-content-center">
                    <div class="col pt-4">
                            <div class="card border-info" style="width: 15rem;">
                                <img src="shoes_img/image_1.png" class="card-img-top">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <input type="hidden" name="shoes_item" value="Unisex Curry 11 'Future Wolf' Basketball Shoes">
                                    <div class="card-title text-center">Unisex Curry 11 'Future Wolf' Basketball Shoes</div>

                                    <input type="hidden" name="price" value="₱ 9,195.00">
                                    <div class="card-text">₱ 9,195.00</div>

                                    <div>
                                        <label for="validationCustom04" class="form-label">Size</label>
                                        <select class="form-select" id="validationCustom04" name="size">
                                            <option selected disabled>Select Size</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="number" class=" border border-1px form-control mt-2" name="quantity" id="quantity1" min="1">
                                    </div>
                                    <button type="submit" class="btn btn-warning mt-2" name="shoes_btn1">Add to Cart</button>
                                </div>
                            </div>
                    </div>

                    <div class="col pt-4">
                        <div class="card border-info" style="width: 15rem;">
                            <img src="shoes_img/image_2.png" class="card-img-top">
                            <div class="card-body d-flex flex-column align-items-center">
                                <input type="hidden" name="shoes_item" value="Unisex Curry 4 FloTro Basketball Shoes">
                                <div class="card-title text-center">Unisex Curry 4 FloTro Basketball Shoes</div>
                                <input type="hidden" name="price" value="₱ 9,195.00">
                                <div class="card-text">₱ 9,195.00</div>
                                <div>
                                    <label for="validationCustom04" class="form-label">Size</label>
                                    <select class="form-select" id="validationCustom04" name="size">
                                        <option selected disabled>Select Size</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="number" class="form-control mt-2" name="quantity" id="quantity1" min="1">
                                </div>
                                <button type="submit" class="btn btn-warning mt-2" name="shoes_btn2">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col pt-4">
                        <div class="card border-info" style="width: 15rem;">
                            <img src="shoes_img/image_3.png" class="card-img-top">
                            <div class="card-body d-flex flex-column align-items-center">
                                <input type="hidden" name="shoes_item" value="Unisex Curry 4 Low FloTro Basketball Shoes">
                                <div class="card-title text-center">Unisex Curry 4 Low FloTro Basketball Shoes</div>
                                <input type="hidden" name="price" value="₱ 9,195.00">
                                <div class="card-text">₱ 9,195.00</div>
                                <div>
                                    <label for="validationCustom04" class="form-label">Size</label>
                                    <select class="form-select" id="validationCustom04" name="size">
                                        <option selected disabled>Select Size</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="number" class="form-control mt-2" name="quantity" id="quantity1" min="1">
                                </div>
                                <button type="submit" class="btn btn-warning mt-2" name="shoes_btn3">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <!--Row 2-->
                    <div class="row justify-content-center">
                    
                        <div class="col pt-4">
                                <div class="card border-info" style="width: 15rem;">
                                    <img src="shoes_img/image_4.png" class="card-img-top">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <input type="hidden" name="shoes_item" value="Unisex Curry 1 Retro Basketball Shoes">
                                        <div class="card-title text-center">Unisex Curry 1 Retro Basketball Shoes</div>
                                        <input type="hidden" name="price" value="₱ 10,155.00">
                                        <div class="card-text">₱ 9,195.00</div>
                                        <div>
                                            <label for="validationCustom04" class="form-label">Size</label>
                                            <select class="form-select" id="validationCustom04" name="size">
                                                <option selected disabled>Select Size</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="number" class="form-control mt-2" name="quantity" id="quantity1" min="1">
                                        </div>
                                        <button type="submit" class="btn btn-warning mt-2" name="shoes_btn4">Add to Cart</button>
                                    </div>
                                </div>
                        </div>

                        <div class="col pt-4">
                            <div class="card border-info" style="width: 15rem;">
                                <img src="shoes_img/image_5.png" class="card-img-top">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <input type="hidden" name="shoes_item" value="Unisex Curry 2 Retro Basketball Shoes">
                                    <div class="card-title text-center">Unisex Curry 2 Retro Basketball Shoes</div>
                                    <input type="hidden" name="price" value="₱ 10,155.00">
                                    <div class="card-text">₱ 9,195.00</div>
                                    <div>
                                        <label for="validationCustom04" class="form-label">Size</label>
                                        <select class="form-select" id="validationCustom04" name="size">
                                            <option selected disabled>Select Size</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="number" class="form-control mt-2" name="quantity" id="quantity1" min="1">
                                    </div>
                                    <button type="submit" class="btn btn-warning mt-2" name="shoes_btn5">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col pt-4">
                            <div class="card border-info" style="width: 15rem;">
                                <img src="shoes_img/image_6.png" class="card-img-top">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <input type="hidden" name="shoes_item" value="Unisex Curry Splash 24 AP Basketball Shoes">
                                    <div class="card-title text-center">Unisex Curry Splash 24 AP Basketball Shoes</div>
                                    <input type="hidden" name="price" value="₱ 10,155.00">
                                    <div class="card-text">₱ 9,195.00</div>
                                    <div>
                                        <label for="validationCustom04" class="form-label">Size</label>
                                        <select class="form-select" id="validationCustom04" name="size">
                                            <option selected disabled>Select Size</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="number" class="form-control mt-2" name="quantity" id="quantity1" min="1">
                                    </div>
                                    <button type="submit" class="btn btn-warning mt-2" name="shoes_btn6">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        
                    <!--Row 3-->
                    <div class="row justify-content-center">
                    
                    <div class="col pt-4">
                            <div class="card border-info" style="width: 15rem;">
                                <img src="shoes_img/image_7.png" class="card-img-top">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <input type="hidden" name="shoes_item" value="rade School Curry 11 'Mouthguard' Basketball Shoes">
                                    <div class="card-title text-center">rade School Curry 11 'Mouthguard' Basketball Shoes</div>
                                    <input type="hidden" name="price" value="₱ 9,195.00">
                                    <div class="card-text">₱ 9,195.00</div>
                                    <div>
                                        <label for="validationCustom04" class="form-label">Size</label>
                                        <select class="form-select" id="validationCustom04" name="size">
                                            <option selected disabled>Select Size</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="number" class="form-control mt-2" name="quantity" id="quantity1" min="1">
                                    </div>
                                    <button type="submit" class="btn btn-warning mt-2" name="shoes_btn7">Add to Cart</button>
                                </div>
                            </div>
                    </div>

                    <div class="col pt-4">
                        <div class="card border-info" style="width: 15rem;">
                            <img src="shoes_img/image_8.png" class="card-img-top">
                            <div class="card-body d-flex flex-column align-items-center">
                                <input type="hidden" name="shoes_item" value="Men's UA Curry 4 Retro Basketball Shoes">
                                <div class="card-title text-center">Men's UA Curry 4 Retro Basketball Shoes</div>
                                <input type="hidden" name="price" value="₱ 9,195.00">
                                <div class="card-text">₱ 9,195.00</div>
                                <div>
                                    <label for="validationCustom04" class="form-label">Size</label>
                                    <select class="form-select" id="validationCustom04" name="size">
                                        <option selected disabled>Select Size</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="number" class="form-control mt-2" name="quantity" id="quantity1" min="1">
                                </div>
                                <button type="submit" class="btn btn-warning mt-2" name="shoes_btn8">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col pt-4">
                        <div class="card border-info" style="width: 15rem;">
                            <img src="shoes_img/image_9.png" class="card-img-top">
                            <div class="card-body d-flex flex-column align-items-center">
                                <input type="hidden" name="shoes_item" value="Unisex Curry 1 Retro 'Curry Jam' Basketball Shoes">
                                <div class="card-title text-center">Unisex Curry 1 Retro 'Curry Jam' Basketball Shoes</div>
                                <input type="hidden" name="price" value="₱ 9,195.00">
                                <div class="card-text">₱ 9,195.00</div>
                                <div>
                                    <label for="validationCustom04" class="form-label">Size</label>
                                    <select class="form-select" id="validationCustom04" name="size">
                                        <option selected disabled>Select Size</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="number" class="form-control mt-2" name="quantity" id="quantity1" min="1">
                                </div>
                                <button type="submit" class="btn btn-warning mt-2" name="shoes_btn9">Add to Cart</button>
                            </div>
                        </div>
                    </div>
        
                        <!--Row 4-->
                        <div class="row justify-content-center">
                    
                    <div class="col pt-4">
                            <div class="card border-info" style="width: 15rem;">
                                <img src="shoes_img/image_10.png" class="card-img-top">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <input type="hidden" name="shoes_item" value="Unisex Curry 11 'Future Wolf' Basketball Shoes">
                                    <div class="card-title text-center">Unisex Curry 11 'Future Wolf' Basketball Shoes</div>
                                    <input type="hidden" name="price" value="₱ 9,195.00">
                                    <div class="card-text">₱ 9,195.00</div>
                                    <div>
                                        <label for="validationCustom04" class="form-label">Size</label>
                                        <select class="form-select" id="validationCustom04" name="size">
                                            <option selected disabled>Select Size</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="number" class="form-control mt-2" name="quantity" id="quantity1" min="1">
                                    </div>
                                    <button type="submit" class="btn btn-warning mt-2" name="shoes_btn10">Add to Cart</button>
                                </div>
                            </div>
                    </div>

                    <div class="col pt-4">
                        <div class="card border-info" style="width: 15rem;">
                            <img src="shoes_img/image_11.png" class="card-img-top">
                            <div class="card-body d-flex flex-column align-items-center">
                                <input type="hidden" name="shoes_item" value="Grade School Curry 3Z7 Basketball Shoes">
                                <div class="card-title text-center">Grade School Curry 3Z7 Basketball Shoes</div>
                                <input type="hidden" name="price" value="₱ 9,195.00">
                                <div class="card-text">₱ 9,195.00</div>
                                <div>
                                    <label for="validationCustom04" class="form-label">Size</label>
                                    <select class="form-select" id="validationCustom04" name="size">
                                        <option selected disabled>Select Size</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="number" class="form-control mt-2" name="quantity" id="quantity1" min="1">
                                </div>
                                <button type="submit" class="btn btn-warning mt-2" name="shoes_btn11">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col pt-4">
                        <div class="card border-info" style="width: 15rem;">
                            <img src="shoes_img/image_12.png" class="card-img-top">
                            <div class="card-body d-flex flex-column align-items-center">
                                <input type="hidden" name="shoes_item" value="Unisex Curry Splash 'Curry Jam' Basketball Shoes">
                                <div class="card-title text-center">Unisex Curry Splash 'Curry Jam' Basketball Shoes</div>
                                <input type="hidden" name="price" value="₱ 9,195.00">
                                <div class="card-text">₱ 9,195.00</div>
                                <div>
                                    <label for="validationCustom04" class="form-label">Size</label>
                                    <select class="form-select" id="validationCustom04" name="size">
                                        <option selected disabled>Select Size</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="number" class="form-control mt-2" name="quantity" id="quantity1" min="1">
                                </div>
                                <button type="submit" class="btn btn-warning mt-2" name="shoes_btn12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </form>

        </div>
    </div>

    
<?php include('Header/Footer/footer.php')?>