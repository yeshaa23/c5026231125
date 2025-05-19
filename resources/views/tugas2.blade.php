<html>
    <head>
        <title>✨ JAPAN "BEST" EXPERIENCES ✨ | Instagram | Linktree</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
        <style>
        body {
        background-color: #e4e9ee;
        font-family: 'Segoe UI', sans-serif;
        color: #1d4ed8;
        font-size: 0.9rem;
        }
        .profile-img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid white;
        margin-top: 30px;
        }
        .btn-toggle {
        background-color: white;
        border-radius: 40px;
        border: none;
        font-weight: bold;
        padding: 6px 20px;
        margin: 10px 5px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        font-size: 0.85rem;
        color: #1d4ed8;
        }
        .card-main {
        background-color: white;
        border-radius: 30px;
        padding: 15px;
        margin: 20px 0;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        }
        .card-main:hover {
        background-color: #e8e8e8;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transform: scale(1.02);
        cursor: pointer;
        }
        .card-main:active {
        background-color: #d4d4d4;
        }
        .product-img {
        width: 150px;
        height: 150px;
        border-radius: 20px;
        object-fit: cover;
        display: block;
        margin: 0 auto 10px;
        }
        .link-btn {
        background-color: white;
        border-radius: 30px;
        padding: 12px 16px;
        margin: 10px 0;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        color: #1d4ed8;
        font-size: 0.85rem;
        text-decoration: none;
        transition: 0.2s;
        width: 100%;
        }
        .link-icon {
        width: 28px;
        height: 28px;
        margin-right: 10px;
        }
        .link-text {
        flex: 1;
        text-align: center;
        margin-left: -28px;
        font-weight: 600;
        }
        .link-btn:hover {
        background-color: #e8e8e8;
        text-decoration: none;
        transform: scale(1.02);
        }
        .link-btn img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 10px;
        }
        .category-title {
        font-weight: bold;
        font-size: small;
        color: #1d4ed8;
        margin: 30px 0 10px;
        }
        .main-container {
        max-width: 450px;
        margin: 0 auto;    
        padding: 20px 15px;
        }
        h1, h2, h3, h4, h5, h6 {
        font-size: 1.1rem;
        font-weight: bold;
        color: #1d4ed8;
        }
        .linktree-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #e4e9ee;
        padding: 40px 20px;
        border-radius: 12px;
        font-family: sans-serif;
        }
        .icon-wrapper {
        margin-top: 0;
        margin-bottom: 30px;
        }
        .insta-icon {
        width: 20px;
        height: 20px;
        transition: transform 0.3s ease;
        }
        .insta-icon:hover {
        transform: scale(1.15);
        cursor: pointer;
        }
        .linktree-button {
        background-color: #ffffff;
        color: black;
        padding: 8px 14px;
        border-radius: 999px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        text-decoration: none;
        white-space: nowrap;
        font-weight: 100;
        font-size: 0.75rem;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        }
        a.linktree-button {
        text-decoration: none !important;
        color: black !important;
        }
        .linktree-button img {
        width: 18px;
        height: 18px;
        border-radius: 0;
        margin-right: 8px;
        }
        .linktree-button:hover {
        background-color: #ffffff;
        transition: all 0.3s ease;
        }
        .toggle-wrapper {
        background-color: #999;
        border-radius: 999px;
        padding: 4px;
        position: relative;
        width: 150px;
        height: 45px;
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        }
        .toggle-label {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        text-align: center;
        z-index: 2;
        color: white;
        cursor: pointer;
        transition: color 0.3s;
        user-select: none;
        font-weight: bold;
        font-size: 0.7rem;
        padding: 0;
        }
        .toggle-slider {
        position: absolute;
        top: 5px;
        bottom: 5px;
        left: 5px;
        width: calc(50% - 10px);
        background-color: white;
        border-radius: 999px;
        transition: all 0.3s ease;
        z-index: 1;
        }
        .center-toggle {
        display: flex;
        justify-content: center;
        margin: 20px 0;
        }
        .toggle-input {
        display: none;
        }
        
        #links:checked ~ .toggle-slider {
        left: 5px;
        }
        #shop:checked ~ .toggle-slider {
        left: calc(50% + 5px);
        }
        #links:checked ~ .label-links {
        color: black;
        }
        #shop:checked ~ .label-shop {
        color: black;
        } 
        </style>
    </head>

    <body>
        <div class="container text-center main-container">
            <img src="profile.png" class="profile-img" alt="Profile">
            <h5 class="mt-2 font-weight-bold">✨ JAPAN "BEST EXPERIENCES" ✨</h5>
            <small class="text-muted mb-2">Use {KAIFROMJAPAN} Code for 10% Discount 😆</small>
        
        <div class="center-toggle">
            <div class="toggle-wrapper">
                <input type="radio" name="toggle" id="links" class="toggle-input" checked>
                <input type="radio" name="toggle" id="shop" class="toggle-input">
                
                <div class="toggle-slider"></div>

                <label for="links" class="toggle-label label-links">Links</label>
                <label for="shop" class="toggle-label label-shop">Shop</label>
            </div>
        </div>

        <div class="content-wrapper">
            <div id="links-content">
                <a href="#" class="text-decoration-none" id="go-to-shop">
                    <div class="card-main">
                        <img src="imageawal.png" class="product-img" alt="product">
                        <div class="font-weight-bold">JAPAN CUSTOM ITINERARY</div>
                        <small class="text-muted">1 Product</small>
                    </div>
                </a>

                <div class="category-title">🗼 TOKYO 🗼</div>
                    <a href="https://shorturl.at/hw3Sc" target="_blank" rel="noopener noreferrer" class="link-btn">
                        <img src="fuji.png" alt="Fuji">
                        <div class="link-text">Day Tour to Mt.Fuji</div>
                        <span class="menu-icon">⋮</span></a>
                    <a href="https://shorturl.at/MTQOO" target="_blank" rel="noopener noreferrer" class="link-btn">
                        <img src="fujihakone.png" alt="Fuji Hakone">
                        <div class="link-text">Day Tour to Mt. Fuji and Hakone</div>
                        <span class="menu-icon">⋮</span></a>
                    
                <div class="category-title">⛩️ KYOTO ⛩️</div>
                    <a href="https://shorturl.at/DWBBa" target="_blank" rel="noopener noreferrer" class="link-btn">
                        <img src="kyotonara.png" alt="Kyoto Nara">
                        <div class="link-text">Kyoto & Nara BEST day Tour</div>
                        <span class="menu-icon">⋮</span></a>
                    <a href="https://shorturl.at/inBjt" target="_blank" rel="noopener noreferrer" class="link-btn">
                        <img src="kyotobus.png" alt="Kyoto Bus">
                        <div class="link-text">Kyoto Hop-On Hop-Off Sightseeing Bus</div>
                        <span class="menu-icon">⋮</span></a>

                <div class="category-title">🐙 OSAKA 🐙</div>
                    <a href="https://www.klook.com/en-US/activity/3407-universal-studios-japan-express-pass-osaka/?aid=70134&utm_medium=affiliate-alwayson&utm_source=non-network&utm_campaign=70134&utm_term=" target="_blank" rel="noopener noreferrer" class="link-btn">
                        <img src="universalstudio.png" alt="Express Pass">
                        <div class="link-text">Universal Studios Japan Express Pass</div>
                        <span class="menu-icon">⋮</span></a>
                    <a href="https://www.klook.com/en-US/activity/46604-universal-studios-japan-e-ticket-osaka-qr-code-direct-entry/?aid=70134&utm_medium=affiliate-alwayson&utm_source=non-network&utm_campaign=70134&utm_term=" target="_blank" rel="noopener noreferrer" class="link-btn">
                        <img src="universalstudio.png" alt="Studio Pass">
                        <div class="link-text">Universal Studios Japan Studio Pass</div>
                        <span class="menu-icon">⋮</span></a>
                    <a href="https://www.klook.com/en-US/activity/2424-harukas-300-observatory-ticket-osaka/?aid=70134&utm_medium=affiliate-alwayson&utm_source=non-network&utm_campaign=70134&utm_term=" target="_blank" rel="noopener noreferrer" class="link-btn">
                        <img src="harukas.png" alt="Harukas">
                        <div class="link-text">HARUKAS 300 Observatory</div>
                        <span class="menu-icon">⋮</span></a>

                <div class="category-title">📱 Wi-Fi & SIM Cards 📱</div>
                    <a href="https://www.klook.com/en-US/activity/35513-3g-4g-esim-japan-softbank/?spm=SearchResult.SearchResult_LIST&clickId=3c1ef08866%2F%3Faid%3D70134" target="_blank" rel="noopener noreferrer" class="link-btn">
                        <img src="esim.png" alt="eSIM Icon">
                        <div class="link-text">eSIM Japan</div>
                        <span class="menu-icon">⋮</span></a>
                
                <div class="linktree-container">
                    <div class="icon-wrapper">
                        <a href="https://www.instagram.com/kaifromjapan01" target="_blank" class="icon-link">
                        <img src="instagram.png" alt="Instagram" class="insta-icon">
                        </a>
                    </div>
                    <a href="https://linktr.ee/kaifromjapan01" target="_blank" class="linktree-button">
                        <img src="linktree.png" alt="Star"/>
                        <span>
                            Bergabung dengan <strong>kaifromjapan01</strong> di Linktree
                        </span>
                    </a>
                </div>     
            </div>

            <div id="shop-content" style="display: none;">
                <a href="https://kaifromjapan.com/products/japan-custom-itinerary-planning" target="_blank" class="text-decoration-none">
                    <div class="card-main">
                        <img src="imageawal.png" class="product-img" alt="product">
                        <div class="font-weight-bold">JAPAN CUSTOM ITINERARY</div>
                        <small class="text-muted">$240</small>
                    </div>
                </a>
                <div class="linktree-container">
                    <a href="https://linktr.ee/kaifromjapan01" target="_blank" class="linktree-button">
                        <img src="linktree.png" alt="Star"/>
                        <span>
                            Bergabung dengan <strong>kaifromjapan01</strong> di Linktree
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

        <script>
            document.getElementById("go-to-shop").addEventListener("click", function(e) {
                e.preventDefault();
                document.getElementById("shop").checked = true;
        
                document.getElementById("shop-content").scrollIntoView({ behavior: "smooth" });
            });
        </script>

        <script>
            const goToShopLink = document.getElementById('go-to-shop');
            const shopRadio = document.getElementById('shop');

            goToShopLink.addEventListener('click', function(e) {
                e.preventDefault(); // Biar gak lompat ke atas halaman
                shopRadio.checked = true;

                // Kalau ada perubahan tampilan tergantung event "change"
                shopRadio.dispatchEvent(new Event('change'));
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const linksRadio = document.getElementById('links');
                const shopRadio = document.getElementById('shop');
                const linksContent = document.getElementById('links-content');
                const shopContent = document.getElementById('shop-content');
    
                function toggleContent() {
                    if (linksRadio.checked) {
                        linksContent.style.display = 'block';
                        shopContent.style.display = 'none';
                    } else {
                        linksContent.style.display = 'none';
                        shopContent.style.display = 'block';
                    }
                }
                linksRadio.addEventListener('change', toggleContent);
                shopRadio.addEventListener('change', toggleContent);
            });
        </script>
    </body>
</html>