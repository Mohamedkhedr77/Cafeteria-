<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products - Cafeteria</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    body { background-color: #FBF5DD !important; }
    .navbar-custom { background-color: #0D530E; }
    .table-container { background-color: #E7E1B1; }
    .thead-custom { background-color: #0D530E; color: white; }
    .text-custom { color: #0D530E; }
    .btn-add { background-color: #306D29; border: none; }
    .btn-add:hover { background-color: #0D530E; }
    .btn-edit { background-color: #0D530E; border: none; }
    .badge-available { background-color: #306D29; }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-4 shadow-sm">
    <div class="container-fluid">
      <div class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
        <a class="nav-link fw-semibold" href="#">Home</a>
        <a class="nav-link fw-semibold active" href="all_products.html">Products</a>
        <a class="nav-link fw-semibold" href="#">Users</a>
        <a class="nav-link fw-semibold" href="#">Manual Order</a>
        <a class="nav-link fw-semibold" href="#">Checks</a>
      </div>
      <div class="d-flex align-items-center gap-2">
        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="40" class="border border-2 rounded-circle bg-white" alt="Admin">
        <span class="fw-bold text-white">Admin</span>
      </div>
    </div>
  </nav>

  <div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
      <h1 class="fw-bold text-custom">All Products</h1>
      <a href="add_product.html" class="btn btn-add btn-lg text-white fw-bold shadow-sm">+ Add Product</a>
    </div>

    <div class="table-responsive shadow-lg rounded-4 overflow-hidden">
      <table class="table table-hover align-middle mb-0">
        <thead class="thead-custom">
          <tr>
            <th class="p-3 fs-5">Product</th>
            <th class="p-3 fs-5">Price</th>
            <th class="p-3 fs-5 text-center">Image</th>
            <th class="p-3 fs-5 text-center">Action</th>
          </tr>
        </thead>
        <tbody id="productTableBody" class="table-container">
          <!-- Data will be loaded here via JavaScript -->
        </tbody>
      </table>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const tableBody = document.getElementById('productTableBody');
        
        // Initial sample data if storage is empty
        let products = JSON.parse(localStorage.getItem('cafeteria_products'));
        
        if (!products) {
            products = [
                { id: 1, name: 'Tea', price: 5, status: 'Available' },
                { id: 2, name: 'Nescafe', price: 7, status: 'Unavailable' }
            ];
            localStorage.setItem('cafeteria_products', JSON.stringify(products));
        }

        function renderProducts() {
            tableBody.innerHTML = '';
            products.forEach(product => {
                const row = `
                    <tr>
                        <td class="p-3 fw-semibold fs-5">${product.name}</td>
                        <td class="p-3 fs-5">${product.price} EGP</td>
                        <td class="p-3 text-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/1828/1828843.png" width="45" class="border border-2 rounded p-1 bg-white shadow-sm">
                        </td>
                        <td class="p-3 text-center">
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <span class="badge ${product.status === 'Available' ? 'badge-available' : 'bg-secondary'} fs-6 px-3 py-2">
                                    ${product.status}
                                </span>
                                <button class="btn btn-edit text-white shadow-sm">Edit</button>
                                <button class="btn btn-danger shadow-sm" onclick="deleteProduct(${product.id})">Delete</button>
                            </div>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }

        window.deleteProduct = function(id) {
            if (confirm('Are you sure?')) {
                products = products.filter(p => p.id !== id);
                localStorage.setItem('cafeteria_products', JSON.stringify(products));
                renderProducts();
            }
        };

        renderProducts();
    });
  </script>
</body>
</html>