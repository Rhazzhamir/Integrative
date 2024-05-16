<?php include("../connection.php")?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            /* Update */
            .update {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: flex-start;
                width: 100px;
                height: 40px;
                border: none;
                padding: 0px 20px;
                background-color: linear-gradient(90deg, rgba(56,174,94,1) 18%, rgba(24,197,126,1) 85%, rgba(14,30,67,1) 1460%, rgba(12,242,0,1) 3060%);    ;
                color: white;
                font-weight: 500;
                cursor: pointer;
                border-radius: 10px;
                box-shadow: 5px 5px 0px gray;
                transition-duration: .3s;
                }
                .svg {
                width: 13px;
                position: absolute;
                right: 0;
                margin-right: 20px;
                fill: white;
                transition-duration: .3s;
                }
                .update:hover {
                color: transparent;
                }
                .update:hover svg {
                right: 43%;
                margin: 0;
                padding: 0;
                border: none;
                transition-duration: .3s;
                }
                .update:active {
                transform: translate(3px , 3px);
                transition-duration: .3s;
                box-shadow: 2px 2px 0px rgb(140, 32, 212);
                }
                /* Delete */
                .bin-button {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    background-color: rgb(255, 95, 95);
                    cursor: pointer;
                    border: 2px solid rgb(255, 201, 201);
                    transition-duration: 0.3s;
                    position: relative;
                    overflow: hidden;
                    }
                    .bin-bottom {
                    width: 15px;
                    z-index: 2;
                    }
                    .bin-top {
                    width: 17px;
                    transform-origin: right;
                    transition-duration: 0.3s;
                    z-index: 2;
                    }
                    .bin-button:hover .bin-top {
                    transform: rotate(45deg);
                    }
                    .bin-button:hover {
                    background-color: rgb(255, 0, 0);
                    }
                    .bin-button:active {
                    transform: scale(0.9);
                    }
                    .garbage {
                    position: absolute;
                    width: 14px;
                    height: auto;
                    z-index: 1;
                    opacity: 0;
                    transition: all 0.3s;
                    }
                    .bin-button:hover .garbage {
                    animation: throw 0.4s linear;
                    }
                    @keyframes throw {
                    from {
                        transform: translate(-400%, -700%);
                        opacity: 0;
                    }
                    to {
                        transform: translate(0%, 0%);
                        opacity: 1;
                    }
                    }
                    /* Back button */
                    .backButton {
                        display: flex;
                        height: 3em;
                        width: 100px;
                        align-items: center;
                        justify-content: center;
                        background-color: #eeeeee4b;
                        border-radius: 20%;
                        letter-spacing: 1px;
                        transition: all 0.2s linear;
                        cursor: pointer;
                        border: none;
                        background: rgb(242, 242, 242);
                        margin-bottom: 20px;
                        }
                        .backButton > svg {
                        margin-right: 5px;
                        margin-left: 5px;
                        font-size: 20px;
                        transition: all 0.4s ease-in;
                        }
                        .backButton:hover > svg {
                        font-size: 1.2em;
                        transform: translateX(-5px);
                        }
                        .backButton:hover {
                        box-shadow: 9px 9px 33px #d1d1d1, -9px -9px 33px #ffffff;
                        transform: translateY(-2px);
                        }
        </style>
    </head>
    <body>
        <h1 class="container-ls bg-secondary p-3 text-center mb-5" id="main-title">Shopping Cart</h1>
        <div class="container">
            <div class="box1">
                <a href="../index.php">
                <!-- Back -->
                <button class="backButton">
                    <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024"><path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path></svg>
                    <span>Back</span>
                </button>
                </a>
            </div>
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <th>Id</th>
                    <th>Item</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Update</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM `customer_cart`";
                    $result = $connect->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['Item']; ?></td>
                        <td><?php echo $row['Size']; ?></td>
                        <td><?php echo $row['Quantity']; ?></td>
                        <td><?php echo $row['Price']; ?></td>
                        <td>
                            <button type="button" data-row-id="<?php echo $row['Id']?>" class="update btn btn-success update-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit 
                                <svg class="svg" viewBox="0 0 512 512">
                                <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg>
                            </button>
                        <td>
                            <a href="Delete.php?Id=<?php echo $row['Id']?>" class="btn btn-danger">
                            <button class="bin-button">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 39 7"
                                    class="bin-top"
                                >
                                    <line stroke-width="4" stroke="white" y2="5" x2="39" y1="5"></line>
                                    <line
                                    stroke-width="3"
                                    stroke="white"
                                    y2="1.5"
                                    x2="26.0357"
                                    y1="1.5"
                                    x1="12"
                                    ></line>
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 33 39"
                                    class="bin-bottom"
                                >
                                    <mask fill="white" id="path-1-inside-1_8_19">
                                    <path
                                        d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z"
                                    ></path>
                                    </mask>
                                    <path
                                    mask="url(#path-1-inside-1_8_19)"
                                    fill="white"
                                    d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z"
                                    ></path>
                                    <path stroke-width="4" stroke="white" d="M12 6L12 29"></path>
                                    <path stroke-width="4" stroke="white" d="M21 6V29"></path>
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 89 80"
                                    class="garbage"
                                >
                                    <path
                                    fill="white"
                                    d="M20.5 10.5L37.5 15.5L42.5 11.5L51.5 12.5L68.75 0L72 11.5L79.5 12.5H88.5L87 22L68.75 31.5L75.5066 25L86 26L87 35.5L77.5 48L70.5 49.5L80 50L77.5 71.5L63.5 58.5L53.5 68.5L65.5 70.5L45.5 73L35.5 79.5L28 67L16 63L12 51.5L0 48L16 25L22.5 17L20.5 10.5Z"
                                    ></path>
                                </svg>
                            </button>
                            </a>    
                        </td>
                        <td>    
                        </td>
                    </tr>   
                    <?php
                        }
                    } 
                    ?>
                </tbody>
            </table>    
            <?php //Delete / Update files        
            ?>
                </h6>
                    <?php
                        if(isset($_GET['delete_msg'])){
                            echo $_GET['delete_msg'];
                        }
                        if(isset($_GET['Update_msg'])){
                            echo $_GET['Update_msg'];
                        }               
                    ?>
                </h6>
            <!-- Modal_Update -->
            <?php include('Modal_Update.php')?>
        </body>
        <script src="../script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
