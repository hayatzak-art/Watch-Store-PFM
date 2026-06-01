<?php include 'includes/header.php'; ?>

<!-- 1. HERO BANNER -->
<section class="hero">
    <div class="hero-content">
        <h1>LUXURY WATCHES</h1>
        <p>Découvrez les meilleures montres de luxe au meilleur prix</p>
        <a href="products.php" class="btn-gold">Découvrir →</a>
    </div>
</section>

<!-- 2. SECTION CATEGORIES -->
<section class="categories-section">
    <h2 class="section-title">CATÉGORIES</h2>
    <div class="categories-grid">
        <div class="category-card">
            <img src="images/cat-hommes.jpg" alt="Hommes">
            <div class="category-overlay">
                <span>HOMMES</span>
            </div>
        </div>
        <div class="category-card">
            <img src="images/cat-femmes.jpg" alt="Femmes">
            <div class="category-overlay">
                <span>FEMMES</span>
            </div>
        </div>
        <div class="category-card">
            <img src="images/cat-smart.jpg" alt="Smartwatch">
            <div class="category-overlay">
                <span>SMARTWATCH</span>
            </div>
        </div>
    </div>
</section>

<!-- 3. SECTION MONTRES POPULAIRES -->
<section class="popular-section">
    <div class="section-header">
        <h2 class="section-title">MONTRES POPULAIRES</h2>
        <a href="products.php" class="view-all">Voir tout →</a>
    </div>
    
    <div class="products-grid">
        <!-- Product 1 -->
        <div class="product-card">
            <div class="product-img-container">
                <img src="images/rolex-sub.jpg" alt="Rolex Submariner">
            </div>
            <div class="product-info">
                <h3>Rolex Submariner</h3>
                <div class="rating">⭐⭐⭐⭐⭐ <span>(23)</span></div>
                <p class="price">4500 DH</p>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <div class="product-img-container">
                <img src="images/omega-speed.jpg" alt="Omega Seamaster">
            </div>
            <div class="product-info">
                <h3>Omega Seamaster</h3>
                <div class="rating">⭐⭐⭐⭐⭐ <span>(18)</span></div>
                <p class="price">3900 DH</p>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <div class="product-info">
                <div class="product-img-container">
                    <img src="images/tissot-prx.jpg" alt="Tissot PRX">
                </div>
                <h3>Tissot PRX</h3>
                <div class="rating">⭐⭐⭐⭐☆ <span>(42)</span></div>
                <p class="price">1800 DH</p>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <div class="product-img-container">
                <img src="images/casio-edifice.jpg" alt="Casio Edifice">
            </div>
            <div class="product-info">
                <h3>Casio Edifice</h3>
                <div class="rating">⭐⭐⭐⭐☆ <span>(56)</span></div>
                <p class="price">1200 DH</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. NOUVELLE COLLECTION BANNER -->
<section class="collection-banner">
    <div class="banner-content">
        <span class="subtitle">Nouvelle Collection 2026</span>
        <h2>ÉLÉGANCE. PRÉCISION. PERFORMANCE.</h2>
        <a href="products.php" class="btn-gold">Découvrir la collection</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>