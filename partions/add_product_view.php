<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product - Cafeteria</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    /* Consistent project theme colors */
    body {
      background-color: #FBF5DD !important;
    }
    .navbar-custom {
      background-color: #0D530E;
    }
    .form-card {
      background-color: #E7E1B1;
    }
    .btn-save {
      background-color: #0D530E;
      border: none;
    }
    .btn-save:hover {
      background-color: #306D29;
    }
    .btn-reset {
      background-color: #6c757d;
      border: none;
    }
    .text-custom {
      color: #0D530E;
    }
    .border-custom {
      border-color: #306D29 !important;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-4 shadow-sm">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
          <li class="nav-item"><a class="nav-link fw-semibold" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold active" href="#">Products</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#">Users</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#">Manual Order</a></li>
          <li class="nav-item"><a class="nav-link fw-semibold" href="#">Checks</a></li>
        </ul>
      </div>
      
      <!-- Admin Profile -->
      <div class="d-flex align-items-center gap-2">
        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="40" class="border border-2 rounded-circle bg-white" alt="Admin">
        <span class="fw-bold text-white">Admin</span>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container py-5">
    <div class="form-card p-5 rounded-4 shadow-lg mx-auto" style="max-width: 900px;">
      
      <h1 class="fw-bold mb-5 text-custom">Add Product</h1>

      <form id="addProductForm" action="process_product.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        
        <!-- Product Name -->
        <div class="row mb-4">
          <label for="productName" class="col-md-3 col-form-label fs-5 fw-semibold">Product</label>
          <div class="col-md-7">
            <input type="text" id="productName" name="product_name" class="form-control form-control-lg border-2 border-custom" placeholder="Enter product name" required>
            <div class="invalid-feedback">Please provide a product name.</div>
          </div>
        </div>

        <!-- Price -->
        <div class="row mb-4">
          <label for="productPrice" class="col-md-3 col-form-label fs-5 fw-semibold">Price</label>
          <div class="col-md-7">
            <div class="input-group input-group-lg">
              <input type="number" id="productPrice" name="price" class="form-control border-2 border-custom" placeholder="0.00" min="0.01" step="0.01" required>
              <span class="input-group-text border-2 border-custom fw-bold text-custom">EGP</span>
              <div class="invalid-feedback">Please enter a valid price (greater than 0).</div>
            </div>
          </div>
        </div>

        <!-- Category -->
        <div class="row mb-4">
          <label for="productCategory" class="col-md-3 col-form-label fs-5 fw-semibold">Category</label>
          <div class="col-md-7">
            <div class="d-flex gap-3 align-items-center">
              <select id="productCategory" name="category" class="form-select form-select-lg border-2 border-custom" required>
                <option value="" selected disabled>Select Category</option>
                <option value="1">Hot Drinks</option>
                <option value="2">Cold Drinks</option>
                <option value="3">Snacks</option>
              </select>
              <a href="add_category.php" class="text-decoration-none fw-bold text-custom whitespace-nowrap" style="min-width: 120px;">+ Add Category</a>
            </div>
            <div class="invalid-feedback">Please select a category.</div>
          </div>
        </div>

        <!-- Product Picture -->
        <div class="row mb-5">
          <label for="productImage" class="col-md-3 col-form-label fs-5 fw-semibold">Product Picture</label>
          <div class="col-md-7">
            <input type="file" id="productImage" name="product_image" class="form-control form-control-lg border-2 border-custom" accept="image/*" required>
            <div class="invalid-feedback">Please upload a product image.</div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="row">
          <div class="col-md-7 offset-md-3 d-flex gap-3">
            <button type="submit" class="btn btn-save btn-lg px-5 text-white fw-bold shadow-sm">Save</button>
            <button type="reset" class="btn btn-reset btn-lg px-5 text-white fw-bold shadow-sm">Reset</button>
          </div>
        </div>

      </form>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="add_product.js"></script>

</body>
</html>