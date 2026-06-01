<?php include 'includes/header.php'; ?>

<div class="products-container">
    
    <!-- ====== 1. SIDEBAR FILTRES (À GAUCHE) ====== -->
    <aside class="filter-sidebar">
        <div class="filter-group">
            <h3>FILTRER</h3>
            <h4>CATÉGORIES ▲</h4>
            <div class="filter-options">
                <label><input type="checkbox"> Hommes</label>
                <label><input type="checkbox"> Femmes</label>
                <label><input type="checkbox"> Smartwatch</label>
            </div>
        </div>

        <div class="filter-group">
            <h4>MARQUES ▲</h4>
            <div class="filter-options">
                <label><input type="checkbox"> Rolex</label>
                <label><input type="checkbox"> Omega</label>
                <label><input type="checkbox"> Tissot</label>
                <label><input type="checkbox"> Casio</label>
                <label><input type="checkbox"> Seiko</label>
                <label><input type="checkbox"> Citizen</label>
            </div>
        </div>

        <div class="filter-group">
            <h4>PRIX ▲</h4>
            <div class="filter-options">
                <label><input type="checkbox"> Moins de 1000 DH</label>
                <label><input type="checkbox"> 1000 DH - 2000 DH</label>
                <label><input type="checkbox"> 2000 DH - 3000 DH</label>
                <label><input type="checkbox"> Plus de 3000 DH</label>
            </div>
            <button class="btn-sidebar-filter">Acheter</button>
        </div>

        <div class="filter-group">
            <h4>COULEUR ▲</h4>
            <div class="color-dots">
                <span class="dot black"></span>
                <span class="dot brown"></span>
                <span class="dot green"></span>
                <span class="dot blue"></span>
            </div>
        </div>

        <div class="filter-group">
            <h4>Nouveautés ▲</h4>
            <div class="filter-options">
                <label><input type="checkbox"> Nouveautés (21)</label>
            </div>
        </div>

        <div class="filter-group">
            <h4>EN STOCK ▲</h4>
            <div class="filter-options">
                <label><input type="checkbox"> En Stock Uniquement</label>
            </div>
        </div>
    </aside>

    <!-- ====== 2. MAIN CONTENT (BARRE DE TRI + GRILLE) ====== -->
    <main class="products-content">
        
        <div class="catalog-breadcrumbs">
            <p>NOS MONTRES</p>
            <span>Accueil / Montres</span>
        </div>

        <!-- BARRE DE RECHERCHE ET SELECTION EN HAUT -->
        <div class="top-filter-bar">
            <div class="search-box">
                <input type="text" placeholder="🔍 Rechercher une montre...">
            </div>
            <div class="select-box">
                <select><option>Marque</option></select>
            </div>
            <div class="select-box">
                <select><option>Prix</option></select>
            </div>
            <div class="select-box">
                <select><option>Catégorie</option></select>
            </div>
            <button class="btn-orange-filter">FILTRER</button>
        </div>

        <!-- BARRE TRI RAPIDE + COMPTEUR -->
        <div class="sort-bar">
            <div class="sort-select">
                <label>Trier par :</label>
                <select>
                    <option>Popularité</option>
                    <option>Prix croissant</option>
                    <option>Prix décroissant</option>
                </select>
            </div>
            <span class="products-count">52 Produits trouvés</span>
        </div>

        <!-- GRILLE DES PRODUITS (3 COLUMNS AS PER FIGMA) -->
        <div class="catalog-grid">
            
            <!-- Watch Item 1 -->
            <div class="catalog-card-item">
                <div class="item-img">
                    <img src="images/rolex-sub.jpg" alt="Rolex Submariner">
                </div>
                <h3 class="item-title">Rolex Submariner</h3>
                <p class="item-price">4500 DH</p>
                <div class="item-rating">⭐⭐⭐⭐⭐ <span>(23)</span></div>
            </div>

            <!-- Watch Item 2 -->
            <div class="catalog-card-item">
                <div class="item-img">
                    <img src="images/omega-speed.jpg" alt="Omega Seamaster">
                </div>
                <h3 class="item-title">Omega Seamaster</h3>
                <p class="item-price">3900 DH</p>
                <div class="item-rating">⭐⭐⭐⭐⭐ <span>(18)</span></div>
            </div>

            <!-- Watch Item 3 -->
            <div class="catalog-card-item">
                <div class="item-img">
                    <img src="images/tissot-prx.jpg" alt="Tissot PRX">
                </div>
                <h3 class="item-title">Tissot PRX</h3>
                <p class="item-price">1800 DH</p>
                <div class="item-rating">⭐⭐⭐⭐☆ <span>(42)</span></div>
            </div>

            <!-- Watch Item 4 -->
            <div class="catalog-card-item">
                <div class="item-img">
                    <img src="images/casio-edifice.jpg" alt="Casio Edifice">
                </div>
                <h3 class="item-title">Casio Edifice</h3>
                <p class="item-price">1200 DH</p>
                <div class="item-rating">⭐⭐⭐⭐☆ <span>(56)</span></div>
            </div>

            <!-- Watch Item 5 -->
            <div class="catalog-card-item">
                <div class="item-img">
                    <img src="images/seiko-sports.jpg" alt="Seiko 5 Sports">
                </div>
                <h3 class="item-title">Seiko 5 Sports</h3>
                <p class="item-price">2500 DH</p>
                <div class="item-rating">⭐⭐⭐⭐⭐ <span>(31)</span></div>
            </div>

            <!-- Watch Item 6 -->
            <div class="catalog-card-item">
                <div class="item-img">
                    <img src="images/citizen-eco.jpg" alt="Citizen Eco-Drive">
                </div>
                <h3 class="item-title">Citizen Eco-Drive</h3>
                <p class="item-price">2100 DH</p>
                <div class="item-rating">⭐⭐⭐⭐☆ <span>(15)</span></div>
            </div>

        </div>

        <!-- PAGINATION -->
        <div class="pagination">
            <span class="page-num active">1</span>
            <span class="page-num">2</span>
            <span class="page-num">3</span>
            <span class="page-num">4</span>
            <span class="page-num">5</span>
            <span class="page-num">→</span>
        </div>

    </main>
</div>

<?php include 'includes/footer.php'; ?>