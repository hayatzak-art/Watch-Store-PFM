<?php include 'includes/header.php'; ?>

<!-- 1. HERO BANNER -->
<section class="hero">
    <div class="hero-content">
        <h1>LUXURY WATCHES</h1>
        <p>Découvrez les meilleures montres de luxe au meilleur prix</p>
        <a href="products.php" class="btn-gold">Découvrir &rarr;</a>
    </div>
</section>

<!-- 2. SECTION CATEGORIES -->
<section class="categories-section">
    <h2 class="section-title">CATÉGORIES</h2>
    <div class="categories-grid">
        
        <!-- Catégorie 1: Hommes -->
        <div class="category-card">
            <div class="category-img-container">
                <img src="images/Rectangle 5.png" alt="Hommes">
            </div>
            <div class="category-details-container">
                <span>HOMMES</span>
                <a href="products.php?cat=hommes" class="view-more-link">
                    Voir plus &rarr;
                </a>
            </div>
        </div>

        <!-- Catégorie 2: Femmes -->
        <div class="category-card">
            <div class="category-img-container">
                <img src="images/Rectangle 7.png" alt="Femmes">
            </div>
            <div class="category-details-container">
                <span>FEMMES</span>
                <a href="products.php?cat=femmes" class="view-more-link">
                    Voir plus &rarr;
                </a>
            </div>
        </div>

        <!-- Catégorie 3: Smartwatch -->
        <div class="category-card">
            <div class="category-img-container">
                <img src="images/Rectangle 6.png" alt="Smartwatch">
            </div>
            <div class="category-details-container">
                <span>SMARTWATCH</span>
                <a href="products.php?cat=smart" class="view-more-link">
                    Voir plus &rarr;
                </a>
            </div>
        </div>

    </div>
</section>
<!-- 3. SECTION MONTRES POPULAIRES -->
<section class="popular-section">
    <div class="section-header">
        <h2 class="section-title">MONTRES POPULAIRES</h2>
        <a href="products.php" class="view-all">Voir tout &rarr;</a>
    </div>
    
    <div class="products-grid">
        <!-- Product 1: Rolex -->
        <div class="product-card">
            <div class="product-img-container">
                <img src="images/Rectangle 12.png" alt="Rolex Submariner">
            </div>
            <div class="product-details-container">
                <div class="product-info">
                    <h3>Rolex Submariner</h3>
                    <div class="rating">⭐⭐⭐⭐⭐ <span>(23)</span></div>
                    <p class="price">4500 DH</p>
                </div>
                <a href="cart.php" class="btn-cart-card">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>

        <!-- Product 2: Omega -->
        <div class="product-card">
            <div class="product-img-container">
                <img src="images/Rectangle 15.png" alt="Omega Seamaster">
            </div>
            <div class="product-details-container">
                <div class="product-info">
                    <h3>Omega Seamaster</h3>
                    <div class="rating">⭐⭐⭐⭐⭐ <span>(18)</span></div>
                    <p class="price">3900 DH</p>
                </div>
                <a href="cart.php" class="btn-cart-card">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>

        <!-- Product 3: Tissot -->
        <div class="product-card">
            <div class="product-img-container">
                <img src="images/Rectangle 14.png" alt="Tissot PRX">
            </div>
            <div class="product-details-container">
                <div class="product-info">
                    <h3>Tissot PRX</h3>
                    <div class="rating">⭐⭐⭐⭐☆ <span>(42)</span></div>
                    <p class="price">1800 DH</p>
                </div>
                <a href="cart.php" class="btn-cart-card">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>

        <!-- Product 4: Casio -->
        <div class="product-card">
            <div class="product-img-container">
                <img src="images/Rectangle 13.png" alt="Casio Edifice">
            </div>
            <div class="product-details-container">
                <div class="product-info">
                    <h3>Casio Edifice</h3>
                    <div class="rating">⭐⭐⭐⭐☆ <span>(56)</span></div>
                    <p class="price">1200 DH</p>
                </div>
               <a href="cart.php" class="btn-cart-card">
                      <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 4. NOUVELLE COLLECTION BANNER -->
<section class="collection-banner">
    <div class="banner-content">
        <span class="subtitle">Nouvelle Collection 2026</span>
        <h2>ÉLÉGANCE. PRÉCISION. PERFORMANCE.</h2>
        <a href="products.php" class="btn-gold">Découvrir la collection&rarr;</a>
    </div>
</section>
<!-- 5. SECTION NOS MARQUES -->
<section class="brands-section">
    <h2 class="brands-title">NOS MARQUES</h2>
    <div class="brands-grid">
        <div class="brand-item">
            <img src="images/Rectangle 27.png" alt="Rolex">
            <span>ROLEX</span>
        </div>
        <div class="brand-item">
            <img src="images/Rectangle 28.png" alt="Omega">
            <span>OMEGA</span>
        </div>
        <div class="brand-item">
            <img src="images/Rectangle 29.png" alt="Tissot">
            <span>TISSOT</span>
        </div>
        <div class="brand-item">
            <img src="images/Rectangle 30.png" alt="Casio">
            <span>CASIO</span>
        </div>
        <div class="brand-item">
            <img src="images/Rectangle 31.png" alt="Seiko">
            <span>SEIKO</span>
        </div>
        <div class="brand-item">
            <img src="images/Rectangle 32.png" alt="Citizen">
            <span>CITIZEN</span>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>

