<?php
  if ($_SERVER["REQUEST_URI"] == "/SaleOnline/") {
    include "./views/loading.view.php";
    include "./layout/home.layout.php";
  }

  if ($_SERVER["REQUEST_URI"] == "/SaleOnline/products") {
    include "./views/loading.view.php";
    include "./layout/products.layout.php";
  }

  if ($_SERVER["REQUEST_URI"] == "/SaleOnline/details") {
    include "./views/loading.view.php";
    include "./layout/productDetail.layout.php";
  }
?>

<script>
  const home = document.getElementById("home");
  const product = document.getElementById("product");

  const loadingSection = document.getElementById("loading");

  home.addEventListener("click", function() {
    loadingSection.classList.remove("hidden");

    setTimeout(function() {
      loadingSection.classList.add("hidden");
      location.href = "./";
    }, 1000);
  });

  product.addEventListener("click", function() {
    loadingSection.classList.remove("hidden");

    setTimeout(function() {
      loadingSection.classList.add("hidden");
      location.href = "./products";
    }, 1000);
  });


  const buyBtn = document.getElementById("buy");
    buyBtn.addEventListener("click", function(e) {
        loadingSection.classList.remove("hidden");

        setTimeout(function() {
            loadingSection.classList.add("hidden");
            location.href = "./details";
        }, 1000);
    });
</script>
