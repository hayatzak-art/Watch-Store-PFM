<?php include 'includes/header.php'; ?>

<div class="cart-wrapper">
    <!-- Breadcrumbs / Page Title -->
    <div class="cart-breadcrumbs">
        <p>VOTRE PANIER</p>
        <span>Accueil / Panier</span>
    </div>

    <div class="cart-container">
        <!-- ====== 1. CART ITEMS TABLE (LEFT COLUMN) ====== -->
        <main class="cart-items-section">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>PRODUIT</th>
                        <th>PRIX</th>
                        <th>QUANTITÉ</th>
                        <th>TOTAL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item Row 1 -->
                    <tr>
                        <td class="product-cell">
                            <img src="images/rolex-sub.jpg" alt="Rolex Classic">
                            <div class="prod-meta">
                                <h3>Rolex Classic</h3>
                                <span>2700 DH</span>
                            </div>
                        </td>
                        <td class="price-cell">2700 DH</td>
                        <td class="quantity-cell">
                            <div class="quantity-picker">
                                <button class="qty-btn">-</button>
                                <input type="text" value="1" readonly>
                                <button class="qty-btn">+</button>
                            </div>
                        </td>
                        <td class="total-cell">2700 DH</td>
                        <td class="remove-cell"><button class="btn-remove">🗑️</button></td>
                    </tr>

                    <!-- Item Row 2 -->
                    <tr>
                        <td class="product-cell">
                            <img src="images/tissot-prx.jpg" alt="Tissot PRX">
                            <div class="prod-meta">
                                <h3>Tissot PRX</h3>
                                <span>1800 DH</span>
                            </div>
                        </td>
                        <td class="price-cell">1800 DH</td>
                        <td class="quantity-cell">
                            <div class="quantity-picker">
                                <button class="qty-btn">-</button>
                                <input type="text" value="1" readonly>
                                <button class="qty-btn">+</button>
                            </div>
                        </td>
                        <td class="total-cell">1800 DH</td>
                        <td class="remove-cell"><button class="btn-remove">🗑️</button></td>
                    </tr>

                    <!-- Item Row 3 -->
                    <tr>
                        <td class="product-cell">
                            <img src="images/casio-edifice.jpg" alt="Casio Edifice">
                            <div class="prod-meta">
                                <h3>Casio Edifice</h3>
                                <span>1200 DH</span>
                            </div>
                        </td>
                        <td class="price-cell">1200 DH</td>
                        <td class="quantity-cell">
                            <div class="quantity-picker">
                                <button class="qty-btn">-</button>
                                <input type="text" value="1" readonly>
                                <button class="qty-btn">+</button>
                            </div>
                        </td>
                        <td class="total-cell">1200 DH</td>
                        <td class="remove-cell"><button class="btn-remove">🗑️</button></td>
                    </tr>
                </tbody>
            </table>

            <!-- Action buttons underneath the table grid -->
            <div class="cart-actions">
                <a href="products.php" class="btn-continue">← Continuer Vos Achats</a>
                <button class="btn-update-cart">Mettre à jour le Panier</button>
            </div>

            <!-- "Vous Pourriez Aussi Aimer" Subsection -->
            <div class="cross-sell-section">
                <h3>Vous Pourriez Aussi Aimer</h3>
                <div class="cross-sell-grid">
                    <div class="xsell-card">
                        <img src="images/seiko-sports.jpg" alt="Seiko 5">
                        <h4>Seiko 5 Sports</h4>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                    </div>
                    <div class="xsell-card">
                        <img src="images/citizen-eco.jpg" alt="Citizen">
                        <h4>Citizen Eco-Drive</h4>
                        <div class="stars">⭐⭐⭐⭐☆</div>
                    </div>
                    <div class="xsell-card">
                        <img src="images/omega-speed.jpg" alt="Omega">
                        <h4>Omega Seamaster</h4>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>
            </div>
        </main>

        <!-- ====== 2. SUMMARY & TRUST BADGES (RIGHT COLUMN) ====== -->
        <aside class="cart-summary-sidebar">
            <div class="summary-card">
                <h3>Résumé de Commande</h3>
                <div class="summary-row">
                    <span>Sous-total</span>
                    <span>5700 DH</span>
                </div>
                <div class="summary-row">
                    <span>Livraison</span>
                    <span>Gratuite</span>
                </div>
                <hr class="summary-divider">
                <div class="summary-row total">
                    <span>Total</span>
                    <span>5700 DH</span>
                </div>
                <button class="btn-checkout">PASSER LA COMMANDE</button>
                <div class="dots-more">...</div>
            </div>

            <!-- Value Propositions Badges below Summary Box -->
            <div class="trust-badges">
                <div class="badge-item">
                    <span class="badge-icon">🚚</span>
                    <div class="badge-text">
                        <strong>Livraison Gratuite</strong>
                        <p>À partir de 500 dh</p>
                    </div>
                </div>
                <div class="badge-item">
                    <span class="badge-icon">🔄</span>
                    <div class="badge-text">
                        <strong>Retour Facile</strong>
                        <p>30 jours pour retourner</p>
                    </div>
                </div>
                <div class="badge-item">
                    <span class="badge-icon">💳</span>
                    <div class="badge-text">
                        <strong>Paiement Sécurisé</strong>
                        <p>100% sécurisé / Garantie 2 ans</p>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>

<?php include 'includes/footer.php'; ?>