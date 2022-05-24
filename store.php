<!DOCTYPE html>
<html>
    <head>
        <title>Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="store.php">STORE</a></li>
                    <li><a href="log-in.php">Log in</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">Playstation Cards</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">Playstation Cards</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">20$ PSN</span>
                    <img class="shop-item-image" src="Images/20 ps4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$20.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">25$ PSN</span>
                    <img class="shop-item-image" src="Images/25 ps4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$25.00</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">50$ PSN</span>
                    <img class="shop-item-image" src="Images/50 ps4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$45.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">100$ PSN</span>
                    <img class="shop-item-image" src="Images/100 ps4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$95.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">best seller</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">100$ PSN</span>
                    <img class="shop-item-image" src="Images/100 ps4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$95.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">50$ PSN</span>
                    <img class="shop-item-image" src="Images/50 ps4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$45.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>

    </body>
</html>
