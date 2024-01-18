<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include('includes/pos_header.php'); ?>
    <style>
      h1 {
      color: black;
      background-color: white;
      font-weight: bold;
      padding: 20px; /* Optional: Add padding for better visual appearance */
    }
    h4 {
      color: black;
      background-color: white;
      font-weight: bold;
      padding: 20px; /* Optional: Add padding for better visual appearance */
    }
 #pos-header,
    #pos-form {
        margin: 0;
        padding: 0;
        border-radius: 10px;
    }

    /* Ensure the body has no margin */
    body {
        margin: 0;
        border-radius: 10px;
    }

    /* Remove any padding or margin from the card body */
    .card-body {
        margin: 0;
        padding: 0;
    }

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #fefefe;
    margin: 20% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
    text-align: center;
}

button {
    margin: 5px;
}

        /* Reset default margin and padding */
               /* Reset default margin and padding */
               body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Flexbox layout classes */
         .d-flex {
            display: flex;
        }

        .flex-column {
            flex-direction: column;
        }

        .h-100 {
            height: 100%;
        }

        .w-100 {
            width: 100%;
        }

        /* Form input and label styles */
        .d-flex .form-control {
            /* Style for form inputs */
            /* Example styles */
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .d-flex .control-label {
            /* Style for form labels */
            /* Example styles */
            width: 30%;
            margin-right: 2%;
            text-align: right;
        }

        /* Adjust specific styles for your elements */
        #pos-header {
            background-color: skyblue;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        #pos-header h3 {
            margin: 0;
        }

        #pos-form {
            padding: 10px;
            border-radius: 10px;
        }

        .card {
            border-radius: 0;
            border: 1px solid #000;
            background-color: #fff;
        }

        .card-body {
            padding: 10px;
        }

        .col-8 {
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .form-control {
            width: calc(100% - 30px);
            margin: 5px 0;
        }

        .table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            border: 1px solid #000;
        }

        .table th {
            background-color: #f0f0f0;
        }
        .brands-container {
  width: 100%;
  overflow-x: auto; /* Enable horizontal scrolling */
  white-space: nowrap; /* Prevent line breaks */
  border: 1px solid #ccc; /* Optional: Add a border for visualization */
  padding: 10px; /* Optional: Add padding for space */
}

.brands {
  display: inline-flex; /* Align items in a row */
}

.brands img {
  width: 150px; /* Adjust width as needed */
  height: auto;
  margin-right: 10px; /* Adjust spacing between brands */
}
h1{
    color: white;
    align-items: center;
}

.bg-skyblue {
    background-color: skyblue;
}


    </style>
<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
    <!-- jQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    
<div class="page-wrapper ms-0">
  <div class="content">
    <div class="row">
      <div class="col-lg-15 col-sm-15 tabs_wrapper">
        <div class="page-header ">
          <div class="page-title">
          <h1 style="color: black; background-color: white; font-weight: bold;">
  Available Products
</h1>
            <h4 style="color: black;">
              Flavors:
            </h4>
          </div>
        </div>

        <ul class=" tabs owl-carousel owl-theme owl-product  border-0 ">
          <li class="active" id="fruits">
            <div class="product-details ">
              <img src="assets/img/VIPO LOGO.png" alt="img">
              <h6>
                VIPO
              </h6>
            </div>
          </li>
          <li id="headphone">
            <div class="product-details ">
              <img src="assets/img/SOLOBAR LOGO.png" alt="img">
              <h6>
                SOLOBAR
              </h6>
            </div>
          </li>
          <li id="Accessories">
            <div class="product-details">
              <img src="assets/img/INSTABAR LOGO.png" alt="img">
              <h6>
                INSTABAR
              </h6>
            </div>
          </li>
          <li id="Shoes">
            <a class="product-details">
              <img src="assets/img/SHIFT LOGO.jpg" alt="img">
              <h6>
                SHIFT
              </h6>
            </a>
          </li>
          <li id="computer">
            <a class="product-details">
              <img src="assets/img/NASTY LOGO.png" alt="img">
              <h6>
                NASTY
              </h6>
            </a>
          </li>
          <li id="Snacks">
            <a class="product-details">
              <img src="assets/img/DEMON VAPE LOGO.png" alt="img">
              <h6>
                DEMONVAPE
              </h6>
            </a>
          </li>
          <li id="watch">
            <a class="product-details">
              <img src="assets/img/CHILLAX LOGO.png" alt="img">
              <h6>
                CHILLAX NEO
              </h6>
            </a>
          </li>
          <li id="cycle">
            <a class="product-details">
              <img src="assets/img/ENJOY.jpg" alt="img">
              <h6>
                ENJOY
              </h6>
            </a>
          </li>
          <li id="fruits1">
            <div class="product-details ">
              <img src="assets/img/GEEKBAR LOGO.png" alt="img">
              <h6>
                AEGIS
              </h6>
            </div>
          </li>
          <li id="headphone1">
            <div class="product-details ">
              <img src="assets/img/PUFF MASTER LOGO.png" alt="img">
              <h6>
                PUFFMASTER
              </h6>
            </div>
          </li>
        </ul>

        <div class="tabs_container">
          <div class="tab_content active" data-tab="fruits">
            <div class="row ">
              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill active">
                  <div class="productsetimg">
                    <img src="assets/img/Vipo.jpg" alt="img">
                    <h6>
                      Qty:
                    </h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                    Set 1:
                    </h4>
                    <h6>
                    550
                    </h6>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Vipo.jpg" alt="img">
                    <h6>
                      Qty:
                    </h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                      Set 2
                    </h4>
                    <h6>
                      550
                    </h6>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Vipo.jpg" alt="img">
                    <h6>
                      Qty:
                    </h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                      Set 3
                    </h4>
                    <h6>
                      550
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="tab_content" data-tab="headphone">
            <div class="row ">
              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Solobar.jpg" alt="img">
                    <h6>
                      Qty:
                    </h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                      FRESH PURPLE BLACK 2
                    </h4>
                    <h6>
                      500
                    </h6>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Solobar.jpg" alt="img">
                    <h6>
                      Qty:
                    </h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                      Cold Blast 2
                    </h4>
                    <h6>
                      500
                    </h6>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Solobar.jpg" alt="img">
                    <h6>
                      Qty:
                    </h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                      Home Made Pink 4
                    </h4>
                    <h6>
                      500
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Solobar.jpg" alt="img">
          <h5>Qty:</h5>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Real Mix</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Solobar.jpg" alt="img">
          <h6>
                      Qty:
                    </h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Mix Red Farm 2</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Solobar.jpg" alt="img">
          <h6>
                      Qty:
                    </h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Frozen Monster 3</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Solobar.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Home Made Yellow 3</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Solobar.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Pink Greek 3</h4>
          <h6>500</h6>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="tab_content" data-tab="Accessories">
            <div class="row">
              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Instabar.jpg" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                      BAZOOKE 4
                    </h4>
                    <h6>
                      520
                    </h6>
                  </div>
                </div>
              </div>
              
    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Instabar.jpg" alt="img">
          <h6>Qty: </h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
        <h4>Water 4</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Instabar.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Red Manila 5</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Instabar.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4> Water 5 </h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Instabar.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h5>Mug 5</h5>
          <h4> Mug 5</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>
  </div>
</div>

          <div class="tab_content" data-tab="Shoes">
            <div class="row">
              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Shift.jpg" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                      Forsetti 4
                    </h4>
                    <h6>
                      500
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Shift.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Odin 4</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Shift.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Skadi 3</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Shift.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>TYR 3</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>
  </div>
</div>



          <div class="tab_content" data-tab="computer">
            <div class="row">
              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Nasty.jpg" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                      Manic Magic 3
                    </h4>
                    <h6>
                      520
                    </h6>
                  </div>
                </div>
              </div>
            

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Nasty.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Cosmic Bake 1</h4>
          <h6>520</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Nasty.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Ruby Fusion 3</h4>
          <h6>520</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Nasty.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Midnight Mix 3</h4>
          <h6>520</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Nasty.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Crimson Burts 3</h4>
          <h6>520</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Nasty.jpg" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Cosmic Cortlad 3</h4>
          <h6>520</h6>
        </div>
      </div>
    </div>
  </div>
</div>


          <div class="tab_content" data-tab="Snacks">
            <div class="row">
              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Demon Vape.png" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                      Snake Pits 4
                    </h4>
                    <h6>
                      520
                    </h6>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Demon Vape.png" alt="Man of Isle 5">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Man of Isle 5</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Demon Vape.png" alt="Discharge 3">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Discharge 3</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Demon Vape.png" alt="Discharge 3">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Artillery 7</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Demon Vape.png" alt="Discharge 3">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Cult Of Personality 3</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

 <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Demon Vape.png" alt="Discharge 3">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Lies Of Adolf 5</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Demon Vape.png" alt="Discharge 3">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Mix Dimension 3</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>


    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Demon Vape.png" alt="Discharge 3">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Anarchism 7</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    </div>
</div>


          <div class="tab_content" data-tab="watch">
            <div class="row">
              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Chillax.webp" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                    Jungle Fusion 4
                    </h4>
                    <h6>
                      500
                    </h6>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Chillax.webp" alt="img">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Menthol 4</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Chillax.webp" alt="img">
          <h6>Qty:</h6>
        </div>
        <div class="productsetcontent">
        <h4>Twisted Ghost 3</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Chillax.webp" alt="Jungle Fusion 4">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4> Yellow Hunk 5</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>


    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Chillax.webp" alt="Jungle Fusion 4">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4>Greek Freek 4</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    
    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Chillax.webp" alt="Jungle Fusion 4">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4> Black Mamba 4</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Chillax.webp" alt="Jungle Fusion 4">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4> Moonwalk 4</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>

    <!-- Jungle Fusion 4 -->
    <div class="col-lg-3 col-sm-6 d-flex">
      <div class="productset flex-fill">
        <div class="productsetimg">
          <img src="assets/img/Chillax.webp" alt="Jungle Fusion 4">
          <h6>Qty:</h6>
          <div class="check-product">
            <i class="fa fa-check"></i>
          </div>
        </div>
        <div class="productsetcontent">
          <h4> Frigid Spore 9</h4>
          <h6>500</h6>
        </div>
      </div>
    </div>
    </div>
    </div>   


          <div class="tab_content" data-tab="cycle">
            <div class="row">
              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/ENJOY.jpg" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                    Cappucino 2
                    </h4>
                    <h6>
                      500
                    </h6>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="tab_content" data-tab="fruits1">
    <div class="row">
        <div class="col-lg-3 col-sm-6 d-flex">
            <div class="productset flex-fill">
                <div class="productsetimg">
                    <img src="assets/img/Geekbar.jpg" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
                <div class="productsetcontent">
                    <h4>Browned Top</h4>
                    <h6>450</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 d-flex">
            <div class="productset flex-fill">
                <div class="productsetimg">
                    <img src="assets/img/Geekbar.jpg" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
                <div class="productsetcontent">
                    <h4>RY4</h4>
                    <h6>450</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 d-flex">
            <div class="productset flex-fill">
                <div class="productsetimg">
                    <img src="assets/img/Geekbar.jpg" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
                <div class="productsetcontent">
                   
                    <h4>YKT 2</h4>
                    <h6>450</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 d-flex">
            <div class="productset flex-fill">
                <div class="productsetimg">
                    <img src="assets/img/Geekbar.jpg" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
                <div class="productsetcontent">
                    
                    <h4>Root Sparkle 6</h4>
                    <h6>450</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 d-flex">
            <div class="productset flex-fill">
                <div class="productsetimg">
                    <img src="assets/img/Geekbar.jpg" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
                <div class="productsetcontent">
                    
                    <h4>Vanilla Cupcake 5</h4>
                    <h6>450</h6>
                </div>
            </div>
        </div>
    </div>
</div>


          <div class="tab_content" data-tab="headphone1">
            <div class="row ">
              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Puff.png" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                      LS 1
                    </h4>
                    <h6>
                      420
                    </h6>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 d-flex ">
                <div class="productset flex-fill">
                  <div class="productsetimg">
                    <img src="assets/img/Puff.png" alt="img">
                    <h6>Qty:</h6>
                    <div class="check-product">
                      <i class="fa fa-check">
                      </i>
                    </div>
                  </div>
                  <div class="productsetcontent">
                    <h4>
                      VL1
                    </h4>
                    <h6>
                      420
                    </h6>
                  </div>
                </div>
              </div>


        </div>
      </div>



      <div class="w-200 d-flex justify-content-between align-items-center" id="pos-header" style="background-color: socket_accept; border-radius: 10px;">
    <h3>POS</h3>
    <div>
        <button onclick="createNewOrder()" class="btn btn-primary me-3">New Order</button>
        <button type="button" class="btn btn-primary" id="PaymentTypeButton">Payment Type</button>
    </div>
</div>


<!-- Add this HTML for the modal popup -->
<div id="paymentModal" class="modal">
    <div class="modal-content">
        <button id="gcashButton">GCASH</button>
        <button id="cashButton">Cash</button>
    </div>
</div>
<!-- Add this JavaScript to handle the modal display -->



        <form action="checkout.php" method="post" id="pos-form" class="h-200 flex-grow-1"  style="border-radius: 10px; overflow: hidden;">
    <div class="card rounded-0 border-dark h-200" style="border-radius: 10px;">
        <div class="card-body d-flex h-200 py-0 px-0"  style="border-radius: 10px;">
            <div class="col-8 d-flex flex-column p-2" style="border-radius: 10px;">
                <div class="d-flex align-items-center" style="border-radius: 10px;">

                    <label for="customer" class="control-label col-3 me-2" style="border-radius: 10px;">Customer Name</label>
                    <input type="text"  maxlength="50" class="form-control form-control-sm py-0 control-sm rounded-0" id="customer_name" name="customer" value="Unknown" >
                </div>

                <div class="d-flex align-items-center">
                    <label for="product" class="control-label col-3 me-2" >Enter Product Name</label>
                    <input type="text"   maxlength="50" autofocus class="form-control form-control-sm control-sm rounded-0" id="product_name" name="product" style="border-radius: 10px;">
                </div>
                <div class="d-flex align-items-center">
    <label for="price" class="control-label col-3 me-2">Enter Price</label>
    <input type="text" autofocus class="form-control form-control-sm control-sm rounded-0" id="price_input" name="price">
</div>
<div class="d-flex align-items-center">
    <label for="quantity" class="control-label col-3 me-2">Enter Quantity</label>
    <input type="text" autofocus class="form-control form-control-sm control-sm rounded-0" id="quantity_input" name="qty">
</div>

<div class="d-flex align-items-center">
    <label for="quantity" class="control-label col-3 me-2">Enter Id</label>
    <input type="text" autofocus class="form-control form-control-sm control-sm rounded-0" id="id" name="id">
</div>

<div class="d-flex align-items-center">
    <label for="quantity" class="control-label col-3 me-2">Enter Payment Type</label>
    <input type="text" autofocus class="form-control form-control-sm control-sm rounded-0" id="payment" name="payment" readonly>
</div>

            

<div class="flex-grow-1 bg-dark bg-gradient bg-opacity-25 mt-4">
    <table class="table table-hover table-striped table-bordered" id="table">
        <colgroup>
            <col width="100">
        </colgroup>
        <thead>
            <tr>
                <th class="py-0 px-1" style="color: black !important;">Total:</th>
            </tr>
        </thead>
        <tbody id="added-prices">

           
        </tbody>
    </table>
</div>

</div>

<div id="right-column" class="col-4 bg-skyblue d-flex flex-column h-100 p-2" style="border-radius: 10px;">
    <div class="w-100 flex-grow-0">
        <fieldset class="border border-light p-1 text-light">
            <legend class="text-light w-auto float-none fs-5">POS OF BADBUNNY</legend>
            <label for="" class="fs-6">CHILL AND KEEP VAPING.</label>
        </fieldset>
    </div>

    <div class="w-100 flex-grow-1 computation-pane d-flex flex-column justify-content-between">
        <div class="row gx-0 mb-3 align-items-center">
            <div class="col-5 text-light">Total</div>
            <div class="col-7 text-end px-3 py-2 bg-light" name="total" id="sub_total" contenteditable="false">0.00</div>
        </div>

        <div class="row gx-0 mb-3 align-items-center">
            <div class="col-5 text-light">Amount Paid</div>
            <div class="col-7 text-end px-3 py-2">
                <input type="text" class="form-control form-control-sm" id="amount_paid_input" name="amount" value="0">
            </div>
            <input type="hidden" name="amount_paid" value="0">
        </div>

        <div class="row gx-0 mb-3 align-items-center">
            <div class="col-5 text-light">Change</div>
            <div class="col-7 text-end px-3 py-2 bg-light" name="change" id="change_value">0</div>
            <input type="hidden" name="change" id="change_input" value="0">
        </div>

        <div class="pt-5 flex-grow-0">
            <button type="submit" class="btn btn-primary btn-lg" name="add_sales_btn">Checkout</button>
        </div>
    </div>
</div>



    </form>
</div>

<div class="card rounded-0 border-dark h-200" style="border-bottom: 1px solid #000; display: flex; align-items: center; justify-content: center;">
    <!-- Your form content -->

    <div style="text-align: center;">
        <!-- Gcash QR Code Image -->
        <img src="assets/img/gcash.jpg" alt="GCash QR Code" style="width: 500px; height: 500px;">

        <!-- Text next to the QR code -->
        <p style="font-size: 18px; margin-top: 10px; font-weight: bold;">
            Scan this QR code to pay through GCash
        </p>
    </div>
</div>



<script>
    // Get the modal
    var paymentModal = document.getElementById("paymentModal");

    // Get the button that opens the modal
    var paymentTypeButton = document.getElementById("PaymentTypeButton");

    // When the user clicks the button, show the modal
    paymentTypeButton.onclick = function() {
        paymentModal.style.display = "block";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == paymentModal) {
            paymentModal.style.display = "none";
        }
    }

    // Add event listeners for the payment buttons inside the modal
    var gcashButton = document.getElementById("gcashButton");
    var cashButton = document.getElementById("cashButton");
    var paymentInput = document.getElementById("payment");

    gcashButton.onclick = function() {
        paymentInput.value = "GCash";
        paymentModal.style.display = "none";
    }

    cashButton.onclick = function() {
        paymentInput.value = "Cash";
        paymentModal.style.display = "none";
    }
</script>

<script>
  
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('pos-form');
    form.addEventListener('submit', function (event) {
        const amountPaid = parseFloat(document.getElementById('amount_paid_input').value);
        if (isNaN(amountPaid) || amountPaid <= 0) {
            event.preventDefault(); // Prevent form submission if amount_paid is empty or invalid
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please enter a valid amount paid.',
            });
        }
    });
});

</script>
<script>
  // Get the input field and the tbody where the prices will be added
var priceInput = document.getElementById("price_input");
var addedPricesTbody = document.getElementById("added-prices");

// Listen for 'input' event to automatically update on price entry
priceInput.addEventListener("input", function() {
    addPrice();
});

function addPrice() {
    // Get the input value
    var price = parseFloat(priceInput.value);

    if (!isNaN(price)) {
        // Create a new row in the table to display the added price
        var newRow = document.createElement("tr");
        var newCell = document.createElement("td");
        newCell.textContent = price.toFixed(2); // Show price with two decimal places
        newRow.appendChild(newCell);
        addedPricesTbody.appendChild(newRow);

        // Calculate the total
        var total = calculateTotal();
        displayTotal(total);
    }
}

function calculateTotal() {
    var rows = addedPricesTbody.getElementsByTagName("tr");
    var total = 0;

    // Iterate through each row and sum up the prices
    for (var i = 0; i < rows.length; i++) {
        var row = rows[i];
        var cells = row.getElementsByTagName("td");
        var price = parseFloat(cells[0].textContent);
        total += price;
    }

    return total;
}

function displayTotal(total) {
    // Display the total in the table header
    var totalCell = document.querySelector("#table thead th");
    totalCell.textContent = "Total: " + total.toFixed(2); // Show total with two decimal places
}

</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const priceInput = document.getElementById('price_input');
    const quantityInput = document.getElementById('quantity_input');
    const totalDisplay = document.getElementById('sub_total');
    const amountPaidInput = document.getElementById('amount_paid_input');
    const changeValue = document.getElementById('change_value');
    let total = 0;

    // Function to calculate and update the total
    function updateTotal() {
        const price = parseFloat(priceInput.value) || 0;
        const quantity = parseInt(quantityInput.value) || 0;

        const productTotal = price * quantity;
        total += productTotal;

        totalDisplay.textContent = total.toFixed(2);
        updateChange();
    }

    // Event listeners to call the updateTotal function when inputs change
    priceInput.addEventListener('input', updateTotal);
    quantityInput.addEventListener('input', updateTotal);

    // Function to calculate and update the change
    // Function to calculate and update the change
function updateChange() {
    const amountPaid = parseFloat(amountPaidInput.value) || 0;
    const change = amountPaid - total;
    changeValue.textContent = change.toFixed(2);

    // Update the hidden input field
    document.getElementById('change_input').value = change.toFixed(2);
}
    // Event listener to call the updateChange function when amount paid changes
    amountPaidInput.addEventListener('input', updateChange);

    // Your other scripts and functions can go here...
});
const addedPricesTable = document.getElementById('added-prices');

    // Function to update the table with individual product totals and running total
    function updateTable() {
        const price = parseFloat(priceInput.value) || 0;
        const quantity = parseInt(quantityInput.value) || 0;

        const productTotal = price * quantity;

        const newRow = document.createElement('tr');
        newRow.innerHTML = `<td>${price} * ${quantity} = ${productTotal.toFixed(2)}</td>`;
        addedPricesTable.appendChild(newRow);
    }

    // Call the updateTable function within the existing updateTotal function
    function updateTotal() {
        // ... (existing code remains unchanged)

        updateTable(); // Call the updateTable function to update the table
        updateChange();
    }

    // ... (existing event listeners remain unchanged)


</script>



<script>
   // Get the 'amount_paid_input' input element
   const amountPaidInput = document.getElementById('amount_paid_input');

// Add an input event listener to restrict the input to numbers and limit to 9 characters
amountPaidInput.addEventListener('input', function () {
    this.value = this.value.replace(/\D/g, '').substring(0, 9); // Allow only numbers and limit to 9 characters
});
   // Function to allow only text input (no numbers)
   const restrictTextOnly = (inputField) => {
        inputField.addEventListener('input', function () {
            this.value = this.value.replace(/[^A-Za-z\s]/g, ''); // Allow only letters and spaces
        });
    };

    // Apply the restriction to the 'customer_name' and 'product_name' input fields
    restrictTextOnly(document.getElementById('customer_name'));
    restrictTextOnly(document.getElementById('product_name'));
    // Function to restrict input to numbers and limit to 9 characters
    const restrictInput = (inputField) => {
        inputField.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '').substring(0, 9); // Allow only numbers and limit to 9 characters
        });
    };

    // Apply the restrictions directly to the elements
    restrictInput(document.getElementById('price_input'));
    restrictInput(document.getElementById('quantity_input'));
    restrictInput(document.getElementById('id'));
</script>

<script>
// Get all productset elements
const products = document.querySelectorAll('.productset');

// Flag to track if the quantity has been removed
let quantityRemoved = false;

// Function to update product details when a product is clicked
products.forEach(product => {
  product.addEventListener('click', () => {
    const productName = product.querySelector('.productsetcontent h4').innerText.trim(); // Get product name
    const productPrice = parseFloat(product.querySelector('.productsetcontent h6').innerText.trim()); // Get product price as a number

    // Fetch entered values
    const enteredProductName = document.getElementById('product_name').value;
    const enteredPrice = parseFloat(document.getElementById('price_input').value) || 0;

    // If the clicked product is different than the one entered, update the values
    if (enteredProductName !== productName || enteredPrice !== productPrice) {
      document.getElementById('product_name').value = productName;
      document.getElementById('price_input').value = productPrice.toFixed(2); // Display total price with 2 decimal places

      // Reset the quantity input and set the flag
      document.getElementById('quantity_input').value = '';
      quantityRemoved = true;
    }
  });
});


</script>

<script>
    
    function createNewOrder() {
        // Generate a random ID for the new order
        const newOrderId = generateOrderId(); // Implement the function to generate a unique ID

        // Set the generated ID to the 'id' input field
        document.getElementById('id').value = newOrderId;

        // Optionally, clear other fields or perform additional actions for a new order
        document.getElementById('customer_name').value = 'Unknown';
        document.getElementById('product_name').value = '';
        document.getElementById('price_input').value = '';
        document.getElementById('quantity_input').value = '';
        
        // Update the table display
        updateTable();
    }

    // Function to generate a random order ID (replace with your logic)
    function generateOrderId() {
        // Generate a random number for the order ID (you can implement your own logic)
        return Math.floor(Math.random() * 1000000); // Change this as needed
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        const productCheckboxes = document.querySelectorAll('.product-checkbox');

        productCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('click', function() {
                updateTable();
            });
        });
    });

   




    
</script>

    



                      
        <script src="assets/js/jquery-3.6.0.min.js">
        </script>
        <script src="assets/js/feather.min.js">
        </script>
        <script src="assets/js/jquery.slimscroll.min.js">
        </script>
        <script src="assets/js/bootstrap.bundle.min.js">
        </script>
        <script src="assets/js/jquery.dataTables.min.js">
        </script>
        <script src="assets/js/dataTables.bootstrap4.min.js">
        </script>
        <script src="assets/plugins/select2/js/select2.min.js">
        </script>
        <script src="assets/plugins/owlcarousel/owl.carousel.min.js">
        </script>
        <script src="assets/plugins/sweetalert/sweetalert2.all.min.js">
        </script>
        <script src="assets/plugins/sweetalert/sweetalerts.min.js">
        </script>
        <script src="assets/js/script.js">
        </script>
        <script src="assets/js/sweetalert.min.js"></script>

        
<script>
  // Function to display SweetAlert message if not shown before
  function showStaffWelcomeOnce() {
    if (!sessionStorage.getItem('staffWelcomeShown')) {
      swal("Successfully logged in!", {
        button: "Welcome BADBUNNY STAFF!",
      });
      sessionStorage.setItem('staffWelcomeShown', 'true');
    }
  }

  // Call the function to display the staff welcome message
  showStaffWelcomeOnce();
</script>

  </body>

</html>